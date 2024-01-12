<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> | <?php is_front_page() || is_home() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo(THEME_ASSETS_URI); ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo(THEME_ASSETS_URI); ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo(THEME_ASSETS_URI); ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo(THEME_ASSETS_URI); ?>/img/site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?>>

<section id="header">
    <a aria-label="Mobile Menu Expand" href="#" id="nav-expand">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        <!--</div>-->
    </a>
    <div id="logo-container">
        <a href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>" id="logo">
            <img width="207" height="178" src="<?php echo THEME_ASSETS_URI; ?>/img/logo.webp" alt="<?php bloginfo('title'); ?> - logo" title="<?php bloginfo('title'); ?>" >
        </a>
    </div>

    <?php if ( has_nav_menu( 'main-menu' ) ) : ?>
    <?php wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul id="main-menu">%3$s<li class="phone"><a class="phone-cursor" href="tel:'.str_replace('.','-',get_field('phone_number', 'option')).'">'. get_field('phone_number', 'option') .'</a></li></ul>', 'theme_location' => 'main-menu' ) ); ?>
    <?php endif; ?>
</section>