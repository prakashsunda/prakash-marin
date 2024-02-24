<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package marin
 */

if ( ! function_exists( 'marin_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function marin_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			esc_html_x( 'Posted on %s', 'post date', 'marin' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

		$byline = sprintf(
			esc_html_x( 'by %s', 'post author', 'marin' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		);
		echo '<span class="posted-on">' . $posted_on . '</span><span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
	}
endif;

if ( ! function_exists( 'marin_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function marin_entry_footer() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'marin' ) );
			if ( $categories_list && marin_categorized_blog() ) {
				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'marin' ) . '</span>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'marin' ) );
			if ( $tags_list ) {
				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'marin' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="comments-link">';
			/* translators: %s: post title */
			comments_popup_link( sprintf( wp_kses( __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'marin' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
			echo '</span>';
		}

		edit_post_link(
			sprintf(
			/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'marin' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function marin_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'marin_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'marin_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so marin_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so marin_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in marin_categorized_blog.
 */
function marin_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'marin_categories' );
}
add_action( 'edit_category', 'marin_category_transient_flusher' );
add_action( 'save_post', 'marin_category_transient_flusher' );

/**
 * Function that returns if the menu is sticky
 */
if ( ! function_exists( 'marin_sticky_menu' ) ) :
	function marin_sticky_menu() {
		$marin_menu_style = get_theme_mod( 'marin_menu_style', 'sticky' );

		if ( $marin_menu_style == 'sticky' ) :
			return 'sticky-nav ';
		else :
			return 'not-sticky';
		endif;
	}
endif;

/**
 * Function that returns if the menu is sticky
 */
if ( ! function_exists( 'marin_menu_size' ) ) :
	function marin_menu_size() {
		$marin_menu_container_size = get_theme_mod( 'marin_menu_container_size', 'av-container' );

		if ( $marin_menu_container_size == 'container-full' ) :
			return 'container-full';
		else :
			return 'av-container';
		endif;
	}
endif;


/**
 * Register Google fonts for marin.
 */
function marin_google_font() {

	$get_fonts_url = '';

	$font_families = array();

	$font_families = array( 'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900' );

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$get_fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );

		return $get_fonts_url;
}

function marin_scripts_styles() {
	wp_enqueue_style( 'marin-fonts', marin_google_font(), array(), null );
}
add_action( 'wp_enqueue_scripts', 'marin_scripts_styles' );


/**
 * Register Breadcrumb for Multiple Variation
 */
function marin_breadcrumbs_style() {
	get_template_part( './template-parts/sections/section', 'breadcrumb' );
}


/**
 * Archive Post: This Function Check whether Sidebar active or Not
 */
if ( ! function_exists( 'marin_post_layout' ) ) :
	function marin_post_layout() {
		$marin_archive_blog_pages_layout = get_theme_mod( 'marin_archive_blog_pages_layout', 'marin_right_sidebar' );
		if ( 'marin_no_sidebar' !== $marin_archive_blog_pages_layout && is_active_sidebar( 'marin-sidebar-primary' ) ) {
			echo 'av-column-8';
		} else {
			echo 'av-column-12 mx-auto';
		}
	} endif;

/**
 * Single Post: This Function Check whether Sidebar active or Not
 */
if ( ! function_exists( 'marin_single_post_layout' ) ) :
	function marin_single_post_layout() {
		$marin_single_blog_pages_layout = get_theme_mod( 'marin_single_blog_pages_layout', 'marin_right_sidebar' );
		if ( 'marin_no_sidebar' !== $marin_single_blog_pages_layout && is_active_sidebar( 'marin-sidebar-primary' ) ) {
			echo 'av-column-8';
		} else {
			echo 'av-column-12 mx-auto';
		}
	} endif;

/**
 * Template Post: This Function Check whether Sidebar active or Not
 */
if ( ! function_exists( 'marin_template_layout' ) ) :
	function marin_template_layout() {
		if ( is_active_sidebar( 'marin-sidebar-primary' ) ) {
			echo 'av-column-8';
		} else {
			echo 'av-column-12 mx-auto';
		}
	} endif;



if ( ! function_exists( 'marin_dynamic_style' ) ) :
	function marin_dynamic_style() {

		$output_css = '';

		/**
		 *  Breadcrumb Style
		 */
		$marin_breadcrumb_height = get_theme_mod( 'marin_breadcrumb_height', '246' );

		if ( $marin_breadcrumb_height !== '' ) {
				$output_css .= '.breadcrumb-content {
					min-height: ' . esc_attr( $marin_breadcrumb_height ) . "px;
				}\n";
		}

		$marin_breadcrumb_bg_img      = get_theme_mod( 'marin_breadcrumb_bg_img', esc_url( get_template_directory_uri() . '/assets/images/breadcrumb/breadcrumb.jpg' ) );
		$marin_breadcrumb_back_attach = get_theme_mod( 'marin_breadcrumb_back_attach', 'scroll' );

		if ( $marin_breadcrumb_bg_img !== '' ) {
			$output_css .= '.breadcrumb-area {
					background-image: url(' . esc_url( $marin_breadcrumb_bg_img ) . ');
					background-attachment: ' . esc_attr( $marin_breadcrumb_back_attach ) . ";
				}\n";
		} else {
			$output_css .= ".breadcrumb-area {
				 background: var(--sp-gradient2);
			}\n";
		}

		$marin_site_cntnr_width = get_theme_mod( 'marin_site_cntnr_width', '1170' );
		if ( $marin_site_cntnr_width >= 768 && $marin_site_cntnr_width <= 2000 ) {
			$output_css .= '.post-section .av-container {
						max-width: ' . esc_attr( $marin_site_cntnr_width ) . "px;
					}\n";
		}

		$marin_footer_effect_enable = get_theme_mod( 'marin_footer_effect_enable', '1' );
		$marin_footer_bg_img        = get_theme_mod( 'marin_footer_bg_img', esc_url( get_template_directory_uri() . '/assets/images/shape.png' ) );

		if ( $marin_footer_effect_enable == '1' ) {
			if ( ! empty( $marin_footer_bg_img ) ) :
				$output_css .= '.footer-section.footer-one{ 
					background-image: url(' . esc_url( $marin_footer_bg_img ) . ");
					background-blend-mode: multiply;
				}
				.footer-section.footer-one:after{
					content: '';
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100%;
					opacity: 0.75;
					background: #000000 none repeat scroll 0 0;
					z-index: -1;
				}\n";
			endif;
		} else {
			if ( ! empty( $marin_footer_bg_img ) ) :
				$output_css .= '.footer-section.footer-one{ 
					background: url(' . esc_url( $marin_footer_bg_img ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
					background-blend-mode: multiply;
				}\n";
			endif;
		}

		/**
		 *  Background Elements
		 */
		$marin_bg_elements_enabled = get_theme_mod( 'marin_bg_elements_enabled', true );

		if ( $marin_bg_elements_enabled == '' ) :
			$output_css .= ".bg-elements { 
					   display:none;
				}\n";
		endif;

		$marin_page_header_background_color = get_theme_mod( 'marin_page_header_background_color' );
		$output_css                        .= ".breadcrumb-area:before {
			background-color: $marin_page_header_background_color !important;
		}\n";

		/**
		 * Logo Width
		 */
		$marin_custom_logo_size = get_theme_mod(
			'marin_custom_logo_size',
			array(
				'slider' => 140,
				'suffix' => 'px',
			)
		);
		if ( $marin_custom_logo_size['slider'] != null ) {
			$output_css .= '.logo img, .mobile-logo img {
				max-width: ' . esc_attr( $marin_custom_logo_size['slider'] ) . "px;
			}\n";
		}

		/**
		 * Slider Overlay Settings
		 */
		$marin_main_slider_overlay_disable = get_theme_mod( 'marin_main_slider_overlay_disable', true );
		$marin_main_slider_overlay_color   = get_theme_mod( 'marin_main_slider_overlay_color', true );
		if ( true === $marin_main_slider_overlay_disable ) {
			$output_css .= ".theme-slider {
				background: rgba(0,0,0,0.6);
			}\n";
		}

		/**
		 * Slider Meta Color Settings
		 */
		$marin_main_slider_text_color_disable = get_theme_mod( 'marin_main_slider_text_color_disable', false );
		if ( true === $marin_main_slider_text_color_disable ) {
			$marin_main_slider_caption_title_color            = get_theme_mod( 'marin_main_slider_caption_title_color', '#fff' );
			$marin_main_slider_caption_title_bg_color         = get_theme_mod( 'marin_main_slider_caption_title_bg_color', '#11104d' );
			$marin_main_slider_caption_subtitle_title_color   = get_theme_mod( 'marin_main_slider_caption_subtitle_title_color', '#fff' );
			$marin_main_slider_caption_subtitle2_title_color  = get_theme_mod( 'marin_main_slider_caption_subtitle2_title_color', '#d81956' );
			$marin_main_slider_caption_descrption_title_color = get_theme_mod( 'marin_main_slider_caption_descrption_title_color', '#fff' );

			$output_css .= ".theme-slider .theme-content h3 {
				color: $marin_main_slider_caption_title_color;
			}
			.theme-slider .theme-content h3 {
				background: $marin_main_slider_caption_title_bg_color;
			}
			.theme-slider .theme-content h1 {
				color: $marin_main_slider_caption_subtitle_title_color;
			}
			.theme-slider .theme-content h1 .primary-color {
				color: $marin_main_slider_caption_subtitle2_title_color;
			}
			.theme-slider .theme-content p {
				color: $marin_main_slider_caption_descrption_title_color;
			}\n";
		}

		/**
		 * About Bg Image Settings
		 */
		$marin_about_background = get_theme_mod( 'marin_about_background' );
		if ( ! empty( $marin_about_background ) ) :
			$output_css .= '.about-section { 
				background: url(' . esc_url( $marin_about_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
			}\n";
		endif;

		/**
		 * Service Bg Image Settings
		 */
		$marin_service_background = get_theme_mod( 'marin_service_background' );
		if ( ! empty( $marin_service_background ) ) :
			$output_css .= '.service-section { 
				background: url(' . esc_url( $marin_service_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
			}\n";
		endif;

		/**
		 * Portfolio Bg Image Settings
		 */
		$marin_portfolio_background = get_theme_mod( 'marin_portfolio_background' );
		if ( ! empty( $marin_portfolio_background ) ) :
			$output_css .= '.portfolio-section { 
				background: url(' . esc_url( $marin_portfolio_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
			}\n";
		endif;

		/**
		 * Cta Bg Image Settings
		 */
		$marin_cta_background_image = get_theme_mod( 'marin_cta_background_image', '' );
		if ( ! empty( $marin_cta_background_image ) ) :
			$output_css .= '.cta-section { 
				background: url(' . esc_url( $marin_cta_background_image ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		* Funfact Bg Image Settings
		*/
		$marin_funfact_background = get_theme_mod( 'marin_funfact_background' );
		if ( ! empty( $marin_funfact_background ) ) :
			$output_css .= '.funfact-section { 
				background: url(' . esc_url( $marin_funfact_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
			}\n";
		endif;

		/**
		 * Team Bg Image Settings
		 */
		$marin_team_background = get_theme_mod( 'marin_team_background' );
		if ( ! empty( $marin_team_background ) ) :
			$output_css .= '.team-section { 
				background: url(' . esc_url( $marin_team_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Client Bg Image Settings
		 */
		$marin_client_background = get_theme_mod( 'marin_client_background' );
		if ( ! empty( $marin_client_background ) ) :
			$output_css .= '.client-section { 
				background: url(' . esc_url( $marin_client_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Testimonial Bg Image Settings
		 */
		$marin_testimonial_background = get_theme_mod( 'marin_testimonial_background' );
		if ( ! empty( $marin_testimonial_background ) ) :
			$output_css .= '.testimonial-section { 
				background: url(' . esc_url( $marin_testimonial_background ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Step Bg Image Settings
		 */
		$marin_step_background = get_theme_mod( 'marin_step_background', get_template_directory_uri() . '/assets/images/bg_dotted.png' );
		if ( ! empty( $marin_step_background ) ) :
			$output_css .= '.step-section { 
				background: url(' . esc_url( $marin_step_background ) . ") no-repeat scroll center center / cover;
			}\n";
		endif;

		/**
		 * Timeline Bg Image Settings
		 */
		$marin_timeline_background = get_theme_mod( 'marin_timeline_background' );
		if ( ! empty( $marin_timeline_background ) ) :
			$output_css .= '.timeline-section { 
				background: url(' . esc_url( $marin_timeline_background ) . ") no-repeat scroll center center / cover;
			}\n";
		endif;

		/**
		 * Map Bg Image Settings
		 */
		$marin_map_img = get_theme_mod( 'marin_map_img' );
		if ( ! empty( $marin_map_img ) ) :
			$output_css .= '.contactmap-section .contactmapinfo { 
				background: url(' . esc_url( $marin_map_img ) . ") no-repeat scroll center center / cover rgba(0, 0, 0, 0.75);
				background-blend-mode: multiply;
			}\n";
		endif;

		/**
		 * Faq Bg Image Settings
		 */
		$marin_faq_background = get_theme_mod( 'marin_faq_background', get_template_directory_uri() . '/assets/images/dotted.png' );
		if ( ! empty( $marin_faq_background ) ) :
			$output_css .= '.faq-section { 
				background: url(' . esc_url( $marin_faq_background ) . ") no-repeat scroll center center / cover;
			}\n";
		endif;

		/**
		 * Contact Bg Image Settings
		 */
		$marin_contact_background = get_theme_mod( 'marin_contact_background', get_template_directory_uri() . '/assets/images/dotted.png' );
		if ( ! empty( $marin_contact_background ) ) :
			$output_css .= '.contactform-section { 
				background: url(' . esc_url( $marin_contact_background ) . ") no-repeat scroll center center / cover;
			}\n";
		endif;

		/**
		 *  Menu-header-3 Custom CSS For Container-full setting
		 */

		$marin_menu_container_size = get_theme_mod( 'marin_menu_container_size', 'av-container' );
		if ( 'container-full' === $marin_menu_container_size ) {
			$output_css .= '@media (min-width: 992px) {
				 .header.header-three {
					 max-width: 95.15%;
					 top: 45px;
				 }
			 }' . "\n";
		}

		/**
		 *  Parallax
		 */
		/*
		$footer_parallax_enable = get_theme_mod( 'footer_parallax_enable', '1' );
		$footer_parallax_margin = get_theme_mod( 'footer_parallax_margin', '775' );

		if ( $footer_parallax_enable == '1' ) :
			$output_css .= '@media (min-width: 992px){.footer-parallax .marin-content {
					margin-bottom: ' . esc_attr( $footer_parallax_margin ) . "px;
			}}\n";
		endif; */

		/* Css For Menu Design 2*/
		$marin_menu_design_layout = get_theme_mod( 'marin_menu_design_layout', 'menu-layout1' );
		if ( 'menu-layout1' !== $marin_menu_design_layout ) {
			$output_css .= '.breadcrumb-content {
				margin-top: 150px;
			}
			@media (max-width: 992px) {
				.breadcrumb-content {
					margin-top: 0px;
				}
			}' . "\n";
		}

		// Check if the front page display setting is set to 'page'.
		if ( is_page_template( 'frontpage.php' ) || is_front_page() ) {
			$output_css .= '/* Hide breadcrumb-section for the front page */
			#breadcrumb-section {
				display: none !important;
			}' . "\n";
		}

		if ( is_admin() ) {
			$output_css .= 'body {
				margin-top: 32px;
			}\n';
		}

		wp_add_inline_style( 'marin-style', $output_css );
	}
endif;
add_action( 'wp_enqueue_scripts', 'marin_dynamic_style' );


/**
 * Admin notice
 */
class marin_screen {
	public function __construct() {
		/* notice  Lines*/
		add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
		add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
		add_action( 'load-themes.php', array( $this, 'marin_activation_admin_notice' ) );
	}
	public function marin_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ( 'themes.php' == $pagenow ) ) {
			add_action( 'admin_notices', array( $this, 'marin_admin_notice' ), 99 );
		}
	}
	/**
	 * Display an admin notice linking to the welcome screen
	 *
	 * @sfunctionse 1.8.2.4
	 */
	public function marin_admin_notice() {
		if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) ) { ?>
			<div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
					<?php
						echo '<div><a href="' . esc_url( wp_nonce_url( add_query_arg( 'gs-notice-dismissed', 'dismiss_admin_notices' ) ) ) . '" class="getting-started-notice-dismiss"> Dismiss this notice </a></div>';
					?>
					<div class="marin-getting-started-notice clearfix">
						<div class="marin-theme-screenshot">
							<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/screenshot.png" class="screenshot" alt="<?php esc_attr_e( 'Theme Screenshot', 'marin' ); ?>" />
						</div><!-- /.marin-theme-screenshot -->
						<div class="marin-theme-notice-content">
							<h2 class="marin-notice-h2">
								<?php
									printf(
										wp_kses(
											__( 'Welcome! Thank you for Choosing %1$s!', 'marin' ),
											array( 'strong' => array() )
										),
										'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>'
									);
								?>
							</h2>

							<p class="plugin-install-notice"><?php echo sprintf( __( 'To take full advantage of all the features of this theme, please install and activate the <strong>Marin Companion</strong> plugin, then enjoy this theme.', 'marin' ) ); ?></p>

							<a class="marin-btn-get-started button button-primary button-hero marin-button-padding" href="#" data-name="" data-slug="">
							<?php
								printf(
									wp_kses(
										__( 'Get started with %1$s', 'marin' ),
										array( 'strong' => array() )
									),
									'<strong>' . esc_html( wp_get_theme()->get( 'Name' ) ) . '</strong>'
								);
							?>

							</a><span class="marin-push-down">
							<?php
								/* translators: %1$s: Anchor link start %2$s: Anchor link end */
								printf(
									'or %1$sCustomize theme%2$s</a></span>',
									'<a target="_blank" href="' . esc_url( admin_url( 'customize.php' ) ) . '">',
									'</a>'
								);
							?>
						</div><!-- /.marin-theme-notice-content -->
					</div>
				</div>
			<?php
		}
	}

	/**
	 * Register dismissal of the getting started notification.
	 * Acts on the dismiss link.
	 * If clicked, the admin notice disappears and will no longer be visible to this user.
	 */
	public function getting_started_notice_dismissed() {

		if ( isset( $_GET['gs-notice-dismissed'] ) ) {
			add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
		}
	}

	/**
	 * Deletes the getting started notice's dismiss status upon theme switch.
	 */
	public function flush_dismiss_status() {
		delete_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
	}

}
$GLOBALS['marin_screen'] = new marin_screen();

/**
* Plugin installer
*/

add_action( 'wp_ajax_install_act_plugin', 'marin_admin_install_plugin' );

function marin_admin_install_plugin() {
	/**
	 * Install Plugin.
	 */
	include_once ABSPATH . '/wp-admin/includes/file.php';
	include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
	include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

	if ( ! file_exists( WP_PLUGIN_DIR . '/one-click-demo-import' ) ) {
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( 'one-click-demo-import' ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );
	}
	if ( ! file_exists( WP_PLUGIN_DIR . '/marin-companion' ) ) {
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => sanitize_key( wp_unslash( 'marin-companion' ) ),
				'fields' => array(
					'sections' => false,
				),
			)
		);

		$skin     = new WP_Ajax_Upgrader_Skin();
		$upgrader = new Plugin_Upgrader( $skin );
		$result   = $upgrader->install( $api->download_link );
	}

	// Activate plugin.
	if ( current_user_can( 'activate_plugin' ) ) {
		$result = activate_plugin( 'one-click-demo-import/one-click-demo-import.php' );
		$result = activate_plugin( 'marin-companion/marin-companion.php' );
	}

}
