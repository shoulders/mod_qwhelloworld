<?php
/**
 * @package   Hello World Module for Joomla!
 * @author    Jon Brown https://quantumwarp.com/
 * @copyright Copyright (C) 2019 Jon Brown, All rights reserved.
 * @license   GNU/GPLv3 or later; https://www.gnu.org/licenses/gpl.html
 */

// No direct access
defined('_JEXEC') or die; ?>

<div class="<?php echo $module->name.$moduleclass_sfx; ?>">
	<p><strong><?php echo JText::_('MOD_HELLOWORLD_DEFAULT_TMPL_MSG'); ?></strong></p>
	<p><?php echo JText::_('MOD_HELLOWORLD_HEADING_MSG'); ?></p>
	<?php if ($params->get('showMessage')) : ?>
		<p style="<?php echo $messageStyling ?>"><?php echo $helloWorldMessage; ?></p>
	<?php endif; ?>    
</div>