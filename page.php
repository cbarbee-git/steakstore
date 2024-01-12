<?php get_header(); the_post(); ?>
    <div id="page-content">
        <h1><?php the_title(); ?></h1>
        <?php global $theme_config; ?>
        <?php if ( is_active_sidebar( $theme_config['textdomain'] . 'custom-side-bar' ) ) { ?>
            <div id="content-with-sidebar" class="float-left">
                <?php  the_content(); ?>
            </div>
            <div id="sidebar" class="float-left">
            <?php dynamic_sidebar( $theme_config['textdomain'] . 'custom-side-bar' ); ?>
            </div>
        <?php }else{ ?>
            <div id="content-without-sidebar">
                <?php  the_content(); ?>
            </div>
        <?php } ?>
    </div>
<?php get_footer(); ?>