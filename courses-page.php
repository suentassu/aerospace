<?php
/**
 * Template Name: Courses Page
 * 
 * @package AeroSpace
 */
get_header();
?>
    <div class="back-button">
        <a href="here will be a link to an earlier page" title="Back">Back</a>
    </div>
    <div class="courses-section-inner">
        <h1 style="text-align: center;"> Courses </h1>
        <div class="astronaut-div">
            <img class="floating-astronaut" src="../wp-content/themes/aerospace/img/astronaut-flipped.png" alt="astornaut">
        </div>
        <div class="courses-row">
            <div class="course">
                <div class="course-overlay">     
                    <div class="title-bar">
                        <p class="course-title">Course name</p>
                    </div>
                </div>
            </div>
            <div class="course">
                <div class="title-bar">
                    <p class="course-title">Course name</p>
                </div>
            </div>
            <div class="course">
                <div class="title-bar">
                    <p class="course-title">Course name</p>
                </div>
            </div>
        </div>
    </div>

<?php 
get_footer();
?>

