<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// map editor content.
function marin_map_editor_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}

	// map left image.
function marin_map_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}

// map bg image.
function marin_map_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}

	// map title.
function marin_map_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}
	// map des.
function marin_map_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}

	// meta heading.
function marin_map_meta_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}

	// meta settings.
function marin_map_meta_disabled( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}
function marin_map_content( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_map_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_map_meta_disabled' )->value() == true
	);
}

	// settings heading.
function marin_map_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}
	// container.
function marin_map_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}
	// Column.
function marin_map_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}

	// Column.
function marin_map_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_map_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_area_disabled' )->value() == true );
}
function marin_map_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_map_area_disabled' )->value() == true );
}
function marin_map_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_map_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_map_section_color_disable' )->value() == true
	);
}
function marin_map_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_map_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_map_section_color_disable' )->value() == true
	);
}
