<?php
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * @package Ganap_Theme
 */

if ( ! isset( $content_width ) ) {
	$content_width = 1140; /* pixels */
}


if ( ! function_exists( 'ganap_theme_setup' ) ) {
	function ganap_theme_setup() {
		// Add default posts and comments RSS feed links to <head>.
		add_theme_support( 'automatic-feed-links' );

		// Add title to <head>.
		add_theme_support('title-tag');

		// Enable support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Enable support for post formats.
		add_theme_support( 
			'post-formats', 
			array( 
				'aside',
				'gallery',
				'quote',
				'image',
				'video'
			) 
		);

		// Register primary and secondary navigation menus.  
		register_nav_menus(
			array(
				'primary'   => __( 'Primary Menu', 'ganap' ),
				'secondary' => __( 'Secondary Menu', 'ganap' )
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		
		add_theme_support(
			'custom-logo',
			array(
				'height'               => 100,
				'width'                => 400,
				'flex-height'          => true,
				'flex-width'           => true,
				'header-text'          => array( 'site-title', 'site-description' ),
				'unlink-homepage-logo' => false, 
			)
		);
	}
	
}
add_action( 'after_setup_theme', 'ganap_theme_setup' );

// Enqueue Bootstrap CSS and JS.
function enqueue_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' );
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');