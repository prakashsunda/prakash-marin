<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Call to action
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Cta_Option' ) ) :

	class marin_Customize_Homepage_Cta_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_main_cta_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'CallOut Options', 'marin-companion' ),
						'section'  => 'marin_theme_cta',
					),
				),

				'marin_cta_disabled'       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_cta',
					),
				),

				'marin_cta_effect_enable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 3,
						'label'           => esc_html__( 'Water Effect Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_effect_enable',
					),
				),

				// left side content setting.
				'marin_cta_left_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 120,
						'label'           => esc_html__( 'Left Content', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_left_heading',
					),
				),

				'marin_cta_area_title2'    => array(
					'setting' => array(
						'default'           => 'Call Us',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 150,
						'is_default_type' => true,
						'label'           => esc_html__( 'Title', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_area_title2',
					),
				),

				'marin_cta_area_des2'      => array(
					'setting' => array(
						'default'           => '+(01) 246 2365',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'textarea',
						'priority'        => 160,
						'is_default_type' => true,
						'label'           => esc_html__( 'Description', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_area_des2',
					),
				),

				// right content setting.
				'marin_cta_right_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 220,
						'label'           => esc_html__( 'Right Content', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_right_heading',
					),
				),

				'marin_cta_area_title'     => array(
					'setting' => array(
						'default'           => 'LETS CREATE SOMTHING MAGICAL TOGETHER',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 250,
						'is_default_type' => true,
						'label'           => esc_html__( 'Title', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_area_title',
					),
				),

				'marin_cta_area_des'       => array(
					'setting' => array(
						'default'           => 'How Can We Help You?',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'textarea',
						'priority'        => 260,
						'is_default_type' => true,
						'label'           => esc_html__( 'Description', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_area_des',
					),
				),

				// Button heading setting.
				'marin_cta_button_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 320,
						'label'           => esc_html__( 'Button Setting', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_button_heading',
					),
				),

				// Button content setting.
				'marin_cta_button_text'    => array(
					'setting' => array(
						'default'           => 'Contact Us',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 350,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Text', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_button_text',
					),
				),

				'marin_cta_button_link'    => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'url',
						'priority'        => 380,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_button_link',
					),
				),

				// Extra settings.
				'marin_cta_extra_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 905,
						'label'           => esc_html__( 'Cta Extra Settings', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'active_callback' => 'marin_cta_extra_heading',
					),
				),

				// container.
				'marin_cta_container_size' => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 1000,
						'is_default_type' => true,
						'label'           => esc_html__( 'Cta Width', 'marin-companion' ),
						'section'         => 'marin_theme_cta',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_cta_container_size',
					),
				),

			);

		}

	}

	new marin_Customize_Homepage_Cta_Option();

endif;
