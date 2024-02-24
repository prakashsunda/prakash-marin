<?php
/**
 * General Settings.
 *
 * @package marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* General Settings.
*/

if ( ! class_exists( 'marin_Customize_General_Option' ) ) :

	class marin_Customize_General_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_general_heading'       => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'General Settings', 'marin' ),
						'section'  => 'marin_theme_general',
					),
				),

				// Animation.
				'marin_animation_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Site Animation Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_general',
					),
				),

				// Loading Icon.
				'marin_loading_icon_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Loading Icon Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_general',
					),
				),

				// Go To Top Icon.
				'marin_goto_top_icon_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 20,
						'label'    => esc_html__( 'Go To Top Icon Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_general',
					),
				),

				// WOO Cart Icon.
				'marin_cart_icon_enabled'     => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 30,
						'label'    => esc_html__( 'WOO Cart Icon Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_general',
					),
				),

				// background elements.
				'marin_bg_elements_enabled'     => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 50,
						'label'    => esc_html__( 'Background Elements Enable/Disable', 'marin' ),
						'section'  => 'marin_theme_general',
					),
				),

			);

		}

	}

	new marin_Customize_General_Option();

endif;
