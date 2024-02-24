<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	// Top Info.
function marin_top_info_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_top_info_disabled' )->value() == true );
}
	// Container.
function marin_top_info_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_top_info_disabled' )->value() == true );
}

	// Details heading.
function marin_top_info_settings_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_top_info_disabled' )->value() == true );
}
	// Column.
function marin_top_info_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_top_info_disabled' )->value() == true );
}
