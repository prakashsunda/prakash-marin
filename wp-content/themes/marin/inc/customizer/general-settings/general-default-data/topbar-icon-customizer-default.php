<?php
/*
 *
 * Social Icon
 */

function marin_get_social_icon_default() {
	return apply_filters(
		'marin_get_social_icon_default',
		json_encode(
			array(
				array(
					'icon_value' => esc_html__( 'fa-facebook', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_header_social_001',
				),
				array(
					'icon_value' => esc_html__( 'fa-google-plus', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_header_social_002',
				),
				array(
					'icon_value' => esc_html__( 'fa-twitter', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_header_social_003',
				),
				array(
					'icon_value' => esc_html__( 'fa-linkedin', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_header_social_004',
				),
				array(
					'icon_value' => esc_html__( 'fa-behance', 'marin' ),
					'link'       => esc_html__( '#', 'marin' ),
					'id'         => 'customizer_repeater_header_social_005',
				),
			)
		)
	);
}
