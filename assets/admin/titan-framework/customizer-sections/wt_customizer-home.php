<?php
/**
 * Writable Theme Options
 *
 * Customizer Section
 *
 * Section: Home
 *
 * This section contains home settings of the theme
 * 
 */

$wt_customizer_home = $titan->createThemeCustomizerSection( array(

    'name' => 'Home Page',
    'panel' => 'Writable Options',

) );

// Gravatar Link
$wt_customizer_home->createOption( array(

    'type' => 'custom',
    'custom' => '<h2>Gravatar</h2><p>Set your gravatar <a href="https://en.gravatar.com/" target="_blank">here</a>. It will be shown in the author box.</p>'

) );

// Author box check
$wt_customizer_home->createOption( array(

    'id'        => 'wt_check_home_authBox',
    'type'      => 'enable',

    'name'      => 'Show Author Box',
    'desc'      => 'Select to display author box',

    'enabled'   => 'Enable',
    'disabled'  => 'Disable',

    'default'   => true

) );

// Author box size
$wt_customizer_home->createOption( array(

    'id'        => 'wt_check_home_authBox_size',
    'type'      => 'enable',

    'name'      => 'Select Author Box Size',
    'desc'      => 'Choose the size of author box',

    'enabled'   => 'Normal',
    'disabled'  => 'Fullscreen',

    'default'   => true

) );

// Home page layout
$wt_customizer_home->createOption( array(

    'id'        => 'wt_home_layout',
    'type'      => 'radio-image',
    
    'name'      => 'Home Page Layout',

    'options'   => array(

        '1'     => get_template_directory_uri() . '/assets/img/home-previews/home-1.jpg',
        '2'     => get_template_directory_uri() . '/assets/img/home-previews/home-2.jpg',

    ),
    'default'   => '1'

) );

