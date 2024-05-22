<?php
/**
 * backoffice functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package backoffice
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
function backoffice_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on backoffice, use a find and replace
		* to change 'backoffice' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'backoffice', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'backoffice' ),
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
			'backoffice_custom_background_args',
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
add_action( 'after_setup_theme', 'backoffice_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function backoffice_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'backoffice_content_width', 640 );
}
add_action( 'after_setup_theme', 'backoffice_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function backoffice_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'backoffice' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'backoffice' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'backoffice_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function backoffice_scripts() {
	wp_enqueue_style( 'backoffice-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'backoffice-style', 'rtl', 'replace' );

	wp_enqueue_script( 'backoffice-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'backoffice_scripts' );

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
		'blog',
		'about',
		'company',
		'service',
		'contact',
		'success',
		'failed',
		'privacypolicy',
		'request',
		'request-confirm',
		'request-success',
		'request-result',
		'request-failed',
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
	// 		'post_type'     => 'faq', 				// Post Type Slug eg: 'page', 'post'
	// 		'post_title'    => 'タイトルテキストがあります。タイトルテキストがあります。タイトルテキストがあります。',	// Title of the Content
	// 		'post_content' => '内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキスト内容 テキストがあります。',
	// 		'post_status'   => 'publish',			// Post Status
	// 		'post_name'     => 'news'.$i			// Slug of the Post
	// 	);
	// 	wp_insert_post($new_page);
	// }	
}

function get_monthly_archive_array($post_type = 'post') {
	$years      = [];
	$years_args = [
	   'type'      => 'monthly',
	   'format'    => 'custom',
	   'before'    => '',
	   'after'     => '|',
	   'echo'      => false,
	   'post_type' => $post_type,
 //    'order'     => 'ASC',
	];
 
	// Get Years
	$years_content = wp_get_archives( $years_args );
 
	if ( ! empty( $years_content ) ) {
	   $years_arr = explode( '|', $years_content );
 
	   // Remove empty whitespace item from array.
	   $years_arr = array_filter( $years_arr, function ( $item ) {
		  return trim( $item ) !== '';
	   } );
 
	   foreach ( $years_arr as $year_item ) {
 
		  $year_row = trim( $year_item );
		  preg_match( '/href=["\']?([^"\'>]+)["\']>(.+)<\/a>/', $year_row, $year_vars );
 
		  if ( ! empty( $year_vars ) && is_array( $year_vars ) ) {
			 $year_url = ! empty( $year_vars[1] ) ? $year_vars[1] : ''; // Eg: http://demo.com/2021/11/
			 $parts    = parse_url( $year_url );
			 $path     = ! empty( $parts['path'] ) ? $parts['path'] : '';

			 $date_value = $year_vars[2];
			 $permalink = date_format(date_create($date),"Y/m/");
			 if($post_type == 'post') $permalink = get_site_url()."/".$permalink;
			 else $permalink = get_site_url()."/".$post_type."/".$permalink;

			 $years[] = [
				'name'  => $year_vars[2], // Eg: November 2021
				'value' => $permalink // Eg: /2021/11/ , so that we can prefix o suffix our own URL.
			 ];
		  }
	   }
	}
 
	return $years;
}

function get_jp_date($date) {
	return date_format(date_create($date),"Y年 m月");
}

function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

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

function my_excerpt_length($length){ return 20; } 
add_filter('excerpt_length', 'my_excerpt_length');

/**
 * Custom post type date archives
 */

/**
 * Custom post type specific rewrite rules
 * @return wp_rewrite             Rewrite rules handled by Wordpress
 */
function cpt_rewrite_rules($wp_rewrite) {
    $rules = cpt_generate_date_archives('news', $wp_rewrite);
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
    return $wp_rewrite;
}
add_action('generate_rewrite_rules', 'cpt_rewrite_rules');

/**
 * Generate date archive rewrite rules for a given custom post type
 * @param  string $cpt        slug of the custom post type
 * @return rules              returns a set of rewrite rules for Wordpress to handle
 */
function cpt_generate_date_archives($cpt, $wp_rewrite) {
    $rules = array();

    $post_type = get_post_type_object($cpt);
    $slug_archive = $post_type->has_archive;
    if ($slug_archive === false) return $rules;
    if ($slug_archive === true) {
        $slug_archive = $post_type->name;
    }

    $dates = array(
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
            'vars' => array('year', 'monthnum', 'day')),
        array(
            'rule' => "([0-9]{4})/([0-9]{1,2})",
            'vars' => array('year', 'monthnum')),
        array(
            'rule' => "([0-9]{4})",
            'vars' => array('year'))
        );

    foreach ($dates as $data) {
        $query = 'index.php?post_type='.$cpt;
        $rule = $slug_archive.'/'.$data['rule'];

        $i = 1;
        foreach ($data['vars'] as $var) {
            $query.= '&'.$var.'='.$wp_rewrite->preg_index($i);
            $i++;
        }

        $rules[$rule."/?$"] = $query;
        $rules[$rule."/feed/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/(feed|rdf|rss|rss2|atom)/?$"] = $query."&feed=".$wp_rewrite->preg_index($i);
        $rules[$rule."/page/([0-9]{1,})/?$"] = $query."&paged=".$wp_rewrite->preg_index($i);
    }
    return $rules;
}

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'お役立ちコンテンツ';
        $labels->singular_name = 'お役立ちコンテンツ';
        // $labels->add_new = 'Add News';
        // $labels->add_new_item = 'Add News';
        // $labels->edit_item = 'Edit News';
        // $labels->new_item = 'News';
        // $labels->view_item = 'View News';
        // $labels->search_items = 'Search News';
        // $labels->not_found = 'No News found';
        // $labels->not_found_in_trash = 'No News found in Trash';
        // $labels->all_items = 'All News';
        $labels->menu_name = 'お役立ちコンテンツ';
        $labels->name_admin_bar = 'お役立ちコンテンツ';
}