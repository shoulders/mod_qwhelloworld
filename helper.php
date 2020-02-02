<?php
/**
 * @package   Hello World Module for Joomla!
 * @author    Jon Brown https://quantumwarp.com/
 * @copyright Copyright (C) 2019 Jon Brown, All rights reserved.
 * @license   GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 */

// No direct access
defined('_JEXEC') or die;

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
	
	/**
	 * com_ajax Action - This example downloads a CSV
	 *
	 * @since   1.0.1
	 */
	public static function downloadCsvActionAjax()
	{            
        // Output headers so that the file is downloaded rather than displayed
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=HelloWorld.csv');

        // Create a file pointer connected to the output stream
        $output_stream = fopen('php://output', 'w');

        // Output the column headings
        fputcsv($output_stream, array(\JText::_('MOD_HELLOWORLD_AJAX_RECORD_NAME'), \JText::_('MOD_HELLOWORLD_AJAX_RECORD_TYPE')));

		// Demo Content
		$records = array(
						array('Orange', 'Fruit'),
						array('Apple', 'Fruit'),
						array('Potato', 'Vegetable'),
						array('Carrot', 'Vegetable'),			
		);		
		
        // loop over the records, outputting them as rows
        foreach($records as $record) {
            $row = array($record[0], $record[1]);
            fputcsv($output_stream, $row);            
        }       

        // close the csv file
        fclose($output_stream);
        
        // Prevent further actions
        exit();
	}
	
	/**
	 * com_ajax Action - This example adds a message to a placeholder
	 *
	 * @since   1.0.1
	 */
	public static function addMessageActionAjax()
    {      
		$result = '<script>jQuery(".browser-message").html("'.JTEXT::_('MOD_HELLOWORLD_AJAX_ADDED_MESSAGE_MSG').'");</script>';
		return $result;
	}
	
	/**
	 * com_ajax Action - This example removes the message from teh placeholder
	 *
	 * @since   1.0.1
	 */
	public static function removeMessageActionAjax()
    {      
		$result = '<script>jQuery(".browser-message").html("");</script>';
		return $result;
	}
	
	/**
	 * com_ajax Action - This example generates a standard Javascript Alert message
	 *
	 * @since   1.0.1
	 */
	public static function alertMessageActionAjax()
    {      
		$result = '<script>alert("'.JTEXT::_('MOD_HELLOWORLD_AJAX_ALERT_MESSAGE_MSG').'");</script>';
        return $result;
	}
	
}


