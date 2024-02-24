<?php
/**
 * Excerpt Settings.
 *
 * @package marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Excerpt_Option' ) ) :

	class marin_Customize_Excerpt_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_excerpt_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Post Excerpt Button Settings', 'marin' ),
						'section'  => 'marin_excerpt_general',
					),
				),

				// Animation.
				'marin_excerpt_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Post Button Enable/Disable', 'marin' ),
						'section'  => 'marin_excerpt_general',
					),
				),

			);

		}

	}

	new marin_Customize_Excerpt_Option();

endif;
