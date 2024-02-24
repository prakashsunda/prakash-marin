<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_PORTFOLIO_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'image_url'    => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/service/service-1.png',
				'title'        => esc_html__( 'Digital Marketing', 'marin-companion' ),
				'subtitle'     => esc_html__( 'Branding', 'marin-companion' ),
				'text'         => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40c56',
			),
			array(
				'image_url'    => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/service/service-2.png',
				'title'        => esc_html__( 'Development', 'marin-companion' ),
				'subtitle'     => esc_html__( 'Works', 'marin-companion' ),
				'text'         => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40c66',
			),
			array(
				'image_url'    => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/service/service-3.png',
				'title'        => esc_html__( 'Management', 'marin-companion' ),
				'subtitle'     => esc_html__( 'Creation', 'marin-companion' ),
				'text'         => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod', 'marin-companion' ),
				'link'         => '#',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40c76',
			),
		)
	)
);
