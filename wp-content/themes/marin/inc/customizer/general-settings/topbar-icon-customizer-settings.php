<?php

function marin_topbar_icon_settings( $wp_customize ) {

	$active_callback = isset( $array['active_callback'] ) ? $array['active_callback'] : null;

	/**
	 * Customizer Repeater : Topbar Social Icons
	 */
	$wp_customize->add_setting(
		'marin_topbar_social_icons',
		array(
			'sanitize_callback' => 'marin_repeater_sanitize',
			'default'           => marin_get_social_icon_default(),
		)
	);

	$wp_customize->add_control(
		new marin_Repeater(
			$wp_customize,
			'marin_topbar_social_icons',
			array(
				'label'                            => esc_html__( 'Social Icons', 'marin' ),
				'section'                          => 'marin_topbar_settings',
				'add_field_label'                  => esc_html__( 'Add New Social', 'marin' ),
				'item_name'                        => esc_html__( 'Social', 'marin' ),
				'priority'                         => 16,
				'customizer_repeater_icon_control' => true,
				'customizer_repeater_link_control' => true,
				'active_callback'                  => 'marin_topbar_social_icons',
			)
		)
	);
}
add_action( 'customize_register', 'marin_topbar_icon_settings' );
