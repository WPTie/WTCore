<?php
/**
 * Writable Theme Options
 *
 * Single Page Metabox
 *
 * This tab contains metabox settings of the theme
 *
 */

// Post Hightlight Metabox
$wt_single_metaBox_highlight = $titan->createMetaBox( array(

    'name' => 'Post Options',

    'post_type' => 'post'

) );

// Post Hightlight Metabox Textarea
$wt_single_metaBox_highlight->createOption( array(

	'id' 		=> 'wt_option_postDescription',
	'type' 		=> 'textarea',

	'name' 		=> 'Post Hightlight',
	'desc' 		=> 'Enter highlights of your post here'

) );

// Post Hightlight Metabox
$wt_single_metaBox_styles = $titan->createMetaBox( array(

    'name' => 'Post Styles',

    'post_type' => 'post'

) );

// Excerpt BG
$wt_single_metaBox_styles->createOption( array(

    'id' 		=> 'wt_option_excerptBG',
	'type' 		=> 'color',

	'name' 		=> 'Hightlight Background',
	'desc' 		=> 'Select background color for post highlight',
    
    'default' 	=> '#03A9F4'

) );

// page layout option
$wt_single_metaBox_styles->createOption( array(

	'id' 		=> 'wt_option_postLayout',
	'type' 		=> 'radio',

	'name' 		=> 'Select Post Layout',
	'desc' 		=> 'Select layout for your post. By default, left layout is selected.',
    
    'options' 	=> array(
        '1' 	=> 'Left Layout',
        '2' 	=> 'Right Layout',
        '3' 	=> 'Full Layout',
    ),
    'default' 	=> '1'

) );