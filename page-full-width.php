<?php
/*
*
Template Name: Full-Width
*/
?>
<?php get_header(); the_post(); ?>
    <div id="page-content">
        <h1><?php the_title(); ?></h1>
            <div id="content-without-sidebar">
                <?php the_content(); ?>
            </div>
    </div>
<?php get_footer(); ?>