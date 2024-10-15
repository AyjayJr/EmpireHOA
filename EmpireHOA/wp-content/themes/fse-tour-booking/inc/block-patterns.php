<?php
/**
 * Block Patterns
 *
 * @package fse_tour_booking
 * @since 1.0
 */

function fse_tour_booking_register_block_patterns() {
	$block_pattern_categories = array(
		'fse-tour-booking' => array( 'label' => esc_html__( 'FSE Tour Booking', 'fse-tour-booking' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'fse-tour-booking' ) ),
	);

	$block_pattern_categories = apply_filters( 'fse_tour_booking_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'fse_tour_booking_register_block_patterns', 9 );