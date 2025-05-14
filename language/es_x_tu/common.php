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
	'TOP_FIVE_REFERRERS'	=> 'Top 5 padrinos',
	'NO_REFERRERS'			=> 'Aún no hay padrinos.',
	'REFERRAL_CONTEST'		=> 'Concurso de apadrinamiento',
	'REFERRALS'				=> 'Ahijados',
	'CONTEST_INFO'			=> 'Información del concurso',
	'CONTEST_DURATION'		=> 'Duración',
	'CONTEST_START_DATE'	=> 'Fecha de inicio',
	'CONTEST_END_DATE'		=> 'Fecha de finalización',
	'CONTEST_STATUS'		=> 'Estado',
	'CONTEST_IN_PROGRESS' 	=> 'En curso',
	'CONTEST_OVER'			=> 'Finalizado',
	'TOP_THREE_REFERRERS' 	=> 'Top 3 padrinos',
	// Nuevo
	'REFERRAL_POINTS'         => 'Puntos por ahijado',
	'REFERRAL_POINTS_EXPLAIN' => 'Cantidad de puntos otorgados al padrino por cada registro validado.',
	'REFERRAL_PROMO_THRESHOLD'         => 'Umbral de promoción (puntos)',
	
	// Grupo automático
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => 'Cuando el número de puntos del padrino alcanza o supera este umbral, será añadido automáticamente al grupo seleccionado. Si es 0, no se añadirá a ningún grupo.',
	'REFERRAL_PROMO_GROUP'             => 'Grupo de promoción',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => 'Grupo al que será añadido el padrino cuando alcance el umbral definido.',
	
	// Selección de grupo por defecto: sí/no
	'REFERRAL_PROMO_DEFAULT'         => 'Definir como grupo por defecto',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => 'Si está marcado, el grupo de promoción se convertirá en el grupo por defecto del usuario al momento de la promoción.',
	'L_YOUR_POINTS' => 'Cantidad de puntos.',
));
