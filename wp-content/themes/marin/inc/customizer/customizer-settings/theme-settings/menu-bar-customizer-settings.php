<?php
/**
 * MenuBar.
 *
 * @package marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Menu_Bar_Option' ) ) :

	/**
	 * Menu option.
	 */
	class marin_Customize_Menu_Bar_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_main_menu_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Menu Settings', 'marin' ),
						'section'  => 'marin_theme_menu_bar',
					),
				),

				// column layout.
				'marin_menu_design_layout'  => array(
					'setting' => array(
						'default'           => 'menu-layout1',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 2,
						'label'    => esc_html__( 'Menu Design Layouts (Pro*)', 'marin' ),
						'section'  => 'marin_theme_menu_bar',
						'choices'  => array(
							'menu-layout1' => get_template_directory_uri() . '/assets/images/icons/menu-layout1.webp',
							'menu-layout2' => get_template_directory_uri() . '/assets/images/icons/menu-layout2.webp',
							'menu-layout3' => get_template_directory_uri() . '/assets/images/icons/menu-layout3.webp',
						),
					),
				),

				'marin_menu_container_size' => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 5,
						'is_default_type' => true,
						'label'           => esc_html__( 'Menu Width', 'marin' ),
						'section'         => 'marin_theme_menu_bar',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin' ),
							'container-full' => esc_html__( 'Container Full', 'marin' ),
						),
					),
				),

				'marin_menu_style'          => array(
					'setting' => array(
						'default'           => 'sticky',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 7,
						'is_default_type' => true,
						'label'           => esc_html__( 'Menu Style', 'marin' ),
						'section'         => 'marin_theme_menu_bar',
						'choices'         => array(
							'sticky' => esc_html__( 'Sticky', 'marin' ),
							'static' => esc_html__( 'Static', 'marin' ),
						),
					),
				),

				'marin_search_icon_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 15,
						'label'    => esc_html__( 'Search Icon', 'marin' ),
						'section'  => 'marin_theme_menu_bar',
					),
				),

				'marin_serche_icon_sh'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 16,
						'label'    => esc_html__( 'Search Icon Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_menu_bar',
					),
				),

				'marin_menu_btn_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 25,
						'label'    => esc_html__( 'Menu Button', 'marin' ),
						'section'  => 'marin_theme_menu_bar',
					),
				),

				'marin_menu_btn_sh'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 26,
						'label'    => esc_html__( 'Menu Button Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_menu_bar',
					),
				),
			);

		}

	}

	new marin_Customize_Menu_Bar_Option();

endif;
