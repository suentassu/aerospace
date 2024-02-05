<?php   
    /*
     * Remember to comment new functions, so it is easier to figure out what purpose it has. 
     */

    // Theme version number
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

    // Enqueue scripts and styles.
function aerospace_scripts() {
    // Theme styles
	wp_enqueue_style( 'aerospace-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'aerospace-style', 'rtl', 'replace' );

    // Theme JavaScript - 
    wp_enqueue_script( 'aerospace-custom-js', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );

    // Theme icons, FontAwesome
    // CHANGE SOURCE URI!! 
    wp_enqueue_style( 'load-fa', '#sourceURL CHANGE THIS!!!#' );
}
add_action( 'wp_enqueue_scripts', 'aerospace_scripts' );


if ( ! function_exists( 'aerospace_setup' ) ) :
    // Sets up theme defaults and registers support for various WordPress features.
function aerospace_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Title Tag Support 
    add_theme_support( 'title-tag' );

    // Post Thumpnails
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in three location.
    register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'aerospace' ),
    'secondary' => __( 'Secondary Menu', 'aerospace' ),
    'courses'   => __( 'Courses Menu', 'aerospace' )
    ) );

}
endif; // aerospace_setup
add_action( 'after_setup_theme', 'aerospace_setup' );