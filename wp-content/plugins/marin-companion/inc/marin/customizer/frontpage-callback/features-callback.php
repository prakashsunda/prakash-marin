<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// features active callback.
function marin_features_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}

function marin_features_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}

function marin_features_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}

function marin_features_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}

function marin_features_right_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}

	// Container.
function marin_features_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}
	// features Settings Heading.
function marin_features_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}
	// Column.
function marin_features_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}
	// features Count.
function marin_features_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_features_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}
function marin_features_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_features_area_disabled' )->value() == true );
}
function marin_features_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_features_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_features_section_color_disable' )->value() == true
	);
}
function marin_features_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_features_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_features_section_color_disable' )->value() == true
	);
}

