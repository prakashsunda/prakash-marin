<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define(
	'MARIN_FEATURES_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'icon_value' => 'fa-delicious',
				'title'      => esc_html__( 'SEO Marketing', 'marin-companion' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_001',
			),
			array(
				'icon_value' => 'fa-paint-brush',
				'title'      => esc_html__( 'Web Design', 'marin-companion' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_002',
			),
			array(
				'icon_value' => 'fa-plug',
				'title'      => esc_html__( 'Features Addons', 'marin-companion' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_003',
			),
			array(
				'icon_value' => 'fa-mixcloud',
				'title'      => esc_html__( 'Cloud Host', 'marin-companion' ),
				'text'       => esc_html__( 'Lorem ipsum is simple dummy', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_features_004',
			),
		)
	)
);

