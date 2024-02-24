<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// testimonial active callback.
function marin_testimonial_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

	// testimonial BG Image.
function marin_testimonial_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

	// testimonial Title.
function marin_testimonial_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

	// testimonial Description.
function marin_testimonial_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

function marin_testimonial_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

function marin_testimonial_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

	// testimonial Disable + Autoplay Disable.
function marin_testimonial_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_testimonial_autoplay_disable' )->value() == true
	);
}


function marin_testimonial_loop( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

function marin_testimonial_dots( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}
function marin_testimonial_nav( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

// Extra Settings.
function marin_testimonial_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

	// Container.
function marin_testimonial_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

	// Column.
function marin_testimonial_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_testimonial_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}
function marin_testimonial_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true );
}
function marin_testimonial_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_testimonial_section_color_disable' )->value() == true
	);
}
function marin_testimonial_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_testimonial_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_testimonial_section_color_disable' )->value() == true
	);
}
