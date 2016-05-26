<?php get_header(); ?>
<?php get_sidebar(); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php  get_template_part('content', get_post_format() ); ?>
    <?php endwhile; ?>
    <?php truonghien_pagination(); ?>
    <?php else : ?>
    </php  get_template_part( 'content', 'none' )?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>