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
	'TOP_FIVE_REFERRERS'	=> 'Top 5 Verweiser',
	'NO_REFERRERS'			=> 'Es gibt derzeit noch keine Verweiser.',
	'REFERRAL_CONTEST'		=> 'Verweis-Wettbewerbe',
	'REFERRALS'				=> 'Verweise',
	'CONTEST_INFO'			=> 'Wettbewerbs-Info',
	'CONTEST_DURATION'		=> 'Dauer',
	'CONTEST_START_DATE'	=> 'Startdatum',
	'CONTEST_END_DATE'		=> 'Enddatum',
	'CONTEST_STATUS'		=> 'Status',
	'CONTEST_IN_PROGRESS' 	=> 'In Bearbeitung',
	'CONTEST_OVER'			=> 'Beendet',
	'TOP_THREE_REFERRERS' 	=> 'Top 3 Verweiser',
	// Neu
	'REFERRAL_POINTS'         => 'Punkte pro Schützling',
	'REFERRAL_POINTS_EXPLAIN' => 'Anzahl der Punkte, die dem Paten für jede bestätigte Registrierung seines Schützlings gutgeschrieben werden.',
	'REFERRAL_PROMO_THRESHOLD'         => 'Beförderungsschwelle (Punkte)',
	
	// Automatische Gruppe
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => 'Wenn die Punktzahl des Paten diesen Schwellenwert erreicht oder überschreitet, wird er automatisch der ausgewählten Gruppe hinzugefügt. Bei 0 wird keine Gruppe zugewiesen.',
	'REFERRAL_PROMO_GROUP'             => 'Beförderungsgruppe',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => 'Gruppe, der der Pate bei Erreichen des festgelegten Schwellenwerts hinzugefügt wird.',
	
	// Standardgruppe festlegen: Ja/Nein
	'REFERRAL_PROMO_DEFAULT'         => 'Als Standardgruppe festlegen',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => 'Wenn aktiviert, wird die Beförderungsgruppe zur Standardgruppe des Benutzers bei der Beförderung.',
	'L_YOUR_POINTS' => 'Anzahl der Punkte.',
));
