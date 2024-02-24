<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// Funfact active callback.
function marin_funfact_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}
	// Funfact left image.
function marin_funfact_left_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}

// Funfact bg image.
function marin_funfact_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}

	// Funfact title.
function marin_funfact_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}
	// Funfact des.
function marin_funfact_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}

	// settings heading.
function marin_funfact_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}
	// container.
function marin_funfact_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}
	// Column.
function marin_funfact_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}

	// Column.
function marin_funfact_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_funfact_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}
function marin_funfact_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_funfact_disabled' )->value() == true );
}
function marin_funfact_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_funfact_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_funfact_section_color_disable' )->value() == true
	);
}
function marin_funfact_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_funfact_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_funfact_section_color_disable' )->value() == true
	);
}
