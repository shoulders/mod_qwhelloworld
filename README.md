# Hello World Module for Joomla!

This is a ready to go Joomla Module Boilerplate that you can use to build your own modules. I have added all the settings, elements and things I could find.

## What does it do?
This is a module that displays a language sensitive Hello World statement. You can set the language in the module.

## How to use this module
- Install the module.
- Configure the module how you want it, including making sure to publish it and enabling it on a page of your choosing.
- Load the page that has the module configured to display on it.
- You will now see a Hello World message displayed in your chosen language.

## Notes
- When the install mechanism is used, the title for the module comes from **en-GB.mod_qwrealurl.sys.ini / MOD_QWREALURL_NAME="Hello World"**
- The module name is **helloworld**
  - Can be called by **$module->name**
  - Is made from the filename **mod_helloworld.php**, the **mod_** prefix and **.php** file extension are removed.

## Compatibility
mod_helloworld is fully compatible with Joomla versions 3.x (possibly only 3.8+) and 4.x. A few alterations and the plugin will work on earlier versions of Joomla.

## License
mod_helloworld is a Joomla module developed by QuantumWarp and released under the GNU General Public License.

## Learn More
Visit the extension's software page at: https://quantumwarp.com/

## References
I used the following links and resources to build this module.
- https://docs.joomla.org/J3.x:Creating_a_simple_module
- https://docs.joomla.org/J3.x:Developing_an_MVC_Component/Adding_an_install-uninstall-update_script_file
- https://docs.joomla.org/Manifest_files
- https://docs.joomla.org/Standard_form_field_types
- https://docs.joomla.org/Using_own_library_in_your_extensions
- https://joomla.digital-peak.com/images/blog/JWC17_Prepare_you_extension_for_Joomla_4.pdf