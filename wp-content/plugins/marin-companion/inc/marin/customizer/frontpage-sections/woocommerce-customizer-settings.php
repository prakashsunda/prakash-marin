<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Frontpage Main woocommerce.
 *
 * @package marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Homepage_Woocommerce_Option' ) ) :

	class marin_Customize_Homepage_Woocommerce_Option extends marin_Customize_Base_Option {

		/**
		 * Arguments for options.
		 *
		 * @return array
		 */
		public function elements() {

			return array(

				'marin_woocommerce_heading'          => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Woocommerce Options', 'marin-companion' ),
						'section'  => 'marin_theme_woocommerce',
					),
				),

				// Woocommerce Enable.
				'marin_woocommerce_disabled'         => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'     => 'toggle',
						'priority' => 2,
						'label'    => esc_html__( 'Woocommerce Enable/Disable', 'marin-companion' ),
						'section'  => 'marin_theme_woocommerce',
					),
				),

				// Woocommerce Extra.
				'marin_woocommerce_details_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 14,
						'label'           => esc_html__( 'Woocommerce Carousal Settings', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'active_callback' => 'marin_woocommerce_details_heading',
					),
				),

				// Woocommerce Autoplay.
				'marin_woocommerce_autoplay_disable' => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 20,
						'label'           => esc_html__( 'AutoPlay Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'active_callback' => 'marin_woocommerce_autoplay_disable',
					),
				),

				// Woocommerce Animation Speed.
				'marin_woocommerce_animation_speed'   => array(
					'setting' => array(
						'default'           => array(
							'slider' => 6000,
							'suffix' => 'px',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_slider' ),
					),
					'control' => array(
						'type'            => 'slider',
						'priority'        => 30,
						'label'           => esc_html__( 'Woocommerce Animation Speed', 'marin-companion' ),
						'description'     => esc_html__( 'Note: Turn on Autoplay', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'input_attrs'     => array(
							'min'  => 2000,
							'max'  => 10000,
							'step' => 500,
						),
						'active_callback' => 'marin_woocommerce_animation_speed',
					),
				),

				// woocommerce loop.
				// 'marin_woocommerce_loop'              => array(
				// 	'setting' => array(
				// 		'default'           => false,
				// 		'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
				// 	),
				// 	'control' => array(
				// 		'type'            => 'toggle',
				// 		'priority'        => 40,
				// 		'label'           => esc_html__( 'woocommerce Loop Enable/Disable', 'marin-companion' ),
				// 		'section'         => 'marin_theme_woocommerce',
				// 		'active_callback' => 'marin_woocommerce_loop',
				// 	),
				// ),

				// woocommerce Dots.
				'marin_woocommerce_dots'              => array(
					'setting' => array(
						'default'           => false,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 60,
						'label'           => esc_html__( 'Woocommerce Dots Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'active_callback' => 'marin_woocommerce_dots',
					),
				),

				// woocommerce Nav.
				'marin_woocommerce_nav'               => array(
					'setting' => array(
						'default'           => true,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_checkbox' ),
					),
					'control' => array(
						'type'            => 'toggle',
						'priority'        => 70,
						'label'           => esc_html__( 'Woocommerce Nav Enable/Disable', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'active_callback' => 'marin_woocommerce_nav',
					),
				),

				// woocommerce Extra.
				'marin_woocommerce_extra_heading'     => array(
					'setting' => array(),
					'control' => array(
						'type'            => 'heading',
						'priority'        => 80,
						'label'           => esc_html__( 'Woocommerce Extra Settings', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'active_callback' => 'marin_woocommerce_extra_heading',
					),
				),

				// container.
				'marin_woocommerce_container_size'   => array(
					'setting' => array(
						'default'           => 'av-container',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio',
						'priority'        => 120,
						'is_default_type' => true,
						'label'           => esc_html__( 'Woocommerce Width', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'choices'         => array(
							'av-container'      => esc_html__( 'Container', 'marin-companion' ),
							'container-full' => esc_html__( 'Container Full', 'marin-companion' ),
						),
						'active_callback' => 'marin_woocommerce_container_size',
					),
				),
				// column layout.
				'marin_woocommerce_column_layout'    => array(
					'setting' => array(
						'default'           => 4,
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'            => 'radio_image',
						'priority'        => 150,
						'label'           => esc_html__( 'Column Layout', 'marin-companion' ),
						'section'         => 'marin_theme_woocommerce',
						'choices'         => array(
							'2' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-2.png',
							'3' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-3.png',
							'4' => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/icons/column-4.png',
						),
						'active_callback' => 'marin_woocommerce_column_layout',
					),
				),
			);
		}
	}

	new marin_Customize_Homepage_Woocommerce_Option();

endif;
