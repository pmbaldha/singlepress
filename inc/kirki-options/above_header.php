<?php
Kirki::add_section( 'above_header', array(
    'title'          => esc_html__( 'Above Header Content', 'singlepress'),
    'description'    => esc_html__( 'Above Header Content Related Options' , 'singlepress'),
    'panel'          => '', // Not typically needed.
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_field( 'singlepress', array(
	'type'        => 'switch',
	'settings'    => 'is_above_header',
	'label'       => esc_html__( 'Above Header Content on Front Page', 'singlepress' ),
	'section'     => 'above_header',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'singlepress' ),
		'off' => esc_attr__( 'Disable', 'singlepress' ),
	),
) );

Kirki::add_field( 'singlepress', array(
	'type'        => 'image',
	'settings'    => 'above_header_bg_image',
	'label'       => __( 'Background Image', 'singlepress' ),
	'description' => __( 'This image will be set above header content background', 'singlepress' ),
	'section'     => 'above_header',
	'default'     => get_template_directory_uri() .'/images/header-img-bg.png',
	'priority'    => 20,
	'active_callback'    => array(
		array(
			'setting'  => 'is_above_header',
			'operator' => '==',
			'value'    => true,
		),
	),
) );


Kirki::add_field( 'singlepress', array(
	'type'     => 'text',
	'settings' => 'above_header_title_above_text',
	'label'    => __( 'Above Title Text', 'singlepress' ),
	'section'     => 'above_header',
	'default'  => esc_attr__( 'what are you waiting for ?', 'singlepress' ),
	'priority' => 40,
	'active_callback'    => array(
		array(
			'setting'  => 'is_above_header',
			'operator' => '==',
			'value'    => true,
		),
	),
) );


Kirki::add_field( 'singlepress', array(
	'type'     => 'text',
	'settings' => 'above_header_title_text',
	'label'    => __( 'Title Text', 'singlepress' ),
	'section'     => 'above_header',
	'default'  => esc_attr__( 'what are you waiting for ?', 'singlepress' ),
	'priority' => 60,
	'active_callback'    => array(
		array(
			'setting'  => 'is_above_header',
			'operator' => '==',
			'value'    => true,
		),
	),
) );


Kirki::add_field( 'singlepress', array(
	'type'     => 'text',
	'settings' => 'above_header_tagline_prefix',
	'label'    => __( 'Tagline', 'singlepress' ),
	'section'     => 'above_header',
	'default'  => esc_attr__( 'Singlepress,', 'singlepress' ),
	'priority' => 80,
	'active_callback'    => array(
		array(
			'setting'  => 'is_above_header',
			'operator' => '==',
			'value'    => true,
		),
	),
) );
Kirki::add_field( 'singlepress', array(
	'type'     => 'text',
	'settings' => 'above_header_tagline',
	'label'    => __( 'Tagline', 'singlepress' ),
	'section'     => 'above_header',
	'default'  => esc_attr__( ' next generation and highly flexible wordpress theme', 'singlepress' ),
	'priority' => 100,
	'active_callback'    => array(
		array(
			'setting'  => 'is_above_header',
			'operator' => '==',
			'value'    => true,
		),
	),
) );

Kirki::add_field( 'singlepress', array(
	'type'     => 'text',
	'settings' => 'above_header_above_btn_text',
	'label'    => __( 'Above Button Text', 'singlepress' ),
	'section'     => 'above_header',
	'default'  => esc_attr__( 'start doing that', 'singlepress' ),
	'priority' => 100,
	'active_callback'    => array(
		array(
			'setting'  => 'is_above_header',
			'operator' => '==',
			'value'    => true,
		),
	),
) );

Kirki::add_field( 'singlepress', array(
	'type'     => 'text',
	'settings' => 'above_header_btn_url',
	'label'    => __( 'Button Link', 'singlepress' ),
	'section'     => 'above_header',
	'default'  => esc_attr__( '#', 'singlepress' ),
    'sanitize_callback' => 'esc_url_raw',
	'priority' => 120,
	'active_callback'    => array(
		array(
			'setting'  => 'is_above_header',
			'operator' => '==',
			'value'    => true,
		),
	),
) );

Kirki::add_field( 'singlepress', array(
    'type'        => 'select',
    'settings'    => 'above_header_btn_icon',
    'label'       => __( 'Header Button', 'singlepress' ),
    'section'     => 'above_header',
    'default'     => 'fa-arrow-down',
    'priority'    => 140,
    'choices'     => singlepress_font_awesome(),
) );


Kirki::add_field( 'singlepress', array(
	'type'        => 'switch',
	'settings'    => 'above_header_btn_new_tab',
	'label'       => __( 'Allow Button Open in new tab', 'singlepress' ),
	'section'     => 'above_header',
	'default'     => '1',
	'priority'    => 160,
	'choices'     => array(
		'on'  => esc_attr__( 'Enable', 'singlepress' ),
		'off' => esc_attr__( 'Disable', 'singlepress' ),
	),
) );


