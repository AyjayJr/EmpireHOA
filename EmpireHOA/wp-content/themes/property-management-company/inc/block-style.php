<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage property-management-company
 * @since property-management-company 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since property-management-company 1.0
	 *
	 * @return void
	 */
	function property_management_company_register_block_styles() {
		

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'property-management-company-border',
				'label' => esc_html__( 'Borders', 'property-management-company' ),
			)
		);

		
	}
	add_action( 'init', 'property_management_company_register_block_styles' );
}