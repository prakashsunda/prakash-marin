<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
	// Blog active callback.
function marin_theme_blog_category( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
	// Blog BG Image callback.
function marin_blog_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

	// Title.
function marin_blog_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

	// Description.
function marin_blog_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

function marin_blog_design( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
function marin_blog_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
function marin_blog_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
	// Blog Disable + Autoplay Disable.
function marin_blog_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_blog_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_blog_autoplay_disable' )->value() == true
	);
}

function marin_blog_loop( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

// Read More.
function marin_blog_readmore_disabled( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
function marin_blog_dots( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
function marin_blog_nav( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}


	// Extra Settings.
function marin_blog_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

	// Container.
function marin_blog_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

	// Column.
function marin_blog_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

	// Count.
function marin_blog_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

	// Blog Button Text.
function marin_blog_button_disabled( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}

// Blog Disable + Autoplay Disable.
function marin_blog_button_link( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_blog_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_blog_button_disabled' )->value() == true
	);
}

// Blog Disable + Autoplay Disable.
function marin_blog_button_text( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_blog_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_blog_button_disabled' )->value() == true
	);
}

/* Section Color Setting */

function marin_blog_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
function marin_blog_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_blog_disabled' )->value() == true );
}
function marin_blog_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_blog_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_blog_section_color_disable' )->value() == true
	);
}
function marin_blog_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_blog_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_blog_section_color_disable' )->value() == true
	);
}
