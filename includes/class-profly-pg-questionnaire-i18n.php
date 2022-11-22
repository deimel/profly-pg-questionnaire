<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://profly/deimel
 * @since      1.0.0
 *
 * @package    Profly_Pg_Questionnaire
 * @subpackage Profly_Pg_Questionnaire/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Profly_Pg_Questionnaire
 * @subpackage Profly_Pg_Questionnaire/includes
 * @author     Augustinus Deimel <Augustinus.Deimel@t-online.de>
 */
class Profly_Pg_Questionnaire_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'profly-pg-questionnaire',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
