<?php
/**
 * Standalone functions and definitions
 *
 * @package superheroes
 */

if ( ! function_exists( 'standalone_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function standalone_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Standalone, use a find and replace
	 * to change 'standalone' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'superheroes', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'superheroes' ),
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'standalone_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // standalone_setup
add_action( 'after_setup_theme', 'standalone_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function standalone_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'standalone_content_width', 640 );
}
add_action( 'after_setup_theme', 'standalone_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function standalone_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'superheroes' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'standalone_widgets_init' );



/**
 * Enqueue scripts and styles.
 */
function standalone_scripts() {
	wp_enqueue_style( 'standalone-style', get_stylesheet_uri() );

	wp_enqueue_style ('font', 'http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700,700italic,900,900italic');

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');

	wp_enqueue_style( 'material-css', get_template_directory_uri() . '/css/material.min.css');

	wp_enqueue_style( 'rippless-css', get_template_directory_uri() . '/css/ripples.min.css');

	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css');

	wp_enqueue_style( 'responsive-css', get_template_directory_uri() . '/css/responsive.css');

	wp_enqueue_style( 'profile', 'http://gmpg.org/xfn/11');

	wp_enqueue_script( 'standalone-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'standalone-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

/*FROM HERE*/
	wp_enqueue_script( 'vendor-jquery', get_template_directory_uri() . '/js/vendor/jquery-1.11.2.min.js', array(), '', true );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );

	wp_enqueue_script( 'material-js', get_template_directory_uri() . '/js/material.min.js', array(), '', true );

	wp_enqueue_script( 'ripples', get_template_directory_uri() . '/js/ripples.min.js', array(), '', true );

	wp_enqueue_script( 'jquery-scrolly', get_template_directory_uri() . '/js/jquery.scrolly.js', array(), '', true );

	wp_enqueue_script( 'jquery-particleground', get_template_directory_uri() . '/js/jquery.particleground.min.js', array(), '', true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );
/*TO HERE*/

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'standalone_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
