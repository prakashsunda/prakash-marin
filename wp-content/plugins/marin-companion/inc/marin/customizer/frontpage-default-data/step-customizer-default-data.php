<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_STEP_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'icon_value' => 'fa fa-paint-brush',
				'title'      => esc_html__( 'We Think A Design', 'marin-companion' ),
				'subtitle'   => esc_html__( 'Ideas', 'marin-companion' ),
				'text'       => esc_html__( 'We have the technology and industry expertise to develop solutions.', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_step_001',
			),
			array(
				'icon_value' => 'fa fa-rocket',
				'title'      => esc_html__( 'We Draw A Sketch', 'marin-companion' ),
				'subtitle'   => esc_html__( 'Creativity', 'marin-companion' ),
				'text'       => esc_html__( 'We have the technology and industry expertise to develop solutions.', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_step_002',
			),
			array(
				'icon_value' => 'fa fa-code',
				'title'      => esc_html__( 'Design & Develop', 'marin-companion' ),
				'subtitle'   => esc_html__( 'Hard Work', 'marin-companion' ),
				'text'       => esc_html__( 'We have the technology and industry expertise to develop solutions.', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_step_003',
			),
			array(
				'icon_value' => 'fa fa-check',
				'title'      => esc_html__( 'We Test & Deliver', 'marin-companion' ),
				'subtitle'   => esc_html__( 'Work Done', 'marin-companion' ),
				'text'       => esc_html__( 'We have the technology and industry expertise to develop solutions.', 'marin-companion' ),
				'link'       => '#',
				'id'         => 'customizer_repeater_step_004',
			),
		)
	)
);
