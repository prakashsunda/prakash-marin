<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Fetch theme parts.
 *
 * @package marin-companion.
 */

// Customizer Sections.
require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/marin-companion-customizer.php';

require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/frontpage-customizer-options.php';

require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/customizer/marin-customizer-default.php';

// Frontpage Sections.
if ( ! function_exists( 'marin_frontpage_sections' ) ) :
	/** Fetch Frontpage sections. */
	function marin_frontpage_sections() {
		// Diffrent Themes.
		$activate_theme_data = wp_get_theme(); // getting current theme data.
		$activate_theme      = $activate_theme_data->name;

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-slider.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-top-info.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-about.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-callout.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-service.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-funfact.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-portfolio.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-testimonial.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-blog.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-client.php';

		require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/front-page/section-team.php';

	}
	add_action( 'marin_frontpage', 'marin_frontpage_sections' );
endif;
