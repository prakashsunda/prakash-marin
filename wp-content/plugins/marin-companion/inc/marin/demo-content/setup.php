<?php
/**
 * @package marin Starter Sites
 * @since 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Set import files
 */
if ( ! function_exists( 'marin_starter_sites_import_files' ) ) {

	function marin_starter_sites_import_files() {

		// Demos url.
		$demo_url = MARIN_COMPANION_PLUGIN_URL;

		return array(
			array(
				'import_file_name'           => esc_html__( 'Marin', 'marin-companion' ),
				'categories'                 => array( 'Free Demo' ),
				'import_file_url'            => $demo_url . '/inc/marin/demo-content/marin/marin.xml',
				'import_widget_file_url'     => $demo_url . '/inc/marin/demo-content/marin/marin.wie',
				'import_customizer_file_url' => $demo_url . '/inc/marin/demo-content/marin/marin.dat',
				'preview_url'                => 'https://wpfrank.com/demo/marin/',
				'import_preview_image_url'   => $demo_url . '/inc/marin/img/demo-screenshots/marin.webp',
			),
			array(
				'import_file_name'           => esc_html__( 'Marin Blog', 'marin-companion' ),
				'categories'                 => array( 'Free Demo' ),
				'import_file_url'            => $demo_url . '/inc/marin/demo-content/marin-blog/marin-blog.xml',
				'import_widget_file_url'     => $demo_url . '/inc/marin/demo-content/marin-blog/marin-blog.wie',
				'import_customizer_file_url' => $demo_url . '/inc/marin/demo-content/marin-blog/marin-blog.dat',
				'preview_url'                => 'https://wpfrank.com/demo/marin-blog/',
				'import_preview_image_url'   => $demo_url . '/inc/marin/img/demo-screenshots/marin-blog.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Marin Construction', 'marin-companion' ),
				'categories'               => array( 'Pro Demo' ),
				'preview_url'              => 'https://wpfrank.com/demo/marin-construction/',
				'import_preview_image_url' => $demo_url . '/inc/marin/img/demo-screenshots/marin-construction.webp',
			),
			array(
				'import_file_name'         => esc_html__( 'Marin Gym', 'marin-companion' ),
				'categories'               => array( 'Pro Demo' ),
				'preview_url'              => 'https://wpfrank.com/demo/marin-gym/',
				'import_preview_image_url' => $demo_url . '/inc/marin/img/demo-screenshots/marin-gym.webp',
			),
		);
	}
}
add_filter( 'pt-ocdi/import_files', 'marin_starter_sites_import_files' );

/**
 * Define actions that happen after import
 */
if ( ! function_exists( 'marin_starter_sites_after_import_mods' ) ) {

	function marin_starter_sites_after_import_mods() {

		// Assign the menu (Make Menu Name Same As Demo).
		$main_menu = get_term_by( 'name', 'Marin Menu', 'nav_menu' );
		set_theme_mod(
			'nav_menu_locations',
			array(
				'primary_menu' => $main_menu->term_id,
			)
		);

	}
}
add_action( 'pt-ocdi/after_import', 'marin_starter_sites_after_import_mods' );


// Custom CSS for OCDI plugin.
function marin_starter_sites_ocdi_css() { ?>
	<style >
		.ocdi__gl-item:nth-child(n+3) .ocdi__gl-item-buttons .button-primary, .ocdi .ocdi__theme-about, .ocdi__intro-text {
			display: none;
		}
		.ocdi__gl-item-image-container::after {
			padding-top: 75% !important;
		}

	</style>
	<?php
}
add_action( 'admin_enqueue_scripts', 'marin_starter_sites_ocdi_css' );

// Change the "One Click Demo Import" name from "Starter Sites" in Appearance menu.
function marin_starter_sites_ocdi_plugin_page_setup( $default_settings ) {

	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'Marin One Click Demo Import', 'marin-companion' );
	$default_settings['menu_title']  = esc_html__( 'Marin Starter Sites', 'marin-companion' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'one-click-demo-import';

	return $default_settings;

}
add_filter( 'ocdi/plugin_page_setup', 'marin_starter_sites_ocdi_plugin_page_setup' );

// Register required plugins for the demos.
function marin_starter_sites_register_plugins( $plugins ) {

	// List of plugins used by all theme demos.
	$theme_plugins = array(
		array(
			'name'     => 'Cooming Soon',
			'slug'     => 'coming-soon-maintenance-mode',
			'required' => true,
		),
		array(
			'name'     => 'Slider Factory',
			'slug'     => 'slider-factory',
			'required' => true,
		),
		array(
			'name'     => 'Login Page',
			'slug'     => 'customizer-login-page',
			'required' => true,
		),
		array(
			'name'     => 'WooCommerce',
			'slug'     => 'woocommerce',
			'required' => true,
		),
	);

	return array_merge( $plugins, $theme_plugins );

}
add_filter( 'ocdi/register_plugins', 'marin_starter_sites_register_plugins' );


/**
* Remove branding
*/
// add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
