<?php
/**
 * Writable Theme Options
 *
 * Customizer Section
 *
 * Section: Post/Page
 *
 * This section contains single page settings of the theme
 * 
 */

$wt_customizer_single = $titan->createThemeCustomizerSection( array(

    'name' => 'Post/Page Options',
    'panel' => 'Writable Options',

) );

// Show categories check
$wt_customizer_single->createOption( array(

    'id'        => 'wt_option_post_catCheck',
    'type'      => 'enable',

    'name'      => 'Show Categories',
    'desc'      => 'Select to enable/disable categories at the end of the post. It is enabled by default.',

    'enabled'   => 'Enable',
    'disabled'  => 'Disable',

    'default'   => true

) );

// Show tags check
$wt_customizer_single->createOption( array(

    'id'        => 'wt_option_post_tagCheck',
    'type'      => 'enable',

    'name'      => 'Show Tags',
    'desc'      => 'Select to enable/disable tags at the end of the post. It is enabled by default.',

    'enabled'   => 'Enable',
    'disabled'  => 'Disable',

    'default'   => true

) );

// Show author box
$wt_customizer_single->createOption( array(

    'id'        => 'wt_option_post_authBoxCheck',
    'type'      => 'enable',

    'name'      => 'Show Author Box',
    'desc'      => 'Select to enable/disable author box on posts/pages. It is enabled by default.',

    'enabled'   => 'Enable',
    'disabled'  => 'Disable',

    'default'   => true

) );

// Show similar posts
$wt_customizer_single->createOption( array(

    'id'        => 'wt_option_single_similarPostsCheck',
    'type'      => 'enable',

    'name'      => 'Show Similar Posts',
    'desc'      => 'Select to enable/disable similar posts on posts. It is enabled by default.',

    'enabled'   => 'Enable',
    'disabled'  => 'Disable',

    'default'   => true

) );

// Comments Template
$wt_customizer_single->createOption( array(

    'id'        => 'wt_option_commentsLayout',
    'type'      => 'radio',

    'name'      => 'Comments Template',
    'desc'      => 'Select post comments template. By default, dark template is selected.',
    
    'options'   => array(
        '1'     => 'Dark',
        '2'     => 'Light'
    ),
    'default'   => '1'

) );