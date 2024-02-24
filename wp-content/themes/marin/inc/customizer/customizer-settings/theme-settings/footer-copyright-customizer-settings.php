<?php
/**
 * Footer Copyright.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Footer_Copyright_Option' ) ) :

	/**
	 * Footer Copyright.
	 */
	class marin_Customize_Footer_Copyright_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_footer_copy_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Footer Copyright Settings', 'marin' ),
						'section'  => 'marin_footer_copyright',
					),
				),

				'marin_footer_copright_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Footer Copyright Enable/Disable', 'marin' ),
						'section'  => 'marin_footer_copyright',
					),
				),

				'marin_footer_social_icon_enabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 19,
						'label'    => esc_html__( 'Footer Social Icon Enable/Disable', 'marin' ),
						'section'  => 'marin_footer_copyright',
					),
				),

			);

		}

	}

	new marin_Customize_Footer_Copyright_Option();

endif;
