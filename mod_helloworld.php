<?php
/*
 * HelloWorld Module Entry Point
 * 
 * @package   Hello World Module for Joomla!
 * @author    Jon Brown https://quantumwarp.com/
 * @copyright Copyright (C) 2019 Jon Brown, All rights reserved.
 * @copyright Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license   GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 */
 
// No direct access
defined('_JEXEC') or die;

// Load the helper file (only once)
// require_once dirname(__FILE__) . '/helper.php'; // works - An older way of doing things
JLoader::register('ModHelloWorldHelper', __DIR__ . '/helper.php'); // better - This uses the Joomla autoload feature

/**
  * This retrieves the lang parameter we stored earlier. Note the second part
  * which assigns the default value of 1 if the parameter cannot be
  * retrieved for some reason.
**/
$language = $params->get('language', '1');

// Load the message for the selected language
$helloWorldMessage = ModHelloWorldHelper::getHello($language);

// Get Message Styling
$messageStyling = $params->get('underlineMessage') ? 'text-decoration: underline;' : '';

// Set the Module Class Suffix
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');

// Add CSS and JS to the <head> - This method allows overriding
JHtml::stylesheet('mod_helloworld/helloworld.css', array(), true);
JHtml::script('mod_helloworld/helloworld.js', false, true);

// Load and display the template
require JModuleHelper::getLayoutPath('mod_'.$module->name, $params->get('layout', 'default'));

