<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// step active callback.
function marin_step_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

	// step BG Image.
function marin_step_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

	// step Title.
function marin_step_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

	// step Description.
function marin_step_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

function marin_step_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

function marin_step_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

	// step Disable + Autoplay Disable.
function marin_step_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_step_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_step_autoplay_disable' )->value() == true
	);
}


function marin_step_loop( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

function marin_step_dots( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}
function marin_step_nav( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

// Extra Settings.
function marin_step_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

	// Container.
function marin_step_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

	// Column.
function marin_step_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_step_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}
function marin_step_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_step_disabled' )->value() == true );
}
function marin_step_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_step_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_step_section_color_disable' )->value() == true
	);
}
function marin_step_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_step_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_step_section_color_disable' )->value() == true
	);
}
