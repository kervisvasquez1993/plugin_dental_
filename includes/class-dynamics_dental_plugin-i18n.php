<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://kervisvasquez.online
 * @since      1.0.0
 *
 * @package    Dynamics_dental_plugin
 * @subpackage Dynamics_dental_plugin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dynamics_dental_plugin
 * @subpackage Dynamics_dental_plugin/includes
 * @author     Kervis Vasquez <kervisvasquez24@gmail.com>
 */
class Dynamics_dental_plugin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dynamics_dental_plugin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
