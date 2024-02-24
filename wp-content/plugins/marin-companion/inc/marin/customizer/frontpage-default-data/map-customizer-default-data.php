<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
	define(
		'MARIN_MAP_DEFAULT_CONTENT',
		json_encode(
			array(
				array(
					'icon_value' => 'fa fa-phone',
					'title'      => esc_html__( 'Phone', 'marin-companion' ),
					'subtitle'   => esc_html__( '+21-3652-56247, +21-8540-54109', 'marin-companion' ),
					'text'       => esc_html__( 'lorem ipsum dolar sit', 'marin-companion' ),
				),
				array(
					'icon_value' => 'fa fa-envelope',
					'title'      => esc_html__( 'Email', 'marin-companion' ),
					'subtitle'   => esc_html__( 'support@example.com', 'marin-companion' ),
					'text'       => '',
				),
				array(
					'icon_value' => 'fa fa-map-marker',
					'title'      => esc_html__( 'Address', 'marin-companion' ),
					'subtitle'   => esc_html__( '25, Mia Drive, Calibry Florida 890012.USA', 'marin-companion' ),
					'text'       => '',
				),
				array(
					'icon_value' => 'fa fa-clock-o',
					'title'      => esc_html__( 'Our Opening Hours', 'marin-companion' ),
					'subtitle'   => esc_html__( 'Monday-Friday 8.00am - 6.00pm', 'marin-companion' ),
					'text'       => esc_html__( 'Saturday 9.00am - 2.00pm', 'marin-companion' ),
				),
			)
		)
	);

