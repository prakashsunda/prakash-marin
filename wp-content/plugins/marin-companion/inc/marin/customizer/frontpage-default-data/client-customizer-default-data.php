<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
	define(
		'MARIN_CLIENT_DEFAULT_CONTENT',
		wp_json_encode(
			array(
				array(
					'image_url' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/client/client01.png',
					'title'     => esc_html__( 'Creative', 'marin-companion' ),
					'subtitle'  => esc_html__( 'Business', 'marin-companion' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_client_001',
				),
				array(
					'image_url' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/client/client02.png',
					'title'     => esc_html__( 'Creative', 'marin-companion' ),
					'subtitle'  => esc_html__( 'Logo', 'marin-companion' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_client_002',
				),
				array(
					'image_url' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/client/client03.png',
					'title'     => esc_html__( 'Website', 'marin-companion' ),
					'subtitle'  => esc_html__( 'Hosting', 'marin-companion' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_client_003',
				),
				array(
					'image_url' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/client/client04.png',
					'title'     => esc_html__( 'Digital', 'marin-companion' ),
					'subtitle'  => esc_html__( 'Marketing', 'marin-companion' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_client_004',
				),
				array(
					'image_url' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/client/client05.png',
					'title'     => esc_html__( 'Business', 'marin-companion' ),
					'subtitle'  => esc_html__( 'Group', 'marin-companion' ),
					'link'      => '#',
					'id'        => 'customizer_repeater_client_005',
				),

			)
		)
	);
