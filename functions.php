<?php   
    /*
     * Remember to comment new functions, so it is easier to figure out what purpose it has. 
     */

    // Theme version number
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.1.0' );
}

    // Enqueue scripts and styles.
function aerospace_scripts() {
    // Theme styles
    wp_enqueue_style('aerospace-style', get_template_directory_uri() . '/style.css', array(), _S_VERSION );

    // Theme JavaScript - 
    wp_enqueue_script( 'aerospace-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), _S_VERSION, true );
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

    // This theme uses wp_nav_menu().
    register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'aerospace' ),
    'secondary' => __( 'Secondary Menu', 'aerospace' )
    ) );
}
endif; // aerospace_setup
add_action( 'after_setup_theme', 'aerospace_setup' );

// Custom widgets (use classic widgets!)
function custom_widgets() {

	register_sidebar( array(
		'name'          => 'Footer Widget',
		'id'            => 'footer_widget',
		'before_widget' => '<div class="footer-content">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'custom_widgets' );

// Page numbers (archive.php, index.php etc uses this)
function numeric_posts_nav() {
  
    if( is_singular() )
        return;
  
    global $wp_query;
  
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
  
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
  
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<div class="numeric-navigation"><ul>' . "\n";
  
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
  
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
  
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
}

// Comments field in blog posts, moving textfield to bottom
function aerospace_comment_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}
add_filter( 'comment_form_fields', 'aerospace_comment_to_bottom');

// Comments template remove URL-field. 
function aerospace_remove_url($arg) {
    $arg['url'] = '';
    return $arg;
}
add_filter('comment_form_default_fields', 'aerospace_remove_url');