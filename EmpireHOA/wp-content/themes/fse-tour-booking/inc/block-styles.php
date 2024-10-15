<?php
/**
 * Block Styles
 *
 * @package fse_tour_booking
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function fse_tour_booking_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'fse-tour-booking-padding-0',
				'label' => esc_html__( 'No Padding', 'fse-tour-booking' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'fse-tour-booking-post-author-card',
				'label' => esc_html__( 'Theme Style', 'fse-tour-booking' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'fse-tour-booking-button',
				'label'        => esc_html__( 'Plain', 'fse-tour-booking' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'fse-tour-booking-post-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-tour-booking' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'fse-tour-booking-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'fse-tour-booking' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'fse-tour-booking-wp-table',
				'label'        => esc_html__( 'Theme Style', 'fse-tour-booking' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'fse-tour-booking-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'fse-tour-booking' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'fse-tour-booking-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'fse-tour-booking' ),
			)
		);
	}
	add_action( 'init', 'fse_tour_booking_register_block_styles' );
}
