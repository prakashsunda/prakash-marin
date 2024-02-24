<?php

if ( class_exists( 'marin_Customize_Range_Control' ) ) {
	// container width.
	$wp_customize->add_setting(
		'marin_site_cntnr_width',
		array(
			'default'           => '1200',
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'marin_sanitize_range_value',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new marin_Customize_Range_Control(
			$wp_customize,
			'marin_site_cntnr_width',
			array(
				'label'       => __( 'Container Width', 'marin' ),
				'section'     => 'marin_theme_general',
				'priority'    => 100,
				'input_attrs' => array(
					'min'  => 768,
					'max'  => 2000,
					'step' => 1,
					// 'suffix' => 'px', //optional suffix.
				),
			)
		)
	);

	$wp_customize->add_setting(
		'marin_breadcrumb_height',
		array(
			'default'           => 246,
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'marin_sanitize_range_value',
			'transport'         => 'postMessage',
		)
	);
	$wp_customize->add_control(
		new marin_Customize_Range_Control(
			$wp_customize,
			'marin_breadcrumb_height',
			array(
				'label'           => __( 'Content Height', 'marin' ),
				'section'         => 'marin_theme_breadcrumb',
				'priority'        => 8,
				'input_attrs'     => array(
					'min'  => 1,
					'max'  => 800,
					'step' => 1,
					// 'suffix' => 'px', //optional suffix
				),
				'active_callback' => 'marin_breadcrumb_height',
			)
		)
	);
}

// Background Image.
$wp_customize->add_setting(
	'marin_breadcrumb_bg_img',
	array(
		'default'           => esc_url( get_template_directory_uri() . '/assets/images/breadcrumb/breadcrumb.jpg' ),
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'marin_sanitize_url',
		'priority'          => 10,
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'marin_breadcrumb_bg_img',
		array(
			'label'           => esc_html__( 'Background Image', 'marin' ),
			'section'         => 'marin_theme_breadcrumb',
			'active_callback' => 'marin_breadcrumb_bg_img',
		),
	)
);

// Background Attachment.
$wp_customize->add_setting(
	'marin_breadcrumb_back_attach',
	array(
		'default'           => 'scroll',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'marin_sanitize_select',
		'priority'          => 10,
	)
);

$wp_customize->add_control(
	'marin_breadcrumb_back_attach',
	array(
		'label'           => __( 'Background Attachment', 'marin' ),
		'section'         => 'marin_theme_breadcrumb',
		'type'            => 'select',
		'choices'         =>
		array(
			'inherit' => __( 'Inherit', 'marin' ),
			'scroll'  => __( 'Scroll', 'marin' ),
			'fixed'   => __( 'Fixed', 'marin' ),
		),
		'active_callback' => 'marin_breadcrumb_back_attach',
	)
);


