<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// Service active callback.
function marin_service_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}

function marin_service_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}

function marin_service_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}

function marin_service_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}

	// Container.
function marin_service_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}
	// Service Settings Heading.
function marin_service_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}
	// Column.
function marin_service_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}
	// Service Count.
function marin_service_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}


/* Section Color Setting */

function marin_service_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}
function marin_service_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_service_area_disabled' )->value() == true );
}
function marin_service_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_service_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_service_section_color_disable' )->value() == true
	);
}
function marin_service_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_service_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_service_section_color_disable' )->value() == true
	);
}
