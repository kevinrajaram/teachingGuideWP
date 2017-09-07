<?php
/**
 * Teaching Guide functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Teaching_Guide
 */

if ( ! function_exists( 'teaching_guide_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function teaching_guide_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Teaching Guide, use a find and replace
	 * to change 'teaching-guide' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'teaching-guide', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'MainNav', 'teaching-guide' ),
	) );

	function register_my_menu() {
	  register_nav_menu('primary',__( 'Sidebar Menu', 'teaching-guide' ));
	}
	add_action( 'init', 'register_my_menu' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'teaching_guide_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function teaching_guide_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'teaching-guide' ),
		'id'            => 'sidebar-main',
		'description'   => esc_html__( 'Add widgets here.', 'teaching-guide' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Teaching Guide Home Navigation', 'fc' ),
		'id'            => 'tg_nav_items',
		'description'   => esc_html__( 'Add Teaching Guide Home Nav items here.', 'fc' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );

}
add_action( 'widgets_init', 'teaching_guide_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function teaching_guide_scripts() {
	wp_enqueue_style( 'teaching-guide-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), '20170320', true );
	wp_enqueue_script( 'readmore', get_template_directory_uri() . '/js/readmore.min.js', array(), '20170418', true );
	wp_enqueue_script( 'stickykit', get_template_directory_uri() . '/js/sticky-kit.min.js', array(), '20170418', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.min.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'teaching_guide_scripts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Custom MIME Types
 */
add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes ( $existing_mimes=array() ) {
	$existing_mimes['svg'] = 'mime/type';
	return $existing_mimes;
}

// Change WordPress image quality to max (100%)
function jpeg_quality_callback($arg)
{
	return (int)100;
}
add_filter('jpeg_quality', 'jpeg_quality_callback');

wp_dequeue_style( 'searchwp-live-search' );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/**
 * REMOVE JUNK FROM HEAD
 */
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 ); // remove shortlink
remove_action('wp_head', 'rel_canonical', 10, 0 ); // remove canonical link
remove_action('wp_head', 'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles', 'print_emoji_styles' );
remove_action('admin_print_styles', 'print_emoji_styles' );
