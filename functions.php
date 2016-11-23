<?php

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1170;
}


if ( ! function_exists( 'ai_theme_setup' ) ) :
function ai_theme_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wp-bootstrap-starter' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

	function aitheme_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
	}
	add_action( 'admin_init', 'aitheme_theme_add_editor_styles' );

	$args = array(
	'default-color' => '000000',
	'default-image' => '',
	);
	add_theme_support( 'custom-background', $args );

	$args = array(
	'flex-width'    => true,
	'width'         => 980,
	'flex-height'    => true,
	'height'        => 200,
	'default-image' => '',
	);
	add_theme_support( 'custom-header', $args );


}
endif;
add_action( 'after_setup_theme', 'ai_theme_setup' );




/**
 * Enqueue scripts and styles
 */
function ai_theme_scripts() {
	// load bootstrap css
	wp_enqueue_style( 'wp-bootstrap-starter-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	// load Font Awesome css
	wp_enqueue_style( 'wp-bootstrap-starter-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, '4.1.0' );
	// load AItheme styles
	wp_enqueue_style( 'wp-bootstrap-starter-style', get_stylesheet_uri() );
	// load bootstrap js
	wp_enqueue_script('wp-bootstrap-starter-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery') );
	// load bootstrap wp js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ai_theme_scripts' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function ai_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wp-bootstrap-starter' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		) );
}
add_action( 'widgets_init', 'ai_widgets_init' );


/**
 * Load custom WordPress nav walker.
 */
require_once(get_template_directory().'/lib/wp_bootstrap_navwalker.php');

