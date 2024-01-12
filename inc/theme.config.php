<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$theme_config = array();

$theme_config['textdomain'] = 'steakstore';

$theme_config['theme_includes'] = array(
            'theme.functions.php',
            'theme.actions.php',
            'theme.filters.php',
            'theme.shortcodes.php',
        );

$theme_config['nav_menus'] = array(
            'main-menu'     => __( 'Main Menu', $theme_config['textdomain'] ),
            'footer-menu'   => __( 'Footer Menu', $theme_config['textdomain'] )
        );

$theme_config['google_fonts'] = array(
        'Open+Sans:300,300italic,400,400italic,600,600italic,700italic,700,800,800italic',
        'Vast Shadow',
        'Golos Text'
        //'Roboto'
        );

$theme_config['enqueue_scripts'] = array(
    array( 'handle' => 'steakstore-jquery', 'src' => THEME_ASSETS_URI . '/js/jquery-3.7.1.min.js', 'deps' => array( ), 'version' => null, 'in_footer' => false ),
    array( 'handle' => 'steakstore-awesome-cursor', 'src' => THEME_ASSETS_URI . '/js/jquery.awesome-cursor.min.js', 'deps' => array( ), 'version' => null, 'in_footer' => false ),
);

return $theme_config;

?>