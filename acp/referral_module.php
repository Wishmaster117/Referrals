<?php
/**
*
* @package phpBB Extension - Referrals
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\referral\acp;

class referral_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $config, $db, $phpbb_container, $user, $template, $phpbb_root_path, $phpbb_admin_path, $phpEx, $request;

		$user->add_lang_ext('dmzx/referral', 'acp_referral');

		$action = $request->variable('action', '');
		$rid	= $request->variable('rid', 0);

		// Get table
		$table_referral = $phpbb_container->getParameter('dmzx.referral.table.referral');
		$table_referral_contests = $phpbb_container->getParameter('dmzx.referral.table.referral.contests');
		// Pagination
		$pagination = $phpbb_container->get('pagination');

		$s_hidden_fields = '';

		switch ($mode)
		{
			case 'config':

				$this->tpl_name	= 'acp_referral_config';
				$this->page_title = 'ACP_REFERRAL_CONFIG';

				$submit						= $request->is_set_post('submit');
				$top_five_referrers			= $request->variable('top_five_referrers', 0);
				$user_referrals_viewtopic	= $request->variable('user_referrals_viewtopic', 0);
				$user_referrals_profile		= $request->variable('user_referrals_profile', 0);
				$display_referral_contests 	= $request->variable('display_referral_contests', 0);

				if ($submit)
				{
					$config->set('top_five_referrers', $top_five_referrers);
					$config->set('user_referrals_viewtopic', $user_referrals_viewtopic);
					$config->set('user_referrals_profile', $user_referrals_profile);
					$config->set('referral_contests_display', $display_referral_contests);

					trigger_error(sprintf($user->lang['CONFIG_UPDATED']) . adm_back_link($this->u_action));
				}

				$template->assign_vars(array(
					'TOP_FIVE_REFERRERS'		=> $config['top_five_referrers'],
					'USER_REFERRALS_VIEWTOPIC'	=> $config['user_referrals_viewtopic'],
					'USER_REFERRALS_PROFILE'	=> $config['user_referrals_profile'],
					'DISPLAY_REFERRAL_CONTESTS' => $config['referral_contests_display'],
				));

			break;

			case 'contests':

				$this->tpl_name	= 'acp_referral_contests';
				$this->page_title = 'ACP_REFERRAL_CONTESTS';

				$action	 = (isset($_POST['add'])) ? 'add' : ((isset($_POST['save'])) ? 'save' : $action);
				$contest_id = $request->variable('id', 0);

				$start_date	 	= $request->variable('start_date', 0);
				$end_date		= $request->variable('end_date', 0);
				$ref_min_posts	= $request->variable('ref_min_posts', 0);

				$form_name = 'acp_referral_contests';
				add_form_key($form_name);

				$time_options = array(
					'days'	=> $user->lang['DAYS'],
					'weeks'	=> $user->lang['WEEKS'],
					'months' => $user->lang['MONTHS'],
				);

				switch ($action)
				{
					case 'edit':

						$sql = 'SELECT *
							FROM ' . $table_referral_contests . "
							WHERE contest_id = $contest_id";
						$result = $db->sql_query($sql);
						$contest_info = $db->sql_fetchrow($result);
						$db->sql_freeresult($result);

						$s_hidden_fields .= '<input type="hidden" name="id" value="' . $contest_id . '" />';

					case 'add':

						$sql = 'SELECT *
							FROM ' . $table_referral_contests . "
							WHERE contest_id = $contest_id";
						$result = $db->sql_query($sql);
						$contest_info = $db->sql_fetchrow($result);
						$db->sql_freeresult($result);

						$contest_duration		 	= explode(' ', $contest_info['contest_duration']);
						$contest_duration_options 	= '';

						foreach ($time_options as $key => $val)
						{
							if ($contest_duration == $val)
							{
								$contest_duration_options .= "<option value='$key' selected='selected'>$val</option>";
							}
							else
							{
								$contest_duration_options .= "<option value='$key'>$val</option>";
							}
						}

						$template->assign_vars(array(
							'S_EDIT_CONTEST'			=> true,
							'CONTEST_NAME'			 	=> (isset($contest_info['contest_name'])) ? $contest_info['contest_name'] : '',
							'CONTEST_DESCRIPTION'		=> (isset($contest_info['contest_description'])) ? $contest_info['contest_description'] : '',
							'CONTEST_CONDITION'			=> (isset($contest_info['contest_condition'])) ? $contest_info['contest_condition'] : 0,
							'CONTEST_DURATION_VAL'	 	=> $contest_duration[0],
							'CONTEST_DURATION_OPTIONS' 	=> $contest_duration_options,
						));

						$contest_start_date			= (isset($contest_info['contest_start_date'])) ? $contest_info['contest_start_date'] : time();
						$contest_end_date		 	= (isset($contest_info['contest_end_date'])) ? $contest_info['contest_end_date'] : 0;
						$contest_duration_current 	= (isset($contest_info['contest_duration'])) ? $contest_info['contest_duration'] : 0;

						$s_hidden_fields .= '<input type="hidden" name="contest_start_date" value="' . $contest_start_date . '" />';
						$s_hidden_fields .= '<input type="hidden" name="contest_end_date" value="' . $contest_end_date . '" />';
						$s_hidden_fields .= '<input type="hidden" name="contest_duration_current" value="' . $contest_duration_current . '" />';

					break;

					case 'save':

						if (!check_form_key($form_name))
						{
							trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
						}

						$contest_id					= $request->variable('id', 0);
						$contest_name		 		= $request->variable('contest_name', '', true);
						$contest_description 		= $request->variable('contest_description', '', true);
						$contest_condition			= $request->variable('contest_condition', 0);
						$contest_start_date			= $request->variable('contest_start_date', 0);
						$contest_end_date		 	= $request->variable('contest_end_date', 0);
						$contest_duration			= $request->variable('contest_duration', array('' => ''));
						$contest_duration_current 	= $request->variable('contest_duration_current', '');
						$contest_status				= $request->variable('contest_status', '');

						if ($contest_name === '')
						{
				 			trigger_error($user->lang['ENTER_CONTEST_NAME'] . adm_back_link($this->u_action), E_USER_WARNING);
						}

						$sql = 'SELECT *
							FROM ' . $table_referral_contests . "
							WHERE contest_id = $contest_id";
						$result = $db->sql_query($sql);
						$contest_info = $db->sql_fetchrow($result);
						$db->sql_freeresult($result);

						$sql_ary = array(
							'contest_name'			=> $contest_name,
							'contest_description' 	=> $contest_description,
							'contest_condition'		=> $contest_condition,
							'contest_start_date'	=> $contest_start_date,
							'contest_end_date'		=> ($contest_duration_current == ($contest_duration[0] . ' ' . $time_options[$contest_duration[1]])) ? $contest_end_date : strtotime('+ ' . $contest_duration[0] . ' ' . $contest_duration[1]),
							'contest_duration'		=> $contest_duration[0] . ' ' . $time_options[$contest_duration[1]],
						);

						if ($contest_id)
						{
							$db->sql_query('UPDATE ' . $table_referral_contests . ' SET ' . $db->sql_build_array('UPDATE', $sql_ary) . ' WHERE contest_id = ' . $contest_id);
						}
						else
						{
							$db->sql_query('INSERT INTO ' . $table_referral_contests . ' ' . $db->sql_build_array('INSERT', $sql_ary));
						}

						$message = ($contest_id) ? $user->lang['CONTEST_INFO_UPDATED'] : $user->lang['CONTEST_ADDED'];
						trigger_error($message . adm_back_link($this->u_action));

					break;

					case 'delete':

						if (!$contest_id)
						{
							trigger_error($user->lang['NO_CONTEST_SELECTED'] . adm_back_link($this->u_action), E_USER_WARNING);
						}

						$sql = 'SELECT *
							FROM ' . $table_referral_contests . "
							WHERE contest_id = $contest_id";
						$result = $db->sql_query($sql);
						$contest_info = $db->sql_fetchrow($result);
						$db->sql_freeresult($result);

						if (confirm_box(true))
						{
							$sql = 'DELETE FROM ' . $table_referral_contests . "
								WHERE contest_id = $contest_id";
							$db->sql_query($sql);

							trigger_error($user->lang['CONTEST_DELETED'] . adm_back_link($this->u_action));
						}
						else
						{
							confirm_box(false, $user->lang['CONFIRM_OPERATION'], build_hidden_fields(array(
								'i'			=> $id,
								'mode'		=> $mode,
								'id'		=> $contest_id,
								'action'	=> 'delete',
								))
							);
						}

					break;

					case 'stats':

						$template->assign_vars(array(
							'VIEW_STATS'	=> true,
						));

						$sql = 'SELECT * ,
							COUNT(referrer_username) AS referrals_count
							FROM ' . $table_referral . '
								LEFT JOIN ' . USERS_TABLE . '
								ON referral_username=username
							WHERE referral_since
							BETWEEN ' . $start_date . ' AND ' . $end_date . '
								AND user_posts >= ' . $ref_min_posts . '
							GROUP BY referrer_username
							ORDER BY referrals_count DESC';
						$result = $db->sql_query($sql);

						$i = 1;
						$total_referrals = 0;

						while ($row = $db->sql_fetchrow($result))
						{
							$total_referrals += $row['referrals_count'];

							$template->assign_block_vars('contest_stats', array(
								'REFERRER_USERNAME' => $row['referrer_username'],
								'REFERRALS_COUNT'	=> $row['referrals_count'],
								'VIEW_REFERRALS'	=> $this->u_action . '&amp;action=view_cr&amp;rid=' . $row['referrer_id'] . '&amp;start_date=' . $start_date . '&amp;end_date=' . $end_date . '&amp;ref_min_posts=' . $ref_min_posts,
								'TOTAL_REFERRALS'	=> $total_referrals,
								'CONTEST_POS'		=> ($i <= 3) ? '<img src="' . $phpbb_root_path . 'ext/dmzx/referral/styles/all/theme/images/contest_pos_' . $i . '.gif" />' : $i,
							));
							$i++;
						}
						$db->sql_freeresult($result);

					break;

					case 'view_cr':

						$template->assign_vars(array(
							'VIEW_REFERRALS'	=> true,
						));

						$sql = 'SELECT *
							FROM ' . $table_referral . '
								LEFT JOIN ' . USERS_TABLE . '
								ON referral_username = username
							WHERE referral_since
							BETWEEN ' . $start_date . ' AND ' . $end_date . '
								AND user_posts >= ' . $ref_min_posts . '
								AND referrer_id = ' . $rid . '
							ORDER BY referral_since ASC';
						$result = $db->sql_query($sql);

						while ($row = $db->sql_fetchrow($result))
						{
							$template->assign_block_vars('view_referrals', array(
								'REFERRAL_USERNAME' => get_username_string('full', $row['user_id'], $row['referral_username'], $row['user_colour']),
								'USER_POSTS'		=> $row['user_posts'],
								'REFERRAL_SINCE'	=> $user->format_date($row['referral_since']),
							));
						}

					break;
				}

				$start = $request->variable('start', 0);
				$limit = 25;

				$sql = 'SELECT *
					FROM ' . $table_referral_contests . '
					ORDER BY contest_end_date DESC';
				$result = $db->sql_query_limit($sql, $limit, $start);

				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('contests', array(
						'CONTEST_NAME'			=> $row['contest_name'],
						'CONTEST_START_DATE' 	=> $user->format_date($row['contest_start_date']),
						'CONTEST_END_DATE'		=> $user->format_date($row['contest_end_date']),
						'CONTEST_DURATION'		=> $row['contest_duration'],
						'CONTEST_STATUS'	 	=> ($row['contest_end_date'] < time()) ? '<span style="color:red;">' . $user->lang['CONTEST_OVER'] . '</span>' : '<span style="color:green;">' . $user->lang['CONTEST_IN_PROGRESS'] . '</span>',
						'U_EDIT'			 	=> $this->u_action . '&amp;action=edit&amp;id=' . $row['contest_id'],
						'U_DELETE'			 	=> $this->u_action . '&amp;action=delete&amp;id=' . $row['contest_id'],
						'U_STATS'			 	=> $this->u_action . '&amp;action=stats&amp;id=' . $row['contest_id'] . '&amp;start_date=' . $row['contest_start_date'] . '&amp;end_date=' . $row['contest_end_date'] . '&amp;ref_min_posts=' . $row['contest_condition'],
					));
				}
				$db->sql_freeresult($result);

				$sql = 'SELECT COUNT(contest_id) AS total_contests
					FROM ' . $table_referral_contests;
				$result = $db->sql_query($sql);
				$total_contests = (int) $db->sql_fetchfield('total_contests');

				$base_url = $this->u_action;
				//Start pagination
				$pagination->generate_template_pagination($base_url, 'pagination', 'start', $total_contests, $limit, $start);

				$template->assign_vars(array(
					'TOTAL_CONTESTS' => ($total_contests == 1) ? $user->lang['LIST_CONTEST'] : sprintf($user->lang['LIST_CONTESTS'], $total_contests),
					'ICON_STATS'	 => '<img src="' . $phpbb_root_path . 'ext/dmzx/referral/styles/all/theme/images/icon_stats.png" alt="' . $user->lang['VIEW_STATISTICS'] . '" title="' . $user->lang['VIEW_STATISTICS'] . '" />',
				));

			break;

			case 'referrers':

				$this->tpl_name	= 'acp_referral_referrers';
				$this->page_title = 'ACP_REFERRERS_LIST';

				$search_referrer = $request->variable('search_referrer', '');

				$start = $request->variable('start', 0);
				$limit = 25;

				if ($search_referrer)
				{
					$template->assign_vars(array(
						'SEARCH_REFERRER' => true,
						'SEARCH_INPUT'	=> $search_referrer,
					));

					$sql = 'SELECT *
						FROM ' . USERS_TABLE . '
						WHERE username="' . $search_referrer . '" AND user_referrals >= 1 ORDER BY user_referrals DESC';
				}
				else
				{
					$sql = 'SELECT *
						FROM ' . USERS_TABLE . '
						WHERE user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ') AND user_referrals >= 1 ORDER BY user_referrals DESC';
				}

				$result = $db->sql_query($sql);

				while ($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('referrers_list', array(
						'USERNAME'		 	=> get_username_string('full', $row['user_id'], $row['username'], $row['user_colour']),
						'USER_ID'			=> $row['user_id'],
						'REFERRALS'			=> $row['user_referrals'],
						'U_VIEW_REFERRALS' 	=> $this->u_action . '&amp;action=view_referrals&amp;rid=' . $row['user_id'],
					));
				}
				$db->sql_freeresult($result);

				$sql = 'SELECT COUNT(user_id) AS total_referrers
					FROM ' . USERS_TABLE . '
					WHERE user_type IN (' . USER_NORMAL . ', ' . USER_FOUNDER . ')
						AND user_referrals >= 1 ';
					$result = $db->sql_query($sql);
				$total_referrers = (int) $db->sql_fetchfield('total_referrers');

				$base_url = $this->u_action;
				//Start pagination
				$pagination->generate_template_pagination($base_url, 'pagination', 'start', $total_referrers, $limit, $start);

				$template->assign_vars(array(
					'TOTAL_REFERRERS'	 => ($total_referrers == 1) ? $user->lang['LIST_REFERRER'] : sprintf($user->lang['LIST_REFERRERS'], $total_referrers),
				));

				switch ($action)
				{
					case 'view_referrals':

						$template->assign_vars(array(
							'VIEW_REFERRALS' => true,
							)
						);

						$sql = 'SELECT *
							FROM ' . $table_referral . '
							LEFT JOIN ' . USERS_TABLE . '
								ON referral_username = username
							WHERE referrer_id = ' . $rid;
						$result = $db->sql_query($sql);

						while ($row = $db->sql_fetchrow($result))
						{
							$template->assign_block_vars('referrals_list', array(
								'USERNAME'			=> get_username_string('full', $row['user_id'], $row['referral_username'], $row['user_colour']),
								'REFERRER'			=> $row['referrer_username'],
								'REFERRAL_SINCE' 	=> $user->format_date($row['referral_since']),
								'REFERRAL_POSTS' 	=> $row['user_posts']
							));
						}
						$db->sql_freeresult($result);

					break;
				}
			break;
		}

		// Global vars
		$template->assign_vars(array(
			'MOD_VERSION'	 	=> $config['referral_mod_version'],
			'U_ACTION'			=> $this->u_action,
			'U_BACK'			=> $this->u_action,
			'S_HIDDEN_FIELDS' 	=> $s_hidden_fields,
		));
	}
}
