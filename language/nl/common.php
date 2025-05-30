<?php
/**
*
* @package phpBB Extension - Referrals
* @copyright (c) 2016 dmzx - https://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
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
	'TOP_FIVE_REFERRERS'	=> 'Top 5 doorverwijzers',
	'NO_REFERRERS'			=> 'Er zijn nog geen doorverwijzers.',
	'REFERRAL_CONTEST'		=> 'Doorverwijzer wedstrijd',
	'REFERRALS'				=> 'Doorverwijzers',
	'CONTEST_INFO'			=> 'Wedstrijd info',
	'CONTEST_DURATION'		=> 'Duur',
	'CONTEST_START_DATE'	=> 'Start datum',
	'CONTEST_END_DATE'		=> 'Eind datum',
	'CONTEST_STATUS'		=> 'Status',
	'CONTEST_IN_PROGRESS' 	=> 'Lopende',
	'CONTEST_OVER'			=> 'Be&euml;indigd',
	'TOP_THREE_REFERRERS' 	=> 'Top 3 doorverwijzers',
	// Nederlands
	'REFERRAL_POINTS'         => 'Punten per doorverwijzing',
	'REFERRAL_POINTS_EXPLAIN' => 'Aantal punten dat aan de doorverwijzer wordt toegekend voor elke succesvolle registratie.',
	// Nieuw
	'REFERRAL_POINTS'         => 'Punten per petekind',
	'REFERRAL_POINTS_EXPLAIN' => 'Aantal punten toegekend aan de peter voor elke gevalideerde registratie.',
	'REFERRAL_PROMO_THRESHOLD'         => 'Promotiedrempel (punten)',
	
	// Automatische groep
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => 'Wanneer het aantal punten van de peter deze drempel bereikt of overschrijdt, wordt hij automatisch toegevoegd aan de geselecteerde groep. Indien 0, wordt geen groep toegewezen.',
	'REFERRAL_PROMO_GROUP'             => 'Promotiegroep',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => 'Groep waarin de peter wordt geplaatst wanneer hij de ingestelde drempel bereikt.',
	
	// Standaardgroep instellen: ja/nee
	'REFERRAL_PROMO_DEFAULT'         => 'Instellen als standaardgroep',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => 'Indien aangevinkt, wordt de promotiegroep de standaardgroep van de gebruiker bij promotie.',
	'L_YOUR_POINTS' => 'Aantal punten.',
));
