<?php
	require 'customizer-callback/footer-typo.php';
	// Footer copyright.

	// copyright text heading.
		$wp_customize->add_setting(
			'marin_footer_copyright_th',
			array(
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'marin_sanitize_text',
			)
		);

		$wp_customize->add_control(
			'marin_footer_copyright_th',
			array(
				'type'            => 'hidden',
				'label'           => __( 'Copyright Text', 'marin' ),
				'section'         => 'marin_footer_copyright',
				'priority'        => 9,
				'active_callback' => 'marin_footer_copyright_th',
			)
		);

		// copyright text setting.
		$wp_customize->add_setting(
			'marin_footer_copyright_text',
			array(
				'sanitize_callback' => 'marin_sanitize_text',
				'default'           => __( 'Copyright &copy; 2024 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Marin theme by Wp Frank', 'marin' ),
				'transport'         => $selective_refresh,
			)
		);

		$wp_customize->add_control(
			'marin_footer_copyright_text',
			array(
				'label'           => esc_html__( 'Add Copyright Text', 'marin' ),
				'section'         => 'marin_footer_copyright',
				'priority'        => 10,
				'type'            => 'textarea',
				'active_callback' => 'marin_footer_copyright_text',
			)
		);

		// Copyright Logo Heading.
		$wp_customize->add_setting(
			'marin_footer_copy_social_icon',
			array(
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'marin_sanitize_text',
			)
		);

		$wp_customize->add_control(
			'marin_footer_copy_social_icon',
			array(
				'type'            => 'hidden',
				'label'           => __( 'Social Icon', 'marin' ),
				'section'         => 'marin_footer_copyright',
				'priority'        => 18,
				'active_callback' => 'marin_footer_copy_social_icon',
			)
		);

		// Copyright Logo Heading.
		$wp_customize->add_setting(
			'marin_footer_copy_img',
			array(
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'marin_sanitize_text',
			)
		);

		$wp_customize->add_control(
			'marin_footer_copy_img',
			array(
				'type'            => 'hidden',
				'label'           => __( 'Logo', 'marin' ),
				'section'         => 'marin_footer_copyright',
				'priority'        => 20,
				'active_callback' => 'marin_footer_copy_img',
			)
		);

		// Copyright Logo Image.
		$wp_customize->add_setting(
			'marin_footer_first_img',
			array(
				'default'           => esc_url( get_template_directory_uri() . '/assets/images/logo2.png' ),
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'marin_sanitize_url',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'marin_footer_first_img',
				array(
					'label'           => esc_html__( 'Choose Image', 'marin' ),
					'section'         => 'marin_footer_copyright',
					'priority'        => 21,
					'active_callback' => 'marin_footer_first_img',
				)
			)
		);


		// this setting is footer widgets setting.
		// Copyright Logo Image.
		$wp_customize->add_setting(
			'marin_footer_bg_img',
			array(
				'default'           => esc_url( get_template_directory_uri() . '/assets/images/shape.png' ),
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'marin_sanitize_url',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'marin_footer_bg_img',
				array(
					'label'           => esc_html__( 'Footer Background Image', 'marin' ),
					'section'         => 'marin_footer_widgets',
					'priority'        => 50,
					'active_callback' => 'marin_footer_bg_img',
				)
			)
		);
