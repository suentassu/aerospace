<?php
/**
 * Template Name: About page 
 * 
 * @package AeroSpace
 */

get_header();
?>

<div class="content-container">
        <h1 class="first-title"><?php echo get_the_title(); ?></h1>
                <?php
                the_content();
                ?>
</div>

<div class="moon-container">
        <img class="floating-moon" src="<?php the_field('floating_moon'); ?>" alt="astornaut">
</div>

<?php get_footer(); ?>