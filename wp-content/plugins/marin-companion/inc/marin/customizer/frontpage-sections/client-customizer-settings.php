<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Client.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Client_Option' ) ) :

	class marin_Customize_Homepage_Client_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_client_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Client Options', 'marin-companion' ),
						'section'  => 'marin_theme_client',
					),
				),

				// Client Enable.
				'marin_client_disabled'        => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Client Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_client',
					),
				),

				// Client Extra.
				'marin_client_details_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 14,
						'label'           => esc_html__( 'Client Carousal Settings', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'active_callback' => 'marin_client_details_heading',
					),
				),

				// Client Autoplay.
				'marin_client_autoplay_disable'        => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 15,
						'label'           => esc_html__( 'Client Autoplay (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'active_callback' => 'marin_client_autoplay_disable',
					),
				),

				// Client Animation Speed.
				'marin_client_animation_speed'   => array(
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
						'label'           => esc_html__( 'Client Animation Speed (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'marin_client_animation_speed',
					),
				),

				// client Dots.
				'marin_client_dots'              => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Client Dots Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'active_callback' => 'marin_client_dots',
					),
				),

				// client Nav.
				'marin_client_nav'               => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Client Nav Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'active_callback' => 'marin_client_nav',
					),
				),

				// client Extra.
				'marin_client_extra_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 80,
						'label'           => esc_html__( 'Client Extra Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'active_callback' => 'marin_client_extra_heading',
					),
				),

				// container.
				'marin_client_container_size'  => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 90,
						'is_default_type' => true,
						'label'           => esc_html__( 'Client Width (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'choices'         => array(
							'av-container'      => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_client_container_size',
					),
				),
				// column layout.
				'marin_client_column_layout'   => array(
					'setting' => array(
						'default'           => '4',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 230,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'choices'         => array(
							'2' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
							'5' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-5.png',
							'6' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-6.png',
							'7' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-7.png',
						),
						'active_callback' => 'marin_client_column_layout',
					),

				),

				// Section Color Settings Heading.
				'marin_client_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'active_callback' => 'marin_client_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_client_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'active_callback' => 'marin_client_section_color_disable',
					),
				),

				// Title Color.
				'marin_client_section_title_color'       => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_client_section_title_color',
					),
				),

				// Description Color.
				'marin_client_section_description_color (Pro*)' => array(
					'setting' => array(
						'default'           => '#fff',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_client',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_client_section_description_color',
					),
				),

				'marin_client_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Client', 'marin-companion' ),
						'section'  => 'marin_theme_client',
					),
				),

			);
		}
	}

	new marin_Customize_Homepage_Client_Option();

endif;
