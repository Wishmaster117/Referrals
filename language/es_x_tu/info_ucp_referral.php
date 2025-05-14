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
	'UCP_REFERRAL'			=> 'Ahijados',
	'UCP_STATISTICS'	 	=> 'Ver estadísticas',
	'UCP_REFERRALS'			=> 'Ver ahijados',
	'UCP_INVITE'		 	=> 'Invitar amigos',
	'REFERRAL_LINK'			=> 'Tu enlace de padrino',
	'YOUR_STATISTICS'		=> 'Tus estadísticas',
	'MEMBERS_REFERRED'		=> 'Miembros apadrinados',
	'INVITATIONS_SENT'		=> 'Invitaciones enviadas',
	'CONTESTS_WON'			=> 'Concursos ganados',
	'RECIPIENTS'		 	=> 'Destinatario(s)',
	'RECIPIENTS_EXPLAIN' 	=> 'Puedes enviar invitaciones a varios destinatarios introduciendo cada dirección de correo electrónico en una línea nueva.',
	'SENDER_EMAIL'			=> 'Tu correo electrónico',
	'MESSAGE_EXPLAIN'		=> 'Tu enlace de padrino será insertado automáticamente al final del mensaje.',
	'INVITATION_SENT'		=> '¡Tu invitación ha sido enviada con éxito!',
	'FORM_ERROR'		 	=> 'Debes completar todos los campos.',
	'YOUR_REFERRALS'	 	=> 'Tus ahijados',
	'NO_REFERRALS'			=> 'Aún no tienes ahijados.',
));
