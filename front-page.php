<?php
/**
 * Template Name: Front page
 */
get_header();
?>

<div class="content-container">
    <h1 class="first-title"><?php echo get_the_title(); ?></h1>

    <?php the_content(); ?>

</div>




<div class="block-container">
    <div class="image-block">
        <div class="overlay"></div> 
        <img src="<?php the_field('first_image'); ?>" alt="Image 1">
            <!-- Text above the link in the first block -->
            <h2 class="block-text" style="color: <?php the_field('left_side_title_color_picker'); ?>;"><?php the_field('first_title'); ?></h2>
            <!-- Link in the first block -->
            <a href="<?php the_field('first_url'); ?>" class="block-link"><?php the_field('first_link_title'); ?></a>
    </div>

    <div class="image-block">
        <div class="overlay"></div>
        <img src="<?php the_field('second_image'); ?>" alt="Image 2">
        <!-- Text above the link in the second block -->
        <h2 class="block-text" style="color: <?php the_field('right_side_title_color_picker'); ?>;"><?php the_field('second_title'); ?></h2>
        <!-- Link in the second block -->
        <a href="<?php the_field('second_url'); ?>" class="block-link"><?php the_field('second_link_title'); ?></a>
    </div>
</div>

<?php get_footer(); ?>
