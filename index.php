<?php
get_header();
?>

<div class="post-section">
    <div class="post-title">
        
        <h1 class="first-title"><?php echo the_archive_title(); ?></h1>
    </div>
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-container">
            <div class="post-info-image">
                <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                   <?php
                }
                else{ ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-astronaut.jpg" alt="">
                <?php
                }?>
            </div>
            
            <div class="post-info-text">
                <h3 class="first-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                
                <span class="date-time">
            <?php the_time('F jS, Y'); ?> by&nbsp;<?php  the_author_posts_link(); ?>
            </span>
                <?php echo get_the_excerpt(); ?>
            </div>

        </div>
    <?php endwhile; else : ?>
	    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<?php numeric_posts_nav(); ?>

</div>




<?php
get_footer();
?>