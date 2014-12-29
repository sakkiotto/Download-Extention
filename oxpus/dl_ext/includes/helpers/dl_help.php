<?php

/**
*
* @package phpBB Extension - Oxpus Downloads
* @copyright (c) 2014 OXPUS - www.oxpus.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

$this->user->add_lang_ext('oxpus/dl_ext', 'help');

$help_key	= $this->request->variable('help_key', '');
$value		= $this->request->variable('value', '');
$value = ($value == 'undefined') ? '' : $value;

//
// Pull all user config data
//
if ($help_key && isset($this->user->lang['HELP_' . $help_key]))
{
	$help_string = $this->user->lang['HELP_' . $help_key];
}
else
{
	$help_string = $this->user->lang['DL_NO_HELP_AVIABLE'];
}

if ($value)
{
	$help_key = $value;
}

if ($value)
{
	$help_option = $help_key;
}
else if (isset($this->user->lang[$help_key]))
{
	$help_option = $this->user->lang[$help_key];
}
else
{
	$help_option = '';
}

$this->template->assign_vars(array(
	'L_CLOSE'		=> $this->user->lang['CLOSE_WINDOW'],

	'HELP_TITLE'	=> $this->user->lang['HELP_TITLE'],
	'HELP_OPTION'	=> $help_option,
	'HELP_STRING'	=> $help_string)
);

page_header($this->user->lang['HELP_TITLE'], false);

$this->template->set_filenames(array(
	'body' => 'dl_help_body.html')
);

page_footer();

?>