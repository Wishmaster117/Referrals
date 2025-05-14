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
	'ACP_MOD_VERSION'					=> 'Versione',
	'GENERAL_CONFIG'					=> 'Impostazioni generali',
	'DISPLAY_TOP_FIVE_REFERRERS'		=> 'Mostra i Top 5 padrini/riferimenti nella home del forum',
	'DISPLAY_USER_REFERRALS_VIEWTOPIC' 	=> 'Mostra il contatore dei figliocci dell’utente nella visualizzazione del topic',
	'DISPLAY_USER_REFERRALS_PROFILE'	=> 'Mostra il contatore dei figliocci dell’utente nel profilo',
	'DISPLAY_REFERRAL_CONTESTS'			=> 'Mostra i risultati del concorso di riferimento nella home del forum',
	'CONTEST_ADD'						=> 'Aggiungi un concorso',
	'CONTEST_NAME'					 	=> 'Nome del concorso',
	'CONTEST_DESCRIPTION'				=> 'Descrizione',
	'REFERRAL_MINIMUM_POSTS'			=> 'Numero minimo di messaggi per essere validato come figlioccio',
	'REFERRAL_MINIMUM_POSTS_EXPLAIN'	=> 'Definisci il numero minimo di messaggi che un nuovo utente deve avere per essere convalidato come figlioccio (riferito).',
	'CONTEST_DURATION'				 	=> 'Durata',
	'DAYS'							 	=> 'Giorni',
	'WEEKS'								=> 'Settimane',
	'MONTHS'							=> 'Mesi',
	'CONTEST_START_DATE'				=> 'Data di inizio',
	'CONTEST_END_DATE'				 	=> 'Data di fine',
	'CONTEST_STATUS'					=> 'Stato',
	'CONTEST_IN_PROGRESS'				=> 'In corso',
	'CONTEST_OVER'					 	=> 'Terminato',
	'LIST_CONTEST'					 	=> 'Concorso',
	'LIST_CONTESTS'						=> 'Concorsi',
	'NO_CONTESTS'						=> 'Nessun concorso in corso.',
	'ENTER_CONTEST_NAME'				=> 'Devi specificare un nome per il concorso.',
	'CONTEST_INFO_UPDATED'			 	=> 'Concorso aggiornato con successo.',
	'CONTEST_ADDED'						=> 'Concorso creato con successo.',
	'CONTEST_DELETED'					=> 'Concorso eliminato con successo.',
	'VIEW_STATISTICS'					=> 'Vedi statistiche',
	'CONTEST_POS'						=> 'Posizione',
	'REFERRER_USERNAME'					=> 'Nome utente del padrino',
	'REFERRAL_USERNAME'					=> 'Figlioccio',
	'CONTEST_TOTAL_REFERRALS'			=> 'Totale utenti riferiti durante questo concorso',
	'NO_STATS'						 	=> 'Non ci sono statistiche disponibili per questo concorso.',
	'SEARCH_REFERRER'					=> 'Cerca padrini',
	'REFERRALS'							=> 'Figliocci',
	'LIST_REFERRER'						=> 'Padrino',
	'LIST_REFERRERS'					=> 'Padrini',
	'VIEW_REFERRALS'					=> 'Vedi figliocci',
	'REFERRER'						 	=> 'Padrino',
	'REFERRED_ON'						=> 'Referito da',
	'REFERRER_NOT_FOUND'				=> 'Il padrino che cerchi non è stato trovato.',
	'NO_REFERRERS'					 	=> 'Non ci sono ancora padrini.',
));
