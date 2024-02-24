<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage Main Team.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Team_Option' ) ) :

	class marin_Customize_Homepage_Team_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_team_heading'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Team Options', 'marin-companion' ),
						'section'  => 'marin_theme_team',
					),
				),

				// Team Enable.
				'marin_team_disabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Team Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_team',
					),
				),

				// Team Extra.
				'marin_team_details_heading'           => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 14,
						'label'           => esc_html__( 'Team Carousal Settings', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'active_callback' => 'marin_team_details_heading',
					),
				),

				// Team Autoplay.
				'marin_team_autoplay_disable'          => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 20,
						'label'           => esc_html__( 'AutoPlay Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'active_callback' => 'marin_team_autoplay_disable',
					),
				),

				// team Animation Speed.
				'marin_team_animation_speed'           => array(
					'setting' => array(
						'default'           => array(
							'slider' => 6000,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 30,
						'label'           => esc_html__( 'Team Animation Speed (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'marin_team_animation_speed',
					),
				),

				// team loop.
				// 'marin_team_loop'              => array(
				// 'setting' => array(
				// 'default'           => false,
				// 'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
				// ),
				// 'control' => array(
				// 'type'            => 'toggle',
				// 'priority'        => 40,
				// 'label'           => esc_html__( 'Team Loop Enable/Disable', 'marin-companion' ),
				// 'section'         => 'marin_theme_team',
				// 'active_callback' => 'marin_team_loop',
				// ),
				// ),

				// team Dots.
				'marin_team_dots'                      => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Team Dots Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'active_callback' => 'marin_team_dots',
					),
				),

				// team Nav.
				'marin_team_nav'                       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Team Nav Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'active_callback' => 'marin_team_nav',
					),
				),

				// Team Extra.
				'marin_team_extra_heading'             => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 80,
						'label'           => esc_html__( 'Team Extra Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'active_callback' => 'marin_team_extra_heading',
					),
				),

				// container.
				'marin_team_container_size'            => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 120,
						'is_default_type' => true,
						'label'           => esc_html__( 'Team Width (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_team_container_size',
					),
				),
				// column layout.
				'marin_team_column_layout'             => array(
					'setting' => array(
						'default'           => 4,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 150,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'choices'         => array(
							'2' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
							'5' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-5.png',
							'6' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-6.png',
						),
						'active_callback' => 'marin_team_column_layout',
					),
				),

				// Section Color Settings Heading.
				'marin_team_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'active_callback' => 'marin_team_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_team_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'active_callback' => 'marin_team_section_color_disable',
					),
				),

				// Title Color.
				'marin_team_section_title_color'       => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_team_section_title_color',
					),
				),

				// Description Color.
				'marin_team_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_team',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_team_section_description_color',
					),
				),

				'marin_team_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Team', 'marin-companion' ),
						'section'  => 'marin_theme_team',
					),
				),

			);
		}
	}

	new marin_Customize_Homepage_Team_Option();

endif;
