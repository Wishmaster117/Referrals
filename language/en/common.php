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
	'TOP_FIVE_REFERRERS'	=> 'Top 5 referrers',
	'NO_REFERRERS'			=> 'There are no referrers yet.',
	'REFERRAL_CONTEST'		=> 'Referral contest',
	'REFERRALS'				=> 'Referrals',
	'CONTEST_INFO'			=> 'Contest info',
	'CONTEST_DURATION'		=> 'Duration',
	'CONTEST_START_DATE'	=> 'Start date',
	'CONTEST_END_DATE'		=> 'End date',
	'CONTEST_STATUS'		=> 'Status',
	'CONTEST_IN_PROGRESS' 	=> 'In progress',
	'CONTEST_OVER'			=> 'Ended',
	'TOP_THREE_REFERRERS' 	=> 'Top 3 referrers',
	// New
	'REFERRAL_POINTS'         => 'Points per referral',
	'REFERRAL_POINTS_EXPLAIN' => 'Number of points awarded to the sponsor for each validated registration.',
	'REFERRAL_PROMO_THRESHOLD'         => 'Promotion threshold (points)',
	// Auto group
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => 'When the sponsor’s points reach or exceed this threshold, they will automatically be added to the selected group. If set to 0, no group will be assigned.',
	'REFERRAL_PROMO_GROUP'             => 'Promotion group',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => 'Group the sponsor will be added to when reaching the defined threshold.',
	// Default group selection yes/no
	'REFERRAL_PROMO_DEFAULT'         => 'Set as default group',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => 'If checked, the promotion group will become the user’s default group upon promotion.',
	'L_YOUR_POINTS' => 'Number of points.',
));
