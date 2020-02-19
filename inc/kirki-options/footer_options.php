<?php
Kirki::add_section( 'footer', array(
    'title'          => esc_html__( 'Footer', 'singlepress' ),
    'description'    => esc_html__( 'Footer Related Options', 'singlepress' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 121,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'singlepress', array(
    'type'        => 'select',
    'settings'    => 'footer_icon',
    'label'       => __( 'Header Button', 'singlepress' ),
    'section'     => 'footer',
    'default'     => 'fa-arrow-circle-o-up',
    'priority'    => 40,
    'choices'     => singlepress_font_awesome(),
) );

Kirki::add_field( 'singlepress', array(
	'type'     => 'code',
	'settings' => 'footer_copyright_text',
	'label'    => __( 'Footer Copyright Text', 'singlepress' ),
	'section'     => 'footer',
	'choices'     => array(
		'language' => 'css',
		'theme'    => 'monokai',
		'height'   => 250,
	),
	'priority' => 80,
	
) );
