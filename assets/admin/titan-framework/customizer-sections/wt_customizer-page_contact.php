<?php
/**
 * Writable Theme Options
 *
 * Customizer Section
 *
 * Section: Contact Page
 *
 * This section contains contact page settings of the theme
 */

// Section Title
$wt_customizer_page_contact = $titan->createThemeCustomizerSection( array(

    'name'  => 'Contact Page',
    'panel' => 'Writable Options'

) );

// Setting up contact page
$wt_customizer_page_contact->createOption( array(

	'type' 		=> 'custom',
	'custom' 	=> '<h2>Setting up Contact Page</h2><p>Go to Page section in the dashboard of WordPress. Add a page with template name: Contact Page.</p>'

) );

// Contact page google map
$wt_customizer_page_contact->createOption( array(

    'id' 	        => 'wt_option_contact_map',
    'type' 	        => 'textarea',

    'name' 	        => 'Embedded Google Map',
    'desc' 	        => 'Enter your code of google map here',

    'livepreview'   => '$("body .wt_contact--map").html(value);'

) );

// Contact address
$wt_customizer_page_contact->createOption( array(

    'id'          => 'wt_option_contact_address',
    'type'        => 'textarea',

    'name'        => 'Contact Address',
    'desc'        => 'Enter your address here',

    'livepreview' => '$("body .wt_contact__address").text(value);'

) );

// Contact number
$wt_customizer_page_contact->createOption( array(

    'id'            => 'wt_option_contact_number',
    'type'          => 'text',

    'name'          => 'Contact Number',
    'desc'          => 'Enter your contact number',

    'livepreview'   => '$("body .wt_contact__number").text(value);'

) );

// Contact email
$wt_customizer_page_contact->createOption( array(

    'id'            => 'wt_option_contact_email',
    'type'          => 'text',

    'name'          => 'Email',
    'desc'          => 'Enter your email here',

    'livepreview'   => '$("body .wt_contact__email").text(value);'


) );

// Contact form short code
$wt_customizer_page_contact->createOption( array(

    'id'        => 'wt_option_contact_shortcode',
    'type'      => 'text',

    'name'      => 'Contact Form Shortcode',
    'desc'      => 'Enter shortcode of your Contact Form 7 here'

) );

// First Office Address check
$wt_customizer_page_contact->createOption( array(

	'id' 		=> 'wt_option_check_first_office',
    'type' 		=> 'enable',

    'name' 		=> 'Other Offices',
    'desc' 		=> 'Select to enable/disable section for other offices contact',

    'enabled' 	=> 'Enable',
    'disabled' 	=> 'Disable',

    'default' 	=> false,

) );

// First office contact heading
$wt_customizer_page_contact->createOption( array(

	'id'            => 'wt_option_first_office_heading',
    'type'          => 'text',

	'name'          => 'First Office',
    'desc'          => 'Enter contact details of your first office here',

    'livepreview'   => '$("body .wt_address--1st .wt_address--name").text(value);'

) );

// First office contact address
$wt_customizer_page_contact->createOption( array(

	'id'            => 'wt_option_first_office_address',
    'type'          => 'text',

	'name'          => 'First Office Address',
    'desc'          => 'Enter contact details of your first office here',

    'livepreview'   => '$("body .wt_address--1st .wt_address").text(value);'

) );

// Second office Address check
$wt_customizer_page_contact->createOption( array(

	'id' 		=> 'wt_option_check_second_office',
    'type' 		=> 'enable',

    'name' 		=> 'Show Second Office',
    'desc' 		=> 'Select to enable/disable section for second office contact',

    'enabled' 	=> 'Enable',
    'disabled' 	=> 'Disable',

    'default' 	=> false,

) );

// Second office contact heading
$wt_customizer_page_contact->createOption( array(

	'id'            => 'wt_option_second_office_heading',
    'type'          => 'text',

	'name'          => 'Second Office',
    'desc'          => 'Enter contact details of your second office here',

    'livepreview'   => '$("body .wt_address--2nd .wt_address--name").text(value);'

) );

// Second office contact address
$wt_customizer_page_contact->createOption( array(

	'id'            => 'wt_option_second_office_address',
    'type'          => 'text',

	'name'          => 'Second Office Address',
    'desc'          => 'Enter contact details of your second office here',

    'livepreview'   => '$("body .wt_address--2nd .wt_address").text(value);'

) );