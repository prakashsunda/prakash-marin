<?php
/**
 * Recommended Plugins Panel
 *
 * @package marin
 */
?>
<div id="recommended-plugins-panel" class="panel-left">
	<?php
	$marin_free_plugins = array(
		'one-click-demo-import' => array(
			'name'     => 'one-click-demo-import',
			'slug'     => 'one-click-demo-import',
			'filename' => 'one-click-demo-import.php',
		),
	);
	if ( ! empty( $marin_free_plugins ) ) {
		?>
		<div class="recomended-plugin-wrap">

			<div class="recom-plugin-wrap mb-0">
				<div class="plugin-title-install clearfix">
					<span class="title" title="">
						<?php esc_html_e( 'Recommended Plugin', 'marin' ); ?>
					</span>
					<p><?php esc_html_e( 'marin Theme is highly recommended OCDI Plugin for marin Theme, After installing it, you will be able to show all the Front-Page features and Multiple Pre-Defined Templates for your Website.', 'marin' ); ?></p>
					<?php
					foreach ( $marin_free_plugins as $marin_plugin ) {
						$marin_info = marin_call_plugin_api( $marin_plugin['slug'] );
						echo '<div class="button-wrap">';
						echo Marin_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $marin_plugin['slug'] );
						echo '</div>';
					}
					?>
				</div>
			</div>
			</br>

		</div>
		<?php
	}
	?>
</div>
