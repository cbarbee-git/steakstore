<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

//theme styles
function theme_enqueue_styles() {
    wp_enqueue_style( 'steakstore_theme_style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//theme scripts
function theme_enqueue_scripts() {
    global $theme_config;
    if ( ! empty( $theme_config['enqueue_scripts'] ) ) {
        foreach( $theme_config['enqueue_scripts'] as $script ){
            $handle = isset($script['handle']) ? $script['handle'] : '';
            $src = isset($script['src']) ? $script['src'] : '';
            $deps = isset($script['deps']) ? $script['deps'] : array();
            $version = isset($script['version']) ? $script['version'] : null;
            $in_footer = isset($script['in_footer']) ? $script['in_footer'] : false;
            wp_enqueue_script(
                $handle,
                $src,
                $deps,
                $version,
                $in_footer
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

// Register navigation menus assigned in theme.config.php
if ( ! empty( $theme_config['nav_menus'] ) ) {
    register_nav_menus( $theme_config['nav_menus'] );
}

// add fonts defined in theme.config.php
function steakstore_action_enqueue_custom_styles() {
    global $theme_config;
    if ( ! empty( $theme_config['google_fonts'] ) ) {
        $google_font_path = str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=' . implode( '|', $theme_config['google_fonts'] ) );
        wp_enqueue_style( 'google-fonts', $google_font_path );
    }
}
add_action( 'wp_enqueue_scripts', 'steakstore_action_enqueue_custom_styles', 11 );

function steakstore_remove_json_api() {
    //clean up head
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'rsd_link' );
    remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'index_rel_link' );
    remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action( 'wp_head', 'wp_generator' );
    remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
}
add_action( 'after_setup_theme', 'steakstore_remove_json_api' );
?>