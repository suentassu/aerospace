<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="content-container">
  
            <h1 class="first-title"><?php echo get_the_title(); ?></h1>
            <span class="date-time-post">
            <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?>
            </span>
            <div class="single-content">
                <?php the_content(); ?>
            </div>

        <div class="posted-category">
            <p class="postmetadata"><?php _e( 'Categories:' ); ?> <?php the_category( ', ' ); ?></p>
            <p><?php the_tags( 'Tags: ',', ' ); ?></p>
        </div>

        <?php comments_template(); ?> 

 </div>


<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>