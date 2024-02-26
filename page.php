<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<section class="full-width-text-area">
    <div class="container">
        <div class="full-width-text">
             <h1><?php echo get_the_title(); ?></h1>
            <?php the_content(); ?></div>
    </div>
</section>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>