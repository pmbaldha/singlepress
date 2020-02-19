<?php
/**
 * Add WooCommerce support
 *
 *
 * @package singlepress
 */

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}