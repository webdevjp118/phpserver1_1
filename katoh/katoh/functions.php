<?php
/**
 * katoh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package katoh
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
function katoh_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on katoh, use a find and replace
		* to change 'katoh' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'katoh', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'katoh' ),
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
			'katoh_custom_background_args',
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
add_action( 'after_setup_theme', 'katoh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function katoh_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'katoh_content_width', 640 );
}
add_action( 'after_setup_theme', 'katoh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function katoh_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'katoh' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'katoh' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'katoh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function katoh_scripts() {
	wp_enqueue_style( 'katoh-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'katoh-style', 'rtl', 'replace' );

	wp_enqueue_script( 'katoh-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'katoh_scripts' );

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

/******************************************************************************/

add_action( 'after_setup_theme', 'custom_setup_theme' );
function custom_setup_theme() {
	$new_page_list = [
		'top',
		'about',
		'guide',
		'price',
		'blog',
	];
	foreach($new_page_list as $page_slug) {
		$new_page = array(
				'post_type'     => 'page', 				// Post Type Slug eg: 'page', 'post'
				'post_title'    => $page_slug,	// Title of the Content
				'post_status'   => 'publish',			// Post Status
				'post_name'     => $page_slug			// Slug of the Post
		);
		if (!get_page_by_path( $page_slug, OBJECT, 'page')) { // Check If Page Not Exits
				$new_page_id = wp_insert_post($new_page);
		}
	}

	// for($i=0;$i<10;$i++) {
	// 	$new_page = array(
	// 		'post_type'     => 'post', 				// Post Type Slug eg: 'page', 'post'
	// 		'post_title'    => 'タイトルテキストがあります。タイトルテキストがあります。タイトルテキストがあります。',	// Title of the Content
	// 		'post_content' => '内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。',
	// 		'post_status'   => 'publish',			// Post Status
	// 		'post_name'     => 'post'.$i			// Slug of the Post
	// 	);
	// 	wp_insert_post($new_page);
	// }	
}

//faq acf options
add_action('acf/init', function () {
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page([
			'page_title' => 'よくある質問',
			'menu_title' => 'よくある質問',
			'menu_slug' => 'faq-settings',
			'capability' => 'manage_options',
			'position' => 30,
			'icon_url' => 'dashicons-admin-generic',
		]);
	}
});

function get_thumb_url($post_id, $default_empty = true) {
	$thumb_url = "";
	$thumb_id = get_post_thumbnail_id($post_id); //get the featured image
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	if(!empty($thumb_url_array)) {
		$thumb_url = $thumb_url_array[0];
	}
	if(strpos($thumb_url, "default.png") !== false){
		$thumb_url = "";
	}
	if(empty($thumb_url) && $default_empty) {
		$thumb_url = get_stylesheet_directory_uri()."/images/empty.jpg";
	}
	return $thumb_url;
}	