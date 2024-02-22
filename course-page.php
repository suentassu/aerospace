<?php
/**
 * Template Name: Course page
 * 
 */

get_header();
?>
<div class="course-page-inner-section">
        <h1 class="course-title">Course name</h1>
        <div class="course-difficulty-bar">
               <p>Difficulty :</p> 
        </div>
        <div class="course-content-area">
                <div class="course-area">
                        <!--    
                                Content area needs to be able to display
                                videos and PDF-files, videos need to keep
                                a 16:9 resolution and PDF-files need to keep
                                a A4 resolution or 9:16 resolution
                        -->
                        <div class="course-content"></div>
                        <div class="course-content-list"></div>
                </div>
                <div class="course-description-area">
                        <div class="about-this">
                                <p>About this model</p>
                        </div>
                        <hr class="solid-divider">
                        <div class="course-description"></div>
                </div>
                <div class="other-courses-area"></div>
        </div>
</div>

<?php get_footer(); ?>