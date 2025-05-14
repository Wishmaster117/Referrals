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
	'TOP_FIVE_REFERRERS'		=> 'Топ 5 наставников',
	'NO_REFERRERS'				=> 'В настоящее время нет наставников.',
	'REFERRAL_CONTEST'			=> 'Конкурс наставников / рефералов',
	'REFERRALS'					=> 'Наставники / рефералы',
	'CONTEST_INFO'				=> 'Информация о конкурсе',
	'CONTEST_DURATION'			=> 'Продолжительность',
	'CONTEST_START_DATE'		=> 'Дата начала',
	'CONTEST_END_DATE'			=> 'Дата окончания',
	'CONTEST_STATUS'			=> 'Статус',
	'CONTEST_IN_PROGRESS' 		=> 'В процессе',
	'CONTEST_OVER'				=> 'Завершён',
	'TOP_THREE_REFERRERS' 		=> 'Топ 3 наставников',
	// Новое
	'REFERRAL_POINTS'         => 'Очки за реферала',
	'REFERRAL_POINTS_EXPLAIN' => 'Количество очков, начисляемых наставнику за каждую подтверждённую регистрацию.',
	'REFERRAL_PROMO_THRESHOLD'         => 'Порог для повышения (очки)',
	// Автогруппа
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => 'Когда количество очков наставника достигает или превышает этот порог, он будет автоматически добавлен в выбранную группу. Если указано 0 — не добавляется ни в одну группу.',
	'REFERRAL_PROMO_GROUP'             => 'Группа для повышения',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => 'Группа, в которую будет добавлен наставник при достижении заданного порога.',
	// Установка как группа по умолчанию — да/нет
	'REFERRAL_PROMO_DEFAULT'         => 'Назначить как группу по умолчанию',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => 'Если включено, группа для повышения станет группой по умолчанию пользователя при повышении.',
	'L_YOUR_POINTS' => 'Ваши очки.',
));
