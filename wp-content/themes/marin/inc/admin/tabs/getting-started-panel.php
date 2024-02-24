<?php
/**
 * Getting Started Panel.
 *
 * @package marin
 */
?>
<div id="getting-started-panel" class="panel-left visible">
	<div class="panel-aside panel-column">
	<?php
	$marin_free_plugins = array(
		'marin-companion' => array(
			'name'     => 'Marin Companion',
			'slug'     => 'marin-companion',
			'filename' => 'marin-companion.php',
		),
	);
	if ( ! empty( $marin_free_plugins ) ) {
		?>
		<div class="recomended-plugin-wrap">
		<?php
		foreach ( $marin_free_plugins as $marin_plugin ) {
			$marin_info = marin_call_plugin_api( $marin_plugin['slug'] );
			?>
			<h4 title="">
				<?php esc_html_e( 'Companion Plugin', 'marin' ); ?>
			</h4>
			<p class="mt-0"><?php esc_html_e( 'Marin Companion Plugin requires to show all the front page features and Customization setting of Front Page.', 'marin' ); ?></p>
			<?php
			echo '<div class="mt-12">';
			echo Marin_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $marin_plugin['slug'] );
			echo '</div>';
			?>

			<br>
			<?php
		}
		?>
		</div>
		<?php
	}
	?>
	</div> 
	<div class="panel-aside panel-column">
		<h4><?php esc_html_e( 'Go to the Customizer', 'marin' ); ?></h4>
		<p><?php esc_html_e( 'Using the WordPress Customizer you can easily customize every single aspect of the theme. Because this theme provides advanced settings to control the theme layout through the customizer.', 'marin' ); ?></p>
		<a class="button button-primary" target="_blank" href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'marin' ); ?>"><?php esc_html_e( 'Go to the Customizer', 'marin' ); ?></a>
	</div>
</div>
