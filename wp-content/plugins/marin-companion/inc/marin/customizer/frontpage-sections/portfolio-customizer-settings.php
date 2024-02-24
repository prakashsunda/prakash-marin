<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage portfolio.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Portfolio_Option' ) ) :

	class marin_Customize_Homepage_Portfolio_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_portfolio_heading'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Portfolio Options', 'marin-companion' ),
						'section'  => 'marin_theme_portfolio',
					),
				),

				'marin_portfolio_disabled'              => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Portfolio Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_portfolio',
					),
				),

				'marin_portfolio_settings_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 50,
						'label'           => esc_html__( 'Portfolio Extra Settings', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'active_callback' => 'marin_portfolio_settings_heading',
					),
				),

				// container.
				'marin_portfolio_container_size'        => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 65,
						'is_default_type' => true,
						'label'           => esc_html__( 'Portfolio Width (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_portfolio_container_size',
					),
				),

				// column layout.
				'marin_portfolio_column_layout'         => array(
					'setting' => array(
						'default'           => 'av-column-4',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 80,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'choices'         => array(
							'av-column-6' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'av-column-4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'av-column-3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
						),
						'active_callback' => 'marin_portfolio_column_layout',
					),

				),

				// Portfolio Count For Homepage.
				'marin_portfolio_count'                 => array(
					'setting' => array(
						'default'           => array(
							'slider' => 3,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 105,
						'label'           => esc_html__( 'HomePage Portfolio Count (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'input_attrs'     => array(
							'min'  => 2,
							'max'  => 20,
							'step' => 1,
						),
						'active_callback' => 'marin_portfolio_count',
					),
				),

				// Portfolio Button Text.
				'marin_portfolio_button_text'           => array(
					'setting' => array(
						'default'           => 'Show More',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 125,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Text', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'active_callback' => 'marin_portfolio_button_text',
					),
				),

				// Portfolio Button Link.
				'marin_portfolio_button_link'           => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'url',
						'priority'        => 150,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'active_callback' => 'marin_portfolio_button_link',
					),
				),

				// Section Color Settings Heading.
				'marin_portfolio_section_color_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'active_callback' => 'marin_portfolio_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_portfolio_section_color_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'active_callback' => 'marin_portfolio_section_color_disable',
					),
				),

				// Title Color.
				'marin_portfolio_section_title_color'   => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_portfolio_section_title_color',
					),
				),

				// Description Color.
				'marin_portfolio_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_portfolio',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_portfolio_section_description_color',
					),
				),

				'marin_portfolio_upgrade'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 11,
						'label'    => esc_html__( 'Portfolio', 'marin-companion' ),
						'section'  => 'marin_theme_portfolio',
					),
				),

			);
		}
	}

	new marin_Customize_Homepage_Portfolio_Option();

endif;
