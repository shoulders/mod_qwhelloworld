<?php
/**
 * @package   Hello World Module for Joomla!
 * @author    Jon Brown https://quantumwarp.com/
 * @copyright Copyright (C) 2019 Jon Brown, All rights reserved.
 * @license   GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 */

// No direct access
defined('_JEXEC') or die; ?>

<div class="<?php echo 'mod_'.$module->name.$moduleclass_sfx ?> default">
	<p class="template_msg"><strong><?php echo JText::_('MOD_HELLOWORLD_DEFAULT_TEMPLATE_MSG'); ?></strong></p>
	<p class="heading_msg"><?php echo JText::_('MOD_HELLOWORLD_HEADING_MSG'); ?></p>
	<?php if ($params->get('showMessage')) : ?>
		<p style="<?php echo $messageStyling ?>"><?php echo $helloWorldMessage; ?></p>
	<?php endif; ?>
	<div class="browser-message"></div>
	<div class="form-actions">
		<input type="button" class="btn btn-info" value="<?php echo JText::_('MOD_HELLOWORLD_BUTTON_DOWNLOAD_CSV'); ?>" onclick="ModHelloWorld.ajaxAction('downloadCsv')" />
		<input type="button" class="btn btn-warning" value="<?php echo JText::_('MOD_HELLOWORLD_BUTTON_ADD_MESSAGE'); ?>" onclick="ModHelloWorld.ajaxAction('addMessage')" />
		<input type="button" class="btn btn-warning" value="<?php echo JText::_('MOD_HELLOWORLD_BUTTON_REMOVE_MESSAGE'); ?>" onclick="ModHelloWorld.ajaxAction('removeMessage')" />
		<input type="button" class="btn btn-success" value="<?php echo JText::_('MOD_HELLOWORLD_BUTTON_ALERT_MESSAGE'); ?>" onclick="ModHelloWorld.ajaxAction('alertMessage')" />
	</div>
</div>