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
	'ACP_MOD_VERSION'					=> 'Версия',
	'GENERAL_CONFIG'					=> 'Общие настройки',
	'DISPLAY_TOP_FIVE_REFERRERS'		=> 'Показать топ-5 наставников на главной странице форума',
	'DISPLAY_USER_REFERRALS_VIEWTOPIC' 	=> 'Показывать количество рефералов пользователя в теме',
	'DISPLAY_USER_REFERRALS_PROFILE'	=> 'Показывать количество рефералов в профиле пользователя',
	'DISPLAY_REFERRAL_CONTESTS'			=> 'Показать результаты конкурса рефералов на главной странице форума',
	'CONTEST_ADD'						=> 'Добавить конкурс',
	'CONTEST_NAME'					 	=> 'Название конкурса',
	'CONTEST_DESCRIPTION'				=> 'Описание',
	'REFERRAL_MINIMUM_POSTS'			=> 'Минимум сообщений для засчитывания реферала',
	'REFERRAL_MINIMUM_POSTS_EXPLAIN'	=> 'Укажите минимальное количество сообщений, которое должен набрать новый пользователь, чтобы считаться действительным рефералом.',
	'CONTEST_DURATION'				 	=> 'Продолжительность',
	'DAYS'							 	=> 'Дней',
	'WEEKS'								=> 'Недель',
	'MONTHS'							=> 'Месяцев',
	'CONTEST_START_DATE'				=> 'Дата начала',
	'CONTEST_END_DATE'				 	=> 'Дата окончания',
	'CONTEST_STATUS'					=> 'Статус',
	'CONTEST_IN_PROGRESS'				=> 'В процессе',
	'CONTEST_OVER'					 	=> 'Завершён',
	'LIST_CONTEST'					 	=> 'Конкурс',
	'LIST_CONTESTS'						=> 'Конкурсы',
	'NO_CONTESTS'						=> 'Нет активных конкурсов.',
	'ENTER_CONTEST_NAME'				=> 'Вы не указали название конкурса.',
	'CONTEST_INFO_UPDATED'			 	=> 'Информация о конкурсе успешно обновлена.',
	'CONTEST_ADDED'						=> 'Конкурс успешно создан.',
	'CONTEST_DELETED'					=> 'Конкурс успешно удалён.',
	'VIEW_STATISTICS'					=> 'Просмотр статистики',
	'CONTEST_POS'						=> 'Позиция',
	'REFERRER_USERNAME'					=> 'Имя наставника',
	'REFERRAL_USERNAME'					=> 'Имя реферала',
	'CONTEST_TOTAL_REFERRALS'			=> 'Всего рефералов за конкурс',
	'NO_STATS'						 	=> 'Статистика для этого конкурса недоступна.',
	'SEARCH_REFERRER'					=> 'Поиск наставников',
	'REFERRALS'							=> 'Рефералы',
	'LIST_REFERRER'						=> 'Наставник',
	'LIST_REFERRERS'					=> 'Наставники',
	'VIEW_REFERRALS'					=> 'Посмотреть рефералов',
	'REFERRER'						 	=> 'Наставник',
	'REFERRED_ON'						=> 'Реферал с',
	'REFERRER_NOT_FOUND'				=> 'Наставник не найден.',
	'NO_REFERRERS'					 	=> 'Пока нет наставников.',
));
