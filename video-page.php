<?php

/**
 * Template Name: video page
 *
 */

get_header();
?>
<div class="content-container">
    <h1 class="first-title"><?php echo get_the_title(); ?></h1>
    <?php the_content(); ?>
                        
                        <?php
                        // Get the title value
                        $first_slider_title = get_field('first_slider_title');
                        // Output the title
                        if ($first_slider_title) {
                                echo '<div class="other-courses-title centered">' . $first_slider_title. '</div>';
                        } else {
                        echo '<div class="other-courses-title centered">Course title</div>';
                        }
                ?>

        <div class="course-content-area">
            <div id="carousel">
                <div class="slider">
                    <div class="slides">
                <div class="swiffy-slider slider-item-show1 slider-item-ratio slider-item-ratio-4x3 slider-nav-round slider-nav-outside-expand slider-nav-visible slider-indicators-round slider-item-helper">
                    <ul class="slider-container">
                        <li>
                            <div id="slide1">
                                <a class="corousel-link" href="<?php the_field('first_course_slide_one_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('first_course_slide_one_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('first_course_slide_one_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide2">
                                <a class="corousel-link" href="<?php the_field('first_course_slide_two_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('first_course_slide_two_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('first_course_slide_two_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide3">
                                <a class="corousel-link" href="<?php the_field('first_course_slide_three_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('first_course_slide_three_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('first_course_slide_three_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide4">
                                <a class="corousel-link" href="<?php the_field('first_course_slide_four_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('first_course_slide_four_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('first_course_slide_four_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide5">
                                <a class="corousel-link" href="<?php the_field('first_course_slide_five_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('first_course_slide_five_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('first_course_slide_five_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide6">
                                <a class="corousel-link" href="<?php the_field('first_course_slide_six_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('first_course_slide_six_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('first_course_slide_six_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <span class="slider-nav"></span>
                    <span class="slider-nav slider-nav-next"></span>
                </div>
                    </div>
                </div>
            </div>
        </div>


          <!-- Second corousel -->

                                <?php
                        // Get the title value
                        $second_slider_title = get_field('second_slider_title');
                        // Output the title
                        if ($second_slider_title) {
                                echo '<div class="other-courses-title centered">' . $second_slider_title. '</div>';
                        } else {
                        echo '<div class="other-courses-title centered">Course title</div>';
                        }
                ?>

        <div class="course-content-area">
            <div id="carousel">
                <div class="swiffy-slider slider-item-show1 slider-item-ratio slider-item-ratio-4x3 slider-nav-round slider-nav-outside-expand slider-nav-visible slider-indicators-round slider-item-helper">
                    <ul class="slider-container">
                        <li>
                            <div id="slide1">
                                <a class="corousel-link" href="<?php the_field('second_course_slide_one_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('second_course_slide_one_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('second_course_slide_one_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide2">
                                <a class="corousel-link" href="<?php the_field('second_course_slide_two_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('second_course_slide_two_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('second_course_slide_two_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide3">
                                <a class="corousel-link" href="<?php the_field('second_course_slide_three_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('second_course_slide_three_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('second_course_slide_three_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide4">
                                <a class="corousel-link" href="<?php the_field('second_course_slide_four_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('second_course_slide_four_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('second_course_slide_four_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide5">
                                <a class="corousel-link" href="<?php the_field('second_course_slide_five_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('second_course_slide_five_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('second_course_slide_five_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide6">
                                <a class="corousel-link" href="<?php the_field('second_course_slide_six_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('second_course_slide_six_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('second_course_slide_six_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <span class="slider-nav"></span>
                    <span class="slider-nav slider-nav-next"></span>
                </div>
            </div>
        </div>

        <!-- Third corousel -->

                                <?php
                        // Get the title value
                        $third_slider_title = get_field('third_slider_title');
                        // Output the title
                        if ($third_slider_title) {
                                echo '<div class="other-courses-title centered">' . $third_slider_title. '</div>';
                        } else {
                        echo '<div class="other-courses-title centered">Course title</div>';
                        }
                ?>

        <div class="course-content-area">
            <div id="carousel">
                <div class="swiffy-slider slider-item-show1 slider-item-ratio slider-item-ratio-4x3 slider-nav-round slider-nav-outside-expand slider-nav-visible slider-indicators-round slider-item-helper">
                    <ul class="slider-container">
                        <li>
                            <div id="slide1">
                                <a class="corousel-link" href="<?php the_field('third_course_slide_one_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('third_course_slide_one_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('third_course_slide_one_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide2">
                                <a class="corousel-link" href="<?php the_field('third_course_slide_two_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('third_course_slide_two_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('third_course_slide_two_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide3">
                                <a class="corousel-link" href="<?php the_field('third_course_slide_three_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('third_course_slide_three_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('third_course_slide_three_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide4">
                                <a class="corousel-link" href="<?php the_field('third_course_slide_four_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('third_course_slide_four_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('third_course_slide_four_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide5">
                                <a class="corousel-link" href="<?php the_field('third_course_slide_five_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('third_course_slide_five_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('third_course_slide_five_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div id="slide6">
                                <a class="corousel-link" href="<?php the_field('third_course_slide_six_url'); ?>">
                                <div class="slider-course-thumbnail">
                                    <img id="slider-course-thumbnail" src="<?php the_field('third_course_slide_six_img'); ?>"/>
                                </div>
                                <div class="slider-course-info">
                                    <p class="slider-course-title"><?php the_field('thirdgit status_course_slide_six_title'); ?></p>
                                </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <span class="slider-nav"></span>
                    <span class="slider-nav slider-nav-next"></span>
                </div>
            </div>
        </div>



</div>
        
<?php get_footer(); ?>