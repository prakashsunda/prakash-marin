<?php
	// 1. Footer active callback.
function marin_menu_btn_icon( $control ) {
	return true === ( $control->manager->get_setting( 'marin_menu_btn_sh' )->value() == true );
}
function marin_menu_btn_text( $control ) {
	return true === ( $control->manager->get_setting( 'marin_menu_btn_sh' )->value() == true );
}
function marin_menu_btn_link( $control ) {
	return true === ( $control->manager->get_setting( 'marin_menu_btn_sh' )->value() == true );
}
