<?php
/**
 * WT Core Main File
 *
 * This is the main file of WTC which controls everything in this plugin.
 *
 * @package WTC
 * @since 	1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Titan Framework Embedder.
 *
 * @since 1.0.0
 */
if ( file_exists( WTC_DIR . '/assets/admin/titan-framework/framework/titan-framework-embedder.php' ) ) {
    require_once( WTC_DIR . '/assets/admin/titan-framework/framework/titan-framework-embedder.php' );
}

/**
 * Framework admin initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( WTC_DIR . '/assets/admin/admin-init.php' ) ) {
    require_once( WTC_DIR . '/assets/admin/admin-init.php' );
}

/**
 * Shortcodes initializer.
 *
 * @since 1.0.0
 */
if ( file_exists( WTC_DIR . '/assets/shortcode/shortcode-init.php' ) ) {
    require_once( WTC_DIR . '/assets/shortcode/shortcode-init.php' );
}