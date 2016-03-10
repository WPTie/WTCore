<?php
/**
 * Blockquote shortcode
 *
 * Shortcode for the blockquote in WYSIWYG.
 *
 * @since 	1.0.0
 * @package WTC
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * wt_blockquote
 *
 * Shortcode for blockquote [wt_blockquote]
 */
function wt_blockquoteFunction( $atts, $content = null ) {
	return '<blockquote class="wt_content__blockquote"><p>'.$content.'</p></blockquote>';
}
add_shortcode( "wt_blockquote", "wt_blockquoteFunction" );