<?php
/**
 * Property Management Company functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package property-management-company
 * @since property-management-company 1.0
 */

if ( ! function_exists( 'property_management_company_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since property-management-company 1.0
	 *
	 * @return void
	 */
	function property_management_company_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'property_management_company_support' );

if ( ! function_exists( 'property_management_company_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since property-management-company 1.0
	 *
	 * @return void
	 */
	function property_management_company_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'property-management-company-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'property-management-company-style' );

		wp_enqueue_style( 'dashicons' );
	}

endif;

/* Enqueue Custom Js */
function property_management_company_scripts() {

	wp_enqueue_script( 
		'property-management-company-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js', 
		array('jquery') 
	);
}
add_action( 'wp_enqueue_scripts', 'property_management_company_scripts' );

add_action( 'wp_enqueue_scripts', 'property_management_company_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Notice
require get_template_directory() . '/get-started/notice.php';