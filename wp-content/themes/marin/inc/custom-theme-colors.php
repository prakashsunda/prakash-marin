<?php
if ( ! function_exists( 'marin_custom_theme_colors_options' ) ) :
	function marin_custom_theme_colors_options() {

		$custom_color_css = '';

		/**
		 * About Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_about_section_color_disable', false ) ) :
		// 	// a. about title Color.
		// 	if ( get_theme_mod( 'marin_about_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.about-section .heading-title h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_about_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. about desc Color.
		// 	if ( get_theme_mod( 'marin_about_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.about-section .heading-title h6 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_about_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Service Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_service_section_color_disable', false ) ) :
		// 	// a. service title Color.
		// 	if ( get_theme_mod( 'marin_service_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.service-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_service_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. service desc Color.
		// 	if ( get_theme_mod( 'marin_service_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.service-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_service_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Features Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_features_section_color_disable', false ) ) :
		// 	// a. features title Color.
		// 	if ( get_theme_mod( 'marin_features_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.features-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_features_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. features desc Color.
		// 	if ( get_theme_mod( 'marin_features_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.features-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_features_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Portfolio Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_portfolio_section_color_disable', false ) ) :
		// 	// a. portfolio title Color.
		// 	if ( get_theme_mod( 'marin_portfolio_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.portfolio-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_portfolio_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. portfolio desc Color.
		// 	if ( get_theme_mod( 'marin_portfolio_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.portfolio-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_portfolio_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Funfact Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_funfact_section_color_disable', false ) ) :
		// 	// a. funfact title Color.
		// 	if ( get_theme_mod( 'marin_funfact_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.funfact-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_funfact_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. funfact desc Color.
		// 	if ( get_theme_mod( 'marin_funfact_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.funfact-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_funfact_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Testimonial Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_testimonial_section_color_disable', false ) ) :
		// 	// a. testimonial title Color.
		// 	if ( get_theme_mod( 'marin_testimonial_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.testimonial-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_testimonial_section_title_color', '#fff' ) ) . "; }\n";
		// 	endif;

		// 	// a. testimonial desc Color.
		// 	if ( get_theme_mod( 'marin_testimonial_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.testimonial-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_testimonial_section_description_color', '#fff' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Team Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_team_section_color_disable', false ) ) :
		// 	// a. team title Color.
		// 	if ( get_theme_mod( 'marin_team_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.team-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_team_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. team desc Color.
		// 	if ( get_theme_mod( 'marin_team_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.team-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_team_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Client Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_client_section_color_disable', false ) ) :
		// 	// a. client title Color.
		// 	if ( get_theme_mod( 'marin_client_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.client-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_client_section_title_color', '#fff' ) ) . "; }\n";
		// 	endif;

		// 	// a. client desc Color.
		// 	if ( get_theme_mod( 'marin_client_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.client-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_client_section_description_color', '#fff' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Step Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_step_section_color_disable', false ) ) :
		// 	// a. step title Color.
		// 	if ( get_theme_mod( 'marin_step_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.step-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_step_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. step desc Color.
		// 	if ( get_theme_mod( 'marin_step_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.step-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_step_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Timeline Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_timeline_section_color_disable', false ) ) :
		// 	// a. timeline title Color.
		// 	if ( get_theme_mod( 'marin_timeline_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.timeline-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_timeline_section_title_color', '#fff' ) ) . "; }\n";
		// 	endif;

		// 	// a. timeline desc Color.
		// 	if ( get_theme_mod( 'marin_timeline_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.timeline-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_timeline_section_description_color', '#fff' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Contact Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_contact_section_color_disable', false ) ) :
		// 	// a. contact title Color.
		// 	if ( get_theme_mod( 'marin_contact_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.contactform-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_contact_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. contact desc Color.
		// 	if ( get_theme_mod( 'marin_contact_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.contactform-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_contact_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Faq Section Heading Color Settings
		*/
		// if ( true === get_theme_mod( 'marin_faq_section_color_disable', false ) ) :
		// 	// a. faq title Color.
		// 	if ( get_theme_mod( 'marin_faq_section_title_color' ) !== null ) :
		// 		$custom_color_css .= '.faq-section .heading-default h3 {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_faq_section_title_color', '#252525' ) ) . "; }\n";
		// 	endif;

		// 	// a. faq desc Color.
		// 	if ( get_theme_mod( 'marin_faq_section_description_color' ) !== null ) :
		// 		$custom_color_css .= '.faq-section .heading-default p {
		// 		color: ' . esc_attr( get_theme_mod( 'marin_faq_section_description_color', '#252525' ) ) . ";					
		// 	}\n";
		// 	endif;
		// endif;

		/**
		 * Blog Section Heading Color Settings
		*/
		if ( true === get_theme_mod( 'marin_blog_section_color_disable', false ) ) :
			// a. blog title Color.
			if ( get_theme_mod( 'marin_blog_section_title_color' ) !== null ) :
				$custom_color_css .= '.post-section .heading-default h3 {
				color: ' . esc_attr( get_theme_mod( 'marin_blog_section_title_color', '#252525' ) ) . "; }\n";
			endif;

			// a. blog desc Color.
			if ( get_theme_mod( 'marin_blog_section_description_color' ) !== null ) :
				$custom_color_css .= '.post-section .heading-default p {
				color: ' . esc_attr( get_theme_mod( 'marin_blog_section_description_color', '#252525' ) ) . ";					
			}\n";
			endif;
		endif;

		/*============= Front Page Color Settings End Here ====================*/

		/**
		 * 1. Primary Colors Theme Color Settings.
		*/
		$marin_primary_colors_selection = get_theme_mod( 'marin_primary_colors_selection', 'gradient-color' );
		$marin_primary_color_1          = get_theme_mod( 'marin_primary_color_1', '#2b66c0' );
		$marin_primary_color_2          = get_theme_mod( 'marin_primary_color_2', '#990b75' );
		$marin_primary_color_liner_ct   = get_theme_mod(
			'marin_primary_color_liner_ct',
			array(
				'slider' => -137,
				'suffix' => 'deg',
			)
		);

		// 1. Primary Colors Theme Color Settings.
		$custom_color_css .= ':root {
			--sp-primary: ' . esc_attr( $marin_primary_color_1 ) . ';
			--sp-primary2: ' . esc_attr( $marin_primary_color_2 ) . ';
		}' . "\n";

		// 1. Primary Colors Theme Gradiant Color Settings.
		if ( 'gradient-color' === $marin_primary_colors_selection ) {
			$custom_color_css .= ':root {
				--sp-gradient1: linear-gradient(' . esc_attr( $marin_primary_color_liner_ct['slider'] . $marin_primary_color_liner_ct['suffix'] ) . ', ' . esc_attr( $marin_primary_color_1 ) . ' 0%, ' . esc_attr( $marin_primary_color_2 ) . ' 100%);
			}';
			$custom_color_css .= '.av-btn-bubble:hover::before, .av-btn-bubble:focus::before {
				background-image: radial-gradient(circle, ' . esc_attr( $marin_primary_color_2 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_2 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_2 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%);
			}' . "\n";
		} else {
			$custom_color_css .= ':root {
				--sp-gradient1: ' . esc_attr( $marin_primary_color_1 ) . ';
			}';
			$custom_color_css .= '.av-btn-bubble:hover::before, .av-btn-bubble:focus::before {
				background-image: radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%),
								radial-gradient(circle, ' . esc_attr( $marin_primary_color_1 ) . ' 25%, transparent 27%);
			}' . "\n";
		}

		/**
		 * 2. Primary Color Theme Background Color Settings.
		*/
		$marin_primary_bg_colors_selection = get_theme_mod( 'marin_primary_bg_colors_selection', 'gradient-color' );
		$marin_primary_bg_color_1          = get_theme_mod( 'marin_primary_bg_color_1', '#0e044b' );
		$marin_primary_bg_color_2          = get_theme_mod( 'marin_primary_bg_color_2', '#22186e' );
		$marin_primary_bg_color_liner_ct   = get_theme_mod(
			'marin_primary_bg_color_liner_ct',
			array(
				'slider' => -137,
				'suffix' => 'deg',
			)
		);

		// 2. Primary Colors Theme Color Settings.
		$custom_color_css .= ':root {
			--sp-primary: ' . esc_attr( $marin_primary_bg_color_1 ) . ';
			--sp-primary2: ' . esc_attr( $marin_primary_bg_color_2 ) . ';
		}' . "\n";

		// 2. Primary Colors Theme Gradiant Color Settings.
		if ( 'gradient-color' === $marin_primary_bg_colors_selection ) {
			$custom_color_css .= ':root {
				--sp-gradient2: linear-gradient(' . esc_attr( $marin_primary_bg_color_liner_ct['slider'] . $marin_primary_bg_color_liner_ct['suffix'] ) . ', ' . esc_attr( $marin_primary_bg_color_1 ) . ' 0%, ' . esc_attr( $marin_primary_bg_color_2 ) . ' 100%);
			}';
		} else {
			$custom_color_css .= ':root {
				--sp-gradient2: ' . esc_attr( $marin_primary_bg_color_1 ) . ';
			}';
		}

		/*============= Theme Primary Color Settings End Here ====================*/

		$marin_colors_menu_disable = get_theme_mod( 'marin_colors_menu_disable', false );
		if ( true === $marin_colors_menu_disable ) {
			/**
			* 1. Menu Color (text/hover/active)
			*/
			$marin_colors_menu_text   = get_theme_mod( 'marin_colors_menu_text', '#252525' );
			$marin_colors_menu_hover  = get_theme_mod( 'marin_colors_menu_hover', '#d81956' );
			$marin_colors_menu_active = get_theme_mod( 'marin_colors_menu_active', '#d81956' );

			$custom_color_css .= '.menubar .menu-wrap > li > a {
				color: ' . esc_attr( $marin_colors_menu_text ) . "; 
			}\n";

			$custom_color_css .= '.navbar-area .menubar .menu-wrap > li:hover > a, .navbar-area .menubar .menu-wrap > li:focus > a {
				background: linear-gradient(-137deg, ' . esc_attr( $marin_colors_menu_hover ) . ' 0%, ' . esc_attr( $marin_colors_menu_hover ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";

			$custom_color_css .= '.navbar-area .menubar .menu-wrap > li.active > a {
				background: linear-gradient(-137deg, ' . esc_attr( $marin_colors_menu_active ) . ' 0%, ' . esc_attr( $marin_colors_menu_active ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";

			/**
			* 1. Sub Menu Color (text/hover/active)
			*/
			$marin_colors_submenu_text   = get_theme_mod( 'marin_colors_submenu_text', '#252525' );
			$marin_colors_submenu_hover  = get_theme_mod( 'marin_colors_submenu_hover', '#d81956' );
			$marin_colors_submenu_active = get_theme_mod( 'marin_colors_submenu_active', '#d81956' );

			$custom_color_css .= '.navbar-area .menubar .dropdown-menu li a {
				color: ' . esc_attr( $marin_colors_submenu_text ) . "; 
			}\n";

			$custom_color_css .= '.navbar-area .menubar .dropdown-menu li:hover > a, .navbar-area .menubar .dropdown-menu li.focus > a {
				background: linear-gradient(-137deg, ' . esc_attr( $marin_colors_submenu_hover ) . ' 0%, ' . esc_attr( $marin_colors_submenu_hover ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";

			$custom_color_css .= '.navbar-area .menubar .menu-wrap .dropdown-menu > li.active > a {
				background: linear-gradient(-137deg, ' . esc_attr( $marin_colors_submenu_active ) . ' 0%, ' . esc_attr( $marin_colors_submenu_active ) . " 100%);
				-webkit-background-clip: text;
				-webkit-text-fill-color: transparent;
			}\n";
		}

		wp_add_inline_style( 'marin-style', $custom_color_css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'marin_custom_theme_colors_options' );
