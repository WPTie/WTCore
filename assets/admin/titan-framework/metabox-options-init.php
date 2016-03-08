<?php
/**
 * Metabox Initializer
 *
 * Creating metaboxes via Titan Framework.
 *
 * @since   1.0.0
 * @package WTC
 */

/**
 * tf_create_options is the hook used to create options.
 */
add_action( 'tf_create_options', 'wt_metabox_options' );

function wt_metabox_options() {

	// Initialize Titan with your theme name
    $titan = TitanFramework::getInstance( 'Writable' );

    /**
     * Metabox: Posts.
     *
     * @since 1.0.0
     */
    if ( file_exists( WTC_DIR . '/assets/admin/titan-framework/metabox-options/wt_metabox-single.php' ) ) {   
        include_once( WTC_DIR . '/assets/admin/titan-framework/metabox-options/wt_metabox-single.php' );
    }

    /**
     * Metabox: Pages.
     *
     * @since 1.0.0
     */
    if ( file_exists( WTC_DIR . '/assets/admin/titan-framework/metabox-options/wt_metabox-page.php' ) ) {
        include_once( WTC_DIR . '/assets/admin/titan-framework/metabox-options/wt_metabox-page.php' );
    }

}