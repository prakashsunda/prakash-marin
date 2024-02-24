<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
	// Portfolio active callback.
	// Title.
function marin_portfolio_area_title( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}

	// Description.
function marin_portfolio_area_des( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}

	// Portfolio content.
function marin_portfolio_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}

	// Portfolio bg image.
function marin_portfolio_background( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}
	// Portfolio Settings Heading.
function marin_portfolio_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}

	// Container.
function marin_portfolio_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}

	// Portfolio Column Layout.
function marin_portfolio_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}
	// Homepage Count.
function marin_portfolio_count( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}
	// Button Text.
function marin_portfolio_button_text( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}
	// Button Link.
function marin_portfolio_button_link( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}

/* Section Color Setting */

function marin_portfolio_section_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}
function marin_portfolio_section_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true );
}
function marin_portfolio_section_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_portfolio_section_color_disable' )->value() == true
	);
}
function marin_portfolio_section_description_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_portfolio_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_portfolio_section_color_disable' )->value() == true
	);
}
