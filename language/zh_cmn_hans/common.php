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
	'TOP_FIVE_REFERRERS'		=> '前五名推荐人',
	'NO_REFERRERS'				=> '目前还没有推荐人。',
	'REFERRAL_CONTEST'			=> '推荐/邀请比赛',
	'REFERRALS'					=> '推荐人 / 被推荐人',
	'CONTEST_INFO'				=> '比赛信息',
	'CONTEST_DURATION'			=> '持续时间',
	'CONTEST_START_DATE'		=> '开始日期',
	'CONTEST_END_DATE'			=> '结束日期',
	'CONTEST_STATUS'			=> '状态',
	'CONTEST_IN_PROGRESS' 		=> '进行中',
	'CONTEST_OVER'				=> '已结束',
	'TOP_THREE_REFERRERS' 		=> '前三名推荐人',
	// Nouveau
	'REFERRAL_POINTS'         => '每位被推荐人积分',
	'REFERRAL_POINTS_EXPLAIN' => '每有一位成功注册的被推荐人，推荐人将获得的积分数量。',
	'REFERRAL_PROMO_THRESHOLD'         => '晋升积分阈值',
	// Auto groupe
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => '当推荐人积分达到或超过此阈值时，将被自动添加到所选用户组。如果为 0，则不会添加到任何组。',
	'REFERRAL_PROMO_GROUP'             => '晋升用户组',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => '当推荐人达到设置的积分阈值时，将被加入的用户组。',
	// choix su groupe par defaut oui non
	'REFERRAL_PROMO_DEFAULT'         => '设为默认用户组',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => '如果勾选，当用户晋升时，该组将设为其默认用户组。',
	'L_YOUR_POINTS' => '您的积分数量。',
));
