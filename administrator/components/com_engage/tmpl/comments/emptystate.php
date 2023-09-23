<?php
/**
 * @package   AkeebaEngage
 * @copyright Copyright (c)2020-2022 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;

$displayData = [
	'textPrefix' => 'COM_ENGAGE_COMMENTS',
	'formURL'    => 'index.php?option=com_engage&view=comments',
	'icon'       => 'icon-engage',
];

echo LayoutHelper::render('joomla.content.emptystate', $displayData);
