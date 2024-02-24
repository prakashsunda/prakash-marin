<?php

/*
 *
 * Footer Above Default
 */
function marin_get_footer_above_default() {
	return apply_filters(
		'marin_get_footer_above_default',
		json_encode(
			array(
				array(
					'icon_value' => 'fa-clock-o',
					'title'      => esc_html__( 'Mon-Fri 9am-6pm', 'marin' ),
					'text'       => esc_html__( 'Mon-Sat: 8am-5pm', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_footer_above_001',

				),
				array(
					'icon_value' => 'fa-envelope-o',
					'title'      => esc_html__( 'Support Mail', 'marin' ),
					'text'       => esc_html__( 'info@example.com', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_footer_above_002',

				),
				array(
					'icon_value' => 'fa-map-marker',
					'title'      => esc_html__( '380 St Klida Road', 'marin' ),
					'text'       => esc_html__( 'Melbourne, Australia', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_footer_above_003',

				),
			)
		)
	);
}
