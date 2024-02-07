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
            <?php bloginfo(); ?>
        </div>
        <div class="nav-icon">
            <a href="javascript:void(0);" onclick="naviLinks()">
                <i class="fa-solid fa-bars"></i>
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

<main>

