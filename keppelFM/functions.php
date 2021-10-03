<?php
/**
 * KeppelFM functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KeppelFM
 */



if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'keppelfm_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function keppelfm_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on KeppelFM, use a find and replace
		 * to change 'keppelfm' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'keppelfm', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'keppelfm' ),
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
				'keppelfm_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'keppelfm_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function keppelfm_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'keppelfm_content_width', 640 );
}
add_action( 'after_setup_theme', 'keppelfm_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function keppelfm_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'keppelfm' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'keppelfm' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'keppelfm_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function keppelfm_scripts() {
	wp_enqueue_style( 'keppelfm-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'keppelfm-style', 'rtl', 'replace' );

	wp_enqueue_script( 'keppelfm-jquery', get_template_directory_uri() . '/js/jquery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'keppelfm-datatables', get_template_directory_uri() . '/js/datatables.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'keppelfm-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'keppelfm-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'keppelfm-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'datatables', get_template_directory_uri() . '/css/datatables.css');
	wp_enqueue_style( 'nav', get_template_directory_uri() . '/css/nav.css');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/keppelstyle.css');

	wp_enqueue_style( 'shubh-style', get_template_directory_uri() . '/css/shubh-style.css');
	wp_enqueue_style('duncanStyle', get_template_directory_uri() . '/css/duncanStyle.css');
	wp_enqueue_style('duncanStyle', get_template_directory_uri() . '/css/duncanStyleSearch.scss');
	wp_enqueue_style('jinyueStyle', get_template_directory_uri() . '/css/jinyueStyle.css');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'keppelfm_scripts' );

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





/* DF Add a ACF Options Menu */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'OSP Timetable',
		'menu_title'	=> 'OSP Timetable',
		'menu_slug' 	=> 'osp-timetable-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url' => 'dashicons-calendar'
	));
	
	
}

