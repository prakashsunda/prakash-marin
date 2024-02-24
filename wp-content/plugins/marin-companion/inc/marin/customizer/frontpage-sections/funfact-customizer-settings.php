<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage Call to action
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Funfact_Option' ) ) :

	class marin_Customize_Homepage_Funfact_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_main_funfact_heading'              => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Funfact Options', 'marin-companion' ),
						'section'  => 'marin_theme_funfact',
					),
				),

				'marin_funfact_disabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_funfact',
					),
				),

				'marin_funfact_settings_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 20,
						'label'           => esc_html__( 'Funfact Extra Settings', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'active_callback' => 'marin_funfact_settings_heading',
					),
				),

				// container.
				'marin_funfact_container_size'            => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Funfact Width', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_funfact_container_size',
					),
				),
				// column layout.
				'marin_funfact_column_layout'             => array(
					'setting' => array(
						'default'           => 'av-column-4',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 30,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'choices'         => array(
							'av-column-6' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'av-column-4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'av-column-3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
						),
						'active_callback' => 'marin_funfact_column_layout',
					),

				),

				// Section Color Settings Heading.
				'marin_funfact_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'active_callback' => 'marin_funfact_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_funfact_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'active_callback' => 'marin_funfact_section_color_disable',
					),
				),

				// Title Color.
				'marin_funfact_section_title_color'       => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_funfact_section_title_color',
					),
				),

				// Description Color.
				'marin_funfact_section_description_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_funfact_section_description_color',
					),
				),

				'marin_funfact_upgrade'                    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Funfact', 'marin-companion' ),
						'section'  => 'marin_theme_funfact',
					),
				),

			);
		}

	}

	new marin_Customize_Homepage_Funfact_Option();

endif;
