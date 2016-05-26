<?php get_header(); ?>
<?php 
    while ( have_posts() : the_post();
    get_template_part('template-parts/content',get_post_format());
    the_post_navigation();
?>
<?php
get_sidebar();
get_footer();