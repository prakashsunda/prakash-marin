<?php

	// 1. Footer active callback.
function marin_footer_widgets_enabled( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_widgets_enabled' )->value() == true );
}
function marin_footer_effect_enable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_widgets_enabled' )->value() == true );
}
function marin_footer_container_size( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_footer_widgets_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_footer_container_size' )->value() == true
	);
}
function marin_footer_bg_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_widgets_enabled' )->value() == true );
}
function marin_footer_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_widgets_enabled' )->value() == true );
}

	// 2. Footer widgets active callback.
function marin_footer_copright_enabled( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_copright_enabled' )->value() == true );
}

function marin_footer_copyright_th( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_copright_enabled' )->value() == true );
}

function marin_footer_copyright_text( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_copright_enabled' )->value() == true );
}

function marin_footer_copy_social_icon( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_copright_enabled' )->value() == true );
}
function marin_footer_social_icon_enabled( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_copright_enabled' )->value() == true );
}

function marin_footer_copy_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_copright_enabled' )->value() == true );
}

function marin_footer_first_img( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_copright_enabled' )->value() == true );
}
