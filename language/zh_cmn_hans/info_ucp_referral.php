<?php
/**
*
* @package phpBB Extension - Referrals
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'UCP_REFERRAL'			=> '推荐 / 邀请好友',
	'UCP_STATISTICS'	 	=> '查看统计信息',
	'UCP_REFERRALS'			=> '查看推荐人 / 被推荐人',
	'UCP_INVITE'		 	=> '邀请朋友',
	'REFERRAL_LINK'			=> '您的推荐链接',
	'YOUR_STATISTICS'		=> '您的统计信息',
	'MEMBERS_REFERRED'		=> '已推荐成员数',
	'INVITATIONS_SENT'		=> '已发送邀请',
	'CONTESTS_WON'			=> '赢得的比赛',
	'RECIPIENTS'		 	=> '收件人',
	'RECIPIENTS_EXPLAIN' 	=> '您可以通过每行一个邮件地址向多个收件人发送邀请。',
	'SENDER_EMAIL'			=> '您的电子邮箱',
	'MESSAGE_EXPLAIN'		=> '您的推荐链接将自动插入在消息末尾。',
	'INVITATION_SENT'		=> '您的邀请已成功发送！',
	'FORM_ERROR'		 	=> '您必须填写所有字段。',
	'YOUR_REFERRALS'	 	=> '您的被推荐人',
	'NO_REFERRALS'			=> '您还没有任何被推荐人。',
));
