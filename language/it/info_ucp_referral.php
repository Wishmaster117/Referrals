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
	'UCP_REFERRAL'			=> 'Padrinato / Invita i tuoi amici',
	'UCP_STATISTICS'	 	=> 'Visualizza statistiche',
	'UCP_REFERRALS'			=> 'Visualizza i padrini/riferimenti',
	'UCP_INVITE'		 	=> 'Invita un amico',
	'REFERRAL_LINK'			=> 'Il tuo link di padrinato/riferimento',
	'YOUR_STATISTICS'		=> 'Le tue statistiche',
	'MEMBERS_REFERRED'		=> 'Utenti padrinati',
	'INVITATIONS_SENT'		=> 'Inviti inviati',
	'CONTESTS_WON'			=> 'Concorsi vinti',
	'RECIPIENTS'		 	=> 'Destinatario(i)',
	'RECIPIENTS_EXPLAIN' 	=> 'Puoi inviare un invito a più destinatari inserendo ogni indirizzo email su una nuova riga.',
	'SENDER_EMAIL'			=> 'La tua email',
	'MESSAGE_EXPLAIN'		=> 'Il tuo link di padrinato sarà automaticamente inserito alla fine del messaggio.',
	'INVITATION_SENT'		=> 'Il tuo invito è stato inviato con successo!',
	'FORM_ERROR'		 	=> 'Tutti i campi devono essere compilati.',
	'YOUR_REFERRALS'	 	=> 'I tuoi figliocci',
	'NO_REFERRALS'			=> 'Non hai ancora figliocci.',
));
