<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Extend customizer section.
 *
 * @package marin
 *
 * @see     WP_Customize_Section
 * @access  public
 */

function marin_frontpage_sections_settings( $wp_customize ) {

	$active_callback   = isset( $array['active_callback'] ) ? $array['active_callback'] : null;
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	/* Frontpage panel */
	$wp_customize->add_panel(
		'marin_frontpage_settings',
		array(
			'priority'   => 8,
			'capability' => 'edit_theme_options',
			'title'      => __( 'Frontpage Sections', 'marin-companion' ),
		)
	);

	/* Slider Settings */
	$wp_customize->add_section(
		'marin_main_theme_slider',
		array(
			'title'    => __( 'Slider Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 2,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_main_slider_content',
			array(
				'default' => MARIN_SLIDER_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_main_slider_content',
				array(
					'label'                                => esc_html__( 'Slider Items Content', 'marin-companion' ),
					'section'                              => 'marin_main_theme_slider',
					'add_field_label'                      => esc_html__( 'Add new slide', 'marin-companion' ),
					'item_name'                            => esc_html__( 'Slide Item', 'marin-companion' ),
					'priority'                             => 5,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_subtitle2_control' => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_text2_control'    => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_slide_align'      => true,
					'customizer_repeater_checkbox_control' => true,
					'customizer_repeater_image_control'    => true,
					// 'customizer_repeater_image2_control'   => true,
					'customizer_repeater_slide_content_format_type' => true,
					// 'customizer_repeater_slide_format' => true,
					// 'customizer_repeater_video_url_control' => true,
					'active_callback'                      => 'marin_main_slider_content',
				)
			)
		);
	}
		// Slider Active Callback.
		include 'frontpage-callback/slider-callback.php';

	/* Top Info Settings  */
	$wp_customize->add_section(
		'marin_theme_top_info',
		array(
			'title'    => __( 'Top Info Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 200,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_top_info_content',
			array(
				'default' => MARIN_TOP_INFO_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_top_info_content',
				array(
					'label'                                => esc_html__( 'Info Items Content', 'marin-companion' ),
					'section'                              => 'marin_theme_top_info',
					'priority'                             => 10,
					'add_field_label'                      => esc_html__( 'Add New Info', 'marin-companion' ),
					'item_name'                            => esc_html__( 'Info Item', 'marin-companion' ),
					'customizer_repeater_icon_control'     => true,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_checkbox_control' => true,
					'active_callback'                      => 'marin_top_info_content',
				)
			)
		);
	}

	// // Top Info Active Callback.
	include 'frontpage-callback/top-info-callback.php';

	/* About Settings */
	$wp_customize->add_section(
		'marin_theme_about',
		array(
			'title'    => __( 'About Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 300,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_about_content',
			array(
				'default' => MARIN_ABOUT_DEFAULT_CONTENT,
			)
		);

		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_about_content',
				array(
					'label'                              => esc_html__( 'About Items Content', 'marin-companion' ),
					'section'                            => 'marin_theme_about',
					'priority'                           => 10,
					'add_field_label'                    => esc_html__( 'Add new About', 'marin-companion' ),
					'item_name'                          => esc_html__( 'About Item', 'marin-companion' ),
					'customizer_repeater_title_control'  => true,
					'customizer_repeater_number_control' => true,
					'active_callback'                    => 'marin_about_content',
				)
			)
		);
	}

	$wp_customize->add_setting(
		'marin_about_editor_content',
		array(
			'default'           => '',
			'sanitize_callback' => 'wp_kses_post',
		)
	);
	$wp_customize->add_control(
		new Skyrocket_TinyMCE_Custom_control(
			$wp_customize,
			'marin_about_editor_content',
			array(
				'label'           => __( 'About Content (Pro*)', 'marin-companion' ),
				'section'         => 'marin_theme_about',
				'priority'        => 15,
				'input_attrs'     => array(
					'toolbar1'     => 'bold italic bullist numlist alignleft aligncenter alignright link',
					'toolbar2'     => 'formatselect outdent indent | blockquote charmap',
					'mediaButtons' => true,
				),
				'active_callback' => 'marin_about_editor_content',
			)
		)
	);

		// About Section Image.
			$wp_customize->add_setting(
				'marin_about_img',
				array(
					'default'           => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/about/about.png',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'marin_about_img',
					array(
						'label'           => __( 'About Section Image', 'marin-companion' ),
						'priority'        => 16,
						'section'         => 'marin_theme_about',
						'settings'        => 'marin_about_img',
						'active_callback' => 'marin_about_img',
					)
				)
			);
		// About Section Image.

		// About background Image.
		$wp_customize->add_setting(
			'marin_about_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'marin_about_background',
				array(
					'label'           => __( 'About Section Background Image', 'marin-companion' ),
					'priority'        => 50,
					'section'         => 'marin_theme_about',
					'settings'        => 'marin_about_background',
					'active_callback' => 'marin_about_background',
				)
			)
		);
		// About background Image End.

		// About Active Callback.
		include 'frontpage-callback/about-callback.php';

	/* Cta Settings  */
	$wp_customize->add_section(
		'marin_theme_cta',
		array(
			'title'    => __( 'CallOut Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 400,
		)
	);

		// Cta Background Image.
		$wp_customize->add_setting(
			'marin_cta_background_image',
			array(
				'sanitize_callback' => 'esc_url_raw',
				'default'           => '',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'marin_cta_background_image',
				array(
					'label'           => esc_html__( 'Background Image', 'marin-companion' ),
					'section'         => 'marin_theme_cta',
					'settings'        => 'marin_cta_background_image',
					'priority'        => 1005,
					'active_callback' => 'marin_cta_background_image',
				)
			)
		);

		// Cta Active Callback.
		include 'frontpage-callback/cta-callback.php';

	/* Service Settings */
	$wp_customize->add_section(
		'marin_theme_service',
		array(
			'title'    => __( 'Service Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 500,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_service_content',
			array(
				'default' => MARIN_SERVICE_DEFAULT_CONTENT,
			)
		);

		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_service_content',
				array(
					'label'                                => esc_html__( 'Service Items Content', 'marin-companion' ),
					'section'                              => 'marin_theme_service',
					'priority'                             => 10,
					'add_field_label'                      => esc_html__( 'Add new service', 'marin-companion' ),
					'item_name'                            => esc_html__( 'Service Item', 'marin-companion' ),
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_icon_control'     => true,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_subtitle2_control' => true,
					'customizer_repeater_subtitle3_control' => true,
					'customizer_repeater_subtitle4_control' => true,
					'customizer_repeater_subtitle5_control' => true,
					'customizer_repeater_text2_control'    => true,
					'customizer_repeater_link_control'     => true,
					'active_callback'                      => 'marin_service_content',
				)
			)
		);
	}

		// Service background Image Start.
			// Service Background Image.
			$wp_customize->add_setting(
				'marin_service_background',
				array(
					'default'           => '',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'marin_service_background',
					array(
						'label'           => __( 'Background Image', 'marin-companion' ),
						'priority'        => 50,
						'section'         => 'marin_theme_service',
						'settings'        => 'marin_service_background',
						'active_callback' => 'marin_service_background',
					)
				)
			);
		// Service background Image End.

		// Service Active Callback.
		include 'frontpage-callback/service-callback.php';

	/* Portfolio Settings */
	$wp_customize->add_section(
		'marin_theme_portfolio',
		array(
			'title'    => __( 'Portfolio Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 700,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_portfolio_content',
			array(
				'default' => MARIN_PORTFOLIO_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_portfolio_content',
				array(
					'label'                                => esc_html__( 'Portfolio Items Content', 'marin-companion' ),
					'section'                              => 'marin_theme_portfolio',
					'add_field_label'                      => esc_html__( 'Add New Portfolio', 'marin-companion' ),
					'item_name'                            => esc_html__( 'Portfolio Item', 'marin-companion' ),
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_checkbox_control' => true,
					// 'customizer_repeater_repeater_control' => true,
					'active_callback'                      => 'marin_portfolio_content',
				)
			)
		);
	}

		// Portfolio Background Image.
		$wp_customize->add_setting(
			'marin_portfolio_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'marin_portfolio_background',
				array(
					'label'           => __( 'Background Image', 'marin-companion' ),
					'section'         => 'marin_theme_portfolio',
					'settings'        => 'marin_portfolio_background',
					'priority'        => 1005,
					'active_callback' => 'marin_portfolio_background',
				)
			)
		);

		// Portfolio Active Callback.
		include 'frontpage-callback/portfolio-callback.php';

	/* Funfact Settings */
	$wp_customize->add_section(
		'marin_theme_funfact',
		array(
			'title'    => __( 'Funfact Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 800,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_funfact_content',
			array(
				'default' => MARIN_FUNFACT_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_funfact_content',
				array(
					'label'                             => esc_html__( 'Funfact Items Content', 'marin-companion' ),
					'section'                           => 'marin_theme_funfact',
					'add_field_label'                   => esc_html__( 'Add new Funfact', 'marin-companion' ),
					'item_name'                         => esc_html__( 'Funfact Item', 'marin-companion' ),
					'customizer_repeater_title_control' => true,
					'customizer_repeater_text_control'  => true,
					'customizer_repeater_image_control' => true,
					'customizer_repeater_icon_control'  => true,
					'active_callback'                   => 'marin_funfact_content',
				)
			)
		);
	}

		// Funfact left Image Start.
			// Funfact left Image.
			$wp_customize->add_setting(
				'marin_funfact_left_img',
				array(
					'default'           => MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/funfact/funfact.png',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'marin_funfact_left_img',
					array(
						'label'           => __( 'Funfact Content Image', 'marin-companion' ),
						'priority'        => 15,
						'section'         => 'marin_theme_funfact',
						'settings'        => 'marin_funfact_left_img',
						'active_callback' => 'marin_funfact_left_img',
					)
				)
			);
		// Funfact left Image End.

		// Funfact bg Image Start.
			// Funfact bg Image.
			$wp_customize->add_setting(
				'marin_funfact_background',
				array(
					'default'           => '',
					'sanitize_callback' => 'esc_url_raw',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					'marin_funfact_background',
					array(
						'label'           => __( 'Funfact Background Image', 'marin-companion' ),
						// 'description'		=> __( 'Note: This setting uses only for homepage template 1', 'marin-companion' ),
						'section'         => 'marin_theme_funfact',
						'settings'        => 'marin_funfact_background',
						'active_callback' => 'marin_funfact_background',
						'priority'        => 100,
					)
				)
			);
		// Funfact bg Image End.

		// Funfact Active Callback.
		include 'frontpage-callback/funfact-callback.php';

	/* Blog Settings*/
	$wp_customize->add_section(
		'marin_theme_blog',
		array(
			'title'    => __( 'Blog Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 900,
		)
	);
		// Blog Category.
		$wp_customize->add_setting(
			'marin_theme_blog_category',
			array(
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_text_field',
			)
		);
		$wp_customize->add_control(
			new marin_Customize_Category_Control(
				$wp_customize,
				'marin_theme_blog_category',
				array(
					'label'           => __( 'Choose Blog Category (Pro*)', 'marin-companion' ),
					'section'         => 'marin_theme_blog',
					'settings'        => 'marin_theme_blog_category',
					// 'sanitize_callback' => 'sanitize_text_field',
					'active_callback' => 'marin_theme_blog_category',
				)
			)
		);

		// Blog Background Image.
		$wp_customize->add_setting(
			'marin_blog_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'marin_blog_background',
				array(
					'label'           => __( 'Background Image (Pro*)', 'marin-companion' ),
					'section'         => 'marin_theme_blog',
					'priority'        => 300,
					'settings'        => 'marin_blog_background',
					'active_callback' => 'marin_blog_background',
				)
			)
		);

		// Blog Active Callback.
		include 'frontpage-callback/blog-callback.php';

	/* Testimonial Settings */
	$wp_customize->add_section(
		'marin_theme_testimonial',
		array(
			'title'    => __( 'Testimonial Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 1000,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_testimonial_content',
			array(
				'default' => MARIN_TESTIMONIAL_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_testimonial_content',
				array(
					'label'                                => esc_html__( 'Testimonial Items Content', 'marin-companion' ),
					'section'                              => 'marin_theme_testimonial',
					'add_field_label'                      => esc_html__( 'Add new testimonial item', 'marin-companion' ),
					'item_name'                            => esc_html__( 'Testimonial Item', 'marin-companion' ),
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_text_control'     => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_checkbox_control' => true,
					'customizer_repeater_rating_control'   => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_designation_control' => true,
					'active_callback'                      => 'marin_testimonial_content',
				)
			)
		);
	}

		// Testimonial Background Image.
		$wp_customize->add_setting(
			'marin_testimonial_background',
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'marin_testimonial_background',
				array(
					'label'           => __( 'Background Image', 'marin-companion' ),
					'priority'        => 300,
					'section'         => 'marin_theme_testimonial',
					'settings'        => 'marin_testimonial_background',
					'active_callback' => 'marin_testimonial_background',
				)
			)
		);

		// Testimonial Active Callback.
		include 'frontpage-callback/testimonial-callback.php';

	/* Team Settings  */
	$wp_customize->add_section(
		'marin_theme_team',
		array(
			'title'    => __( 'Team Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 1200,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_team_content',
			array(
				'default' => MARIN_TEAM_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_team_content',
				array(
					'label'                                => esc_html__( 'Team Items Content', 'marin-companion' ),
					'section'                              => 'marin_theme_team',
					'add_field_label'                      => esc_html__( 'Add new Team', 'marin-companion' ),
					'item_name'                            => esc_html__( 'Team Item', 'marin-companion' ),
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'customizer_repeater_text_control'     => true,
					// 'customizer_repeater_button_text_control' => true,
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_checkbox_control' => true,
					// 'customizer_repeater_designation_control' => true,
					'customizer_repeater_repeater_control' => true,
					'active_callback'                      => 'marin_team_content',
				)
			)
		);
	}

	// Team Background Image.
	$wp_customize->add_setting(
		'marin_team_background',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'marin_team_background',
			array(
				'label'           => __( 'Background Image', 'marin-companion' ),
				'section'         => 'marin_theme_team',
				'priority'        => 300,
				'settings'        => 'marin_team_background',
				'active_callback' => 'marin_team_background',
			)
		)
	);

		// Team Active Callback.
		include 'frontpage-callback/team-callback.php';

	/* Client Settings */
	$wp_customize->add_section(
		'marin_theme_client',
		array(
			'title'    => __( 'Client Settings', 'marin-companion' ),
			'panel'    => 'marin_frontpage_settings',
			'priority' => 1700,
		)
	);

	if ( class_exists( 'marin_Repeater' ) ) {
		$wp_customize->add_setting(
			'marin_client_content',
			array(
				'default' => MARIN_CLIENT_DEFAULT_CONTENT,
			)
		);
		$wp_customize->add_control(
			new marin_Repeater(
				$wp_customize,
				'marin_client_content',
				array(
					'label'                                => esc_html__( 'Client Items Content', 'marin-companion' ),
					'section'                              => 'marin_theme_client',
					'add_field_label'                      => esc_html__( 'Add New Client item', 'marin-companion' ),
					'item_name'                            => esc_html__( 'Client Item', 'marin-companion' ),
					'customizer_repeater_link_control'     => true,
					'customizer_repeater_image_control'    => true,
					'customizer_repeater_title_control'    => true,
					'customizer_repeater_subtitle_control' => true,
					'active_callback'                      => 'marin_client_content',
				)
			)
		);
	}

	// Client Active Callback.
	include 'frontpage-callback/client-callback.php';
}
add_action( 'customize_register', 'marin_frontpage_sections_settings' );


function marin_Customizer_selective_refresh_settings( $wp_customize ) {

	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';

	// Service Title.
	$wp_customize->add_setting(
		'marin_service_area_title',
		array(
			'default'           => __( 'Our Services', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_service_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'marin-companion' ),
			'section'         => 'marin_theme_service',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_service_area_title',
		)
	);
	// Service Desc.
	$wp_customize->add_setting(
		'marin_service_area_des',
		array(
			'default'           => __( 'We provide the worlds best consulting related services to growth your business.', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_service_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'marin-companion' ),
			'section'         => 'marin_theme_service',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'marin_service_area_des',
		)
	);

	// features Title.
	$wp_customize->add_setting(
		'marin_features_area_title',
		array(
			'default'           => __( 'Why Choose Us', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_features_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'marin-companion' ),
			'section'         => 'marin_theme_features',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_features_area_title',
		)
	);
	// features Desc.
	$wp_customize->add_setting(
		'marin_features_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.	', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_features_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'marin-companion' ),
			'section'         => 'marin_theme_features',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'marin_features_area_des',
		)
	);

	// About Title.
	$wp_customize->add_setting(
		'marin_about_area_title',
		array(
			'default'           => __( 'We Are Professional', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_about_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'marin-companion' ),
			'section'         => 'marin_theme_about',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_about_area_title',
		)
	);

	// About Title.
	$wp_customize->add_setting(
		'marin_about_area_subtitle',
		array(
			'default'           => __( 'About Our Skills', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_about_area_subtitle',
		array(
			'label'           => esc_html__( 'Section SubTitle', 'marin-companion' ),
			'section'         => 'marin_theme_about',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_about_area_subtitle',
		)
	);

	// About Desc.
	$wp_customize->add_setting(
		'marin_about_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_about_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'marin-companion' ),
			'section'         => 'marin_theme_about',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'marin_about_area_des',
		)
	);

	// Portflio Title.
	$wp_customize->add_setting(
		'marin_portfolio_area_title',
		array(
			'default'           => __( 'Our Portfolios', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_portfolio_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'marin-companion' ),
			'section'         => 'marin_theme_portfolio',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_portfolio_area_title',
		)
	);
	// Portflio Desc.
	$wp_customize->add_setting(
		'marin_portfolio_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_portfolio_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'marin-companion' ),
			'section'         => 'marin_theme_portfolio',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'marin_portfolio_area_des',
		)
	);

	// Funfact Title.
	$wp_customize->add_setting(
		'marin_funfact_area_title',
		array(
			'default'           => __( 'Why Choose Us?', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_funfact_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'marin-companion' ),
			'section'         => 'marin_theme_funfact',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_funfact_area_title',
		)
	);
	// Funfact Desc.
	$wp_customize->add_setting(
		'marin_funfact_area_des',
		array(
			'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_funfact_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'marin-companion' ),
			'section'         => 'marin_theme_funfact',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'marin_funfact_area_des',
		)
	);

	// Testimonial Title.
	$wp_customize->add_setting(
		'marin_testimonial_area_title',
		array(
			'default'           => __( 'Happy Customers!', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_testimonial_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'marin-companion' ),
			'section'         => 'marin_theme_testimonial',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_testimonial_area_title',
		)
	);
	// Testimonial Desc.
	$wp_customize->add_setting(
		'marin_testimonial_area_des',
		array(
			'default'           => __( 'Customer Feedback About Our Works', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_testimonial_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'marin-companion' ),
			'section'         => 'marin_theme_testimonial',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'marin_testimonial_area_des',
		)
	);

	// Blog Title.
	$wp_customize->add_setting(
		'marin_blog_area_title',
		array(
			'default'           => __( 'Latest News', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_blog_area_title',
		array(
			'label'           => esc_html__( 'Section Title', 'marin-companion' ),
			'section'         => 'marin_theme_blog',
			'priority'        => 4,
			'type'            => 'text',
			'active_callback' => 'marin_blog_area_title',
		)
	);
	// Blog Description.
	$wp_customize->add_setting(
		'marin_blog_area_des',
		array(
			'default'           => __( 'Stay updated with the latest news by reading our articles written by content writers in the industry.', 'marin-companion' ),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_blog_area_des',
		array(
			'label'           => esc_html__( 'Section Description', 'marin-companion' ),
			'section'         => 'marin_theme_blog',
			'priority'        => 5,
			'type'            => 'textarea',
			'active_callback' => 'marin_blog_area_des',
		)
	);

	// Team Title.
	$wp_customize->add_setting(
		'marin_team_area_title',
		array(
			'default'           => 'MEET THE TEAM',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_team_area_title',
		array(
			'label'           => esc_html__( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_team',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'marin_team_area_title',
		)
	);
	// Team Description.
	$wp_customize->add_setting(
		'marin_team_area_des',
		array(
			'default'           => 'The Best Team Available',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_team_area_des',
		array(
			'label'           => esc_html__( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_team',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'marin_team_area_des',
		)
	);

	// Client Title.
	$wp_customize->add_setting(
		'marin_client_area_title',
		array(
			'default'           => 'MEET THE PARTNERS',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_client_area_title',
		array(
			'label'           => esc_html__( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_client',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'marin_client_area_title',
		)
	);
	// Client Description.
	$wp_customize->add_setting(
		'marin_client_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_client_area_des',
		array(
			'label'           => esc_html__( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_client',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'marin_client_area_des',
		)
	);

	// callout title 1.
	$wp_customize->add_setting(
		'top_bottom_info_title_1',
		array(
			'default'           => __( 'Head Office', 'marin-companion' ),
			'transport'         => $selective_refresh,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_title_1',
		array(
			'label'           => __( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_info',
			'type'            => 'text',
			'active_callback' => 'top_bottom_info_title_1',
		)
	);

	// callout Description 1.
	$wp_customize->add_setting(
		'top_bottom_info_desc_1',
		array(
			'default'           => __( '1026 Park Avenue, San Diago, US', 'marin-companion' ),
			'transport'         => $selective_refresh,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_desc_1',
		array(
			'label'           => __( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_info',
			'type'            => 'textarea',
			'active_callback' => 'top_bottom_info_desc_1',
		)
	);

	// callout title 2.
	$wp_customize->add_setting(
		'top_bottom_info_title_2',
		array(
			'default'           => __( 'Call Us', 'marin-companion' ),
			'transport'         => $selective_refresh,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_title_2',
		array(
			'label'           => __( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_info',
			'type'            => 'text',
			'active_callback' => 'top_bottom_info_title_2',
		)
	);

	// callout Description 2.
	$wp_customize->add_setting(
		'top_bottom_info_desc_2',
		array(
			'default'           => __( '(+97) 750-290-3353', 'marin-companion' ),
			'transport'         => $selective_refresh,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_desc_2',
		array(
			'label'           => __( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_info',
			'type'            => 'textarea',
			'active_callback' => 'top_bottom_info_desc_2',
		)
	);

	// callout title 3.
	$wp_customize->add_setting(
		'top_bottom_info_title_3',
		array(
			'default'           => __( 'Email Us:', 'marin-companion' ),
			'transport'         => $selective_refresh,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_title_3',
		array(
			'label'           => __( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_info',
			'type'            => 'text',
			'active_callback' => 'top_bottom_info_title_3',
		)
	);

	// callout Description 3.
	$wp_customize->add_setting(
		'top_bottom_info_desc_3',
		array(
			'default'           => __( 'info@awordpress.com', 'marin-companion' ),
			'transport'         => $selective_refresh,
			'sanitize_callback' => 'sanitize_text_field',
		)
	);
	$wp_customize->add_control(
		'top_bottom_info_desc_3',
		array(
			'label'           => __( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_info',
			'type'            => 'textarea',
			'active_callback' => 'top_bottom_info_desc_3',
		)
	);

	// step Title.
	$wp_customize->add_setting(
		'marin_step_area_title',
		array(
			'default'           => 'Our Simple Working Steps',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_step_area_title',
		array(
			'label'           => esc_html__( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_step',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'marin_step_area_title',
		)
	);
	// step Description.
	$wp_customize->add_setting(
		'marin_step_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_step_area_des',
		array(
			'label'           => esc_html__( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_step',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'marin_step_area_des',
		)
	);

	// timeline Title.
	$wp_customize->add_setting(
		'marin_timeline_area_title',
		array(
			'default'           => 'Story Of Journey',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_timeline_area_title',
		array(
			'label'           => esc_html__( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_timeline',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'marin_timeline_area_title',
		)
	);
	// timeline Description.
	$wp_customize->add_setting(
		'marin_timeline_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_timeline_area_des',
		array(
			'label'           => esc_html__( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_timeline',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'marin_timeline_area_des',
		)
	);

	// faq Title.
	$wp_customize->add_setting(
		'marin_faq_area_title',
		array(
			'default'           => 'Frequently Asked Question?',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_faq_area_title',
		array(
			'label'           => esc_html__( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_faq',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'marin_faq_area_title',
		)
	);
	// faq Description.
	$wp_customize->add_setting(
		'marin_faq_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_faq_area_des',
		array(
			'label'           => esc_html__( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_faq',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'marin_faq_area_des',
		)
	);

	// contact Title.
	$wp_customize->add_setting(
		'marin_contact_area_title',
		array(
			'default'           => 'Have A Question?',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_contact_area_title',
		array(
			'label'           => esc_html__( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_contact',
			'priority'        => 5,
			'type'            => 'text',
			'active_callback' => 'marin_contact_area_title',
		)
	);
	// contact Description.
	$wp_customize->add_setting(
		'marin_contact_area_des',
		array(
			'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_contact_area_des',
		array(
			'label'           => esc_html__( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_contact',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'marin_contact_area_des',
		)
	);

	// Woocommerce Title.
	$wp_customize->add_setting(
		'marin_woocommerce_area_title',
		array(
			'default'           => 'FEATURED PRODUCTS',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_woocommerce_area_title',
		array(
			'label'           => esc_html__( 'Title', 'marin-companion' ),
			'section'         => 'marin_theme_woocommerce',
			'priority'        => 6,
			'type'            => 'text',
			'active_callback' => 'marin_woocommerce_area_title',
		)
	);

	// Woocommerce Description.
	$wp_customize->add_setting(
		'marin_woocommerce_area_desc',
		array(
			'default'           => 'Showcase your products in this beautiful shop section',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	$wp_customize->add_control(
		'marin_woocommerce_area_desc',
		array(
			'label'           => esc_html__( 'Description', 'marin-companion' ),
			'section'         => 'marin_theme_woocommerce',
			'priority'        => 6,
			'type'            => 'textarea',
			'active_callback' => 'marin_woocommerce_area_desc',
		)
	);
}
add_action( 'customize_register', 'marin_Customizer_selective_refresh_settings' );
