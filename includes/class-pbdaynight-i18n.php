<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/DenysHnatiuk
 * @since      1.0.0
 *
 * @package    Pbdaynight
 * @subpackage Pbdaynight/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pbdaynight
 * @subpackage Pbdaynight/includes
 * @author     Den Hnatiuk <denhnatiuk@protonmail.com>
 */
class Pbdaynight_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pbdaynight',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
