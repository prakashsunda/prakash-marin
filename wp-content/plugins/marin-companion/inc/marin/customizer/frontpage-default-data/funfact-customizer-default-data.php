<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_FUNFACT_DEFAULT_CONTENT',
	json_encode(
		array(
			array(
				'icon_value' => 'fa fa-user',
				'title'      => esc_html__( '1505', 'marin-companion' ),
				'text'       => esc_html__( 'Happy Customer', 'marin-companion' ),
			),
			array(
				'icon_value' => 'fa fa-hand-peace-o',
				'title'      => esc_html__( '350', 'marin-companion' ),
				'text'       => esc_html__( 'Finish Projects', 'marin-companion' ),
			),
			array(
				'icon_value' => 'fa fa-coffee',
				'title'      => esc_html__( '501', 'marin-companion' ),
				'text'       => esc_html__( 'Cups of Coffee', 'marin-companion' ),
			),
		)
	)
);

