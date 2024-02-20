<?php
/**
 * Template Name: About page
 * 
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
        <img class="floating-moon" src="../wp-content/themes/aerospace/img/moon.png" alt="astornaut">
</div>

<?php get_footer(); ?>