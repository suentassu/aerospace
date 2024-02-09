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

<?php get_footer(); ?>