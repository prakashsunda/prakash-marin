<?php
	$wp_customize->add_setting(
		'marin_excerpt_length',
		array(
			'capability'        => 'edit_theme_options',
			'default'           => 30,
			'sanitize_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'marin_excerpt_length',
		array(
			'type'            => 'number',
			'section'         => 'marin_excerpt_general', // Add a default or your own section.
			'label'           => esc_html__( 'Text Count', 'marin' ),
			'description'     => esc_html__( 'excerpt number of words', 'marin' ),
			'input_attrs'     => array(
				'min'   => 10,
				'max'   => 300,
				'step'  => 5,
				'style' => 'width: 60px;',
			),
			'active_callback' => 'marin_excerpt_length_count',
		)
	);

	$wp_customize->add_setting(
		'marin_excerpt_more_text',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'default'           => esc_html__( 'Read More', 'marin' ),
		)
	);

	$wp_customize->add_control(
		'marin_excerpt_more_text',
		array(
			'label'           => esc_html__( 'Button Text', 'marin' ),
			'section'         => 'marin_excerpt_general',
			'type'            => 'text',
			'active_callback' => 'marin_excerpt_more_text',
		)
	);

	function marin_excerpt_disabled( $control ) {
		return true === ( $control->manager->get_setting( 'marin_excerpt_disabled' )->value() == true );
	}

	function marin_excerpt_length_count( $control ) {
		return true === ( $control->manager->get_setting( 'marin_excerpt_disabled' )->value() == true );
	}
	function marin_excerpt_more_text( $control ) {
		return true === ( $control->manager->get_setting( 'marin_excerpt_disabled' )->value() == true );
	}

