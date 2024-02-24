<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_SLIDER_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'title'        => esc_html__( 'Welcome To Powerful Theme', 'marin-companion' ),
				'subtitle'     => esc_html__( 'The Marin For WordPress', 'marin-companion' ),
				'subtitle2'    => esc_html__( 'Websites', 'marin-companion' ),
				'text'         => esc_html__( 'Take Your Website To New Heights & Build The Website Of Your Dreams', 'marin-companion' ),
				'text2'        => __( 'Get In Touch', 'marin-companion' ),
				'link'         => '#',
				'slide_align'  => 'left',
				'image_url'    => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/slider/slider-1.webp',
				'slide_format' => 'customizer_repeater_slide_format_standard',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b96',
			),
			array(
				'title'        => esc_html__( 'Clean & Flexible & Responsive', 'marin-companion' ),
				'subtitle'     => esc_html__( 'Create Better Designs With', 'marin-companion' ),
				'subtitle2'    => esc_html__( 'marin-companion', 'marin-companion' ),
				'text'         => esc_html__( 'Take Your Business To New Heights & Build The Business Of Your Dreams', 'marin-companion' ),
				'text2'        => __( 'Contact Us', 'marin-companion' ),
				'link'         => '#',
				'slide_align'  => 'center',
				'image_url'    => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/slider/slider-2.webp',
				'slide_format' => 'customizer_repeater_slide_format_standard',
				'open_new_tab' => 'no',
				'id'           => 'customizer_repeater_56d7ea7f40b97',
			),
		)
	)
);

