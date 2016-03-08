<?php
/**
 * Writable Theme Options
 *
 * Customizer Section
 *
 * Section: Page
 *
 * This section contains page settings of the theme
 * 
 */

$wt_customizer_page = $titan->createThemeCustomizerSection( array(

    'name' => 'Page Options',
    'panel' => 'Writable Options',

) );

// page author box check
$wt_customizer_page->createOption( array(

    'id'        => 'wt_option_check_page_authBox',
    'type'      => 'enable',

    'name'      => 'Show Author Box',
    'desc'      => 'Select to display author box',

    'enabled'   => 'Enable',
    'disabled'  => 'Disable',

    'default'   => true,

) );