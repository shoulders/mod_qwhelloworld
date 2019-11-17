<?php
/*
 * @package   HelloWorld Module for Joomla! 3.x
 * @author    Jon Brown https://quantumwarp.com/
 * @copyright Copyright (C) 2019 Jon Brown, All rights reserved.
 * @license   GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 */

// No direct access to this file
defined('_JEXEC') or die;
 
/**
 * Script file of HelloWorld module
 */
class mod_helloWorldInstallerScript
{
	/**
	 * Method to install the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function install($parent) 
	{
		echo '<p>The module has been installed</p>';
	}
 
	/**
	 * Method to uninstall the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function uninstall($parent) 
	{
		echo '<p>The module has been uninstalled</p>';
	}
 
	/**
	 * Method to update the extension
	 * $parent is the class calling this method
	 *
	 * @return void
	 */
	function update($parent) 
	{
		echo '<p>The module has been <strong>updated</strong> to v' . $parent->get('manifest')->version;
		// $parent->getParent()->setRedirectURL('index.php?option=com_modules'); // You can also redirect to a page of your choice with 
	}
 
	/**
	 * Method to run before an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function preflight($type, $parent) 
	{
		echo '<p>Anything here happens <strong>before</strong> the installation/update/uninstallation of the module</p>';
	}
 
	/**
	 * Method to run after an install/update/uninstall method
	 * $parent is the class calling this method
	 * $type is the type of change (install, update or discover_install)
	 *
	 * @return void
	 */
	function postflight($type, $parent) 
	{
		echo '<p>Anything here happens <strong>after</strong> the installation/update/uninstallation of the module</p>';
	}
}