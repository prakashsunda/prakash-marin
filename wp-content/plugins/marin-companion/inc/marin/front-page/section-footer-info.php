<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'marin_footer_info' ) ) :
	function marin_footer_info() {
		$marin_footer_info_disabled       = get_theme_mod( 'marin_footer_info_disabled', true );
		$marin_footer_info_container_size = get_theme_mod( 'marin_footer_info_container_size', 'av-container' );
		$marin_footer_info_column_layout  = get_theme_mod( 'marin_footer_info_column_layout', 'av-column-4' );
		$marin_footer_info_content        = get_theme_mod( 'marin_footer_info_content', MARIN_FOOTER_INFO_DEFAULT_CONTENT );
		if ( true === $marin_footer_info_disabled ) {
			?>
			<div class="footer-above">
				<div class="<?php echo esc_attr( $marin_footer_info_container_size ); ?>">
					<div class="av-columns-area">
				<?php
				if ( ! empty( $marin_footer_info_content ) ) {
					$marin_footer_info_content = json_decode( $marin_footer_info_content );
					foreach ( $marin_footer_info_content as $footer_item ) {
						$title  = ! empty( $footer_item->title ) ? apply_filters( 'marin_translate_single_string', $footer_item->title, 'footer section' ) : '';
						$text   = ! empty( $footer_item->text ) ? apply_filters( 'marin_translate_single_string', $footer_item->text, 'footer section' ) : '';
						$choice = ! empty( $footer_item->choice ) ? apply_filters( 'marin_translate_single_string', $footer_item->choice, 'footer section' ) : '';
						$icon   = ! empty( $footer_item->icon_value ) ? apply_filters( 'marin_translate_single_string', $footer_item->icon_value, 'footer section' ) : '';
						$link   = ! empty( $footer_item->link ) ? apply_filters( 'marin_translate_single_string', $footer_item->link, 'footer section' ) : '';
						?>
							<div class="<?php echo esc_attr( $marin_footer_info_column_layout ); ?> av-sm-column-6">
								<aside class="widget widget-contact">
									<div class="contact-area">
								<?php if ( ! empty( $icon ) ) : ?>
											<div class="contact-icon"><i class="fa <?php echo esc_attr( $icon ); ?>"></i></div>
										<?php endif; ?>

								<?php if ( ! empty( $title ) || ! empty( $text ) ) : ?>
											<a href="<?php echo esc_url( $link ); ?>" class="contact-info">
												<span class="text"><?php echo esc_html( $title ); ?></span>
												<span class="title"><?php echo esc_html( $text ); ?></span>
											</a>
										<?php endif; ?>	
									</div>
								</aside>
							</div>
							<?php
					}
				}
				?>
					</div>
				</div>
			</div>
			<?php }
	} endif;
add_action( 'marin_above_footer', 'marin_footer_info' );
?>
