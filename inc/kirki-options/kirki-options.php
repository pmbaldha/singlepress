<?php
if( !class_exists( 'Kirki' ) )
{
	return;	
}
Kirki::add_config( 'singlepress', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

include_once( get_template_directory().'/inc/kirki-options/font-awesome.php' );

include_once( get_template_directory().'/inc/kirki-options/above_header.php' );

include_once( get_template_directory().'/inc/kirki-options/footer_options.php' );