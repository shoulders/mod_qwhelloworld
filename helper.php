<?php
/**
 * @package   Hello World Module for Joomla!
 * @author    Jon Brown https://quantumwarp.com/
 * @copyright Copyright (C) 2019 Jon Brown, All rights reserved.
 * @license   GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 */
 
class ModHelloWorldHelper
{
	/**
	 * Retrieves the `Hello World` message
	 *
	 * @param   array  $params An object containing the module parameters
	 *
	 * @access public
	 */    
	public static function getHello($language)
	{
		// Obtain a database connection
		$db = JFactory::getDbo();
		
		// Retrieve the shout - note we are now retrieving the id not the `language` field.
		$query = $db->getQuery(true)
					->select($db->quoteName('hello'))
					->from($db->quoteName('#__mod_helloworld'))
					->where('id = '. $db->Quote($language));
		
		// Prepare the query
		$db->setQuery($query);
		
		// Load the row.
		$result = $db->loadResult();
		
		// Return the Hello
		return $result;
	}
}


