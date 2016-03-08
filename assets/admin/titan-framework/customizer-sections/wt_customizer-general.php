<?php
/**
 * Writable Theme Options
 *
 * Customizer Section
 *
 * Section: General
 *
 * This section contains general settings of the theme
 * 
 */

$wt_customizer_general = $titan->createThemeCustomizerSection( array(

    'name' => 'General Settings',
    'panel' => 'Writable Options',

) );

// Primary Color
$wt_customizer_general->createOption( array(

    'id'        => 'wt_option_color_primary',
    'type'      => 'color',

    'name'      => 'Primary Color',
    'desc'      => 'Select primary color for your theme',

    'default'   => '#03A9F4',
    
) );

// Primary Color
$wt_customizer_general->createOption( array(

    'id'        => 'wt_option_color_bg',
    'type'      => 'color',

    'name'      => 'Background Color',
    'desc'      => 'Select background color for your theme',

    'default'   => '#E7F0FA',
    
) );

// Check to select site title or logo
$wt_customizer_general->createOption( array(

    'id' 		=> 'wt_check_logo',
    'type' 		=> 'enable',

    'name' 		=> 'Logo/Site Title',
    'desc' 		=> 'Select to display logo or site title in the header of theme. Site title can be edited from Site Identity section of customizer.',

    'enabled' 	=> 'Site Title',
    'disabled' 	=> 'Logo',

    'default' 	=> true,
    
) );

// Logo of theme
$wt_customizer_general->createOption( array(

    'id' 			=> 'wt_logo',
    'type' 			=> 'upload',

    'name' 			=> 'Site Logo',
    'desc' 			=> 'Upload your logo',

    'placeholder' 	=> 'Logo',

) );

// Creating CSS for primary color
$titan->createCSS( '

    .wt_nav--link a:hover { color: $wt_option_color_primary !important; }
    .wt_nav--span_icon::before { background-color: $wt_option_color_primary !important; }
    .wt_nav--span_icon::after { background-color: $wt_option_color_primary !important; }
    .wt_content .wt_content___second h1,
    .wt_content .wt_content___second h2,
    .wt_content .wt_content___second h3,
    .wt_content .wt_content___second h4,
    .wt_content .wt_content___second h5,
    .wt_content .wt_content___second h6, { color: $wt_option_color_primary !important; }
    .wt_content .wt_content___second blockquote p { border-left: 4px solid $wt_option_color_primary; }
    .wt_content .wt_content___second .wt_content__blockquote p { border-left: 2rem solid $wt_option_color_primary; }
    .wt_priMenu--list a { color: $wt_option_color_primary !important; }
    .wpcf7-submit { background-color: $wt_option_color_primary !important; }
    .wt_contactForm--button { background-color: $wt_option_color_primary !important; }
    .wt_search--input {
        &::-webkit-input-placeholder {
            color: $wt_option_color_primary !important;
        }

        &:-moz-placeholder { /* Firefox 18- */
            color: $wt_option_color_primary !important;
        }

        &::-moz-placeholder {  /* Firefox 19+ */
            color: $wt_option_color_primary !important;
        }

        &:-ms-input-placeholder {
            color: $wt_option_color_primary !important;
        }
    }

' );