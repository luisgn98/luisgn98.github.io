<?php
/**
* COMPONENT FILE HEADER
**/
/* @copyright:ChronoEngine.com @license:GPLv2 */defined('_JEXEC') or die('Restricted access');
class pkg_chronoforms7InstallerScript {
	function postflight($type, $parent){
		$mainframe = JFactory::getApplication();
		$parent->getParent()->setRedirectURL('index.php?option=com_chronoforms7&cont=installer');
	}
}
?>