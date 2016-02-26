<?php
/**
 * Shortcode Initializer
 *
 * Initializes shortcodes of Writable.
 *
 * @since 	1.0.0
 * @package WTC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blockquote shortcode.
 *
 * @since 1.0.0
 */
if ( file_exists( WTC_DIR . '/assets/shortcode/shortcode-blockquote.php' ) ) {
    require_once( WTC_DIR . '/assets/shortcode/shortcode-blockquote.php' );
}

/**
 * Full width image shortcode.
 *
 * @since 1.0.0
 */
if ( file_exists( WTC_DIR . '/assets/shortcode/shortcode-fullimage.php' ) ) {
    require_once( WTC_DIR . '/assets/shortcode/shortcode-fullimage.php' );
}