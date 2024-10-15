<?php
/**
 * FSE Tour Booking functions and definitions
 *
 * @package fse_tour_booking
 * @since 1.0
 */

if ( ! function_exists( 'fse_tour_booking_support' ) ) :
	function fse_tour_booking_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

	}
endif;

add_action( 'after_setup_theme', 'fse_tour_booking_support' );

if ( ! function_exists( 'fse_tour_booking_styles' ) ) :
	function fse_tour_booking_styles() {
		// Register theme stylesheet.
		$fse_tour_booking_theme_version = wp_get_theme()->get( 'Version' );

		$fse_tour_booking_version_string = is_string( $fse_tour_booking_theme_version ) ? $fse_tour_booking_theme_version : false;
		wp_enqueue_style(
			'fse-tour-booking-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$fse_tour_booking_version_string
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'fse_tour_booking_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';