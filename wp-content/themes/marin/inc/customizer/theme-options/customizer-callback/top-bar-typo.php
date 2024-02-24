<?php
	// A. Top bar active callback.
function marin_topbar_num( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_topbar_heading_text( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_topbar_text( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}

// B. Icon Active Callback.
function marin_topbar_icon_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_topbar_icon_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_topbar_social_icons( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_topbar_icon_disable' )->value() == true
	);
}

// C. Top Bar Details Active Callback.

	// 1. Contact Details Callback.
function marin_contact_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_contact_detail_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_contact_detail_icon( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_contact_detail_disable' )->value() == true
	);
}
function marin_contact_detail_text( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_contact_detail_disable' )->value() == true
	);
}
function marin_contact_detail_link( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_contact_detail_disable' )->value() == true
	);
}

	// 2. Email Details Callback.
function marin_email_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_email_detail_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_email_detail_icon( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_email_detail_disable' )->value() == true
	);
}
function marin_email_detail_text( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_email_detail_disable' )->value() == true
	);
}
function marin_email_detail_link( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_email_detail_disable' )->value() == true
	);
}


	// 3. Mobile Details Callback.
function marin_mobile_details_heading( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_mobile_detail_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_mobile_detail_icon( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_mobile_detail_disable' )->value() == true
	);
}
function marin_mobile_detail_text( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_mobile_detail_disable' )->value() == true
	);
}
function marin_mobile_detail_link( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_mobile_detail_disable' )->value() == true
	);
}

function marin_topbar_button_disable( $control ) {
	return true === ( $control->manager->get_setting( 'marin_topbar_enabled' )->value() == true );
}
function marin_topbar_button( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_topbar_button_disable' )->value() == true
	);
}
function marin_topbar_button_link( $control ) {
	return true === (
		$control->manager->get_setting( 'marin_topbar_enabled' )->value() == true &&
		$control->manager->get_setting( 'marin_topbar_button_disable' )->value() == true
	);
}

