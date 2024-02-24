<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define(
	'MARIN_FOOTER_INFO_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'icon_value'   => 'fa fa-clock-o',
				'title'        => esc_html__( 'Mon-Fri 9am-6pm', 'marin-companion' ),
				'text'         => esc_html__( 'Mon-Sat: 8am-5pm', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b15',
			),
			array(
				'icon_value'   => 'fa fa-envelope-o',
				'title'        => esc_html__( 'Support Mail', 'marin-companion' ),
				'text'         => esc_html__( 'info@example.com', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b16',
			),
			array(
				'icon_value'   => 'fa fa-map-marker',
				'title'        => esc_html__( '380 St Klida Road', 'marin-companion' ),
				'text'         => esc_html__( 'Melbourne, Australia', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b17',
			),
		)
	)
);

