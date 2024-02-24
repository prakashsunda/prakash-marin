<?php
/**
 * contact_template Settings.
 *
 * @package marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
* contact template Settings.
*/

if ( ! class_exists( 'marin_Customize_Contact_Template_Option' ) ) :

	class marin_Customize_Contact_Template_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_contact_template_heading'      => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Contact Template Settings', 'marin' ),
						'section'  => 'marin_template_contact_us',
					),
				),

				// Map Section Enable.
				'marin_contact_template_map_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Map Section Enable/Disable', 'marin' ),
						'section'  => 'marin_template_contact_us',
					),
				),

				// FAQ Section Enable.
				'marin_contact_template_faq_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 50,
						'label'    => esc_html__( 'FAQ Section Enable/Disable', 'marin' ),
						'section'  => 'marin_template_contact_us',
					),
				),
			);
		}
	}

	new marin_Customize_Contact_Template_Option();

endif;
