<?php
/**
*
* @package phpBB Extension - Referrals
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\referral\ucp;

class ucp_referral_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $config, $db, $phpbb_container, $user, $auth, $template, $phpbb_root_path, $phpEx, $request;

		// Get table
		$table_referral = $phpbb_container->getParameter('dmzx.referral.table.referral');
		$table_referral_contests = $phpbb_container->getParameter('dmzx.referral.table.referral.contests');

		switch ($mode)
		{
			case 'statistics':

				$this->tpl_name = 'ucp_referral_statistics';
				$this->page_title = 'UCP_STATISTICS';

				$sql = 'SELECT COUNT(referral_username) as total_referrals
					FROM ' . $table_referral . '
					WHERE referrer_username="' . $user->data['username'] . '"';
				$result = $db->sql_query($sql);
				$total_referrals = $db->sql_fetchfield('total_referrals');
				$db->sql_freeresult($result);

				$sql = 'SELECT COUNT(contest_winner) as contest_winner
					FROM ' . $table_referral_contests . '
					WHERE contest_winner="' . $user->data['username'] . '"';
				$result = $db->sql_query($sql);
				$contest_winner = $db->sql_fetchfield('contest_winner');
				$db->sql_freeresult($result);

				$template->assign_vars(array(
					'REFERRAL_LINK'	=> generate_board_url() . "/index.$phpEx?r=" . $user->data['user_id'],
					'TOTAL_REFERRALS' => $total_referrals,
					'CONTESTS_WON'	=> $contest_winner,
				));

			break;

			case 'referrals':

				$this->tpl_name = 'ucp_referral_referrals';
				$this->page_title = 'UCP_REFERRALS';

				$sql = 'SELECT *
					FROM ' . $table_referral . '
					LEFT JOIN ' . USERS_TABLE . '
					ON referral_username=username
					WHERE referrer_id = ' . $user->data['user_id'];
					$result = $db->sql_query($sql);

				while($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('referrals',array(
						'REFERRAL_USERNAME' => get_username_string('full', $row['user_id'], $row['referral_username'], $row['user_colour']),
					));
				}

			break;

			case 'invite':

				$this->tpl_name = 'ucp_referral_invite';
				$this->page_title = 'UCP_INVITE';

				include_once($phpbb_root_path . 'includes/functions_messenger.' . $phpEx);
				$messenger = new \messenger(false);

				$submit			= (isset($_POST['submit'])) ? true : false;
				$recipients		= $request->variable('recipients', '');
				$sender_email 	= $request->variable('sender_email','');
				$subject		= $request->variable('subject', '', true);
				$message		= $request->variable('message', '', true);

				$template->assign_vars(array(
					'SENDER_EMAIL' => ($sender_email) ? $sender_email : $user->data['user_email'],
					'RECIPIENTS'	=> $recipients,
					'SUBJECT'		=> $subject,
					'MESSAGE'		=> $message,
				));

				if ($submit)
				{
					$recipients = array_unique(explode("\n",$recipients));
					$total_recipients = count($recipients);

					if ($total_recipients >= 1 && !empty($sender_email) && !empty($subject) && !empty($message))
					{
						foreach ($recipients as $recipient)
						{
							$messenger->template('@dmzx_referral/referrals_send_invitation', $user->data['user_lang']);
							$messenger->to($recipient, '');
							$messenger->from($sender_email, '');
							$messenger->assign_vars(array(
								'SUBJECT'		 => $subject,
								'MESSAGE'		 => $message,
								'REFERRAL_LINK'	=> generate_board_url() . "/index.$phpEx?r=" . $user->data['user_id'],
							));
							$messenger->send();
						}
						$messenger->save_queue();

						meta_refresh(3, $this->u_action);
						$message = $user->lang['INVITATION_SENT'] . '<br /><br />' . sprintf($user->lang['RETURN_UCP'], '<a href="' . $this->u_action . '">', '</a>');
						trigger_error($message);
					}
					else
					{
						$template->assign_vars(array(
							'FORM_ERROR'		=> true,
						));
					}
				}

			break;
		}
	}
}
