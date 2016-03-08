<?php
/**
 * Framework Initializer
 *
 * This file adds titan framework to the theme.
 *
 * @since 	1.0.0
 * @package WTC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Framework Metabox Options.
 *
 * @since 1.0.0
 */
if ( file_exists( WTC_DIR . '/assets/admin/titan-framework/metabox-options-init.php' ) ) {
    require_once( WTC_DIR . '/assets/admin/titan-framework/metabox-options-init.php' );
}

/**
 * Framework Customizer Options.
 *
 * @since 1.0.0
 */
if ( file_exists( WTC_DIR . '/assets/admin/titan-framework/customizer-options-init.php' ) ) {
    require_once( WTC_DIR . '/assets/admin/titan-framework/customizer-options-init.php' );
}
