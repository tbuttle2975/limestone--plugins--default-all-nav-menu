<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mindtrust.com/
 * @since      1.0.0
 *
 * @package    Limestone__Plugins__Default_All_Nav_Menu
 * @subpackage Limestone__Plugins__Default_All_Nav_Menu/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Limestone__Plugins__Default_All_Nav_Menu
 * @subpackage Limestone__Plugins__Default_All_Nav_Menu/includes
 * @author     Mindtrust <asudhikumar@mindtrust.com>
 */
class Limestone__Plugins__Default_All_Nav_Menu_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'limestone--plugins--default-all-nav-menu',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
