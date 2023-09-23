<?php
/**
 * Kunena Component
 *
 * @package         Kunena.Template.Aurelia
 * @subpackage      Layout.Widget
 *
 * @copyright       Copyright (C) 2008 - 2022 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Session\Session;

$karma = '';

if ($this->karmatype == 'karmadown')
{
	$url       = 'index.php?option=com_kunena&view=user&task=karmadown&userid=' . $this->userid . '&' . Session::getFormToken() . '=1';
	$karmatype = 'minus';
	$karmatext = Text::_('COM_KUNENA_KARMA_SMITE');
}
else
{
	$url       = 'index.php?option=com_kunena&view=user&task=karmaup&userid=' . $this->userid . '&' . Session::getFormToken() . '=1';
	$karmatype = 'plus';
	$karmatext = Text::_('COM_KUNENA_KARMA_APPLAUD');
}

if ($this->topicicontype == 'svg')
{
	$karmaIcon = '<span class="glyphicon-karma glyphicon glyphicon-' . $karmatype . '-sign text-danger" data-bs-toggle="tooltip" title="' . $karmatext . '"></span>';
}
elseif ($this->topicicontype == 'fa')
{
	$karmaIcon = '<i class="fa fa-' . $karmatype . '-circle" data-bs-toggle="tooltip" title="' . $karmatext . '"></i>';
}
else
{
	$karmaIcon = '<span class="kicon-profile kicon-profile-' . $karmatype . '" data-bs-toggle="tooltip" title="' . $karmatext . '"></span>';
}

$karma .= ' ' . HTMLHelper::_('kunenaforum.link', $url, $karmaIcon);

echo $karma;
