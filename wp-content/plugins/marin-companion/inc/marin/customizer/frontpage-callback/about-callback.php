<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// about active callback.
function marin_about_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}

function marin_about_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}
function marin_about_area_subtitle( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}

function marin_about_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}

function marin_about_editor_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}

function marin_about_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}

function marin_about_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}

// About Image Text.
function marin_about_img_text( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_about_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_about_img' )->value() == true
	);
}

	// Container.
function marin_about_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}
	// about Meta Heading.
function marin_about_meta_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}
	// about Settings Heading.
function marin_about_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}
	// Column.
function marin_about_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}
	// about Count.
function marin_about_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_about_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}
function marin_about_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_about_area_disabled' )->value() == true );
}
function marin_about_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_about_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_about_section_color_disable' )->value() == true
	);
}
function marin_about_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_about_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_about_section_color_disable' )->value() == true
	);
}

