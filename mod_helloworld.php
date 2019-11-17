<?php
/*
 * HelloWorld! Module Entry Point
 * 
 * @package   HelloWorld Module for Joomla! 3.x
 * @author    Jon Brown https://quantumwarp.com/
 * @copyright Copyright (C) 2019 Jon Brown, All rights reserved.
 * @copyright Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license   GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 */
 
// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

/**
  * This retrieves the lang parameter we stored earlier. Note the second part
  * which assigns the default value of 1 if the parameter cannot be
  * retrieved for some reason.
**/
$language = $params->get('lang', '1');

// Load the message for the selected language
$hello    = modHelloWorldHelper::getHello($language);

// Load and display the template
require JModuleHelper::getLayoutPath('mod_helloworld');