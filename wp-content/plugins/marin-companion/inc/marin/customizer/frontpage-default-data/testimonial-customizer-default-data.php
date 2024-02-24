<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
define(
	'MARIN_TESTIMONIAL_DEFAULT_CONTENT',
	wp_json_encode(
		array(
			array(
				'title'          => 'Creative & Professional',
				'text'           => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout. It vaese tam simplic quam Occidental in fact.',
				'subtitle'       => __( 'Annah Montana', 'marin-companion' ),
				'designation'    => __( 'CEO & Founder', 'marin-companion' ),
				'link'           => '#',
				'image_url'      => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/testimonial/img1.png',
				'rating_control' => 'customizer_repeater_rating_control_five',
				'open_new_tab'   => 'no',
				'id'             => 'customizer_repeater_56d7ea7f40b96',
			),
			array(
				'title'          => 'I Highly Recommended',
				'text'           => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout. It vaese tam simplic quam Occidental in fact.',
				'subtitle'       => __( 'Jenifer Albert', 'marin-companion' ),
				'designation'    => __( 'Manager', 'marin-companion' ),
				'link'           => '#',
				'image_url'      => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/testimonial/img2.png',
				'rating_control' => 'customizer_repeater_rating_control_four',
				'open_new_tab'   => 'no',
				'id'             => 'customizer_repeater_56d7ea7f40b97',
			),
			array(
				'title'          => 'Very Easy to Use',
				'text'           => 'It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout. It vaese tam simplic quam Occidental in fact.',
				'subtitle'       => __( 'Clovia Olson', 'marin-companion' ),
				'designation'    => __( 'Designer', 'marin-companion' ),
				'link'           => '#',
				'image_url'      => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/testimonial/img3.png',
				'rating_control' => 'customizer_repeater_rating_control_four',
				'id'             => 'customizer_repeater_56d7ea7f40b98',
				'open_new_tab'   => 'no',
			),
		)
	)
);
