<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Testimonial.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Testimonial_Option' ) ) :

	class marin_Customize_Homepage_Testimonial_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_main_testimonial_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Testimonial Options', 'marin-companion' ),
						'section'  => 'marin_theme_testimonial',
					),
				),

				// Testimonial Enable.
				'marin_testimonial_disabled'              => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Testimonial Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_testimonial',
					),
				),
				// Testimonial Extra.
				'marin_testimonial_details_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 14,
						'label'           => esc_html__( 'Testimonial Carousal Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'active_callback' => 'marin_testimonial_details_heading',
					),
				),

				// Testimonial Autoplay.
				'marin_testimonial_autoplay_disable'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 15,
						'label'           => esc_html__( 'Testimonial Autoplay (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'active_callback' => 'marin_testimonial_autoplay_disable',
					),
				),

				// Testimonial Animation Speed.
				'marin_testimonial_animation_speed'       => array(
					'setting' => array(
						'default'           => array(
							'slider' => 6000,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 20,
						'label'           => esc_html__( 'Testimonial Animation Speed (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'marin_testimonial_animation_speed',
					),
				),

				// Testimonial Dots.
				'marin_testimonial_dots'                  => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Testimonial Dots Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'active_callback' => 'marin_testimonial_dots',
					),
				),

				// Testimonial Nav.
				'marin_testimonial_nav'                   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Testimonial Nav Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'active_callback' => 'marin_testimonial_nav',
					),
				),

				// Section Color Settings Heading.
				'marin_testimonial_section_color_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'active_callback' => 'marin_testimonial_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_testimonial_section_color_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'active_callback' => 'marin_testimonial_section_color_disable',
					),
				),

				// Title Color.
				'marin_testimonial_section_title_color'   => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_testimonial_section_title_color',
					),
				),

				// Description Color.
				'marin_testimonial_section_description_color' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_testimonial',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_testimonial_section_description_color',
					),
				),

				'marin_testimonial_upgrade'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Testimonial', 'marin-companion' ),
						'section'  => 'marin_theme_testimonial',
					),
				),

			);
		}
	}

	new marin_Customize_Homepage_Testimonial_Option();

endif;
