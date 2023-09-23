<?php
/*
 * @package		Joomla.Framework
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @component Phoca Component
 * @copyright Copyright (C) Jan Pavelka www.phoca.cz
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License version 2 or later;
 */
defined('_JEXEC') or die;
use Joomla\CMS\Factory;
use Joomla\CMS\Object\CMSObject;

class PhocaGalleryCsHelper
{
	public static function getActions($categoryId = 0)
	{
		$user	= Factory::getUser();
		$result	= new CMSObject;

		if (empty($categoryId)) {
			$assetName = 'com_phocagallery';
		} else {
			$assetName = 'com_phocagallery.phocagallerycs.'.(int) $categoryId;
		}

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.edit.state', 'core.delete'
		);

		foreach ($actions as $action) {
			$result->set($action,	$user->authorise($action, $assetName));
		}

		return $result;
	}
}