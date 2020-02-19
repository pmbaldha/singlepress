<?php
/**
 * Declaring widgets
 *
 *
 * @package singlepress
 */
function singlepress_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'singlepress' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Sidebar widget area. Widget area which diplays on right side of blog and page.', 'singlepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Hero', 'singlepress' ),
		'id'            => 'hero',
		'description'   => esc_html__('Widget area which diplays on right side of home page.', 'singlepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Static Hero', 'singlepress' ),
		'id'            => 'statichero',
		'description'   => esc_html__('Widget area which diplays on right side of home page.', 'singlepress' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Full', 'singlepress' ),
        'id'            => 'footerfull',
        'description'   => esc_html__('Widget area below main content and above footer', 'singlepress' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );

}
add_action( 'widgets_init', 'singlepress_widgets_init' );