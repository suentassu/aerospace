<?php
/**
 * Template Name: Video course page
 * Template Post Type: page
 * 
 */

get_header();
?>

<div class="content-container">
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

        <div class="course-content-area">
        <div class="course-area">
                <div class="course-content">
                <?php
                // Get ACF fields
                $video1 = get_field('video1');
                $video2 = get_field('video2');
                $video3 = get_field('video3');
                $video4 = get_field('video4');
                $fileA = get_field('fileA');
                $fileB = get_field('fileB');
                ?>
                <?php if (!empty($video1) || !empty($fileA) || !empty($video2) || !empty($fileB)) : ?>

                <?php endif; ?>

                <?php if (!empty($video1)) : ?>
                        <div class="video-wrapper content" id="video1" style="<?php echo !empty($video1) ? 'display: none;' : 'display: none;'; ?>">
                        <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video1); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                        <?php endif; ?>

                <?php if (!empty($video2)) : ?>
                        <div class="video-wrapper content" id="video2" style="<?php echo !empty($video2) ? 'display: none;' : 'display: none;'; ?>">
                        <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video2); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                <?php endif; ?>

                <?php if (!empty($video3)) : ?>
                        <div class="video-wrapper content" id="video2" style="<?php echo !empty($video3) ? 'display: none;' : 'display: none;'; ?>">
                        <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video3); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                <?php endif; ?>

                <?php if (!empty($video4)) : ?>
                        <div class="video-wrapper content" id="video2" style="<?php echo !empty($video4) ? 'display: none;' : 'display: none;'; ?>">
                        <iframe frameborder="0" width="100%" height="100%" src="<?php echo esc_url($video4); ?>" allowfullscreen allow="autoplay=0"></iframe>
                        </div>
                <?php endif; ?>

                <?php if (!empty($fileA)) : ?>
                        <div class="pdf-wrapper content" id="fileA" style="<?php echo !empty($fileA) ? 'display: none;' : 'display: none;'; ?>">
                        <embed width="100%" height="100%" src="<?php echo esc_url($fileA); ?>"/>
                        </div>
                <?php endif; ?>

                <?php if (!empty($fileB)) : ?>
                        <div class="pdf-wrapper content" id="fileB" style="<?php echo !empty($fileB) ? 'display: none;' : 'display: none;'; ?>">
                        <embed width="100%" height="100%" src="<?php echo esc_url($fileB); ?>"/>
                        </div>
                <?php endif; ?>

                </div>

                <div class="course-content-list">
                        <div class="course-content-title">
                                Content
                        </div>

                <?php if (!empty($video1)) : ?>
                        <div class="content-button-video">
                                <i class="fa-solid fa-video"></i>
                        <button onclick="toggleContent('video1')" class="content-button">Video 1</button> 
                        </div>
                <?php endif; ?>

                        <?php if (!empty($video2)) : ?>
                        <div class="content-button-video">
                                <i class="fa-solid fa-video"></i>
                        <button onclick="toggleContent('video2')" class="content-button">Video 2</button>
                        </div>
                <?php endif; ?>

                <?php if (!empty($video3)) : ?>
                        <div class="content-button-video">
                                <i class="fa-solid fa-video"></i>
                        <button onclick="toggleContent('video1')" class="content-button">Video 3</button>
                        </div>
                <?php endif; ?>

                        <?php if (!empty($video4)) : ?>
                        <div class="content-button-video">
                        <i class="fa-solid fa-video"></i>
                        <button onclick="toggleContent('video2')" class="content-button">Video 4 </button>
                        
                        </div>
                <?php endif; ?>

                <?php if (!empty($fileA)) : ?>
                        <div class="content-button-file">
                                <i class="fa-solid fa-file"></i>
                        <button onclick="toggleContent('fileA')" class="content-button">File A</button>
                        
                        </div>
                <?php endif; ?>

                <?php if (!empty($fileB)) : ?>
                        <div class="content-button-file">
                                <i class="fa-solid fa-file"></i>
                        <button onclick="toggleContent('fileB')" class="content-button">File B</button>
                        </div>
                <?php endif; ?>

                </div>

</div>


                <div class="course-description-area">
                        <div class="about-this">
                                <h3>About this model</h3>
                        </div>
                        <div class="course-description">
                                <p class="course-descriprion"> 
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                        Ultricies mi quis hendrerit dolor magna eget est lorem. Auctor eu 
                                        augue ut lectus. Dui vivamus arcu felis bibendum ut. Id diam vel 
                                        quam elementum pulvinar etiam non. Hac habitasse platea dictumst 
                                        quisque sagittis purus sit amet volutpat. Velit egestas dui id ornare 
                                        arcu odio ut. Elit at imperdiet dui accumsan sit amet nulla. Sem 
                                        nulla pharetra diam sit amet nisl suscipit. Pellentesque pulvinar 
                                        pellentesque habitant morbi tristique senectus. Ultricies leo integer 
                                        malesuada nunc vel risus commodo viverra maecenas. Integer quis auctor 
                                        elit sed vulputate mi. Diam in arcu cursus euismod quis viverra. Nunc
                                        faucibus a pellentesque sit. Sed pulvinar proin gravida hendrerit lectus a. 
                                        Tristique risus nec feugiat in fermentum posuere urna nec tincidunt. 
                                        Integer quis auctor elit sed.
                                </p>
                                <p class="course-descriprion"> 
                                        Porttitor lacus luctus accumsan tortor posuere ac ut consequat semper. Duis 
                                        ut diam quam nulla porttitor. Potenti nullam ac tortor vitae purus faucibus. 
                                        Fames ac turpis egestas sed tempus urna et pharetra. Ultrices neque ornare 
                                        aenean euismod. Malesuada fames ac turpis egestas maecenas pharetra. In hac 
                                        habitasse platea dictumst. Quam id leo in vitae. Enim sed faucibus turpis in 
                                        eu mi. Ultrices mi tempus imperdiet nulla malesuada pellentesque elit eget gravida. 
                                        Amet est placerat in egestas erat imperdiet sed euismod. Tortor posuere ac ut 
                                        consequat semper viverra nam.
                                </p>
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