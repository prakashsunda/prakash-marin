<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_FAQ_DEFAULT_CONTENT',
	json_encode(
		array(
			array(
				'icon_value' => 'fa fa-wechat',
				'title'      => esc_html__( 'Quick Answers', 'marin-companion' ),
				'text'       => esc_html__( 'Find Brief answer to your short question here', 'marin-companion' ),
			),
			array(
				'icon_value' => 'fa fa-whatsapp',
				'title'      => esc_html__( 'Let Talk', 'marin-companion' ),
				'text'       => esc_html__( 'Find Brief answer to your short question here', 'marin-companion' ),
			),
			array(
				'icon_value' => 'fa fa-facebook',
				'title'      => esc_html__( 'We are Social', 'marin-companion' ),
				'text'       => esc_html__( 'Find Brief answer to your short question here', 'marin-companion' ),
			),
			array(
				'icon_value' => 'fa fa-headphones',
				'title'      => esc_html__( 'Support', 'marin-companion' ),
				'text'       => esc_html__( 'Find Brief answer to your short question here', 'marin-companion' ),
			),
		)
	)
);
