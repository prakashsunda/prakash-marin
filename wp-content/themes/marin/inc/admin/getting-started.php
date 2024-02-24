<?php
/**
 * Getting Started Page.
 *
 * @package marin
 */

require get_template_directory() . '/inc/admin/class-getting-start-plugin-helper.php';

// Adding Getting Started Page in admin menu.

if ( ! function_exists( 'marin_getting_started_menu' ) ) :
	function marin_getting_started_menu() {
		$marin_plugin_count = null;
		if ( ! is_plugin_active( 'marin-companion/marin-companion.php' ) || ! is_plugin_active( 'one-click-demo-import/one-click-demo-import.php' ) ) :
			$marin_plugin_count = '<span class="awaiting-mod action-count">1</span>';
			endif;
		/* translators: %1$s %2$s: about */
		$title = sprintf( esc_html__( 'About %1$s %2$s', 'marin' ), esc_html( MARIN_THEME_NAME ), $marin_plugin_count );
		/* translators: %1$s: welcome page */
		add_theme_page( sprintf( esc_html__( 'Welcome to %1$s', 'marin' ), esc_html( MARIN_THEME_NAME ), esc_html( MARIN_THEME_VERSION ) ), $title, 'edit_theme_options', 'marin-getting-started', 'marin_getting_started_page' );
	}
endif;
add_action( 'admin_menu', 'marin_getting_started_menu' );

// Load Getting Started styles in the admin.
if ( ! function_exists( 'marin_getting_started_admin_scripts' ) ) :
	function marin_getting_started_admin_scripts( $hook ) {
		// Load styles only on our page.
		if ( 'appearance_page_marin-getting-started' != $hook ) {
			return;
		}

		wp_enqueue_style( 'marin-getting-started', get_template_directory_uri() . '/inc/admin/css/getting-started.css', false, MARIN_THEME_VERSION );
		wp_enqueue_script( 'plugin-install' );
		wp_enqueue_script( 'updates' );
		wp_enqueue_script( 'marin-getting-started', get_template_directory_uri() . '/inc/admin/js/getting-started.js', array( 'jquery' ), MARIN_THEME_VERSION, true );
		wp_enqueue_script( 'marin-recommended-plugin-install', get_template_directory_uri() . '/inc/admin/js/recommended-plugin-install.js', array( 'jquery' ), MARIN_THEME_VERSION, true );
		wp_localize_script( 'marin-recommended-plugin-install', 'marin_start_page', array( 'activating' => __( 'Activating ', 'marin' ) ) );
	}
endif;
add_action( 'admin_enqueue_scripts', 'marin_getting_started_admin_scripts' );


// Plugin API.
if ( ! function_exists( 'marin_call_plugin_api' ) ) :
	function marin_call_plugin_api( $slug ) {
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
		$call_api = get_transient( 'marin_about_plugin_info_' . $slug );

		if ( false === $call_api ) {
				$call_api = plugins_api(
					'plugin_information',
					array(
						'slug'   => $slug,
						'fields' => array(
							'downloaded'        => false,
							'rating'            => false,
							'description'       => false,
							'short_description' => true,
							'donate_link'       => false,
							'tags'              => false,
							'sections'          => true,
							'homepage'          => true,
							'added'             => false,
							'last_updated'      => false,
							'compatibility'     => false,
							'tested'            => false,
							'requires'          => false,
							'downloadlink'      => false,
							'icons'             => true,
						),
					)
				);
				set_transient( 'marin_about_plugin_info_' . $slug, $call_api, 30 * MINUTE_IN_SECONDS );
		}

			return $call_api;
	}
endif;

// Callback function for admin page.
if ( ! function_exists( 'marin_getting_started_page' ) ) :
	function marin_getting_started_page() { ?>
	<div class="wrap getting-started">
		<h2 class="notices"></h2>
		<div class="intro-wrap">
			<div class="intro">
				<h3>
					<?php
					/* translators: %1$s %2$s: welcome message */
					printf( esc_html__( 'Welcome to %1$s - Version %2$s', 'marin' ), esc_html( MARIN_THEME_NAME ), esc_html( MARIN_THEME_VERSION ) );
					?>
				</h3>
				<p><?php esc_html_e( 'Marin is a creative and professional multipurpose WordPress theme. Which is Best for Any Type of Websites, Finance, Consultant, Marketing, Digital Agency, Industries, Online Shops and etc.', 'marin' ); ?></p>
			</div>
			<div class="intro right">

			</div>
		</div>
		<div class="panels">
			<ul class="inline-list">
				<li class="current">
					<a id="getting-started-panel" href="#">
						<?php
							esc_html_e( 'Getting Started', 'marin' );
							if ( ( ! is_plugin_active( 'marin-companion/marin-companion.php' ) ) ) :
								?>
							<span class="plugin-not-active">1</span>
							<?php endif; ?>
					</a>
				</li>
				<li class="recommended-plugins-active">
					<a id="plugins" href="#">
							<?php
							esc_html_e( 'Recommended Actions', 'marin' );
							if ( ( ! is_plugin_active( 'one-click-demo-import/one-click-demo-import.php' ) ) ) :
								?>
							<span class="plugin-not-active">1</span>
							<?php endif; ?>
					</a>
				</li>
				<li>
					<a id="useful-plugin-panel" href="#">
							<?php esc_html_e( 'Useful Plugins', 'marin' ); ?>
					</a>
				</li>
			</ul>
			<div id="panel" class="panel">
					<?php require get_template_directory() . '/inc/admin/tabs/getting-started-panel.php'; ?>
					<?php require get_template_directory() . '/inc/admin/tabs/recommended-plugins-panel.php'; ?>
					<?php require get_template_directory() . '/inc/admin/tabs/useful-plugin-panel.php'; ?>
			</div>
		</div>
	</div>
		<?php
	}
endif;