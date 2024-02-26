<?php
get_header();
?>




<section class="post-section">
     <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-container">
            <div class="post-info-image">
                <?php 
                if ( has_post_thumbnail() ) { ?>
                   <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                   <?php
                }else{ ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/footer-astronaut.jpg" alt="">
                <?php
                }?>
            </div>
            
            <div class="post-info-text">
                <h3><a class="normal-link-text" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                <?php echo get_the_excerpt(); ?>
            </div>
        </div>
    <?php endwhile; else : ?>
	    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</section>


<?php
get_footer();
?>