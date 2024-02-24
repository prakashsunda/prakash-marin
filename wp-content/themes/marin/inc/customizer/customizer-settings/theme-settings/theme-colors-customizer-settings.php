<?php
/**
 * Theme Colors.
 *
 * @package Crypto AirDrop
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Theme_Colors_Option' ) ) :

	/**
	 * Menu option.
	 */
	class marin_Customize_Theme_Colors_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				// Skin Color Mode Settings.
				'marin_skin_colors_main_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Skin Color Mode (Light/Dark)', 'marin' ),
						'section'  => 'marin_theme_skin_color',
					),
				),

				// Primary Colors Section Background Selection.
				'marin_skin_colors_selection'         => array(
					'setting' => array(
						'default'           => 'light-color',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 10,
						'label'    => esc_html__( 'Skin Mode (Light / Dark)', 'marin' ),
						'section'  => 'marin_theme_skin_color',
						'choices'  => array(
							'light-color' => get_template_directory_uri() . '/assets/images/icons/color-mode1.png',
							'dark-color'  => get_template_directory_uri() . '/assets/images/icons/color-mode2.png',
						),
					),
				),

				// Primary and gradiatn Colors Settings.
				'marin_primary_colors_main_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Primary Colors', 'marin' ),
						'section'  => 'marin_theme_primary_color',
					),
				),

				'marin_primary_colors_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Theme Color', 'marin' ),
						'section'  => 'marin_theme_primary_color',
					),
				),

				// Primary Color Selection.
				'marin_primary_colors_selection'      => array(
					'setting' => array(
						'default'           => 'gradient-color',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 3,
						'label'    => esc_html__( 'Color Style (Solid / Gradient)', 'marin' ),
						'section'  => 'marin_theme_primary_color',
						'choices'  => array(
							'normal-color'   => get_template_directory_uri() . '/assets/images/icons/color1.png',
							'gradient-color' => get_template_directory_uri() . '/assets/images/icons/color2.png',
						),
					),
				),

				// Primary Gradient Color liner Scale.
				'marin_primary_color_liner_ct'        => array(
					'setting' => array(
						'default'           => array(
							'slider' => -137,
							'suffix' => 'deg',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 40,
						'label'           => esc_html__( 'Linear Color Transition(deg)', 'marin' ),
						'section'         => 'marin_theme_primary_color',
						'input_attrs'     => array(
							'min'  => -360,
							'max'  => 360,
							'step' => 1,
						),
						'active_callback' => 'marin_primary_color_liner_ct',
					),
				),

				// Primary Colors Section Background Heading.
				'marin_primary_colors_bg_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'        => 'heading',
						'priority'    => 50,
						'label'       => esc_html__( 'Theme Background (Base) Color', 'marin' ),
						'description' => esc_html__( 'This color setup is only for certain parts of the theme.', 'marin' ),
						'section'     => 'marin_theme_primary_color',
					),
				),

				// Primary Colors Section Background Selection.
				'marin_primary_bg_colors_selection'   => array(
					'setting' => array(
						'default'           => 'gradient-color',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 60,
						'label'    => esc_html__( 'Color Style (Solid / Gradient)', 'marin' ),
						'section'  => 'marin_theme_primary_color',
						'choices'  => array(
							'normal-color'   => get_template_directory_uri() . '/assets/images/icons/color1.png',
							'gradient-color' => get_template_directory_uri() . '/assets/images/icons/color2.png',
						),
					),
				),

				// Primary Background Gradient Color liner Scale.
				'marin_primary_bg_color_liner_ct'     => array(
					'setting' => array(
						'default'           => array(
							'slider' => 137,
							'suffix' => 'deg',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 90,
						'label'           => esc_html__( 'Linear Color Transition(deg)', 'marin' ),
						'section'         => 'marin_theme_primary_color',
						'input_attrs'     => array(
							'min'  => -360,
							'max'  => 360,
							'step' => 1,
						),
						'active_callback' => 'marin_primary_bg_color_liner_ct',
					),
				),

				// 1. Primary Menu Colors.
					// Menu Colors Enable Disable
					'marin_colors_menu_disable'       => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Menu Colors', 'marin' ),
							'section'  => 'marin_primary_menu_colors',
						),
					),

				'marin_colors_menu_heading'           => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Menu Colors', 'marin' ),
						'section'  => 'marin_primary_menu_colors',
					),
				),

				'marin_colors_submenu_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 35,
						'label'    => esc_html__( 'SubMenu Colors', 'marin' ),
						'section'  => 'marin_primary_menu_colors',
					),
				),

				// 2. Cotent Colors.
					// Cotent Colors Enable Disable
					'marin_colors_content_disable'    => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Content Colors', 'marin' ),
							'section'  => 'marin_content_theme_colors',
						),
					),
				// a. Paragraph Colors.
				'marin_colors_content_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Headings Colors', 'marin' ),
						'section'  => 'marin_content_theme_colors',
					),
				),

				// b. Paragraph Colors.
				'marin_colors_content_p_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 65,
						'label'    => esc_html__( 'Paragraph Colors', 'marin' ),
						'section'  => 'marin_content_theme_colors',
					),
				),

				// c. Button Colors.
				'marin_colors_content_button_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 75,
						'label'    => esc_html__( 'Button Colors', 'marin' ),
						'section'  => 'marin_content_theme_colors',
					),
				),

				// 3. Sidebar Widgets Color.
					'marin_colors_sidebar_disable'    => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Sidebar Color Settings', 'marin' ),
							'section'  => 'marin_sidebar_theme_colors',
						),
					),

				'marin_colors_sidebar_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Sidebar Widgets Colors', 'marin' ),
						'section'  => 'marin_sidebar_theme_colors',
					),
				),

				// 4. Footer Widgets Color.
					'marin_colors_footer_disable'     => array(
						'setting' => array(
							'default'           => false,
							'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
						),
						'control' => array(
							'type'     => 'toggle',
							'priority' => 1,
							'label'    => esc_html__( 'Enable Footer Color Settings', 'marin' ),
							'section'  => 'marin_footer_theme_colors',
						),
					),

				'marin_colors_footer_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 2,
						'label'    => esc_html__( 'Footer Widgets Colors', 'marin' ),
						'section'  => 'marin_footer_theme_colors',
					),
				),

			);
		}
	}
	new marin_Customize_Theme_Colors_Option();
endif;
