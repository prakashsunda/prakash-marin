<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// 1. Slider active callback.
function marin_main_slider_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}
function marin_slider_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}
function marin_main_slider_autoplay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}
function marin_main_slider_loop( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}
function marin_main_slider_dots( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}
function marin_main_slider_nav( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}

	// 2. Slider Disable + Autoplay Disable.
function marin_main_slider_animation_speed( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_main_slider_autoplay_disable' )->value() == true
	);
}

	// 3. Overlay.
function marin_main_slider_overlay_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}

	// Slider Disable + Overlay Disable (Overlay Color).
function marin_main_slider_overlay_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_main_slider_overlay_disable' )->value() == true
	);
}

	// 4. Slider Meta Color.
function marin_slider_color_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}

function marin_main_slider_text_color_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true );
}

// Slider Title Color.
function marin_main_slider_caption_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_main_slider_text_color_disable' )->value() == true
	);
}

// Slider Title Background Color.
function marin_main_slider_caption_title_bg_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_main_slider_text_color_disable' )->value() == true
	);
}

// Slider SubTitle Color.
function marin_main_slider_caption_subtitle_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_main_slider_text_color_disable' )->value() == true
	);
}

// Slider SubTitle2 Color.
function marin_main_slider_caption_subtitle2_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_main_slider_text_color_disable' )->value() == true
	);
}

// Slider SubTitle2 Color.
function marin_main_slider_caption_descrption_title_color( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_main_slider_disabled' )->value() == true &&
		$control->manager->get_setting( 'marin_main_slider_text_color_disable' )->value() == true
	);
}
