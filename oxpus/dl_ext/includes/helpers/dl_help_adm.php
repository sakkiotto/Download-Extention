<?php

/**
*
* @package phpBB Extension - Oxpus Downloads
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

$user->add_lang_ext('oxpus/dl_ext', 'help');

$help_key	= $request->variable('help_key', '');
$value		= $request->variable('value', '');
$value = ($value == 'undefined') ? '' : $value;

//
// Pull all user config data
//
if ($help_key && isset($user->lang['HELP_' . $help_key]))
{
	$help_string = $user->lang['HELP_' . $help_key];
}
else
{
	$help_string = $user->lang['DL_NO_HELP_AVIABLE'];
}

if ($value)
{
	$help_key = $value;
}

if ($value)
{
	$help_option = $help_key;
}
else if (isset($user->lang[$help_key]))
{
	$help_option = $user->lang[$help_key];
}
else
{
	$help_option = '';
}

$template->assign_vars(array(
	'L_CLOSE'		=> $user->lang['CLOSE_WINDOW'],

	'HELP_TITLE'	=> $user->lang['HELP_TITLE'],
	'HELP_OPTION'	=> $help_option,
	'HELP_STRING'	=> $help_string)
);

page_header($user->lang['HELP_TITLE'], false);

$template->set_filenames(array(
	'body' => 'dl_help_body.html')
);

page_footer();
