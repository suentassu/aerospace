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
               <div class="bar"></div>
               <div class="bar"></div>
               <div class="bar"></div>
               <div class="bar"></div>
               <div class="bar"></div>
        </div>
        <div class="course-content-area">
                <div class="course-area">
                        <div class="course-content">
                                <!--
                                        PROBLEM! PDF-files won't show up on mobile browsers if
                                        using browser-native HTML embedding. Google Docs viewers 
                                        would be the solution to this.
                                -->
                                <div class="video-wrapper content" id="video1" style="display: block;">
                                        <iframe frameborder="0" width="100%" height="100%" src="https://www.youtube.com/embed/32T0HS6deX0?si=_YWIx17aOWCaWUCg" allowfullscreen allow="autoplay">
                                        </iframe>
                                </div>
                                <div class="pdf-wrapper content" id="fileA">
                                        <embed width="100%" height="100%" src="../wp-content/themes/aerospace/img/PDF-template.pdf"/>
                                </div>
                                <div class="video-wrapper content" id="video2">
                                        <iframe frameborder="0" width="100%" height="100%" src="https://www.youtube.com/embed/DzZI8ou4uYc?si=IW2OizPGx85QwFNa" allowfullscreen allow="autoplay">
                                        </iframe>
                                </div>
                                <div class="pdf-wrapper content" id="fileB">
                                        <embed width="100%" height="100%" src="../wp-content/themes/aerospace/img/PDF-template2.pdf"/>
                                </div>

                        </div>
                        <div class="course-content-list">
                                <div class="course-content-title">
                                        Content
                                </div>
                                <div class="content-button-video">
                                        <button onclick="toggleContent('video1')" class="content-button">Video 1</button>
                                </div>
                                <div class="content-button-file">
                                        <button onclick="toggleContent('fileA')" class="content-button">File A</button>
                                </div>
                                <div class="content-button-file">
                                        <button onclick="toggleContent('fileB')" class="content-button">File B</button>
                                </div>
                                <div class="content-button-video">
                                        <button onclick="toggleContent('video2')" class="content-button">Video 2</button>
                                </div>
                        </div>
                </div>
                <div class="course-description-area">
                        <div class="about-this">
                                <p>About this model</p>
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
                                                                <p class="slider-course-difficulty" id="difficulty-100">Difficulty</p>      
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
                                                                <p class="slider-course-difficulty" id="difficulty-75">Difficulty</p>      
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
                                                                <p class="slider-course-difficulty" id="difficulty-50">Difficulty</p>      
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
                                                                <p class="slider-course-difficulty" id="difficulty-25">Difficulty</p>      
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
                                                                <p class="slider-course-difficulty" id="difficulty-0">Difficulty</p>      
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
                                                                <p class="slider-course-difficulty" id="difficulty-100">Difficulty</p>      
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