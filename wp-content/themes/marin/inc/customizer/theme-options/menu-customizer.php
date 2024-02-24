<?php
	require 'customizer-callback/menu-callback.php';

	// Header Image.
	// $wp_customize->get_section( 'header_image' )->panel    = 'marin_theme_settings';
	// $wp_customize->get_section( 'header_image' )->title    = __( 'Page Header', 'marin' );
	// $wp_customize->get_section( 'header_image' )->priority = 40;

	// Sticky Bar Logo.
	// $wp_customize->add_setting(
	// 'marin_sticky_bar_logo',
	// array(
	// 'sanitize_callback' => 'esc_url_raw',
	// )
	// );
	// $wp_customize->add_control(
	// new WP_Customize_Image_Control(
	// $wp_customize,
	// 'marin_sticky_bar_logo',
	// array(
	// 'label'           => esc_html__( 'Set Sticky Menu Logo', 'marin' ),
	// 'description'     => esc_html__( 'You can Upload the Standrad size of logo (220x40px)', 'marin' ),
	// 'section'         => 'marin_theme_menu_bar',
	// 'settings'        => 'marin_sticky_bar_logo',
	// 'priority'        => 15,
	// 'active_callback' => 'marin_sticky_bar_logo',
	// )
	// )
	// );
	// function marin_sticky_bar_logo( $control ) {
	// return true === ( $control->manager->get_setting( 'marin_menu_style' )->value() == 'sticky' );
	// }

	// Menu Button icon setting.
	$wp_customize->add_setting(
		'marin_menu_btn_icon',
		array(
			'default'           => 'fa-user',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new marin_Icon_Picker_Control(
			$wp_customize,
			'marin_menu_btn_icon',
			array(
				'label'           => __( 'Icon', 'marin' ),
				'section'         => 'marin_theme_menu_bar',
				'iconset'         => 'fa',
				'priority'        => 40,
				'active_callback' => 'marin_menu_btn_icon',
			)
		)
	);
	// Menu Button Label.
	$wp_customize->add_setting(
		'marin_menu_btn_text',
		array(
			'default'           => 'Button',
			'sanitize_callback' => 'marin_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'marin_menu_btn_text',
		array(
			'label'           => __( 'Button Text', 'marin' ),
			'section'         => 'marin_theme_menu_bar',
			'type'            => 'text',
			'priority'        => 40,
			'active_callback' => 'marin_menu_btn_text',
		)
	);

	// Menu Button Link.
	$wp_customize->add_setting(
		'marin_menu_btn_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'marin_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'marin_menu_btn_link',
		array(
			'label'           => __( 'Button Link', 'marin' ),
			'section'         => 'marin_theme_menu_bar',
			'type'            => 'text',
			'priority'        => 50,
			'active_callback' => 'marin_menu_btn_link',
		)
	);
