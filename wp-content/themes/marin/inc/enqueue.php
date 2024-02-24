<?php
/**
 * Enqueue scripts and styles.
 */
function marin_scripts() {

	// Styles.
	wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/fonts/font-awesome/css/font-awesome.min.css' );

	wp_enqueue_style( 'marin-editor-style', get_template_directory_uri() . '/assets/css/editor-style.css' );

	wp_enqueue_style( 'marin-default', get_template_directory_uri() . '/assets/css/color/default.css' );

	wp_enqueue_style( 'marin-theme-css', get_template_directory_uri() . '/assets/css/theme.css' );

	wp_enqueue_style( 'marin-meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css' );

	wp_enqueue_style( 'marin-widgets', get_template_directory_uri() . '/assets/css/widgets.css' );

	wp_enqueue_style( 'marin-main', get_template_directory_uri() . '/assets/css/main.css' );

	wp_enqueue_style( 'marin-media-query', get_template_directory_uri() . '/assets/css/responsive.css' );

	wp_enqueue_style( 'marin-woocommerce', get_template_directory_uri() . '/assets/css/woo.css' );

	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );

	wp_enqueue_style( 'magnific-popup-min', get_template_directory_uri() . '/assets/css/magnific-popup.min.css' );

	// Theme Skin Mode.
	if ( 'dark-color' === get_theme_mod( 'marin_skin_colors_selection', 'light-color' ) ) {
		wp_enqueue_style( 'marin-skin-dark', get_template_directory_uri() . '/assets/css/skin-dark.css' );
	}

	// Loading Icon CSS/JS.
	if ( true === get_theme_mod( 'marin_loading_icon_disabled', true ) ) {
		wp_enqueue_style( 'marin-loading-icon', get_template_directory_uri() . '/assets/css/loading-icon.css' );
		wp_enqueue_script( 'marin-loading-icon', get_template_directory_uri() . '/assets/js/loading-icon.js', array( 'jquery' ), true );
	}

	wp_enqueue_style( 'marin-style', get_stylesheet_uri() );

	// Scripts.
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ), true );

	wp_enqueue_script( 'jquery-ripples', get_template_directory_uri() . '/assets/js/jquery.ripples.min.js', array( 'jquery' ), false, true );

	// Pro Theme Js.
	wp_enqueue_script( 'isotope-min', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'countdown-min', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'counterup-min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'magnific-popup-min', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'imagesloaded-min', get_template_directory_uri() . '/assets/js/imagesloaded.min.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'masonry-min', get_template_directory_uri() . '/assets/js/masonry.min.js', array( 'jquery' ), false, true );
	// Pro Theme js.

	wp_enqueue_script( 'anime-min', get_template_directory_uri() . '/assets/js/anime.min.js', array( 'jquery' ), false, true );

	if ( get_theme_mod( 'marin_animation_disabled', true ) == true ) :
		wp_enqueue_script( 'wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array( 'jquery' ), false, true );
	endif;

	wp_enqueue_script( 'mo', get_template_directory_uri() . '/assets/js/mo.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'marin-theme', get_template_directory_uri() . '/assets/js/theme.min.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'marin-pro-js', get_template_directory_uri() . '/assets/js/pro.js', array( 'jquery' ), false, true );

	wp_enqueue_script( 'marin-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), false, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marin_scripts' );

/**
 * Enqueue admin scripts and styles. Only For Free version
 */
function marin_admin_enqueue_scripts() {
	// For Getting Started.
	wp_enqueue_style( 'marin-customize-css', get_template_directory_uri() . '/assets/css/customize.css' );
	wp_enqueue_style( 'marin-admin-style', get_template_directory_uri() . '/assets/css/admin.css' );
	wp_enqueue_script( 'marin-admin-script', get_template_directory_uri() . '/assets/js/admin-script.js', array( 'jquery' ), '', true );
	wp_localize_script(
		'marin-admin-script',
		'marin_ajax_object',
		array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
	);
	// For Selector Scroller.
	wp_enqueue_style( 'marin-selector-scroll-style', get_template_directory_uri() . '/inc/customizer/assets/css/customize.css', MARIN_THEME_VERSION, 'screen' );
	wp_enqueue_script( 'marin-customizer-sections', get_template_directory_uri() . '/inc/customizer/assets/js/customizer-section.js', array( 'jquery', 'customize-controls' ), '', true );

}
add_action( 'admin_enqueue_scripts', 'marin_admin_enqueue_scripts' );

