<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// contact active callback.
function marin_contact_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}
function marin_contact_shortcode( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}

function marin_contact_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}

function marin_contact_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}

function marin_contact_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}

	// Container.
function marin_contact_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}
	// contact Settings Heading.
function marin_contact_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_contact_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}
function marin_contact_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true );
}
function marin_contact_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_contact_section_color_disable' )->value() == true
	);
}
function marin_contact_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_contact_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_contact_section_color_disable' )->value() == true
	);
}

