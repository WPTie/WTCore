<?php
/**
 * Writable Theme Options
 *
 * Single Page Metabox
 *
 * This tab contains metabox settings of the theme
 *
 */

// initialization of the single page metabox
$wt_page_metaBox = $titan->createMetaBox( array(

    'name' => 'Page Styles',

    'post_type' => 'page',

) );

// page layout option
$wt_page_metaBox->createOption( array(

	'id' 		=> 'wt_option_pageLayout',
	'type' 		=> 'radio',

	'name' 		=> 'Select Page Layout',
	'desc' 		=> 'Select your page layout. By default, left page layout is selected.',
    
    'options' 	=> array(
        '1' 	=> 'Left Layout',
        '2' 	=> 'Right Layout',
        '3' 	=> 'Full Layout',
    ),
    'default' 	=> '1',

) );