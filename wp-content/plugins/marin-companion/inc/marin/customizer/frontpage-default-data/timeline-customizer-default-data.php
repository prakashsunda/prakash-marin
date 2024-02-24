<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
	define(
		'MARIN_TIMELINE_DEFAULT_CONTENT',
		json_encode(
			array(
				array(
					'icon_value' => 'fa fa-user',
					'title'      => esc_html__( 'A Start Up journey', 'marin-companion' ),
					'subtitle'   => esc_html__( 'Projects Started 2019', 'marin-companion' ),
					'text'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod etc.', 'marin-companion' ),
				),
				array(
					'icon_value' => 'fa fa-hand-peace-o',
					'title'      => esc_html__( 'Big Project Finished', 'marin-companion' ),
					'subtitle'   => esc_html__( 'Completed 2020', 'marin-companion' ),
					'text'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod etc.', 'marin-companion' ),
				),
				array(
					'icon_value' => 'fa fa-coffee',
					'title'      => esc_html__( '50+ Projects Done', 'marin-companion' ),
					'subtitle'   => esc_html__( 'Projects Done 2022', 'marin-companion' ),
					'text'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod etc.', 'marin-companion' ),
				),
				array(
					'icon_value' => 'fa fa-archive',
					'title'      => esc_html__( 'New Achievement', 'marin-companion' ),
					'subtitle'   => esc_html__( 'Strted Yet', 'marin-companion' ),
					'text'       => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod etc.', 'marin-companion' ),
				),
			)
		)
	);

