<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage property-management-company
 * @since property-management-company 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function property_management_company_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Property_Management_Company_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Property Management Pro', 'property-management-company' ),
		'button_text'      => __( 'Upgrade Pro', 'property-management-company' ),
		'url'              => 'https://www.wpradiant.net/products/property-management-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'property_management_company_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function property_management_company_custom_control_scripts() {
	wp_enqueue_script( 'property-management-company-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'property_management_company_custom_control_scripts' );