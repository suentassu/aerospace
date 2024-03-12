<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body>

    
<header>
    <nav id="navbar">
        
        <div class="nav-container">
            <div class="main-title">
                <a href="<?php echo get_home_url(); ?>"><?php bloginfo(); ?></a>
            </div>
            <div class="nav-icon">
                <span class="icon-mobile" onclick="openNavi()"><i class="fa-solid fa-bars"></i></span>

                <span class="icon-tablet" onclick="openNaviTablet()"><i class="fa-solid fa-bars"></i></span>
                
                <span class="icon-desk" onclick="openNaviDesk()"><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>

        <div id="aeroNav" class="nav-overlay">
                <a href="javascript:void(0)" class="nav-closebtn" onclick="closeNav()">
                    <i class="fa-solid fa-x"></i>
                </a>
                
            <div class="nav-overlay-content">
                <?php
                    wp_nav_menu();
                ?>
            </div>
        </div>

    </nav>
    <div class="nav-back">
        <div class="nav-container ">
            <button id="back-button" onclick="history.back()"><i class="fa-solid fa-circle-chevron-left"></i> Go Back</button>
        </div>
    </div>
</header>

<main class="main-overlay">



    <!-- Button to open the popup -->
    <button id="openButton" onclick="togglePopup()">Contact Us</button>

    <!-- The popup form -->
    <div id="contactForm" class="popup">
        <span class="close" onclick="closePopup()">&times;</span>
        <h2>Contact Us</h2>
        <form action="process_contact.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="subject">subject:</label>
            <input type="text" id="subject" name="subject">

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" cols="30"></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
    

