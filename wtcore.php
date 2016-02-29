<?php
/**
 * Plugin Name: Writable Core
 * Plugin URI: http://wptie.com/
 * Description: A plugin for writable theme.
 * Author: WPTie
 * Author URI: http://wptie.com/
 * Version: 1.0.0
 * License: GPL v2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package WTC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define global constants
 *
 * @package WTC
 * @since 1.0.0
 */

// WTC Version.
if ( ! defined( 'WTC_VERSION' ) ) {
    define( 'WTC_VERSION', '1.0.0' );
}

// WTC Name.
if ( ! defined( 'WTC_NAME' ) ) {
    define( 'WTC_NAME', trim( dirname( plugin_basename( __FILE__ ) ), '/' ) );
}

// WTC Dir.
if ( ! defined('WTC_DIR' ) ) {
    define( 'WTC_DIR', WP_PLUGIN_DIR . '/' . WTC_NAME );
}

// WTC URL.
if ( ! defined('WTC_URL' ) ) {
    define( 'WTC_URL', WP_PLUGIN_URL . '/' . WTC_NAME );
}

/**
 * WTC Main File
 *
 * This is the main file of WTC which controls everything in this plugin
 *
 * @since 0.0.1
 */
if ( file_exists( WTC_DIR . '/assets/wtc-init.php' ) ) {
    require_once( WTC_DIR . '/assets/wtc-init.php' );
}