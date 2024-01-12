<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_post_type_support( 'page', 'excerpt' );

function steakstore_theme_custom_sidebar() {
    global $theme_config;
    register_sidebar(
        array (
            'name' => __( 'Custom', $theme_config['textdomain'] ),
            'id' => $theme_config['textdomain'] . 'custom-side-bar',
            'description' => __( 'Custom Sidebar', $theme_config['textdomain'] ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class=”widget-title”>',
            'after_title' => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'steakstore_theme_custom_sidebar' );

function steakstore_menu_css_class($css_class, $page){
    $css_class[] = "nav_" . $page->post_name;
    return $css_class;
}
add_filter("page_css_class", "steakstore_menu_css_class", 10, 2);

function steakstore_add_meta_tags() {
    global $post;
    if ( is_home() || is_front_page() ) {
        echo '<meta name="description" content="' . get_bloginfo( "description" ) . '" />' . "\n";
        return;
    }
    if ( is_singular() ) {
        $des_post = strip_tags( $post->post_content );
        $des_post = strip_shortcodes( $post->post_content );
        $des_post = str_replace( array("\n", "\r", "\t"), ' ', $des_post );
        $des_post = mb_substr( $des_post, 0, 300, 'utf8' );
        echo '<meta name="description" content="' . $des_post . '" />' . "\n";
        return;
    }
    if ( is_category() ) {
        $des_cat = strip_tags(category_description());
        echo '<meta name="description" content="' . $des_cat . '" />' . "\n";
        return;
    }
}
add_action( 'wp_head', 'steakstore_add_meta_tags');

?>