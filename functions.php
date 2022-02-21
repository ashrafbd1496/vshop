<?php

 require_once (dirname(__FILE__) . '/sample/redux-config.php');
//require_once (dirname(__FILE__) . '/inc/carbon-options.php');
 require_once(dirname(__FILE__) . '/lib/carbon-fields/vendor/autoload.php');


/**
 * vshop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vshop
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function vshop_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on vshop, use a find and replace
		* to change 'vshop' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'vshop', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Main Menu', 'vshop' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'vshop_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'vshop_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vshop_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vshop_content_width', 1170 );
}
add_action( 'after_setup_theme', 'vshop_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vshop_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vshop' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vshop' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vshop_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vshop_scripts() {

	//Enueue Styles
	
    //Google Fonts
    wp_enqueue_style('google-fonts-lato','//fonts.googleapis.com/css?family=Lato:300,400,700,900');
    //wp_enqueue_style('google-fonts-preconnect','//fonts.gstatic.com');
    wp_enqueue_style('google-fonts-Yellowtail','//fonts.googleapis.com/css2?family=Yellowtail&amp;display=swap');

   //icons
    wp_enqueue_style('fontawesome-css','//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

   //slick Slider css
     wp_enqueue_style('slick-css',get_theme_file_uri('/assets/css/vendors/slick.css'));
     wp_enqueue_style('slick-theme-css',get_theme_file_uri('/assets/css/vendors/slick-theme.css'));

   //Animate Icon
      wp_enqueue_style('animate-css',get_theme_file_uri('/assets/css/vendors/animate.css'));

   //Themify Icon
    wp_enqueue_style('themify-icon-css','//cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css');

    //bootstrap css
      wp_enqueue_style('bootstrap-css',get_theme_file_uri('/assets/css/vendors/bootstrap.css'));

   //Vshop Template Css
     wp_enqueue_style('vshop-template-css',get_theme_file_uri('/assets/css/style.css'),null,time());

	wp_enqueue_style( 'vshop-style', get_stylesheet_uri(), array(), _S_VERSION );

	//wp_style_add_data( 'vshop-style', 'rtl', 'replace' );


	/**
 * Enqueue Vshop scripts.
 */

    //menu js
    wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/assets/js/menu.js', array(),time(), true );


    //lazyload js
     wp_enqueue_script( 'lazysizes-js', get_template_directory_uri() . '/assets/js/lazysizes.min.js', array(),time(), true );


 //slick js
       wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(),time(), true );

       wp_enqueue_script( 'slick-animation-js', get_template_directory_uri() . '/assets/js/slick-animation.min.js', array(),time(), true );


   //bootstrap js

	wp_enqueue_script('bootstrap-bundle-js',get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'),['jquery'],'default',true);

    //Bootstrap notification js
    wp_enqueue_script('bootstrap-notify-js',get_theme_file_uri('/assets/js/bootstrap-notify.min.js'),['jquery'],'default',true);

   //Theme setting js
    wp_enqueue_script('theme-setting-js',get_theme_file_uri('/assets/js/theme-setting.js'),['jquery'],'default',true);


	wp_enqueue_script( 'vshop-navigation', get_template_directory_uri() . '/js/navigation.js', array(),time(), true );

    wp_enqueue_script( 'vshop-js', get_template_directory_uri() . '/assets/js/script.js', ['jquery'],time(), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vshop_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

