<?php
/**
 * singlepress functions and definitions
 *
 * @package singlepress
 */

define( 'SINGLEPRESS_VERSION',  '1.0');

if ( !function_exists( 'singlepress_require' ) ) {
	function singlepress_require($relative_path) {
		if (file_exists(get_stylesheet_directory() . $relative_path)) {
			require_once get_stylesheet_directory() . $relative_path;
		} else {
			require_once get_template_directory() . $relative_path;
		}
	}
}

/**
 * Theme setup and custom theme supports.
 */
singlepress_require( '/inc/tgm/singlepress-required-plugins.php' );


/**
 * Theme setup and custom theme supports.
 */
singlepress_require( '/inc/setup.php' );

/**
 * Kirki Options
 */
singlepress_require( '/inc/kirki-options/kirki-options.php' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
singlepress_require( '/inc/widgets.php' );

/**
 * Enqueue scripts and styles.
 */
singlepress_require( '/inc/enqueue.php' );

/**
 * Custom template tags for this theme.
 */
singlepress_require( '/inc/template-tags.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
singlepress_require( '/inc/extras.php' );

/**
 * Customizer additions.
 */
singlepress_require( '/inc/customizer.php' );

/**
 * Customizer additions.
 */
singlepress_require( '/inc/custom-comments.php' );

/**
 * Load Jetpack compatibility file.
 */
singlepress_require( '/inc/jetpack.php' );

/**
* Load custom WordPress nav walker.
*/
singlepress_require( '/inc/bootstrap-wp-navwalker.php' );

/**
* Load WooCommerce functions.
*/
singlepress_require( '/inc/woocommerce.php' );


singlepress_require( '/inc/page-builder-widget/page-builder-widget.php' );


