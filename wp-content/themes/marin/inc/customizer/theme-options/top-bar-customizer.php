<?php
	require 'customizer-callback/top-bar-typo.php';

	// A. Topbar phone details icon setting.
	$wp_customize->add_setting(
		'marin_contact_detail_icon',
		array(
			'default'           => 'fa-times-circle-o',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new marin_Icon_Picker_Control(
			$wp_customize,
			'marin_contact_detail_icon',
			array(
				'label'           => __( 'Icon', 'marin' ),
				'section'         => 'marin_topbar_settings',
				'iconset'         => 'fa',
				'priority'        => 31,
				'active_callback' => 'marin_contact_detail_icon',
			)
		)
	);
	// Topbar phone details Label.
	$wp_customize->add_setting(
		'marin_contact_detail_text',
		array(
			'default'           => 'Live Chat',
			'sanitize_callback' => 'marin_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'marin_contact_detail_text',
		array(
			'label'           => __( 'Text', 'marin' ),
			'section'         => 'marin_topbar_settings',
			'type'            => 'text',
			'priority'        => 33,
			'active_callback' => 'marin_contact_detail_text',
		)
	);

	// Topbar phone details Link.
	$wp_customize->add_setting(
		'marin_contact_detail_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'marin_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'marin_contact_detail_link',
		array(
			'label'           => __( 'Link', 'marin' ),
			'section'         => 'marin_topbar_settings',
			'type'            => 'text',
			'priority'        => 35,
			'active_callback' => 'marin_contact_detail_link',
		)
	);

	// B. Topbar phone details icon setting.
	$wp_customize->add_setting(
		'marin_email_detail_icon',
		array(
			'default'           => 'fa-envelope',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new marin_Icon_Picker_Control(
			$wp_customize,
			'marin_email_detail_icon',
			array(
				'label'           => __( 'Icon', 'marin' ),
				'section'         => 'marin_topbar_settings',
				'iconset'         => 'fa',
				'priority'        => 41,
				'active_callback' => 'marin_email_detail_icon',
			)
		)
	);
	// Topbar phone details Label.
	$wp_customize->add_setting(
		'marin_email_detail_text',
		array(
			'default'           => 'info@example.com',
			'sanitize_callback' => 'marin_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'marin_email_detail_text',
		array(
			'label'           => __( 'Text', 'marin' ),
			'section'         => 'marin_topbar_settings',
			'type'            => 'text',
			'priority'        => 43,
			'active_callback' => 'marin_email_detail_text',
		)
	);

	// Topbar phone details Link.
	$wp_customize->add_setting(
		'marin_email_detail_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'marin_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'marin_email_detail_link',
		array(
			'label'           => __( 'Link', 'marin' ),
			'section'         => 'marin_topbar_settings',
			'type'            => 'text',
			'priority'        => 45,
			'active_callback' => 'marin_email_detail_link',
		)
	);

	// c. Topbar phone details icon setting.
	$wp_customize->add_setting(
		'marin_mobile_detail_icon',
		array(
			'default'           => 'fa-whatsapp',
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		new marin_Icon_Picker_Control(
			$wp_customize,
			'marin_mobile_detail_icon',
			array(
				'label'           => __( 'Icon', 'marin' ),
				'section'         => 'marin_topbar_settings',
				'iconset'         => 'fa',
				'priority'        => 51,
				'active_callback' => 'marin_mobile_detail_icon',
			)
		)
	);
	// Topbar phone details Label.
	$wp_customize->add_setting(
		'marin_mobile_detail_text',
		array(
			'default'           => '+01-9876543210',
			'sanitize_callback' => 'marin_sanitize_text',
		)
	);

	$wp_customize->add_control(
		'marin_mobile_detail_text',
		array(
			'label'           => __( 'Text', 'marin' ),
			'section'         => 'marin_topbar_settings',
			'type'            => 'text',
			'priority'        => 53,
			'active_callback' => 'marin_mobile_detail_text',
		)
	);

	// Topbar phone details Link.
	$wp_customize->add_setting(
		'marin_mobile_detail_link',
		array(
			'default'           => '',
			'sanitize_callback' => 'marin_sanitize_url',
		)
	);

	$wp_customize->add_control(
		'marin_mobile_detail_link',
		array(
			'label'           => __( 'Link', 'marin' ),
			'section'         => 'marin_topbar_settings',
			'type'            => 'text',
			'priority'        => 55,
			'active_callback' => 'marin_mobile_detail_link',
		)
	);
