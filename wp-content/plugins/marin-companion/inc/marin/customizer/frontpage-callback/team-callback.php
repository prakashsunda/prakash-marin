<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// Team active callback.
function marin_team_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

function marin_team_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

// Team Title.
function marin_team_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

	// Team Description.
function marin_team_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

function marin_team_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

function marin_team_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

	// Team Disable + Autoplay Disable.
function marin_team_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_team_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_team_autoplay_disable' )->value() == true
	);
}

function marin_team_loop( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

function marin_team_dots( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}
function marin_team_nav( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

// Extra Settings.
function marin_team_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

	// Container.
function marin_team_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

	// Column.
function marin_team_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_team_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}
function marin_team_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_team_disabled' )->value() == true );
}
function marin_team_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_team_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_team_section_color_disable' )->value() == true
	);
}
function marin_team_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_team_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_team_section_color_disable' )->value() == true
	);
}
