<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage about.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_About_Option' ) ) :

	class marin_Customize_Homepage_About_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_main_about_heading'              => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'About Options', 'marin-companion' ),
						'section'  => 'marin_theme_about',
					),
				),

				'marin_about_area_disabled'             => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'About Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_about',
					),
				),

				'marin_about_meta_heading'              => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 12,
						'label'           => esc_html__( 'About Meta Settings', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'active_callback' => 'marin_about_meta_heading',
					),
				),

				// if about section image found.
				'marin_about_img_text'                  => array(
					'setting' => array(
						'default'           => 'Call Us : +70 975 975 70',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 18,
						'is_default_type' => true,
						'label'           => esc_html__( 'About Image Text', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'active_callback' => 'marin_about_img_text',
					),
				),

				// Extra Settings.
				'marin_about_settings_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 24,
						'label'           => esc_html__( 'About Extra Settings', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'active_callback' => 'marin_about_settings_heading',
					),
				),

				// container.
				'marin_about_container_size'            => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'About Width (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_about_container_size',
					),
				),

				// Section Color Settings Heading.
				'marin_about_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'active_callback' => 'marin_about_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_about_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'active_callback' => 'marin_about_section_color_disable',
					),
				),

				// Title Color.
				'marin_about_section_title_color'       => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_about_section_title_color',
					),
				),

				// Description Color.
				'marin_about_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_about',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_about_section_description_color',
					),
				),

				'marin_about_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'About', 'marin-companion' ),
						'section'  => 'marin_theme_about',
					),
				),

			);

		}

	}

	new marin_Customize_Homepage_About_Option();

endif;
