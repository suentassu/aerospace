<?php
/**
 * Template Name: Front page
 * 
 */
get_header();
?>

<div class="content-container front-page">
    <h1 class="first-title"><?php echo get_the_title(); ?></h1>
    <?php the_content(); ?>
</div>

<body>
    <div class="container">
        <div class="block">
            <!-- Placeholder image in the first block -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/astronaut-11080_1280.jpg" alt="Image 1">
            <!-- Text above the link in the first block -->
            <p class="block-text">Heading for this item</p>
            <!-- Link in the first block -->
            <a href="#" class="block-link">Get Started</a>
        </div>
        <div class="block">
            <!-- Placeholder image in the second block -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/space-station-60615_1280.jpg" alt="Image 2">
            <!-- Text above the link in the second block -->
            <p class="block-text">Heading for this item</p>
            <!-- Link in the second block -->
            <a href="#" class="block-link">Get Started</a>
        </div>
    </div>
    <?php get_footer(); ?>
