<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// Client active callback.
function marin_client_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

	// Client BG Image.
function marin_client_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

	// Client Title.
function marin_client_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

	// Client Description.
function marin_client_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

function marin_client_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

function marin_client_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

	// Client Disable + Autoplay Disable.
function marin_client_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_client_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_client_autoplay_disable' )->value() == true
	);
}


function marin_client_loop( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

function marin_client_dots( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}
function marin_client_nav( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

// Extra Settings.
function marin_client_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

	// Container.
function marin_client_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

	// Column.
function marin_client_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_client_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}
function marin_client_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_client_disabled' )->value() == true );
}
function marin_client_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_client_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_client_section_color_disable' )->value() == true
	);
}
function marin_client_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_client_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_client_section_color_disable' )->value() == true
	);
}
