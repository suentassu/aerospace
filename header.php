<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>

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



<main class="main-overlay">

