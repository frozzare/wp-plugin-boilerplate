<?php

/**
 * Plugin Name: {plugin-name}
 * Plugin URI: https://github.com/{repo}
 * Description: {description}
 * Author: {author}
 * Author URI: {author-url}
 * Version: {version}
 * Textdomain: {textdomain}
 */

// Load plugin class.
require_once __DIR__ . '/src/class-plugin.php';

/**
 * Boot the plugin.
 */
add_action( 'plugins_loaded', function () {
//  return \Frozzare\Conauth\Conauth::instance();
} );
