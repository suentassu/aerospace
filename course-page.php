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
                <div class="other-courses-container" id="other-courses-container"> 
                        <div class="other-courses-slider" id="other-courses-slider">
                                <span onclick="slideRight()" id="prev-btn" class="prev btn">
                                        <svg id="arrow" viewBox="0 0 512 512" width="20" title="chevron-circle-left">
                                                <path d="M256 504C119 504 8 393 8 256S119 8 256 8s248 111 248 248-111 248-248 248zM142.1 273l135.5 135.5c9.4 9.4 24.6 9.4 33.9 0l17-17c9.4-9.4 9.4-24.6 0-33.9L226.9 256l101.6-101.6c9.4-9.4 9.4-24.6 0-33.9l-17-17c-9.4-9.4-24.6-9.4-33.9 0L142.1 239c-9.4 9.4-9.4 24.6 0 34z" />
                                        </svg>
                                </span>
                                <div class="course-slider-list" id="course-slider-list">
                                        <div class="course-slide" id="course-slide">
                                                <div class="course-thumbnail">
                                                        <img id="course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                </div>
                                                <div class="other-course-info">
                                                        <p class="other-course-title">Course Name 1</p>
                                                        <p class="other-course-difficulty" id="difficulty-0">Difficulty</p>      
                                                </div>
                                        </div>
                                        <div class="course-slide" id="course-slide">
                                                <div class="course-thumbnail">
                                                        <img id="course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                </div>
                                                <div class="other-course-info">
                                                        <p class="other-course-title">Course Name 2</p>
                                                        <p class="other-course-difficulty" id="difficulty-50">Difficulty</p>      
                                                </div>
                                                
                                        </div>
                                        <div class="course-slide" id="course-slide">
                                                <div class="course-thumbnail">
                                                        <img id="course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                </div>
                                                <div class="other-course-info">
                                                        <p class="other-course-title">Course Name 3</p>
                                                        <p class="other-course-difficulty" id="difficulty-25">Difficulty</p>      
                                                </div>
                                        </div>
                                        <div class="course-slide" id="course-slide">
                                                <div class="course-thumbnail">
                                                        <img id="course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                </div>
                                                <div class="other-course-info">
                                                        <p class="other-course-title">Course Name 4</p>
                                                        <p class="other-course-difficulty" id="difficulty-100">Difficulty</p>      
                                                </div>
                                        </div>
                                        <div class="course-slide" id="course-slide">
                                                <div class="course-thumbnail">
                                                        <img id="course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                </div>
                                                <div class="other-course-info">
                                                        <p class="other-course-title">Course Name 5</p>
                                                        <p class="other-course-difficulty" id="difficulty-75">Difficulty</p>      
                                                </div>
                                        </div>
                                        <div class="course-slide" id="course-slide">
                                                <div class="course-thumbnail">
                                                        <img id="course-thumbnail" src="../wp-content/themes/aerospace/img/stars-1.jpg"/>
                                                </div>
                                                <div class="other-course-info">
                                                        <p class="other-course-title">Course Name 6</p>
                                                        <p class="other-course-difficulty" id="difficulty-50">Difficulty</p>      
                                                </div>
                                        </div>
                                </div> 
                                <span onclick="slideLeft()" id="next-btn" class="next btn">
                                        <svg id="arrow" viewBox="0 0 512 512" width="20" title="chevron-circle-right">
                                                <path d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zm113.9 231L234.4 103.5c-9.4-9.4-24.6-9.4-33.9 0l-17 17c-9.4 9.4-9.4 24.6 0 33.9L285.1 256 183.5 357.6c-9.4 9.4-9.4 24.6 0 33.9l17 17c9.4 9.4 24.6 9.4 33.9 0L369.9 273c9.4-9.4 9.4-24.6 0-34z" />
                                        </svg>
                                        </span>                               
                        </div>                        
                </div>
        </div>
</div>

<?php get_footer(); ?>