<?php
/**
 * Customizer Options Initializer
 *
 * Creating customizer options via Titan Framework.
 *
 * @since   1.0.0
 * @package WTC
 */

/**
 * tf_create_options is the hook used to create options.
 */
add_action( 'tf_create_options', 'wt_customizer_options' );

function wt_customizer_options() {

	// Initialize Titan with your theme name
    $titan = TitanFramework::getInstance( 'Writable' );
    
    /**
     * Section: General.
     *
     * @since 1.0.0
     */
    if ( file_exists( WTC_DIR . '/assets/admin/titan-framework/customizer-sections/wt_customizer-general.php') ) {
	    require_once( WTC_DIR . '/assets/admin/titan-framework/customizer-sections/wt_customizer-general.php' );
	}

	/**
     * Section: Home.
     *
     * @since 1.0.0
     */
    if ( file_exists( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-home.php') ) { 
	    require_once( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-home.php' );
	}

	/**
     * Section: Post/Page.
     *
     * @since 1.0.0
     */
    if ( file_exists( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-post_page.php') ) { 
	    require_once( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-post_page.php' );
	}

	/**
     * Section: Contact Page.
     *
     * @since 1.0.0
     */
    if ( file_exists( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-page_contact.php') ) {
	    require_once( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-page_contact.php' );
	}

	/**
     * Section: Social Link.
     *
     * @since 1.0.0
     */
    if ( file_exists( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-social.php') ) {
	    require_once( WTC_DIR .'/assets/admin/titan-framework/customizer-sections/wt_customizer-social.php' );
	}

}
