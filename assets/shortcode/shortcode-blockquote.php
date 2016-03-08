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
 * Theme Options
 * 
 * Getting single post options.
 *
 * @since  1.0.0
 */

// Initialize Titan with your theme name.
if ( class_exists( 'TitanFramework' ) ) {
	$wt_titan = TitanFramework::getInstance( 'Writable' );
}


$wt_single_pageLayout = $wt_titan->getOption( 'wt_option_postLayout' );

/**
 * wt_blockquote
 *
 * Shortcode for blockquote [wt_blockquote]
 */
function wt_blockquoteFunction( $atts, $content = null ) {
	if ( 1 == $wt_single_pageLayout ) {
	    return '<blockquote class="wt_content__blockquote"><p>'.$content.'</p></blockquote>';
	} else {
		return '<blockquote><p>'.$content.'</p></blockquote>';
	}
}
add_shortcode( "wt_blockquote", "wt_blockquoteFunction" );