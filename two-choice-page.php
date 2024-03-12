<?php
/**
 * Template Name: Two Choices page 
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

    <div class="courses-section-inner two-choice-section">

        <div class="astronaut-div">
            <img class="floating-astronaut" src="<?php the_field('floating_img'); ?>" alt="astornaut">
        </div>
        
        <!-- COURSES-SECTION -->
        <div class="courses-row">
            <div class="course-container">
                <img class="course-image" src="<?php the_field('course_one_img'); ?>"/>   
                <div class="course-overlay">
                    <div class="course-title">
                        <p class="course-name"><a href="<?php the_field('course_one_url'); ?>"><?php the_field('course_one_name'); ?></a></p>
                    </div>
                </div>
            </div>
            <div class="course-container">
                <img class="course-image" src="<?php the_field('course_two_img'); ?>"/>   
                <div class="course-overlay">
                    <div class="course-title">
                            <p class="course-name"><a href="<?php the_field('course_two_url'); ?>"><?php the_field('course_two_name'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
get_footer();
?>

