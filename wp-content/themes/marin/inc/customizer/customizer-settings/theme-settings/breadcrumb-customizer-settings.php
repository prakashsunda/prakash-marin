<?php
/**
 * Breadcrumb Settings.
 *
 * @package marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Breadcrumb_Option' ) ) :

	class marin_Customize_Breadcrumb_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_breadcrumb_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Breadcrumb Settings', 'marin' ),
						'section'  => 'marin_theme_breadcrumb',
					),
				),

				// Animation.
				'marin_breadcrumb_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Site Animation Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_breadcrumb',
					),
				),

			);

		}

	}

	new marin_Customize_Breadcrumb_Option();

endif;
