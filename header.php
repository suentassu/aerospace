<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body>

<nav id="navbar">
    <div class="nav-container">
        <div class="main-title">
            TITLE HERE
        </div>
        <div class="nav-icon">
            <a href="<a href="javascript:void(0);" onclick="naviLinks()">">
                <i class="fa-solid fa-bars fa-xl"></i>
            </a>
        </div>
    </div>
        <div class="nav-links-container">
            <div class="nav-links">
                <div id="navLinks">
                    <?php
                        wp_nav_menu();
                    ?>
                </div>
                
            </div>
        </div>
</nav>