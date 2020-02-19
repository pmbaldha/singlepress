<?php
/**
 * singlepress enqueue scripts
 *
 * @package singlepress
 */
function singlepress_scripts() {
    wp_enqueue_style( 'singlepress-all-styles', get_stylesheet_directory_uri() . '/css/theme.css', array(), SINGLEPRESS_VERSION);
	  
	 $min_or_not = (defined('WP_DEBUG') && WP_DEBUG) ? '.min' : '';
	 if ( 'off' !== esc_html_x( 'on', 'Raleway font: on or off', 'singlepress' ) ) {
		 	wp_enqueue_style( 'google-waleway-font', 'https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' , false);
	 }		
	 wp_enqueue_style( 'singlepress-styles', get_stylesheet_directory_uri().'/style.css', array(), SINGLEPRESS_VERSION);	
	wp_enqueue_script( 'jquery-easypiechart', get_stylesheet_directory_uri() . '/js/jquery.easypiechart'.$min_or_not.'.js', array('jquery'), SINGLEPRESS_VERSION, true );


	/*
	wp_enqueue_script( 'singlepress-bootstrap-scripts', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery','easypiechart'), SINGLEPRESS_VERSION, true );
	*/

    wp_enqueue_script( 'singlepress-scripts', get_template_directory_uri() . '/js/theme.min.js', array('jquery','jquery-easypiechart'), SINGLEPRESS_VERSION, true );
	
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'singlepress_scripts' );

/** 
*Loading slider script conditionally
**/

if ( is_active_sidebar( 'hero' ) ):
add_action("wp_enqueue_scripts","singlepress_slider");
  
function singlepress_slider(){
    if ( is_front_page() ) {    
    $data = array(
    	"timeout"=> intval( get_theme_mod( 'singlepress_theme_slider_time_setting', 5000 )),
    	"items"=> intval( get_theme_mod( 'singlepress_theme_slider_count_setting', 1 ))
    	);
 

    wp_enqueue_script("singlepress-slider-script", get_stylesheet_directory_uri() . '/js/slider_settings.js', array(), SINGLEPRESS_VERSION);
    wp_localize_script( "singlepress-slider-script", "singlepress_slider_variables", $data );
    }
}
endif;




