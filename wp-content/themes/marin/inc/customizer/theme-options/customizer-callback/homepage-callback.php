<?php
	// 1. Cta Right Content callback.
function marin_cta_left_icon( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// 2. Cta Left Content callback.
function marin_cta_right_icon( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}

	// 3. Cta Left Content callback.
function marin_cta_button_icon( $control ) {
	return true === ( $control->manager->get_setting( 'marin_cta_disabled' )->value() == true );
}
