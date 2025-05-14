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
	'UCP_REFERRAL'			=> 'Наставничество / Пригласите друзей',
	'UCP_STATISTICS'	 	=> 'Посмотреть статистику',
	'UCP_REFERRALS'			=> 'Просмотр наставников / рефералов',
	'UCP_INVITE'		 	=> 'Пригласить друга',
	'REFERRAL_LINK'			=> 'Ваша реферальная ссылка',
	'YOUR_STATISTICS'		=> 'Ваша статистика',
	'MEMBERS_REFERRED'		=> 'Приглашённые участники',
	'INVITATIONS_SENT'		=> 'Отправленные приглашения',
	'CONTESTS_WON'			=> 'Выигранные конкурсы',
	'RECIPIENTS'		 	=> 'Получатель(и)',
	'RECIPIENTS_EXPLAIN' 	=> 'Вы можете отправить приглашения нескольким получателям, указав каждый адрес электронной почты с новой строки.',
	'SENDER_EMAIL'			=> 'Ваш email',
	'MESSAGE_EXPLAIN'		=> 'Ваша реферальная ссылка будет автоматически добавлена в конец сообщения.',
	'INVITATION_SENT'		=> 'Ваше приглашение было успешно отправлено!',
	'FORM_ERROR'		 	=> 'Пожалуйста, заполните все поля.',
	'YOUR_REFERRALS'	 	=> 'Ваши рефералы',
	'NO_REFERRALS'			=> 'У вас пока нет рефералов.',
));
