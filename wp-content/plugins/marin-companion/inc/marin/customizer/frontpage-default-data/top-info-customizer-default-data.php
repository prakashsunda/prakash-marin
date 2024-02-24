<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define(
	'MARIN_TOP_INFO_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'icon_value'   => 'fa-envelope',
				'title'        => esc_html__( 'Creative Ideas', 'marin-companion' ),
				// 'text'         => esc_html__( '', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b15',
			),
			array(
				'icon_value'   => 'fa-pie-chart',
				'title'        => esc_html__( 'Our Services', 'marin-companion' ),
				// 'text'         => esc_html__( '(+97) 750-290-3353', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b16',
			),
			array(
				'icon_value'   => 'fa-user',
				'title'        => esc_html__( 'Certified Experts', 'marin-companion' ),
				// 'text'         => esc_html__( '', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b17',
			),
			array(
				'icon_value'   => 'fa-cube',
				'title'        => esc_html__( 'Product Designs', 'marin-companion' ),
				// 'text'         => esc_html__( 'Get In Touch', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b17',
			),
		)
	)
);
