<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage features.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Features_Option' ) ) :

	class marin_Customize_Homepage_Features_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_main_features_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Features Options', 'marin-companion' ),
						'section'  => 'marin_theme_features',
					),
				),

				'marin_features_area_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Features Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_features',
					),
				),

				'marin_features_settings_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 24,
						'label'           => esc_html__( 'Feature Extra Settings', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'active_callback' => 'marin_features_settings_heading',
					),
				),

				// container.
				'marin_features_container_size'   => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Features Width', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_features_container_size',
					),
				),
				// column layout.
				'marin_features_column_layout'    => array(
					'setting' => array(
						'default'           => 'av-column-6',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 30,
						'label'           => esc_html__( 'Column Layout', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'choices'         => array(
							'av-column-6' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'av-column-4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'av-column-3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
						),
						'active_callback' => 'marin_features_column_layout',
					),

				),

				// features Count For Homepage.
				/* 'marin_features_count'            => array(
					'setting' => array(
						'default'           => array(
							'slider' => 4,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 55,
						'label'           => esc_html__( 'HomaPage Features Count', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'input_attrs'     => array(
							'min'  => 2,
							'max'  => 20,
							'step' => 1,
						),
						'active_callback' => 'marin_features_count',
					),
				), */

				// Section Color Settings Heading.
				'marin_features_section_color_heading'            => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'active_callback' => 'marin_features_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_features_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'active_callback' => 'marin_features_section_color_disable',
					),
				),

				// Title Color.
				'marin_features_section_title_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_features_section_title_color',
					),
				),

				// Description Color.
				'marin_features_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_features',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_features_section_description_color',
					),
				),

				'marin_features_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 10,
						'label'    => esc_html__( 'Features', 'marin-companion' ),
						'section'  => 'marin_theme_features',
					),
				),

			);

		}

	}

	new marin_Customize_Homepage_Features_Option();

endif;
