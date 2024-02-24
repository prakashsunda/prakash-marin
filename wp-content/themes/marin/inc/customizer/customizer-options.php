<?php
/**
 * Extend default customizer section.
 *
 * @package marin
 *
 * @see     WP_Customize_Section
 * @access  public
 */

// General Customizer Settings.
require get_template_directory() . '/inc/customizer/general-settings/general-settings-customizer-default.php';
require get_template_directory() . '/inc/customizer/general-settings/topbar-icon-customizer-settings.php';
require get_template_directory() . '/inc/customizer/controls/code/customize-plugin-control.php';


function marin_customizer_theme_settings( $wp_customize ) {

	$active_callback   = isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	// Site Title.
	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

}
add_action( 'customize_register', 'marin_customizer_theme_settings' );

add_action( 'customize_register', 'marin_recommended_plugin_section' );

// Recommended plugin section function.
function marin_recommended_plugin_section( $manager ) {
	// Register custom section types.
	$manager->register_section_type( 'marin_Customize_Recommended_Plugin_Section' );
	// Register sections.
	$manager->add_section(
		new marin_Customize_Recommended_Plugin_Section(
			$manager,
			'marin_upgrade_to_pro_option',
			array(
				'title'       => esc_html__( 'Ready for more?', 'marin' ),
				'priority'    => 500,
				'plugin_text' => esc_html__( 'Upgrade To Pro', 'marin' ),
				'plugin_url'  => 'https://wpfrank.com/wordpress-themes/marin-premium/',
			)
		)
	);
}

/*
 *  Customizer Notifications
 */

// require get_template_directory() . '/inc/customizer/customizer-notice/customizer-notify.php';

// $marin_config_customizer = array(
// 'recommended_plugins'           => array(
// 'marin-companion' => array(
// 'recommended' => true,
// 'description' => sprintf(
// * translators: %s: plugin name */
// esc_html__( 'Recommended Plugin: If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'marin' ),
// '<strong>Marin Companion</strong>'
// ),
// ),
// ),
// 'recommended_actions'           => array(),
// 'recommended_actions_title'     => esc_html__( 'Recommended Actions', 'marin' ),
// 'recommended_plugins_title'     => esc_html__( 'Import Demo Data (Recommended)', 'marin' ),
// 'install_button_label'          => esc_html__( 'Install and Activate', 'marin' ),
// 'activate_button_label'         => esc_html__( 'Activate', 'marin' ),
// 'marin_deactivate_button_label' => esc_html__( 'Deactivate', 'marin' ),
// );
// marin_Customizer_Notify::init( 'marin_customizer_notify_array', $marin_config_customizer );

/*
 *  Customizer Notifications
 */

require get_template_directory() . '/inc/customizer/customizer-notice/customizer-notify.php';

$marin_config_customizer = array(
	'recommended_plugins'           => array(
		'marin-companion' => array(
			'recommended' => true,
			'description' => sprintf(
				/* translators: %s: plugin name */
				esc_html__( 'Recommended Plugin: If you want to show all the features and business sections of the FrontPage. please install and activate %s plugin', 'marin' ),
				'<strong>Marin Companion</strong>'
			),
		),
	),
	'recommended_actions'           => array(),
	'recommended_actions_title'     => esc_html__( 'Recommended Actions', 'marin' ),
	'recommended_plugins_title'     => esc_html__( 'Import Theme Demo Data', 'marin' ),
	'install_button_label'          => esc_html__( 'Install and Activate', 'marin' ),
	'activate_button_label'         => esc_html__( 'Activate', 'marin' ),
	'marin_deactivate_button_label' => esc_html__( 'Deactivate', 'marin' ),
);
marin_Customizer_Notify::init( apply_filters( 'marin_customizer_notify_array', $marin_config_customizer ) );
