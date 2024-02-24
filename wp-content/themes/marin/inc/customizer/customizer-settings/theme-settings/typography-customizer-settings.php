<?php
/**
 * Typography.
 *
 * @package     marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== TYPOGRAPHY ==========================================*/
if ( ! class_exists( 'marin_Customize_Theme_Typography_Option' ) ) :

	/**
	 * Theme Typography option.
	 */
	class marin_Customize_Theme_Typography_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				// Hedaer Typo Heading
				'marin_typography_header_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Header/Menu Typography', 'marin' ),
						'section'  => 'marin_header_typography',
					),
				),
				// Hedaer Typo Enable Disable
				'marin_typography_header_disable'         => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Header Typography', 'marin' ),
						'section'  => 'marin_header_typography',
					),
				),

				// Slider Typo Heading
				'marin_typography_slider_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Slider Typography', 'marin' ),
						'section'  => 'marin_slider_typography',
					),
				),
				// Slider Typo Enable Disable
				'marin_typography_slider_disable'         => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Slider Typography', 'marin' ),
						'section'  => 'marin_slider_typography',
					),
				),

				// Slider Typo Heading
				'marin_typography_homepage_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Homepage Typography', 'marin' ),
						'section'  => 'marin_homepage_typography',
					),
				),
				// Homepage Typo Enable Disable
				'marin_typography_homepage_disable'       => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Homepage Typography', 'marin' ),
						'section'  => 'marin_homepage_typography',
					),
				),

				// Slider Typo Heading
				'marin_typography_headings_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Headings Typography', 'marin' ),
						'section'  => 'marin_headings_typography',
					),
				),
				// Heading Typo Enable Disable
				'marin_typography_heading_disable'        => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Headings Typography', 'marin' ),
						'section'  => 'marin_headings_typography',
					),
				),

				// Blog Archive Typo Heading
				'marin_typography_blog_archive_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Blog/Archive/Single Typography', 'marin' ),
						'section'  => 'marin_blog_archive_typography',
					),
				),
				// Blog Typo Enable Disable
				'marin_typography_blog_archive_disable'   => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Blog/Archive Typography', 'marin' ),
						'section'  => 'marin_blog_archive_typography',
					),
				),

				// Sidebar Typo Heading
				'marin_typography_sidebar_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Sidebar Typography', 'marin' ),
						'section'  => 'marin_sidebar_widget_typography',
					),
				),
				// Sidebar Typo Enable Disable
				'marin_typography_sidebar_widget_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Sidebar Typography', 'marin' ),
						'section'  => 'marin_sidebar_widget_typography',
					),
				),

				// Footer Typo Heading
				'marin_typography_footer_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable Footer Typography', 'marin' ),
						'section'  => 'marin_footer_widget_typography',
					),
				),
				// Footer Typo Enable Disable
				'marin_typography_sidebar_footer_disable' => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Enable Footer Typography', 'marin' ),
						'section'  => 'marin_footer_widget_typography',
					),
				),
			);

		}

	}

	new marin_Customize_Theme_Typography_Option();

endif;
