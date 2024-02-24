<?php
/**
 * Register customizer panels and sections.
 *
 * @package marin
 */

/**
 * Panel 1: Theme Options
 */

$wp_customize->add_panel(
	new marin_Customize_Panel(
		$wp_customize,
		'marin_theme_settings',
		array(
			'priority'   => 10,
			'title'      => esc_html__( 'Theme Options', 'marin' ),
			'capabitity' => 'edit_theme_options',
		)
	)
);


	// a. Section: General.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_theme_general',
			array(
				'title'    => esc_html__( 'General Settings', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 10,
			)
		)
	);

	// b. Top Bar Section.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_topbar_settings',
			array(
				'title'    => esc_html__( 'Top Bar Settings', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 20,
			)
		)
	);

	// c. Menu Section.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_theme_menu_bar',
			array(
				'title'    => esc_html__( 'Menu Settings', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 30,
			)
		)
	);

	// d. Section Breadcrumb.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_theme_breadcrumb',
			array(
				'title'    => esc_html__( 'Page Breadcrumb Settings', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 40,
			)
		)
	);

	// e. Blog Section.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_blog_general',
			array(
				'title'    => esc_html__( 'Blog Settings', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 50,
			)
		)
	);

	// f. excerpt Section.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_excerpt_general',
			array(
				'title'    => esc_html__( 'ReadMore/Excerpt Settings', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 60,
			)
		)
	);

	// g. Page Title Section.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_theme_page_title',
			array(
				'title'    => esc_html__( 'Page/Breadcrumb Title', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 70,
			)
		)
	);


	// h. Footer.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_theme_footer',
			array(
				'title'    => esc_html__( 'Footer Settings', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'priority' => 80,
			)
		)
	);

	// h 1. footer widgets.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_footer_widgets',
			array(
				'title'    => esc_html__( 'Footer Widgets', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'section'  => 'marin_theme_footer',
				'priority' => 80,
			)
		)
	);
	// h 2. footer widgets.
	$wp_customize->add_section(
		new marin_Customize_Section(
			$wp_customize,
			'marin_footer_copyright',
			array(
				'title'    => esc_html__( 'Footer Copyright', 'marin' ),
				'panel'    => 'marin_theme_settings',
				'section'  => 'marin_theme_footer',
				'priority' => 90,
			)
		)
	);


	/**
	 * Panel 2: Theme Colors
	 */
	$wp_customize->add_panel(
		new marin_Customize_Panel(
			$wp_customize,
			'marin_theme_colors',
			array(
				'priority'   => 11,
				'title'      => esc_html__( 'Theme Colors', 'marin' ),
				'capabitity' => 'edit_theme_options',
			)
		)
	);

		// a. Colors > Primary Colors .
		$wp_customize->add_section(
			new marin_Customize_Section(
				$wp_customize,
				'marin_theme_skin_color',
				array(
					'title'    => esc_html__( 'Skin Color Mode (Dark/Light)', 'marin' ),
					'panel'    => 'marin_theme_colors',
					'priority' => 10,
				)
			)
		);

		// b. Colors > Primary Colors .
		$wp_customize->add_section(
			new marin_Customize_Section(
				$wp_customize,
				'marin_theme_primary_color',
				array(
					'title'    => esc_html__( 'Primary Colors', 'marin' ),
					'panel'    => 'marin_theme_colors',
					'priority' => 10,
				)
			)
		);

		// c: Colors > Menu Color.
		$wp_customize->add_section(
			new marin_Customize_Section(
				$wp_customize,
				'marin_primary_menu_colors',
				array(
					'title'    => esc_html__( 'Menu Colors', 'marin' ),
					'panel'    => 'marin_theme_colors',
					'priority' => 10,
				)
			)
		);

		// // c: Colors > Content.
		// $wp_customize->add_section(
		// 	new marin_Customize_Section(
		// 		$wp_customize,
		// 		'marin_content_theme_colors',
		// 		array(
		// 			'title'    => esc_html__( 'Content', 'marin' ),
		// 			'panel'    => 'marin_theme_colors',
		// 			'priority' => 10,
		// 		)
		// 	)
		// );

		// // d: Colors > Sidebar.
		// $wp_customize->add_section(
		// 	new marin_Customize_Section(
		// 		$wp_customize,
		// 		'marin_sidebar_theme_colors',
		// 		array(
		// 			'title'    => esc_html__( 'Sidebar', 'marin' ),
		// 			'panel'    => 'marin_theme_colors',
		// 			'priority' => 10,
		// 		)
		// 	)
		// );

		// // e: Colors > Footer.
		// $wp_customize->add_section(
		// 	new marin_Customize_Section(
		// 		$wp_customize,
		// 		'marin_footer_theme_colors',
		// 		array(
		// 			'title'    => esc_html__( 'Footer', 'marin' ),
		// 			'panel'    => 'marin_theme_colors',
		// 			'priority' => 10,
		// 		)
		// 	)
		// );


			/**
			 * Panel 3: Typography
			 */
			$wp_customize->add_panel(
				new marin_Customize_Panel(
					$wp_customize,
					'marin_theme_typography',
					array(
						'priority'   => 30,
						'title'      => esc_html__( 'marin Typography', 'marin' ),
						'capabitity' => 'edit_theme_options',
					)
				)
			);

			// Section: Typography > Enable typography.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_enable_disable_typography',
					array(
						'title'    => esc_html__( 'Enable Typography', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 5,
					)
				)
			);

			// Section: Typography > Header typography.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_header_typography',
					array(
						'title'    => esc_html__( 'Header Typography', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 20,
					)
				)
			);

			// Section: Slider > Homepage Section Slider.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_slider_typography',
					array(
						'title'    => esc_html__( 'Slider Typography', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 25,
					)
				)
			);

			// Section: Typography > Homepage Section typography.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_homepage_typography',
					array(
						'title'    => esc_html__( 'Homepage Typography', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 30,
					)
				)
			);

			// Section: Headings > Headings typography.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_headings_typography',
					array(
						'title'    => esc_html__( 'Headings Typography', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 30,
					)
				)
			);

			// Section: Typography > Page typography.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_blog_archive_typography',
					array(
						'title'    => esc_html__( 'Blog / Archive / Single Post', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 45,
					)
				)
			);

			// Section: Typography > Sidebar typography.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_sidebar_widget_typography',
					array(
						'title'    => esc_html__( 'Sidebar Widget', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 55,
					)
				)
			);

			// Section: Typography > Footer typography.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_footer_widget_typography',
					array(
						'title'    => esc_html__( 'Footer Widget', 'marin' ),
						'panel'    => 'marin_theme_typography',
						'priority' => 65,
					)
				)
			);

			/**
			 * Styling: Theme Styling
			 */
			$wp_customize->add_panel(
				new marin_Customize_Panel(
					$wp_customize,
					'theme_style',
					array(
						'priority'   => 30,
						'title'      => esc_html__( 'marin Theme Styling', 'marin' ),
						'capabitity' => 'edit_theme_options',
					)
				)
			);

			// Section: Theme Styling > Theme Color.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_theme_color_settings',
					array(
						'title'    => esc_html__( 'Theme Color', 'marin' ),
						'panel'    => 'theme_style',
						'priority' => 1,
					)
				)
			);

			// Section: Theme Styling > Theme Size.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_theme_size_settings',
					array(
						'title'    => esc_html__( 'Layout Size', 'marin' ),
						'panel'    => 'theme_style',
						'priority' => 5,
					)
				)
			);

			/* Theme Template. */

			$wp_customize->add_panel(
				new marin_Customize_Panel(
					$wp_customize,
					'marin_theme_template_settings',
					array(
						'priority'   => 30,
						'title'      => esc_html__( 'Theme Templates', 'marin' ),
						'capabitity' => 'edit_theme_options',
					)
				)
			);

			// Section: About Template.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_template_contact_us',
					array(
						'title'    => esc_html__( 'About Template', 'marin' ),
						'panel'    => 'marin_theme_template_settings',
						'priority' => 10,
					)
				)
			);

			// Section: Contact Template.
			$wp_customize->add_section(
				new marin_Customize_Section(
					$wp_customize,
					'marin_template_contact_us',
					array(
						'title'    => esc_html__( 'Contact Us Template', 'marin' ),
						'panel'    => 'marin_theme_template_settings',
						'priority' => 12,
					)
				)
			);

