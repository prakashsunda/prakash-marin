<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// faq active callback.
function marin_faq_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}
	// faq left image.
function marin_faq_left_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}

// faq bg image.
function marin_faq_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}

	// faq title.
function marin_faq_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}
	// faq des.
function marin_faq_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}

	// settings heading.
function marin_faq_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}
	// container.
function marin_faq_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}
	// Column.
function marin_faq_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}

	// Column.
function marin_faq_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_faq_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}
function marin_faq_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_faq_disabled' )->value() == true );
}
function marin_faq_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_faq_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_faq_section_color_disable' )->value() == true
	);
}
function marin_faq_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_faq_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_faq_section_color_disable' )->value() == true
	);
}
