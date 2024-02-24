<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_SERVICE_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'image_url'  => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/service/service-1.png',
				'icon_value' => 'fa-shield',
				'title'      => esc_html__( 'Secure Business', 'marin-companion' ),
				'subtitle'   => esc_html__( 'Cyber Security', 'marin-companion' ),
				'subtitle2'  => esc_html__( 'A Trusted Partner', 'marin-companion' ),
				'subtitle3'  => esc_html__( 'Application Security', 'marin-companion' ),
				'text'       => esc_html__( 'Contrary to popular belief, Lorem ipsum is not simply random text. it has roots in a piece of classical Latin literature Contrary', 'marin-companion' ),
				'text2'      => esc_html__( 'View More', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_service_001',
			),
			array(
				'image_url'  => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/service/service-2.png',
				'icon_value' => 'fa-envelope-o',
				'title'      => esc_html__( 'Facebook Ads', 'marin-companion' ),
				'subtitle'   => esc_html__( 'Cyber Security', 'marin-companion' ),
				'subtitle2'  => esc_html__( 'A Trusted Partner', 'marin-companion' ),
				'subtitle3'  => esc_html__( 'Application Security', 'marin-companion' ),
				'text'       => esc_html__( 'Contrary to popular belief, Lorem ipsum is not simply random text. it has roots in a piece of classical Latin literature Contrary', 'marin-companion' ),
				'text2'      => esc_html__( 'View More', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_service_002',
			),
			array(
				'image_url'  => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/service/service-3.png',
				'icon_value' => 'fa-pie-chart',
				'title'      => esc_html__( 'Marketing Analytics', 'marin-companion' ),
				'subtitle'   => esc_html__( 'Cyber Security', 'marin-companion' ),
				'subtitle2'  => esc_html__( 'A Trusted Partner', 'marin-companion' ),
				'subtitle3'  => esc_html__( 'Application Security', 'marin-companion' ),
				'text'       => esc_html__( 'Contrary to popular belief, Lorem ipsum is not simply random text. it has roots in a piece of classical Latin literature Contrary', 'marin-companion' ),
				'text2'      => esc_html__( 'View More', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_service_003',
			),
		)
	)
);
	// }
	// }
	// add_action( 'customize_register', 'MARIN_SERVICE_DEFAULT_CONTENT' );
	// endif;

