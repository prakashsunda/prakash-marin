<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_ABOUT_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'title'  => esc_html__( 'SEO Marketing', 'marin-companion' ),
				'number' => 51,
				'link'   => '#',
				'id'     => 'customizer_repeater_features_001',
			),
			array(
				'title'  => esc_html__( 'Web Design', 'marin-companion' ),
				'number' => 72,
				'link'   => '#',
				'id'     => 'customizer_repeater_features_002',
			),
			array(
				'title'  => esc_html__( 'Features Addons', 'marin-companion' ),
				'number' => 63,
				'link'   => '#',
				'id'     => 'customizer_repeater_features_003',
			),
			array(
				'title'  => esc_html__( 'Cloud Host', 'marin-companion' ),
				'number' => 84,
				'link'   => '#',
				'id'     => 'customizer_repeater_features_004',
			),
		)
	)
);

