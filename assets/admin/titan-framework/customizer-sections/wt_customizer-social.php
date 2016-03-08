<?php
/**
 * Writable Theme Options
 *
 * Customizer Section
 *
 * Section: Social Links
 *
 * This section contains home settings of the theme
 * 
 */

$wt_customizer_social = $titan->createThemeCustomizerSection( array(

    'name' => 'Social Links',
    'panel' => 'Writable Options'

) );

// facebook link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_fb', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Facebook:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Facebook URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.facebook.com'

) );

// twitter link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_tw', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Twitter:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Twitter URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.twitter.com'

) );

// google plus link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_ggl', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Google Plus:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Google+ URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'plus.google.com'

) );

// linkedin link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_ln', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'LinkedIn:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter LinkedIn URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.linkedin.com'

) );

// instagram link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_ins', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Instagram:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Instagram URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.instagram.com'

) );

// youtube link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_yt', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'YouTube:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter YouTube URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.youtube.com'

) );

// github link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_gh', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'GitHub:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter GitHub URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.github.com'

) );

// skype link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_sk', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Skype:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Skype URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.skype.com'

) );

// vimeo link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_vm', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Vimeo:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Vimeo URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.vimeo.com'

) );

// dribble link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_dr', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Dribble:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Dribble URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.dribble.com'

) );

// behance link
$wt_customizer_social->createOption( array(

    'id'            => 'wt_social_bh', // The ID which will be used to get the value of this option
    'type'          => 'text', // Type of option we are creating

    'name'          => 'Behance:', // Name of the option which will be displayed in the admin panel
    'desc'          => 'Enter Behance URL', // Description of the option which will be displayed in the admin panel

    'placeholder'   => 'www.behance.com'

) );