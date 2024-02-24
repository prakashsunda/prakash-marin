<?php
/**
 * Useful Plugin Panel
 *
 * @package marin
 */
?>
<div id="useful-plugin-panel" class="panel-left">
	<?php
	$marin_free_plugins = array(
		'contact-form-7' => array(
			'name'     => 'Contact form 7',
			'slug'     => 'contact-form-7',
			'filename' => 'contact-form-7.php',
		),
		'slider-factory' => array(
			'name'     => 'Slider Factory',
			'slug'     => 'slider-factory',
			'filename' => 'slider-factory.php',
		),
		'filter-gallery' => array(
			'name'     => 'Filter Gallery',
			'slug'     => 'filter-gallery',
			'filename' => 'filter-gallery.php',
		),
	);
	if ( ! empty( $marin_free_plugins ) ) {
		?>
		<div class="recomended-plugin-wrap">
		<?php
		foreach ( $marin_free_plugins as $marin_plugin ) {
			$marin_info = marin_call_plugin_api( $marin_plugin['slug'] );
			?>
			<div class="recom-plugin-wrap w-3-col">
				<div class="plugin-title-install clearfix">
					<span class="title" title="<?php echo esc_attr( $marin_plugin['name'] ); ?>">
						<?php echo esc_html( $marin_plugin['name'] ); ?>	
					</span>
					<?php if ( $marin_plugin['slug'] == 'contact-form-7' ) : ?>
					<p><?php esc_html_e( 'Contact form 7 is popular plugin. And marin theme is fully compatible with this popular plugin. you can make an amazing contact form on your website by using it.', 'marin' ); ?></p>
					<?php endif; ?>

					<?php if ( $marin_plugin['slug'] == 'slider-factory' ) : ?>
					<p><?php esc_html_e( 'Slider factory is a responsive block builder plugin that can help you create “Perfect Slider Gallery” page or section for your WordPress website.', 'marin' ); ?></p>
					<?php endif; ?>

					<?php if ( $marin_plugin['slug'] == 'filter-gallery' ) : ?>
					<p><?php esc_html_e( 'The Filter Gallery is best gallery filtering plugin for WordPress.  It can filter your Images according to your filters. All your images will be shown in beautiful grid layout.', 'marin' ); ?></p>
					<?php endif; ?>

					<?php
					echo '<div class="button-wrap">';
					echo Marin_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $marin_plugin['slug'] );
					echo '</div>';
					?>
				</div>
			</div>
			</br>
			<?php
		}
		?>
		</div>
		<?php
	}
	?>
</div>
