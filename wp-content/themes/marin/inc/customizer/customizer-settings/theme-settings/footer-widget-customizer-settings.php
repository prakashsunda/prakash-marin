<?php
/**
 * Footer widgets.
 *
 * @package     marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Footer_Widget_Option' ) ) :

	/**
	 * Option: Footer widget.
	 */
	class marin_Customize_Footer_Widget_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_footer_widget_heading'   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Footer Widget Settings', 'marin' ),
						'section'  => 'marin_footer_widgets',
					),
				),

				'marin_footer_widgets_enabled'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Footer Widget Area Enable/Disable', 'marin' ),
						'section'  => 'marin_footer_widgets',
					),
				),

				'marin_footer_container_size'   => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Footer Width', 'marin' ),
						'section'         => 'marin_footer_widgets',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin' ),
							'container-full' => esc_html__( 'Container Full', 'marin' ),
						),
						'active_callback' => 'marin_footer_container_size',
					),
				),

				// column layout.
				'marin_footer_column_layout' => array(
					'setting' => array(
						'default'           => 'av-column-4',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 35,
						'label'           => esc_html__( 'Column Layout', 'marin' ),
						'section'         => 'marin_footer_widgets',
						'choices'         => array(
							'av-column-6' => get_template_directory_uri() . '/assets/images/icons/column-2.png',
							'av-column-4' => get_template_directory_uri() . '/assets/images/icons/column-3.png',
							'av-column-3' => get_template_directory_uri() . '/assets/images/icons/column-4.png',
						),
						'active_callback' => 'marin_footer_column_layout',
					),

				),

				'marin_footer_effect_enable'    => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 40,
						'label'           => esc_html__( 'Enable Water Effect on Footer', 'marin' ),
						'section'         => 'marin_footer_widgets',
						'active_callback' => 'marin_footer_effect_enable',
					),
				),
			);
		}
	}

	new marin_Customize_Footer_Widget_Option();

endif;
