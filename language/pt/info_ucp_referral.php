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
	'UCP_REFERRAL'			=> 'Padrinato / Convida os teus amigos',
	'UCP_STATISTICS'	 	=> 'Ver estatísticas',
	'UCP_REFERRALS'			=> 'Ver padrinhos/referentes',
	'UCP_INVITE'		 	=> 'Convidar um amigo',
	'REFERRAL_LINK'			=> 'O teu link de padrinato/referência',
	'YOUR_STATISTICS'		=> 'As tuas estatísticas',
	'MEMBERS_REFERRED'		=> 'Membros apadrinhados',
	'INVITATIONS_SENT'		=> 'Convites enviados',
	'CONTESTS_WON'			=> 'Concursos ganhos',
	'RECIPIENTS'		 	=> 'Destinatário(s)',
	'RECIPIENTS_EXPLAIN' 	=> 'Podes enviar um convite a vários destinatários introduzindo cada endereço de email numa linha separada.',
	'SENDER_EMAIL'			=> 'O teu email',
	'MESSAGE_EXPLAIN'		=> 'O teu link de padrinato será automaticamente inserido no final da mensagem.',
	'INVITATION_SENT'		=> 'O teu convite foi enviado com sucesso!',
	'FORM_ERROR'		 	=> 'Tens de preencher todos os campos.',
	'YOUR_REFERRALS'	 	=> 'Os teus afilhados',
	'NO_REFERRALS'			=> 'Ainda não tens afilhados.',
));
