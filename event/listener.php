<?php
/**
*
* @package phpBB Extension - Referrals
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\referral\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var string */
	protected $phpbb_root_path;

	/** @var string */
	protected $referral_table;

	/** @var string */
	protected $referral_contests_table;

	/**
	* Constructor
	*
	* @param \phpbb\user						$user
	* @param \phpbb\template\template			$template
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\config\config				$config
	* @param \phpbb\request\request			$request
	* @param									$phpbb_root_path
	* @param									$referral_table
	* @param									$referral_contests_table
	*
	*/
	public function __construct(\phpbb\user $user, \phpbb\template\template $template, \phpbb\db\driver\driver_interface $db, \phpbb\config\config $config, \phpbb\request\request $request, $phpbb_root_path, $referral_table, $referral_contests_table)
	{
		$this->user						= $user;
		$this->template					= $template;
		$this->db						= $db;
		$this->config					= $config;
		$this->request					= $request;
		$this->phpbb_root_path 			= $phpbb_root_path;
		$this->referral_table 			= $referral_table;
		$this->referral_contests_table 	= $referral_contests_table;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'					=> 'load_language_on_setup',
			'core.memberlist_view_profile'		=> 'memberlist_view_profile',
			'core.viewtopic_cache_user_data'	=> 'modify_viewtopic_usercache_data',
			'core.viewtopic_modify_post_row'	=> 'viewtopic_modify_post_row',
			'core.ucp_register_data_after'		=> 'ucp_register_user_row_after',
			'core.index_modify_page_title'		=> 'index_modify_page_title',
		);
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'dmzx/referral',
			'lang_set' => 'common',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}

	public function memberlist_view_profile($event)
	{
		$member = $event['member'];
		$user_id = $member['user_id'];

		// Grab user's bank holdings
		$sql = 'SELECT user_referrals
				FROM ' . USERS_TABLE . '
				WHERE user_id = '. $user_id;
		$result = $this->db->sql_query($sql);
		$referrals = $this->db->sql_fetchfield('user_referrals');
		$this->template->assign_vars(array(
			'REFERRALS'		=> (!empty($this->config['user_referrals_profile']) && $this->config['user_referrals_profile'] == true) ? $referrals : 0,
		));
	}

	public function modify_viewtopic_usercache_data($event)
	{
		$user_cache_data = $event['user_cache_data'];
		$row = $event['row'];
		$user_cache_data = array_merge($user_cache_data, array(
			'referrals'	 => (!empty($row['user_referrals'])) ? $row['user_referrals'] : 0,
		));
		$event['user_cache_data'] = $user_cache_data;
	}

	public function viewtopic_modify_post_row($event)
	{
		$row = $event['row'];
		$user_cache = $event['user_poster_data'];
		$poster_id = $event['user_id'];
		$post_row = $event['post_row'];
		$post_row = array_merge($post_row, array(
			'POSTER_REFERRALS'	=> (!empty($this->config['user_referrals_viewtopic']) && $this->config['user_referrals_viewtopic'] == true) ? $user_cache['referrals'] : 0,
		));
		$event['post_row'] = $post_row;
	}

	public function ucp_register_user_row_after($event)
	{
		if ($event['submit'])
		{
			$rid = $this->request->variable($this->config['cookie_name'] . '_referrer_id', '', true, \phpbb\request\request_interface::COOKIE);

			$sql = 'SELECT username, user_referrals
				FROM ' . USERS_TABLE . '
				WHERE user_id = ' . $rid;
			$result = $this->db->sql_query($sql);
			$row = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			$sql_ary = array(
				'referral_username'	=> $event['data']['username'],
				'referrer_id'		=> $rid,
				'referrer_username'	=> $row['username'],
				'referral_since'	 => time(),
			);

			$this->db->sql_query('INSERT INTO ' . $this->referral_table . ' ' . $this->db->sql_build_array('INSERT', $sql_ary));

			$user_referrals = $row['user_referrals'] + 1;

			$sql = 'UPDATE ' . USERS_TABLE . '
				SET user_referrals = ' . $user_referrals . '
				WHERE user_id = ' . $rid;
			$this->db->sql_query($sql);

		}
	}

	public function index_modify_page_title($event)
	{
		// Get referrer user ID
		$r = $this->request->variable('r', 0);

		// Let's check if the referrer is valid
		if ($r > 0)
		{
			$sql = 'SELECT user_id
				FROM ' . USERS_TABLE . '
				WHERE user_id=' . $r . '
				AND user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')';
			$result = $this->db->sql_query($sql);
			$row = $this->db->sql_fetchrow($result);
			$this->db->sql_freeresult($result);

			// If the referrer is valid, set the cookie
			if (!empty($row['user_id']))
			{ 
				$this->user->set_cookie('referrer_id', $r, time()+60*60*24*365);

				header("HTTP/1.1 301 Moved Permanently");
				header("Location: " . generate_board_url());
			}
		}

		if (!empty($this->config['referral_mod_version']))
		{
			if ($this->config['referral_contests_display'])
			{
				// Get the last contest
				$sql = 'SELECT *
					FROM ' . $this->referral_contests_table . '
					ORDER BY contest_end_date DESC';
				$result = $this->db->sql_query_limit($sql, 1, 0);
				$row = $this->db->sql_fetchrow($result);

				$this->template->assign_vars(array(
					'CONTEST_DISPLAY'	 => $this->config['referral_contests_display'],
					'CONTEST_NAME'		=> $row['contest_name'],
					'CONTEST_DESCRIPTION' => html_entity_decode($row['contest_description']),
					'CONTEST_START_DATE'	=> $this->user->format_date($row['contest_start_date']),
					'CONTEST_END_DATE'	=> $this->user->format_date($row['contest_end_date']),
					'CONTEST_DURATION'	=> $row['contest_duration'],
					'CONTEST_STATUS'		=> ($row['contest_end_date'] < time()) ? '<span style="color:red;">' . $this->user->lang['CONTEST_OVER'] . '</span>' : '<span style="color:green;">' . $this->user->lang['CONTEST_IN_PROGRESS'] . '</span>',
					)
				);

				// Set some variables to use in statistics
				$contest_id		 = $row['contest_id'];
				$contest_start_date = $row['contest_start_date'];
				$contest_end_date	= $row['contest_end_date'];
				$ref_min_posts		= $row['contest_condition'];

				$this->db->sql_freeresult($result);

				if ($row)
				{
					// Get contest statistics
					$sql = 'SELECT * ,
						COUNT(referrer_username) AS referrals_count
						FROM ' . $this->referral_table . '
						LEFT JOIN ' . USERS_TABLE . '
						ON referral_username=username
						WHERE referral_since
						BETWEEN ' . $contest_start_date . ' AND ' . $contest_end_date . '
						AND user_posts >= ' . $ref_min_posts . '
						GROUP BY referrer_username
						ORDER BY referrals_count DESC';
					$result = $this->db->sql_query_limit($sql, 3, 0);

					$i = 1;

					while ($row = $this->db->sql_fetchrow($result))
					{
						if ($i == 1)
						{
							$referrer_username = $row['referrer_username'];
						}

						$this->template->assign_block_vars('contest_stats', array(
							'REFERRER_USERNAME' => $row['referrer_username'],
							'REFERRALS_COUNT'	=> $row['referrals_count'],
							'CONTEST_POS'		=> '<img src="' . $this->phpbb_root_path . 'ext/dmzx/referral/styles/all/theme/images/contest_pos_' . $i . '.gif" alt="' . $i . '" />',
							)
						);
							$i++;
					}
					$this->db->sql_freeresult($result);

					// If contest is over, save contest winner
					if ($contest_end_date < time())
					{
						$sql = 'SELECT referrer_username
							FROM ' . $this->referral_table;
						$result = $this->db->sql_query($sql);
						$referrer_username = $this->db->sql_fetchfield('referrer_username');

						$sql = 'UPDATE ' . $this->referral_contests_table . '
							SET contest_winner = "' . $referrer_username . '"
							WHERE contest_id = ' . $contest_id;
						$this->db->sql_query($sql);
					}
				}
			}

			// Get top 5 referrers
			if ($this->config['top_five_referrers'])
			{
				$sql = 'SELECT *
					FROM ' . USERS_TABLE . '
					WHERE user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')
					AND user_referrals >=1
							ORDER BY user_referrals DESC';
				$result = $this->db->sql_query_limit($sql, 5, 0);

				while ($row = $this->db->sql_fetchrow($result))
				{
					$this->template->assign_block_vars('top_five_referrers', array(
						'USERNAME'	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
						'REFERRALS'	=> $row['user_referrals'],
						)
					);
				}
				$this->db->sql_freeresult($result);

				// Set template variables
				$this->template->assign_vars(array(
					'TOP_FIVE_REFERRERS' => $this->config['top_five_referrers'],
					)
				);
			}
		}
	}
}
