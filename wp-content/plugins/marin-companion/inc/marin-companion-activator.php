<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Fired during plugin activation
 *
 * @package    marin-companion
 */

/**
 * This marin_companion_plugin_activator Class defines that all code are necessary to run during the marin companion plugins activation.
 */
class Marin_Companion_Activator {

	/** Activation Sequence. */
	public static function activate() {

		$marin_fresh_website_activate = get_option( 'marin_fresh_website_activate' );
		if ( (bool) $marin_fresh_website_activate === false ) {
			// Default pages when set as static posts.
			$marin_pages = array( esc_html__( 'Home', 'marin-companion' ), esc_html__( 'Blog', 'marin-companion' ) );
			foreach ( $marin_pages as $marin_page ) {
				$marin_post_data = array(
					'post_author' => 1,
					'post_name'   => sanitize_title( $marin_page ),
					'post_status' => 'publish',
					'post_title'  => $marin_page,
					'post_type'   => 'page',
				);
				if ( $marin_page == 'Home' ) :
					$marin_page_option = 'page_on_front';
					$marin_template    = 'templates/frontpage.php';
				else :
					$marin_page_option = 'page_for_posts';
					$marin_template    = 'page.php';
				endif;
				$marin_post_data = wp_insert_post( $marin_post_data, false );
				if ( $marin_post_data ) {
					update_post_meta( $marin_post_data, '_wp_page_template', $marin_template );
					$marin_page = get_page_by_title( $marin_page );
					update_option( 'show_on_front', 'page' );
					update_option( $marin_page_option, $marin_page->ID );
				}
			}
			update_option( 'marin_fresh_website_activate', true );
		}
	} // end of activate function

} // end class

