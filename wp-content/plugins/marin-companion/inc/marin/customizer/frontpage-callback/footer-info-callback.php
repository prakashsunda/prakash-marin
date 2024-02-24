<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function marin_footer_info_content( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_info_disabled' )->value() == true );
}
	// Container.
function marin_footer_info_container_size( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_info_disabled' )->value() == true );
}

	// Column.
function marin_footer_info_column_layout( $control ) {
	return true === ( $control->manager->get_setting( 'marin_footer_info_disabled' )->value() == true );
}
