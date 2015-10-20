<?php

/**
 * Plugin Name: WordPress plugin boilerplate
 * Plugin URI: https://github.com/frozzare/wp-plugin-boilerplate
 * Description: WordPress plugin boilerplate
 * Author: Fredrik Forsmo
 * Author URI: https://github.com/frozzare
 * Version: 1.0.0
 * Textdomain: wp-plugin-boilerplate
 */

// Load plugin class.
require_once __DIR__ . '/src/class-plugin.php';

/**
 * Boot the plugin.
 */
add_action( 'plugins_loaded', function () {
//  return \Frozzare\Plugin\Boilerplate::instance();
} );
