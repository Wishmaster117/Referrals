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
	'ACP_MOD_VERSION'					=> 'Versão',
	'GENERAL_CONFIG'					=> 'Configurações Gerais',
	'DISPLAY_TOP_FIVE_REFERRERS'		=> 'Mostrar o Top 5 de padrinhos/referentes na página inicial do fórum',
	'DISPLAY_USER_REFERRALS_VIEWTOPIC' 	=> 'Mostrar o contador de afilhados do utilizador na visualização do tópico',
	'DISPLAY_USER_REFERRALS_PROFILE'	=> 'Mostrar o contador de afilhados do utilizador no perfil',
	'DISPLAY_REFERRAL_CONTESTS'			=> 'Mostrar o resultado do concurso de referência na página inicial do fórum',
	'CONTEST_ADD'						=> 'Adicionar Concurso',
	'CONTEST_NAME'					 	=> 'Nome do Concurso',
	'CONTEST_DESCRIPTION'				=> 'Descrição',
	'REFERRAL_MINIMUM_POSTS'			=> 'Número mínimo de mensagens para validação como afilhado',
	'REFERRAL_MINIMUM_POSTS_EXPLAIN'	=> 'Defina o número mínimo de mensagens que um novo utilizador deve ter para ser validado como afilhado (referenciado).',
	'CONTEST_DURATION'				 	=> 'Duração',
	'DAYS'							 	=> 'Dias',
	'WEEKS'								=> 'Semanas',
	'MONTHS'							=> 'Meses',
	'CONTEST_START_DATE'				=> 'Data de início',
	'CONTEST_END_DATE'				 	=> 'Data de fim',
	'CONTEST_STATUS'					=> 'Estado',
	'CONTEST_IN_PROGRESS'				=> 'Em curso',
	'CONTEST_OVER'					 	=> 'Terminado',
	'LIST_CONTEST'					 	=> 'Concurso',
	'LIST_CONTESTS'						=> 'Concursos',
	'NO_CONTESTS'						=> 'Não há concursos em curso.',
	'ENTER_CONTEST_NAME'				=> 'Tem de especificar um nome para o concurso.',
	'CONTEST_INFO_UPDATED'			 	=> 'Concurso atualizado com sucesso.',
	'CONTEST_ADDED'						=> 'Concurso criado com sucesso.',
	'CONTEST_DELETED'					=> 'Concurso removido com sucesso.',
	'VIEW_STATISTICS'					=> 'Ver estatísticas',
	'CONTEST_POS'						=> 'Posição',
	'REFERRER_USERNAME'					=> 'Nome de utilizador do padrinho',
	'REFERRAL_USERNAME'					=> 'Afilhado',
	'CONTEST_TOTAL_REFERRALS'			=> 'Total de membros referenciados durante este concurso',
	'NO_STATS'						 	=> 'Não existem estatísticas disponíveis para este concurso.',
	'SEARCH_REFERRER'					=> 'Procurar padrinhos',
	'REFERRALS'							=> 'Afilhados',
	'LIST_REFERRER'						=> 'Padrinho',
	'LIST_REFERRERS'					=> 'Padrinhos',
	'VIEW_REFERRALS'					=> 'Ver afilhados',
	'REFERRER'						 	=> 'Padrinho',
	'REFERRED_ON'						=> 'Referenciado por',
	'REFERRER_NOT_FOUND'				=> 'O padrinho que procura não foi encontrado.',
	'NO_REFERRERS'					 	=> 'Ainda não há padrinhos registados.',
));
