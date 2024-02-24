<?php
/**
 * General Blog.
 *
 * @package     marin
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'marin_Customize_Blog_General_Option' ) ) :

	/**
	 * General Blog..
	 */
	class marin_Customize_Blog_General_Option extends marin_Customize_Base_Option {

		public function elements() {

			return array(

				'marin_general_arcive_single_blog_heading' => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'parent_heading',
						'priority' => 1,
						'label'    => esc_html__( 'Blog/Archive Page Settings', 'marin' ),
						'section'  => 'marin_blog_general',
					),
				),

				'marin_archive_blog_design'                => array(
					'setting' => array(
						'default'           => 'design1',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 3,
						'label'    => esc_html__( 'Template Design', 'marin' ),
						'section'  => 'marin_blog_general',
						'choices'  => array(
							'design1' => MARIN_PARENT_URI . '/assets/images/icons/blog-cover.png',
							'design2' => MARIN_PARENT_URI . '/assets/images/icons/blog-normal.png',
						),
					),
				),

				'marin_blog_content_ordering'              => array(
					'setting' => array(
						'default'           => array(
							'meta-one',
							'title',
							'meta-two',
							'content',
						),
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_sortable' ),
					),
					'control' => array(
						'type'        => 'sortable',
						'priority'    => 5,
						'label'       => esc_html__( 'Elements Positioning', 'marin' ),
						'description' => esc_html__( 'Drag & Drop Post Meta to re-arrange the Order. + You can also hide Blog Meta by click on Eye icon.', 'marin' ),
						'section'     => 'marin_blog_general',
						'choices'     => array(
							'meta-one' => esc_attr__( 'Meta One', 'marin' ),
							'title'    => esc_attr__( 'Title', 'marin' ),
							'meta-two' => esc_attr__( 'Meta Two', 'marin' ),
							'content'  => esc_attr__( 'Content', 'marin' ),
						),
					),
				),

				'marin_archive_blog_heading'               => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 15,
						'label'    => esc_html__( 'Archive Blog/Post Sidebar', 'marin' ),
						'section'  => 'marin_blog_general',
					),
				),
				'marin_archive_blog_pages_layout'          => array(
					'setting' => array(
						'default'           => 'marin_right_sidebar',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 20,
						'label'    => esc_html__( 'Layout', 'marin' ),
						'section'  => 'marin_blog_general',
						'choices'  => array(
							'marin_no_sidebar'    => MARIN_PARENT_URI . '/assets/images/icons/fullwidth.png',
							'marin_left_sidebar'  => MARIN_PARENT_URI . '/assets/images/icons/left-sidebar.png',
							'marin_right_sidebar' => MARIN_PARENT_URI . '/assets/images/icons/right-sidebar.png',
						),
					),
				),

				'marin_single_blog_heading'                => array(
					'setting' => array(),
					'control' => array(
						'type'     => 'heading',
						'priority' => 30,
						'label'    => esc_html__( 'Single Blog/Post Sidebar', 'marin' ),
						'section'  => 'marin_blog_general',
					),
				),

				'marin_single_blog_pages_layout'           => array(
					'setting' => array(
						'default'           => 'marin_right_sidebar',
						'sanitize_callback' => array( 'marin_Customizer_Sanitize', 'sanitize_radio' ),
					),
					'control' => array(
						'type'     => 'radio_image',
						'priority' => 35,
						'label'    => esc_html__( 'Layout', 'marin' ),
						'section'  => 'marin_blog_general',
						'choices'  => array(
							'marin_no_sidebar'    => MARIN_PARENT_URI . '/assets/images/icons/fullwidth.png',
							'marin_left_sidebar'  => MARIN_PARENT_URI . '/assets/images/icons/left-sidebar.png',
							'marin_right_sidebar' => MARIN_PARENT_URI . '/assets/images/icons/right-sidebar.png',
						),
					),
				),
			);
		}
	}

	new marin_Customize_Blog_General_Option();
endif;
