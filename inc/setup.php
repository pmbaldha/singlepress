<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 * @package singlepress
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'singlepress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function singlepress_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on singlepress, use a find and replace
	 * to change 'singlepress' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'singlepress', get_template_directory() . '/languages' );

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
		'primary' => __( 'Primary Menu', 'singlepress' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
    
    /*
	 * Adding Thumbnail basic support
	 */
    add_theme_support( "post-thumbnails" );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'singlepress_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // singlepress_setup
add_action( 'after_setup_theme', 'singlepress_setup' );

/**
* Adding the Read more link to excerpts
*/
/*function new_excerpt_more( $more ) {
	return ' <p><a class="read-more btn btn-default" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'singlepress') . '</a></p>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );*/
/* Removes the ... from the excerpt read more link */
function singlepress_custom_excerpt_more( $more ) {
	if ( ! is_admin() ) {
		$more = '';	
	}
	return $more;
}
add_filter( 'excerpt_more', 'singlepress_custom_excerpt_more' );

/* Adds a custom read more link to all excerpts, manually or automatically generated */
function singlepress_all_excerpts_get_more_link($post_excerpt) {
	if ( ! is_admin() ) {
		$post_excerpt .= $post_excerpt . ' [&hellip;]<p><a class="btn btn-default singlepress-read-more-link" href="'. esc_url( get_permalink( get_the_ID() ) ) . '">' . __('Read More...', 'singlepress')  . '</a></p>';
	}
	return $post_excerpt;
}
add_filter('wp_trim_excerpt', 'singlepress_all_excerpts_get_more_link');
