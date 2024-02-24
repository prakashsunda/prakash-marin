<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package marin
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function marin_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Widget Area', 'marin' ),
			'id'            => 'marin-sidebar-primary',
			'description'   => __( 'The Primary Widget Area', 'marin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title"><span></span>',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'marin' ),
			'id'            => 'marin-footer-1',
			'description'   => __( 'The Footer Widget Area 1', 'marin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'marin' ),
			'id'            => 'marin-footer-2',
			'description'   => __( 'The Footer Widget Area 2', 'marin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'marin' ),
			'id'            => 'marin-footer-3',
			'description'   => __( 'The Footer Widget Area 3', 'marin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer 4', 'marin' ),
			'id'            => 'marin-footer-4',
			'description'   => __( 'The Footer Widget Area 4', 'marin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'WooCommerce Widget Area', 'marin' ),
			'id'            => 'marin-woocommerce-sidebar',
			'description'   => __( 'This Widget area for WooCommerce Widget', 'marin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Info Widget Area', 'marin' ),
			'id'            => 'marin-info-sidebar',
			'description'   => __( 'This Widget area for Info', 'marin' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'marin_widgets_init' );

