<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function steakstore_list_child_pages($atts = [], $content = null, $tag = '') { 
    global $post;
    if ( isset( $atts['page_id'] ) ) {
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $atts['page_id'] . '&echo=0' ); 
    }else{
        if ( is_page() && $post->post_parent ){
            $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
        }else{
            $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' ); 
        }
    } 
    if ( $childpages ) {
        $string = '<ul class="steakstore_page_list">' . $childpages . '</ul>';
    }
   return $string; 
}
add_shortcode('steakstore_childpages', 'steakstore_list_child_pages');

?>