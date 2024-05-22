<?php

if ( ! function_exists( 'empty_theme_setup' ) ) :
    function empty_theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

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
                'script',
                'style',
            )
        );
    }
endif;
add_action( 'after_setup_theme', 'empty_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
wp_enqueue_script('jquery');
function my_enqueue() {
    wp_enqueue_style( 'theme-font-css', get_stylesheet_directory_uri().'/fonts/fonts.css', array());
    wp_enqueue_style( 'theme-default-css', get_stylesheet_directory_uri().'/fonts/default.css', array());

    wp_enqueue_style( 'theme-stylesheet-css', get_stylesheet_directory_uri().'/css/stylesheet.css', array());
    wp_enqueue_style( 'theme-responsive-css', get_stylesheet_directory_uri().'/css/responsive.css', array());

    wp_enqueue_script( 'theme-script', get_theme_file_uri( '/js/script.js' ), array(), '', true );
    wp_localize_script( 'theme-script', 'theme_url', array( 'template_url' => get_stylesheet_directory_uri() ) );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );

add_action( 'after_setup_theme', 'custom_setup_theme' );
function custom_setup_theme() {
	$new_page_list = [
		'company',
		'service',
		'contact',
		'success',
		'failed',
		'news',
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