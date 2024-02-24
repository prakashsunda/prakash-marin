<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Wp Plugin Customizer Class
 *
 * @package marin-companion
 */

if ( ! class_exists( 'Marin_Companion_Customizer' ) ) :

	// Marin Customizer class.
	class Marin_Companion_Customizer {
		public function Marin_Customizer_settings() {
			// Diffrent Themes.
			$activate_theme_data = wp_get_theme(); // getting current theme data.
			$activate_theme      = $activate_theme_data->name;

			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/slider-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/top-info-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/about-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/portfolio-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/service-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/testimonial-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/funfact-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/cta-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/blog-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/team-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/client-customizer-settings.php';
			require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-sections/woocommerce-customizer-settings.php';

		}
	}
endif;

$customizer_settings = new Marin_Companion_Customizer();

$customizer_settings->Marin_Customizer_settings();
