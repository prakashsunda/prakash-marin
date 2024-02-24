<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Frontpage info.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Info_Option' ) ) :

	class marin_Customize_Homepage_Info_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_info_heading'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 1,
						'label'    => esc_html__( 'Info Options', 'marin-companion' ),
						'section'  => 'marin_theme_info',
					),
				),

				// Info Top Enable
				'marin_info_top_disabled'    => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Top Info Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_info',
					),
				),
				// Info Footer Enable
				'marin_info_bottom_disabled' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 3,
						'label'    => esc_html__( 'Bottom Info Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_info',
					),
				),

				'marin_top_info_upgrade'         => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'upgrade',
						'priority' => 12,
						'label'    => esc_html__( 'Info', 'marin-companion' ),
						'section'  => 'marin_theme_info',
					),
				),
			);
		}
	}

	new marin_Customize_Homepage_Info_Option();

endif;
