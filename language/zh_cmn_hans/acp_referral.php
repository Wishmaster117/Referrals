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
	'ACP_MOD_VERSION'					=> '版本',
	'GENERAL_CONFIG'					=> '常规设置',
	'DISPLAY_TOP_FIVE_REFERRERS'		=> '在论坛首页显示前五名推荐人',
	'DISPLAY_USER_REFERRALS_VIEWTOPIC' => '在主题视图中显示用户的推荐计数',
	'DISPLAY_USER_REFERRALS_PROFILE'	=> '在个人资料中显示用户的推荐计数',
	'DISPLAY_REFERRAL_CONTESTS'			=> '在论坛首页显示推荐比赛结果',
	'CONTEST_ADD'						=> '添加比赛',
	'CONTEST_NAME'					 	=> '比赛名称',
	'CONTEST_DESCRIPTION'				=> '描述',
	'REFERRAL_MINIMUM_POSTS'			=> '推荐人所需的最少发帖数',
	'REFERRAL_MINIMUM_POSTS_EXPLAIN'	=> '设置新用户需要达到的最小发帖数，才算作有效的被推荐人。',
	'CONTEST_DURATION'				 	=> '持续时间',
	'DAYS'							 	=> '天',
	'WEEKS'								=> '周',
	'MONTHS'							=> '月',
	'CONTEST_START_DATE'				=> '开始日期',
	'CONTEST_END_DATE'				 	=> '结束日期',
	'CONTEST_STATUS'					=> '状态',
	'CONTEST_IN_PROGRESS'				=> '进行中',
	'CONTEST_OVER'					 	=> '已结束',
	'LIST_CONTEST'					 	=> '比赛',
	'LIST_CONTESTS'						=> '比赛列表',
	'NO_CONTESTS'						=> '当前没有比赛。',
	'ENTER_CONTEST_NAME'				=> '您必须为比赛指定一个名称。',
	'CONTEST_INFO_UPDATED'			 	=> '比赛信息已成功更新。',
	'CONTEST_ADDED'						=> '比赛已成功创建。',
	'CONTEST_DELETED'					=> '比赛已成功删除。',
	'VIEW_STATISTICS'					=> '查看统计信息',
	'CONTEST_POS'						=> '排名',
	'REFERRER_USERNAME'					=> '推荐人用户名',
	'REFERRAL_USERNAME'					=> '被推荐人用户名',
	'CONTEST_TOTAL_REFERRALS'			=> '此比赛期间的推荐总人数',
	'NO_STATS'						 	=> '该比赛暂无可用统计数据。',
	'SEARCH_REFERRER'					=> '搜索推荐人',
	'REFERRALS'							=> '推荐记录',
	'LIST_REFERRER'						=> '推荐人',
	'LIST_REFERRERS'					=> '推荐人列表',
	'VIEW_REFERRALS'					=> '查看推荐记录',
	'REFERRER'						 	=> '推荐人',
	'REFERRED_ON'						=> '被推荐于',
	'REFERRER_NOT_FOUND'				=> '未找到您要查找的推荐人。',
	'NO_REFERRERS'					 	=> '当前没有任何推荐人。',
));
