<?php
/**
 * Full width image shortcode
 *
 * Shortcode for the full width image.
 *
 * @since 	1.0.0
 * @package WTC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * wt_fullWidth
 *
 * Shortcode for full width content [wt_fullWidth]
 */
function wt_content_fullWidth( $atts, $content = null ) {
    return '<div class="wt_content__img_fullWidth">'.$content.'</div>';
}
add_shortcode( "wt_fullWidth", "wt_content_fullWidth" );