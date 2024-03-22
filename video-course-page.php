<?php
/**
 * Template Name: Video course page
 * 
 */

get_header();
?>

<div class="content-container">
        <h1 class="course-title"><?php echo get_the_title(); ?></h1>
        <div class="course-difficulty-bar">
                <?php
                        // Get the difficulty value
                        $difficulty_title = get_field('difficulty_title');
                        $difficulty = get_field('difficulty');

                        // Output the difficulty bar
                        if ($difficulty) {
                                echo '<p>' . $difficulty_title . ': ' . $difficulty . '/5</p>';
                        echo '<div class="difficulty-bar">';
                        echo '<span class="bar" style="width: ' . ($difficulty * 20) . '%;"></span>';
                        echo '</div>';
                        
                        } else {
                        echo '<p>Difficulty level not set.</p>';
                        }
                ?>
        </div>

        <div class="course-content-area">
                <div class="course-area">
                        <div class="course-content">
                        <!-- ACF fields -->
                        <?php
                        $video1 = get_field('video1');
                        $video2 = get_field('video2');
                        $video3 = get_field('video3');
                        $video4 = get_field('video4');
                        $video5 = get_field('video5');
                        $video6 = get_field('video6');
                        $video7 = get_field('video7');
                        $video8 = get_field('video8');
                        $video9 = get_field('video9');
                        $video10 = get_field('video10');
                        $fileA = get_field('fileA');
                        $fileB = get_field('fileB');
                        ?>
                        <?php if (!empty($video1) || !empty($video2) || !empty($video3) || !empty($video4) || !empty($video5) || !empty($video6) || !empty($video7) || !empty($video8) || !empty($video9) || !empty($video10) || !empty($fileA) || !empty($fileB)) : ?>

                        <?php endif; ?>

                        <!-- Video 1 -->
                        <?php if (!empty($video1)) : ?>
                        <div class="video-wrapper content" id="video1" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video1); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 2 -->
                        <?php if (!empty($video2)) : ?>
                        <div class="video-wrapper content" id="video2" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video2); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 3 -->
                        <?php if (!empty($video3)) : ?>
                        <div class="video-wrapper content" id="video3" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video3); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 4 -->
                        <?php if (!empty($video4)) : ?>
                        <div class="video-wrapper content" id="video4" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video4); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 5 -->
                        <?php if (!empty($video5)) : ?>
                        <div class="video-wrapper content" id="video5" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video5); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 6 -->
                        <?php if (!empty($video6)) : ?>
                        <div class="video-wrapper content" id="video6" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video6); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 7 -->
                        <?php if (!empty($video7)) : ?>
                        <div class="video-wrapper content" id="video7" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video7); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 8 -->
                        <?php if (!empty($video8)) : ?>
                        <div class="video-wrapper content" id="video8" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video8); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 9 -->
                        <?php if (!empty($video9)) : ?>
                        <div class="video-wrapper content" id="video9" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video9); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- Video 10 -->
                        <?php if (!empty($video10)) : ?>
                        <div class="video-wrapper content" id="video10" style="display: none;">
                                <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video10); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                        <!-- File A -->
                        <?php if (!empty($fileA)) : ?>
                        <div class="pdf-wrapper content" id="fileA" style="display: none;">
                                <embed width="100%" height="100%" src="<?php echo esc_url($fileA); ?>"/>
                        </div>
                        <?php endif; ?>

                        <!-- File B -->
                        <?php if (!empty($fileB)) : ?>
                        <div class="pdf-wrapper content" id="fileB" style="display: none;">
                                <embed width="100%" height="100%" src="<?php echo esc_url($fileB); ?>"/>
                        </div>
                        <?php endif; ?>
                </div>

                <div class="course-content-list">

                        <?php
                        // Get the difficulty value
                        $content_title = get_field('content_title');

                        // Output the difficulty bar
                        if ($content_title) {
                        echo '<div class="course-content-title">' . $content_title . '</div>';

                        } else {
                        echo '<div class="course-content-title">Content</div>';
                        }
                        ?>

                        <!-- Video 1 Button -->
                        <?php if (!empty($video1)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video1')" class="content-button" id="video1-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video1_name'); ?></a> </button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 2 Button -->
                        <?php if (!empty($video2)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video2')" class="content-button" id="video2-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video2_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 3 Button -->
                        <?php if (!empty($video3)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video3')" class="content-button" id="video3-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video3_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 4 Button -->
                        <?php if (!empty($video4)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video4')" class="content-button" id="video4-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video4_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 5 Button -->
                        <?php if (!empty($video5)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video4')" class="content-button" id="video4-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video5_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 6 Button -->
                        <?php if (!empty($video6)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video4')" class="content-button" id="video4-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video6_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 7 Button -->
                        <?php if (!empty($video7)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video4')" class="content-button" id="video4-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video7_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 8 Button -->
                        <?php if (!empty($video8)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video4')" class="content-button" id="video4-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video8_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 9 Button -->
                        <?php if (!empty($video9)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video4')" class="content-button" id="video4-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video9_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- Video 10 Button -->
                        <?php if (!empty($video10)) : ?>
                        <div class="content-button-video">
                                <button onclick="toggleContent('video4')" class="content-button" id="video4-button"><i class="fa-solid fa-video icon-margin"></i> <?php the_field('video10_name'); ?></button>
                        </div>
                        <?php endif; ?>

                        <!-- File A Button -->
                        <?php if (!empty($fileA)) : ?>
                        <div class="content-button-file">
                                <button onclick="toggleContent('fileA')" class="content-button" id="fileA-button"><i class="fa-solid fa-file icon-margin"></i> File A</button>
                        </div>
                        <?php endif; ?>

                        <!-- File B Button -->
                        <?php if (!empty($fileB)) : ?>
                        <div class="content-button-file">
                                <button onclick="toggleContent('fileB')" class="content-button" id="fileB-button"><i class="fa-solid fa-file icon-margin"></i> File B</button>
                        </div>
                        <?php endif; ?>
                </div>
        </div>

                       
        <div class="single-content">
                        <?php
                        // Get the title value
                        $about_title = get_field('about_title');

                        // Output the title
                        if ($about_title) {
                        echo '<h3>' . $about_title . '</h3>';

                        } else {
                        echo '<h3>About this model</h3>';
                        }
                        ?>

                <?php the_content(); ?>
        </div>

                <?php
                        // Get the title value
                        $other_courses_title = get_field('other_courses_title');
                        // Output the title
                        if ($other_courses_title) {
                                echo '<div class="other-courses-title centered">' . $other_courses_title. '</div>';
                        } else {
                        echo '<div class="other-courses-title centered">Other Courses</div>';
                        }
                ?>

                <div id="carousel">
    <div class="slider">
        <div class="slides">
                        <div class="swiffy-slider slider-item-show1 slider-item-ratio slider-item-ratio-4x3 slider-nav-round slider-nav-outside-expand slider-nav-visible slider-indicators-round slider-item-helper">
                                <ul class="slider-container">
                                        <li>
                                                <div id="slide1">
                                                        <a class="corousel-link" href="<?php the_field('slide1_url'); ?>">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="<?php the_field('slide1_img'); ?>"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title"><?php the_field('slide1_name'); ?></p>
                                                        </div>
                                                        </a>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide2">
                                                        <a class="corousel-link" href="<?php the_field('slide2_url'); ?>">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="<?php the_field('slide2_img'); ?>"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title"><?php the_field('slide2_name'); ?></p>
                                                        </div>
                                                        </a>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide3">
                                                        <a class="corousel-link" href="<?php the_field('slide3_url'); ?>">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="<?php the_field('slide3_img'); ?>"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title"><?php the_field('slide3_name'); ?></p>
                                                        </div>
                                                        </a>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide4">
                                                        <a class="corousel-link" href="<?php the_field('slide4_url'); ?>">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="<?php the_field('slide4_img'); ?>"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title"><?php the_field('slide4_name'); ?></p>
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

<?php get_footer(); ?>