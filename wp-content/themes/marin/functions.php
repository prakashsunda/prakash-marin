<?php
if ( ! function_exists( 'marin_setup' ) ) :
	function marin_setup() {

		/**
		 * Define Theme Version
		 */

		// Theme version.
		$marin_theme = wp_get_theme();
		define( 'MARIN_THEME_VERSION', $marin_theme->get( 'Version' ) );
		define( 'MARIN_THEME_NAME', $marin_theme->get( 'Name' ) );

		// Root path/URI.
		define( 'MARIN_PARENT_DIR', get_template_directory() );
		define( 'MARIN_PARENT_URI', get_template_directory_uri() );

		// Root path/URI.
		define( 'MARIN_PARENT_INC_DIR', MARIN_PARENT_DIR . '/inc' );
		define( 'MARIN_PARENT_INC_URI', MARIN_PARENT_URI . '/inc' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 */
		add_theme_support( 'title-tag' );

		add_theme_support( 'custom-header' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		// Add selective refresh for sidebar widget.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Make theme available for translation.
		 */
		load_theme_textdomain( 'marin' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary_menu' => esc_html__( 'Primary Menu', 'marin' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		add_theme_support( 'custom-logo' );

		/*
		 * WooCommerce Plugin Support
		 */
		add_theme_support( 'woocommerce' );

		// Gutenberg wide images.
			add_theme_support( 'align-wide' );

		/*
		 * This theme styles the visual editor to resemble the theme style,
		 * specifically font, colors, icons, and column width.
		 */
		add_editor_style( array( 'assets/css/editor-style.css', marin_google_font() ) );

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'marin_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'marin_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marin_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marin_content_width', 1170 );
}
add_action( 'after_setup_theme', 'marin_content_width', 0 );


/**
 * All Styles & Scripts.
 */
require_once get_template_directory() . '/inc/enqueue.php';


/**
 * Nav Walker fo Bootstrap Dropdown Menu.
 */

require_once get_template_directory() . '/inc/menu/class-wp-bootstrap-navwalker.php';


/**
 * Cart icon
 */
require get_template_directory() . '/inc/cart-icon.php';

/**
 * Implement the Custom Header feature.
 */
require_once get_template_directory() . '/inc/custom-header.php';


/**
 * Called Breadcrumb
 */
require_once get_template_directory() . '/inc/breadcrumb/breadcrumb.php';

/**
 * Colors Setting.
 */
require get_template_directory() . '/inc/custom-theme-colors.php';

/**
 * Read More / Excerpt Settings
 */
require_once get_template_directory() . '/inc/excerpt.php';

/**
 * Sidebar.
 */
require_once get_template_directory() . '/inc/sidebar/sidebar.php';

/**
 * Custom template tags for this theme.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require_once get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require_once get_template_directory() . '/inc/customizer/customizer.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer/customizer-repeater/functions.php';

/**
 * Theme Getting Started
 */
if ( is_admin() ) {
	require get_template_directory() . '/inc/admin/getting-started.php';
}

/**
 * Demo File
 */
require_once ABSPATH . 'wp-admin/includes/plugin.php';
if ( is_plugin_active( 'marin-companion/marin-companion.php' ) ) {
	// plugin is activated.
	require MARIN_COMPANION_PLUGIN_DIR . 'inc/marin/demo-content/setup.php';
}

