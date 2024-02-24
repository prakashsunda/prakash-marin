<?php
/**
 * marin Header.
 *
 * @package marin
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Page_Header_Option' ) ) :

	class marin_Customize_Page_Header_Option extends marin_Customize_Base_Option {


		public function elements() {

			return array(

				'marin_page_header_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Page Header/Breadcrumb', 'marin' ),
						'section'  => 'marin_theme_breadcrumb',
					),
				),

				'marin_page_header_disabled'         => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 5,
						'label'    => esc_html__( 'Page Header Enable/Disable', 'marin' ),
						// 'description'    => esc_html__( 'Note: If you Disable Page Header then also disable Menu Overlap Setting. GO To Theme Options > Menu Settings and disable Menu Overlap.', 'marin' ),
						'section'  => 'marin_theme_breadcrumb',
					),
				),

				'marin_page_header_effect'           => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 5,
						'label'           => esc_html__( 'Enable Water Effect on Breadcrumb?', 'marin' ),
						// 'description'    => esc_html__( 'Note: If you Disable Page Header then also disable Menu Overlap Setting. GO To Theme Options > Menu Settings and disable Menu Overlap.', 'marin' ),
						'section'         => 'marin_theme_breadcrumb',
						'active_callback' => 'marin_page_header_effect',
					),
				),

				'marin_page_header_background_color' => array(
					'setting' => array(
						'default'           => 'rgba(0,0,0,0.69)',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_alpha_color' ),
					),
					'control' => array(
						'type'            => 'color',
						'priority'        => 7,
						'label'           => esc_html__( 'Page Header/Breadcrumb Color', 'marin' ),
						'section'         => 'marin_theme_breadcrumb',
						'choices'         => array(
							'alpha' => true,
						),
						'active_callback' => 'marin_page_header_background_color',
					),
				),

				'marin_custom_logo_size'             => array(
					'setting' => array(
						'default'           => array(
							'slider' => 140,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'        => 'slider',
						'priority'    => 55,
						'label'       => esc_html__( 'Logo Width', 'marin' ),
						'section'     => 'title_tagline',
						'input_attrs' => array(
							'min'  => 0,
							'max'  => 600,
							'step' => 3,
						),
					),
				),

			);

		}

	}

	new marin_Customize_Page_Header_Option();

endif;

function marin_page_header_background_color( $control ) {
	return true === ( $control->manager->get_setting( 'marin_page_header_disabled' )->value() == true );
}
function marin_page_header_effect( $control ) {
	return true === ( $control->manager->get_setting( 'marin_page_header_disabled' )->value() == true );
}
function marin_breadcrumb_height( $control ) {
	return true === ( $control->manager->get_setting( 'marin_page_header_disabled' )->value() == true );
}
function marin_breadcrumb_bg_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_page_header_disabled' )->value() == true );
}
function marin_breadcrumb_back_attach( $control ) {
	return true === ( $control->manager->get_setting( 'marin_page_header_disabled' )->value() == true );
}
