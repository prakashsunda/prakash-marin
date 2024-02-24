<?php
/**
 * marin Theme Customizer.
 *
 * @package marin
 */

if ( ! class_exists( 'marin_Customizer' ) ) {

	/**
	 * Customizer Loader
	 *
	 * @since 1.0.0
	 */
	class marin_Customizer {

		/**
		 * Instance
		 *
		 * @access private
		 * @var object
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {
			/**
			 * Customizer
			 */
			add_action( 'customize_register', array( $this, 'marin_customizer_panel_control' ) );
			add_action( 'customize_register', array( $this, 'marin_customizer_selective_refresh' ) );
			add_action( 'customize_preview_init', array( $this, 'marin_customize_preview_js' ) );
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'marin_customizer_script' ) );
			add_action( 'after_setup_theme', array( $this, 'marin_customizer_settings' ) );
			add_action( 'customize_register', array( $this, 'marin_customizer_register' ) );
		}


		// Register custom controls.
		public function marin_customizer_panel_control( $wp_customize ) {

			// Load customizer options extending classes.
			require MARIN_PARENT_DIR . '/inc/customizer/custom-customizer/customizer-panel.php';
			require MARIN_PARENT_DIR . '/inc/customizer/custom-customizer/customizer-section.php';

			// Register extended classes.
			$wp_customize->register_panel_type( 'marin_Customize_Panel' );
			$wp_customize->register_section_type( 'marin_Customize_Section' );

			// Load base class for controls.
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-base-control.php';
			// Load custom control classes.
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-color-control.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-category-control.php';
			// portfolio (For Taxonomy Dropdown control).
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-dropdown-control.php';
			// customizer heading control.
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-parent-heading-control.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-heading-control.php';
			// Blog ( theme options ).
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-radio-image-control.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-radio-buttonset-control.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-range-control.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-sortable-control.php';

			// typography (theme settings).
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-toggle-control.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-upgrade-control.php';

			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-slider-control.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/controls/code/customize-tinymce-control.php';

			// menu theme options.
			$wp_customize->register_control_type( 'marin_Customize_Parent_Heading_Control' );
			$wp_customize->register_control_type( 'marin_Customize_Heading_Control' );

			$wp_customize->register_control_type( 'marin_Customize_Radio_Image_Control' );
			$wp_customize->register_control_type( 'marin_Customize_Radio_Buttonset_Control' );
			$wp_customize->register_control_type( 'marin_Customize_Sortable_Control' );
			$wp_customize->register_control_type( 'marin_Customize_Slider_Control' );

			// typography settings.
			$wp_customize->register_control_type( 'marin_Customize_Toggle_Control' );
			$wp_customize->register_control_type( 'marin_Customize_Upgrade_Control' );

		}

		// Customizer selective refresh.
		public function marin_customizer_selective_refresh() {

			require_once MARIN_PARENT_DIR . '/inc/customizer/customizer-sanitize.php';
			require_once MARIN_PARENT_DIR . '/inc/customizer/customizer-partials.php';

		}

		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function marin_customizer_register( $wp_customize ) {

			$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
			$wp_customize->get_setting( 'custom_logo' )->transport      = 'refresh';

			/**
			 * Helper files
			 */
			require MARIN_PARENT_DIR . '/inc/custom-controls/font-control.php';
			require MARIN_PARENT_DIR . '/inc/sanitization.php';

			// Customizer selective.
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-selective.php';

			// Register panels and sections.
			require MARIN_PARENT_DIR . '/inc/customizer/panels-and-sections.php';

			// ALL Theme Optons Settings.
				// General Settings.
				require MARIN_PARENT_DIR . '/inc/customizer/theme-options/general-customizer.php';
				// Top Bar Settings.
				require MARIN_PARENT_DIR . '/inc/customizer/theme-options/top-bar-customizer.php';
				// Menu Settings.
				require MARIN_PARENT_DIR . '/inc/customizer/theme-options/menu-customizer.php';
				// Footer Settings.
				require MARIN_PARENT_DIR . '/inc/customizer/theme-options/footer-customizer.php';
				// Excerpt Options.
				require MARIN_PARENT_DIR . '/inc/customizer/theme-options/excerpt-customizer.php';
			// ALL Theme Optons Settings.

			// Theme Colors Settings.
			require MARIN_PARENT_DIR . '/inc/customizer/theme-options/colors-customizer.php';

			// Homepage Settings.
			require MARIN_PARENT_DIR . '/inc/customizer/theme-options/homepage-customizer.php';
		}


		/**
		 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
		 */
		function marin_customize_preview_js() {
			wp_enqueue_script( 'marin-customizer', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-preview.js', array( 'customize-preview' ), '20151215', true );
		}

		function marin_customizer_script() {
			wp_enqueue_script( 'marin-customizer-section', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-section.js', array( 'jquery' ), '', true );
		}

		// Include customizer customizer settings.

		function marin_customizer_settings() {
				//require get_template_directory() . '/inc/customizer/upgrade-premium-for-free-theme.php';

			// Base class.
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/customize-base-customizer-settings.php';

			// Read More / Excerpt Settings.
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/excerpt-read-more-customizer-settings.php';

			// General Settings.
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/general-customizer-settings.php';

			// Top Bar. (Theme Options Settings).
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/topbar-customizer-settings.php';

			// Menu (Theme Options Settings).
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/menu-bar-customizer-settings.php';

			// Page Header (Theme Options Settings).
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/head-customizer-settings.php';

			// Blog (Theme Options Settings).
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/blog-general-customizer-settings.php';

			// Footer (Theme Options Settings).
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/footer-copyright-customizer-settings.php';
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/footer-widget-customizer-settings.php';

			// Template Contact Us (Theme Template Settings).
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/contact-template-customizer-settings.php';

			// Customizer Homepage settings.
			//require MARIN_PARENT_DIR . '/inc/customizer/frontpage-settings/hompage-layout/customizer_homepage_layout.php';

			// Typography Settings.
			// require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/typography-customizer-settings.php';

			// Theme Styling Settings.
			// require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/theme-styling-customizer-settings.php';

			// Colors Settings.
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-settings/theme-settings/theme-colors-customizer-settings.php';

			// Frontpage Settings Options Required.
			require MARIN_PARENT_DIR . '/inc/customizer/customizer-options.php';

		}

	}
}// End if().

/**
 *  Kicking this off by calling 'get_instance()' method
 */
marin_Customizer::get_instance();
