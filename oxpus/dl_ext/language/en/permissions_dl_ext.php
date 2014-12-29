<?php

/**
*
* @package phpBB Extension - Oxpus Downloads
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* Language pack for Extension permissions [English]
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

// Adding new category
$lang['permission_cat']['downloads'] = 'Download Panel';

// Download MOD Permissions
$lang = array_merge($lang, array(
	'acl_a_dl_overview'		=> array('lang' => 'Can see the start screen', 'cat' => 'downloads'),
	'acl_a_dl_config'		=> array('lang' => 'Can manage the general settings', 'cat' => 'downloads'),
	'acl_a_dl_traffic'		=> array('lang' => 'Can manage the traffic', 'cat' => 'downloads'),
	'acl_a_dl_categories'	=> array('lang' => 'Can manage the categories', 'cat' => 'downloads'),
	'acl_a_dl_files'		=> array('lang' => 'Can manage the downloads', 'cat' => 'downloads'),
	'acl_a_dl_permissions'	=> array('lang' => 'Can manage the permissions', 'cat' => 'downloads'),
	'acl_a_dl_stats'		=> array('lang' => 'Can view and manage the statistics', 'cat' => 'downloads'),
	'acl_a_dl_banlist'		=> array('lang' => 'Can manage tje banlist', 'cat' => 'downloads'),
	'acl_a_dl_blacklist'	=> array('lang' => 'Can manage the file Extension blacklist', 'cat' => 'downloads'),
	'acl_a_dl_toolbox'		=> array('lang' => 'Can use the toolbox', 'cat' => 'downloads'),
	'acl_a_dl_fields'		=> array('lang' => 'Can manage user defined fields', 'cat' => 'downloads'),
	'acl_a_dl_browser'		=> array('lang' => 'Can manage User Agents', 'cat' => 'downloads'),
));

?>