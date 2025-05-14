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
	'TOP_FIVE_REFERRERS'		=> 'Top 5 Padrinhos',
	'NO_REFERRERS'				=> 'Atualmente não há padrinhos/referenciadores.',
	'REFERRAL_CONTEST'			=> 'Concurso de Padrinhos/Referências',
	'REFERRALS'					=> 'Padrinhos / Referenciadores',
	'CONTEST_INFO'				=> 'Informações do Concurso',
	'CONTEST_DURATION'			=> 'Duração',
	'CONTEST_START_DATE'		=> 'Data de Início',
	'CONTEST_END_DATE'			=> 'Data de Término',
	'CONTEST_STATUS'			=> 'Status',
	'CONTEST_IN_PROGRESS' 		=> 'Em andamento',
	'CONTEST_OVER'				=> 'Encerrado',
	'TOP_THREE_REFERRERS' 		=> 'Top 3 Padrinhos/Referenciadores',
	// Novo
	'REFERRAL_POINTS'         => 'Pontos por afilhado',
	'REFERRAL_POINTS_EXPLAIN' => 'Número de pontos atribuídos ao padrinho por cada cadastro validado.',
	'REFERRAL_PROMO_THRESHOLD'         => 'Limite de promoção (pontos)',
	// Grupo automático
	'REFERRAL_PROMO_THRESHOLD_EXPLAIN' => 'Quando o número de pontos do padrinho atinge ou ultrapassa esse limite, ele será automaticamente adicionado ao grupo selecionado. Se for 0, não será adicionado a nenhum grupo.',
	'REFERRAL_PROMO_GROUP'             => 'Grupo de Promoção',
	'REFERRAL_PROMO_GROUP_EXPLAIN'     => 'Grupo no qual o padrinho será adicionado ao atingir o limite definido.',
	// Escolha como grupo padrão sim/não
	'REFERRAL_PROMO_DEFAULT'         => 'Definir como grupo padrão',
	'REFERRAL_PROMO_DEFAULT_EXPLAIN' => 'Se marcado, o grupo de promoção se tornará o grupo padrão do usuário ao ser promovido.',
	'L_YOUR_POINTS' => 'Quantidade de Pontos.',
));
