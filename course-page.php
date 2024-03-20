<?php
/**
 * Template Name: Course page
 * 
 */

get_header();
?>

<div class="course-page-inner-section">
        <h1 class="course-title"><?php echo get_the_title(); ?></h1>
        <div class="course-difficulty-bar">
              
<?php
        // Get the difficulty value
        $difficulty = get_field('difficulty');

        // Output the difficulty bar
        if ($difficulty) {
                echo '<p>Difficulty Level: ' . $difficulty . '/5</p>';
        echo '<div class="difficulty-bar">';
        echo '<span class="bar" style="width: ' . ($difficulty * 20) . '%;"></span>';
        echo '</div>';
        
        } else {
        echo '<p>Difficulty level not set.</p>';
        }
?>
        </div>



<!-- Video and pdf content -->

        <div class="course-content-area">
                <div class="course-area">
    <div class="course-content">
        
<?php
$args = array(
    'post_type' => 'course',
    'posts_per_page' => -1,
);

$courses = new WP_Query($args);

if ($courses->have_posts()) :
    while ($courses->have_posts()) : $courses->the_post();
?>
        <div class="course">
            <h2><?php the_title(); ?></h2>
            <div class="course-content">
                <?php the_content(); ?>
            </div>
            <?php
            // Näytetään video- ja pdf-tiedostot
            $attachments = get_posts(array(
                'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_parent' => get_the_ID(),
                'exclude' => get_post_thumbnail_id()
            ));

            if ($attachments) {
                foreach ($attachments as $attachment) {
                    $mime_type = get_post_mime_type($attachment->ID);
                    if (strpos($mime_type, 'video') !== false) {
                        echo '<div class="video">' . wp_video_shortcode(array('src' => $attachment->guid)) . '</div>';
                    } elseif (strpos($mime_type, 'pdf') !== false) {
                        echo '<div class="pdf"><a href="' . $attachment->guid . '">PDF</a></div>';
                    }
                }
            }
            ?>
        </div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
    </div>
</div>

                      
                </div>
                <div class="course-description-area">
                        <div class="about-this">
                                <p>About this model</p>
                        </div>
                        <div class="course-description">
                                 <?php the_content(); ?>
                        </div>
                </div>
                <div class="other-courses-title">Other Courses</div>
                <div id="carousel">
                        <div class="swiffy-slider slider-item-show1 slider-item-ratio slider-item-ratio-4x3 slider-nav-round slider-nav-outside-expand slider-nav-visible slider-indicators-round slider-item-helper">
                                <ul class="slider-container">
                                        <li>
                                                <div id="slide1">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title">Course Name 1</p>
                                                                     
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide2">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title">Course Name 2</p>
                                                                     
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide3">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title">Course Name 3</p>
                                                                     
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide4">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title">Course Name 4</p>
                                                                    
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide5">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title">Course Name 5</p>
                                                                    
                                                        </div>
                                                </div>
                                        </li>
                                        <li>
                                                <div id="slide6">
                                                        <div class="slider-course-thumbnail">
                                                                <img id="slider-course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                        </div>
                                                        <div class="slider-course-info">
                                                                <p class="slider-course-title">Course Name 6</p>
                                                                     
                                                        </div>
                                                </div>
                                        </li>
                                </ul>

                                        <span class="slider-nav"></span>
                                        <span class="slider-nav slider-nav-next"></span>
                        </div>
        </div>    
</div>

<?php get_footer(); ?>