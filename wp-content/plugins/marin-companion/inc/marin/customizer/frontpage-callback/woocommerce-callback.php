<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// woocommerce active callback.
function marin_woocommerce_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

function marin_woocommerce_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

// woocommerce Title.
function marin_woocommerce_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

	// woocommerce Description.
function marin_woocommerce_area_desc( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

function marin_woocommerce_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

function marin_woocommerce_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

	// woocommerce Disable + Autoplay Disable.
function marin_woocommerce_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_woocommerce_autoplay_disable' )->value() == true
	);
}

function marin_woocommerce_loop( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

function marin_woocommerce_dots( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}
function marin_woocommerce_nav( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

// Extra Settings.
function marin_woocommerce_extra_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

	// Container.
function marin_woocommerce_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

	// Column.
function marin_woocommerce_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_woocommerce_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_area_disabled' )->value() == true );
}
function marin_woocommerce_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_woocommerce_area_disabled' )->value() == true );
}
function marin_woocommerce_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_woocommerce_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_woocommerce_section_color_disable' )->value() == true
	);
}
function marin_woocommerce_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_woocommerce_area_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_woocommerce_section_color_disable' )->value() == true
	);
}
