<?php
/**
 * Template.
 *
 * @package     marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*========================================== Template ==========================================*/
if ( ! class_exists( 'marin_Customize_Theme_Template_Option' ) ) :


	class marin_Customize_Theme_Template_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(
				/**
				* Theme contact form
				*/

					// Contact Form Heading.
					'marin_template_contact_form_heading'  => array(
						'setting' => array(),
						'control' => array(
							'type'     => 'parent_heading',
							'priority' => 1,
							'label'    => esc_html__( 'Contact Form Settings', 'marin' ),
							'section'  => 'marin_theme_contact_page',
						),
					),

				// Contact Form Enable Disable.
				'marin_template_contact_form_disable'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Enable Contact Form', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				// Social Icon Enable Disable.
				'marin_template_contact_icon_disable'      => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 6,
						'label'           => esc_html__( 'Enable Social Icon', 'marin' ),
						'section'         => 'marin_theme_contact_page',
						'active_callback' => 'contact_form_callback', // Callback location contact-us-template.php
					),
				),

				// Google Map.
				'marin_template_contact_form_map_heading'  => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 15,
						'label'    => esc_html__( 'Contact Form Map', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				// Google Map Enable.
				'marin_template_contact_form_map_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 20,
						'label'    => esc_html__( 'Enable Google Map', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				// Contact Form Info.
				'marin_template_contact_form_info_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 25,
						'label'    => esc_html__( 'Contact Form Info', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				// Contact Form Info Enable.
				'marin_template_contact_form_info_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 26,
						'label'    => esc_html__( 'Enable Form Info', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				// Extra Sections.
				'marin_template_contact_form_extra_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 30,
						'label'    => esc_html__( 'Extra Sections', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				// Callout Enable Disable.
				'marin_template_contact_callout_disable'   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 35,
						'label'    => esc_html__( 'Enable Contact Callout', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				// Client Enable Disable.
				'marin_template_contact_client_disable'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 40,
						'label'    => esc_html__( 'Enable Contact Client', 'marin' ),
						'section'  => 'marin_theme_contact_page',
					),
				),

				/**
				* Theme About Us
				*/
					// About US Heading.
					'marin_template_about_us_heading'      => array(
						'setting' => array(),
						'control' => array(
							'type'     => 'heading',
							'priority' => 1,
							'label'    => esc_html__( 'About Us Settings', 'marin' ),
							'section'  => 'about_section_settings',
						),
					),

				// Funfact Enable Disable.
				'marin_template_about_us_funfact_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Enable Funfact Section', 'marin' ),
						'section'  => 'about_section_settings',
					),
				),

				// Testimonial Disable.
				'marin_template_about_us_testimonial_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 15,
						'label'    => esc_html__( 'Enable Testimonial Section', 'marin' ),
						'section'  => 'about_section_settings',
					),
				),

				// Testimonial Disable.
				'marin_template_about_us_client_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 25,
						'label'    => esc_html__( 'Enable client Section', 'marin' ),
						'section'  => 'about_section_settings',
					),
				),

				// Funfact Disable.
				'marin_template_about_us_team_disable'     => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 35,
						'label'    => esc_html__( 'Enable Team Section', 'marin' ),
						'section'  => 'about_section_settings',
					),
				),

				/**
				* Theme Service Template
				*/
					// Service Heading.
					'marin_template_service_heading'       => array(
						'setting' => array(),
						'control' => array(
							'type'     => 'heading',
							'priority' => 1,
							'label'    => esc_html__( 'Service Settings', 'marin' ),
							'section'  => 'service_template_settings',
						),
					),

				// Service Funfact Enable Disable.
				'marin_template_service_callout_disable'   => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 10,
						'label'    => esc_html__( 'Enable Callout Section', 'marin' ),
						'section'  => 'service_template_settings',
					),
				),

				// Service client Disable.
				'marin_template_service_client_disable'  => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 25,
						'label'    => esc_html__( 'Enable client Section', 'marin' ),
						'section'  => 'service_template_settings',
					),
				),

			);
		}
	}

	new marin_Customize_Theme_Template_Option();

endif;
