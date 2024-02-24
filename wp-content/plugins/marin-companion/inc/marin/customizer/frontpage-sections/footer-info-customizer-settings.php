<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage info.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Footer_Info_Option' ) ) :

	class marin_Customize_Homepage_Footer_Info_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_footer_info_heading'        => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Footer Info Options', 'marin-companion' ),
						'section'  => 'marin_theme_footer_info',
					),
				),

				// Info Top Enable.
				'marin_footer_info_disabled'       => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Footer Info Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_footer_info',
					),
				),
				// container.
				'marin_footer_info_container_size' => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 25,
						'is_default_type' => true,
						'label'           => esc_html__( 'Info Width', 'marin-companion' ),
						'section'         => 'marin_theme_footer_info',
						'choices'         => array(
							'av-container'   => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_footer_info_container_size',
					),
				),
				// column layout.
				'marin_footer_info_column_layout'  => array(
					'setting' => array(
						'default'           => 'av-column-4',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 30,
						'label'           => esc_html__( 'Column Layout', 'marin-companion' ),
						'section'         => 'marin_theme_footer_info',
						'choices'         => array(
							'av-column-6' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'av-column-4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'av-column-3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
						),
						'active_callback' => 'marin_footer_info_column_layout',
					),

				),
			);
		}
	}

	new marin_Customize_Homepage_Footer_Info_Option();

endif;
