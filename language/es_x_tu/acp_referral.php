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
	'ACP_MOD_VERSION'					=> 'Versión',
	'GENERAL_CONFIG'					=> 'Configuración general',
	'DISPLAY_TOP_FIVE_REFERRERS'		=> 'Mostrar los 5 mejores padrinos en la página de inicio del foro',
	'DISPLAY_USER_REFERRALS_VIEWTOPIC'	=> 'Mostrar la cantidad de ahijados del usuario en los temas',
	'DISPLAY_USER_REFERRALS_PROFILE'	=> 'Mostrar la cantidad de ahijados del usuario en el perfil',
	'DISPLAY_REFERRAL_CONTESTS'			=> 'Mostrar concursos de referidos en la página de inicio del foro',
	'CONTEST_ADD'						=> 'Agregar concurso',
	'CONTEST_NAME'					 	=> 'Nombre del concurso',
	'CONTEST_DESCRIPTION'				=> 'Descripción',
	'REFERRAL_MINIMUM_POSTS'			=> 'Mínimo de mensajes del ahijado',
	'REFERRAL_MINIMUM_POSTS_EXPLAIN'	=> 'Establece el número mínimo de mensajes que debe tener un ahijado para que el parrainage se considere válido.',
	'CONTEST_DURATION'				 	=> 'Duración',
	'DAYS'							 	=> 'Días',
	'WEEKS'								=> 'Semanas',
	'MONTHS'							=> 'Meses',
	'CONTEST_START_DATE'				=> 'Fecha de inicio',
	'CONTEST_END_DATE'				 	=> 'Fecha de finalización',
	'CONTEST_STATUS'					=> 'Estado',
	'CONTEST_IN_PROGRESS'				=> 'En curso',
	'CONTEST_OVER'					 	=> 'Finalizado',
	'LIST_CONTEST'					 	=> 'Concurso',
	'LIST_CONTESTS'						=> 'Concursos',
	'NO_CONTESTS'						=> 'No se encontraron concursos.',
	'ENTER_CONTEST_NAME'				=> 'Debes especificar un nombre para el concurso.',
	'CONTEST_INFO_UPDATED'			 	=> 'El concurso se ha actualizado correctamente.',
	'CONTEST_ADDED'						=> 'El concurso se ha creado correctamente.',
	'CONTEST_DELETED'					=> 'El concurso se ha eliminado correctamente.',
	'VIEW_STATISTICS'					=> 'Ver estadísticas',
	'CONTEST_POS'						=> 'Posición',
	'REFERRER_USERNAME'					=> 'Nombre de usuario del padrino',
	'REFERRAL_USERNAME'					=> 'Nombre de usuario del ahijado',
	'CONTEST_TOTAL_REFERRALS'			=> 'Total de miembros referidos durante este concurso',
	'NO_STATS'						 	=> 'No hay estadísticas disponibles para este concurso.',
	'SEARCH_REFERRER'					=> 'Buscar un padrino',
	'REFERRALS'							=> 'Referidos',
	'LIST_REFERRER'						=> 'Padrino',
	'LIST_REFERRERS'					=> 'Padrinos',
	'VIEW_REFERRALS'					=> 'Ver ahijados',
	'REFERRER'						 	=> 'Padrino',
	'REFERRED_ON'						=> 'Fecha de apadrinamiento',
	'REFERRER_NOT_FOUND'				=> 'El padrino que estás buscando no fue encontrado.',
	'NO_REFERRERS'					 	=> 'Aún no hay padrinos.',
));
