<?php
/**
 * Template Name: Courses Page
 * 
 * @package AeroSpace
 */
get_header();
?>
    <div class="courses-section-inner">
        <h1 style="text-align: center;"> Courses </h1>
        <div class="astronaut-div">
            <img class="floating-astronaut" src="../wp-content/themes/aerospace/img/astronaut-flipped.png" alt="astornaut">
        </div>
        <!-- EACH COURSE WILL HAVE THEIR OWN IMAGES -->
        <div class="courses-row">
            <div class="course-container">
                <img class="course-image" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>   
                <div class="course-overlay">
                    <div class="course-title">
                        <p class="course-name"><a href="#">Course Name</a></p>
                    </div>
                </div>
            </div>
            <div class="course-container">
                <img class="course-image" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>   
                <div class="course-overlay">
                    <div class="course-title">
                            <p class="course-name"><a href="#">Course Name</a></p>
                    </div>
                </div>
            </div>
            <div class="course-container">
                <img class="course-image" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>   
                <div class="course-overlay">
                    <div class="course-title">
                            <p class="course-name"><a href="#">Course Name</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
get_footer();
?>

