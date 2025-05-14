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
	'TOP_FIVE_REFERRERS'		=> 'Top 5 Padrini',
	'NO_REFERRERS'				=> 'Attualmente non ci sono padrini/riferimenti.',
	'REFERRAL_CONTEST'			=> 'Concorso di Padrinato/Riferimento',
	'REFERRALS'					=> 'Padrini / Riferenti',
	'CONTEST_INFO'				=> 'Informazioni sul concorso',
	'CONTEST_DURATION'			=> 'Durata',
	'CONTEST_START_DATE'		=> 'Data di inizio',
	'CONTEST_END_DATE'			=> 'Data di fine',
	'CONTEST_STATUS'			=> 'Stato',
	'CONTEST_IN_PROGRESS' 		=> 'In corso',
	'CONTEST_OVER'				=> 'Terminato',
	'TOP_THREE_REFERRERS' 		=> 'Top 3 Padrini/Riferenti',
	// Nuovo
	'REFERRAL_POINTS'         => 'Punti per figlioccio',
	'REFERRAL_POINTS_EXPLAIN' => 'Numero di punti assegnati al padrino per ogni registrazione convalidata.',
	'REFERRAL_PROMO_THRESHOLD'         => 'Soglia di promozione (punti)',
	// Gruppo automatico
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => 'Quando il numero di punti del padrino raggiunge o supera questa soglia, verrà automaticamente aggiunto al gruppo selezionato. Se 0, non verrà aggiunto a nessun gruppo.',
	'REFERRAL_PROMO_GROUP'             => 'Gruppo di promozione',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => 'Gruppo in cui verrà aggiunto il padrino quando raggiunge la soglia definita.',
	// Scelta del gruppo predefinito sì/no
	'REFERRAL_PROMO_DEFAULT'         => 'Imposta come gruppo predefinito',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => 'Se selezionato, il gruppo di promozione diventerà il gruppo predefinito dell’utente al momento della promozione.',
	'L_YOUR_POINTS' => 'Numero di punti.',
));
