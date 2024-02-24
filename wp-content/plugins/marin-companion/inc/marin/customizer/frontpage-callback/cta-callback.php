<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// Callout active callback.
function marin_cta_background_image( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}
function marin_cta_effect_enable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// Callout Right Content.
function marin_cta_right_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}
	// Callout Right Title.
function marin_cta_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// Callout Right Description.
function marin_cta_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// Callout Left Content.
function marin_cta_left_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}
	// Callout Left Title.
function marin_cta_area_title2( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// Callout Left Description.
function marin_cta_area_des2( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// Button Heading.
function marin_cta_button_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}
	// Button text.
function marin_cta_button_text( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}
	// Button link.
function marin_cta_button_link( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// extra settinsg.
function marin_cta_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// Container.
function marin_cta_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_cta_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_area_disabled' )->value() == true );
}
function marin_cta_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_area_disabled' )->value() == true );
}
function marin_cta_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_cta_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_cta_section_color_disable' )->value() == true
	);
}
function marin_cta_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_cta_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_cta_section_color_disable' )->value() == true
	);
}
