<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Blog.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Template_Option' ) ) :

	class marin_Customize_Homepage_Template_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_homepage_template_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Homepage Template', 'marin-companion' ),
						'section'  => 'marin_theme_homepage',
					),
				),

				'marin_homepage_template_design'  => array(
					'setting' => array(
						'default'           => 'marin_homepage_template_1',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 35,
						'label'    => esc_html__( 'Homepage Design', 'marin-companion' ),
						'section'  => 'marin_theme_homepage',
						'choices'  => array(
							'marin_homepage_template_1' => get_template_directory() . 'inc/marin/img/homepage-template-1.png',
							'marin_homepage_template_2' => get_template_directory() . 'inc/marin/img/homepage-template-2.png',
						),
					),
				),

			);
		}
	}

	new marin_Customize_Homepage_Template_Option();

endif;
