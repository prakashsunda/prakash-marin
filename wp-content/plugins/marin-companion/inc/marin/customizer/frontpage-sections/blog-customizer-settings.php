<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Blog.
 *
 * @package marin-companion
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Blog_Option' ) ) :

	class marin_Customize_Homepage_Blog_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_main_blog_heading'              => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Blog Options', 'marin-companion' ),
						'section'  => 'marin_theme_blog',
					),
				),

				'marin_blog_disabled'                  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Blog Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_blog',
					),
				),

				// Blog Design.
				'marin_blog_design'                    => array(
					'setting' => array(
						'default'           => 'design1',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 9,
						'label'           => esc_html__( 'Template Design', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'choices'         => array(
							'design1' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/blog-cover.png',
							'design2' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/blog-normal.png',
						),
						'active_callback' => 'marin_blog_design',
					),
				),

				// Blog Autoplay.
				'marin_blog_details_heading'           => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 10,
						'label'           => esc_html__( 'Blog Carousal/Slide Settings', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_details_heading',
					),
				),

				// Blog Autoplay.
				'marin_blog_autoplay_disable'          => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 20,
						'label'           => esc_html__( 'AutoPlay Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_autoplay_disable',
					),
				),

				// Blog Animation Speed.
				'marin_blog_animation_speed'           => array(
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
						'label'           => esc_html__( 'Blog Animation Speed (Pro*)', 'marin-companion' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'marin_blog_animation_speed',
					),
				),

				// Blog loop.
				'marin_blog_loop'                      => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 40,
						'label'           => esc_html__( 'Blog Loop Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_loop',
					),
				),

				// Blog Button Enable disable.
				'marin_blog_readmore_disabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 50,
						'label'           => esc_html__( 'Read More Button Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_readmore_disabled',
					),
				),

				// Blog Dots.
				'marin_blog_dots'                      => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Blog Dots Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_dots',
					),
				),

				// blog Nav.
				'marin_blog_nav'                       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Blog Nav Enable/Disable (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_nav',
					),
				),

				// Blog Extra.
				'marin_blog_extra_heading'             => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 80,
						'label'           => esc_html__( 'Blog Extra Settings', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_extra_heading',
					),
				),

				// container.
				'marin_blog_container_size'            => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 90,
						'is_default_type' => true,
						'label'           => esc_html__( 'Blog Width', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_blog_container_size',
					),
				),
				// column layout.
				'marin_blog_column_layout'             => array(
					'setting' => array(
						'default'           => '3',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 100,
						'label'           => esc_html__( 'Column Layout (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'choices'         => array(
							'2' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
						),
						'active_callback' => 'marin_blog_column_layout',
					),
				),

				// Blog Count For Homepage.
				'marin_blog_count'                     => array(
					'setting' => array(
						'default'           => array(
							'slider' => 3,
							'suffix' => '',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 120,
						'label'           => esc_html__( 'HomePage Blog Post Count (Pro*)', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'input_attrs'     => array(
							'min'  => 2,
							'max'  => 10,
							'step' => 1,
						),
						'active_callback' => 'marin_blog_count',
					),
				),

				// Blog Button Enable disable.
				'marin_blog_button_disabled'           => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 150,
						'label'           => esc_html__( 'Button Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_button_disabled',
					),
				),

				// Button Text.
				'marin_blog_button_text'               => array(
					'setting' => array(
						'default'           => 'Show More',
						'sanitize_callback' => 'sanitize_text_field',
					),
					'control' => array(
						'type'            => 'text',
						'priority'        => 180,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Text', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_button_text',
					),
				),

				// Button Link.
				'marin_blog_button_link'               => array(
					'setting' => array(
						'default'           => '#',
						'sanitize_callback' => 'esc_url_raw',
					),
					'control' => array(
						'type'            => 'url',
						'priority'        => 200,
						'is_default_type' => true,
						'label'           => esc_html__( 'Button Link', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_button_link',
					),
				),

				// Section Color Settings Heading.
				'marin_blog_section_color_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 1500,
						'label'           => esc_html__( 'Section Color Settings', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_section_color_heading',
					),
				),

				// Section Color Settings Enable Disable.
				'marin_blog_section_color_disable'     => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 1550,
						'label'           => esc_html__( 'Section Color Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'active_callback' => 'marin_blog_section_color_disable',
					),
				),

				// Title Color.
				'marin_blog_section_title_color'       => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1580,
						'label'           => esc_html__( 'Title Color', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Title.', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_blog_section_title_color',
					),
				),

				// Description Color.
				'marin_blog_section_description_color' => array(
					'setting' => array(
						'default'           => '#252525',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 1600,
						'label'           => esc_html__( 'Description Color', 'marin-companion' ),
						'description'     => esc_html__( 'Set The Color For Section Description.', 'marin-companion' ),
						'section'         => 'marin_theme_blog',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_blog_section_description_color',
					),
				),
			);
		}
	}

	new marin_Customize_Homepage_Blog_Option();

endif;
