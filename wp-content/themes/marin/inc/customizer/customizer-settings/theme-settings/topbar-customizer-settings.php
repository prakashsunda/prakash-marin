<?php
/**
 * @topbar settings.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Topbar_Option' ) ) :

	class marin_Customize_Topbar_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				// Topbar Heading.
				'marin_topbar_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Enable/Disable Top Bar', 'marin' ),
						'section'  => 'marin_topbar_settings',
					),
				),

				'marin_topbar_enabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 1,
						'label'    => esc_html__( 'Top Bar Enable/Disable', 'marin' ),
						'section'  => 'marin_topbar_settings',
					),
				),

				// Button.
				/*'marin_topbar_button_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 500,
						'label'           => esc_html__( 'Enable Topbar Button', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_topbar_button_disable',
					),
				),*/

				// Topbar Icon Heading.
				'marin_topbar_icon_heading'    => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 10,
						'label'           => esc_html__( 'Top Bar Icon Settings', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_topbar_icon_heading',
					),
				),

				// Topbar Icon.
				'marin_topbar_icon_disable'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 15,
						'label'           => esc_html__( 'Enable Social Icons', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_topbar_icon_disable',
					),
				),

				// Topbar Contact Details Heading.
				'marin_contact_details_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 20,
						'label'           => esc_html__( 'Top Bar Contact Details', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_contact_details_heading',
					),
				),
				// Contact Details.
				'marin_contact_detail_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 30,
						'label'           => esc_html__( 'Enable Contact Details', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_contact_detail_disable',
					),
				),

				// Topbar Email Details Heading.
				'marin_email_details_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 39,
						'label'           => esc_html__( 'Top Bar Email Details', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_email_details_heading',
					),
				),
				// Email Details.
				'marin_email_detail_disable'   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 40,
						'label'           => esc_html__( 'Enable Email Details', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_email_detail_disable',
					),
				),

				// Topbar Mobile Details Heading.
				'marin_mobile_details_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 49,
						'label'           => esc_html__( 'Top Bar Mobile Details', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_mobile_details_heading',
					),
				),
				// Mobile Details.
				'marin_mobile_detail_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 50,
						'label'           => esc_html__( 'Enable Mobile Details', 'marin' ),
						'section'         => 'marin_topbar_settings',
						'active_callback' => 'marin_mobile_detail_disable',
					),
				),

				'marin_topbar_social_icons_upgrade'                   => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 18,
						'label'    => esc_html__( 'Client', 'marin' ),
						'section'  => 'marin_topbar_settings',
					),
				),
			);

		}

	}

	new marin_Customize_Topbar_Option();

endif;
