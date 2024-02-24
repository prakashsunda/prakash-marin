<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$marin_top_info_disabled = get_theme_mod( 'marin_top_info_disabled', true );
if ( $marin_top_info_disabled == true ) :
	$marin_top_info_container_size = get_theme_mod( 'marin_top_info_container_size', 'av-container' );
	$marin_top_info_column_layout  = get_theme_mod( 'marin_top_info_column_layout', 'av-column-3' );
	$marin_top_info_content        = get_theme_mod( 'marin_top_info_content', MARIN_TOP_INFO_DEFAULT_CONTENT );
	?>
		<section id="info-section" class="top-contact-info">
			<div class="<?php echo esc_attr( $marin_top_info_container_size ); ?>">
				<div class="av-columns-area info-section info-section-one wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<?php
					if ( ! empty( $marin_top_info_content ) ) {
						$allowed_html           = array(
							'br'     => array(),
							'em'     => array(),
							'strong' => array(),
							'b'      => array(),
							'i'      => array(),
						);
						$marin_top_info_content = json_decode( $marin_top_info_content );
						foreach ( $marin_top_info_content as $features_item ) {
							$icon  = ! empty( $features_item->icon_value ) ? apply_filters( 'marin_translate_single_string', $features_item->icon_value, 'Features section' ) : '';
							$title = ! empty( $features_item->title ) ? apply_filters( 'marin_translate_single_string', $features_item->title, 'Features section' ) : '';
							$text  = ! empty( $features_item->text ) ? apply_filters( 'marin_translate_single_string', $features_item->text, 'Features section' ) : '';
							$link  = ! empty( $features_item->link ) ? apply_filters( 'marin_translate_single_string', $features_item->link, 'Features section' ) : '';
							// $button_text = ! empty( $features_item->button_text ) ? apply_filters( 'marin_translate_single_string', $features_item->button_text, 'Features section' ) : '';
							$image        = ! empty( $features_item->image_url ) ? apply_filters( 'marin_translate_single_string', $features_item->image_url, 'Features section' ) : '';
							$open_new_tab = ! empty( $features_item->open_new_tab ) ? apply_filters( 'marin_translate_single_string', $features_item->open_new_tab, 'Features section' ) : '';
							?>
							<div class="<?php echo esc_attr( $marin_top_info_column_layout ); ?> info-wrapper">
								<aside class="widget widget-contact">
									<div class="contact-area">
										<?php if ( ! empty( $icon ) ) : ?>
											<?php
											// If Icon Link Is NOT Empty.
											if ( ! empty( $link ) ) :
												?>
												<a class="contact-icon" href="<?php echo esc_url( $link ); ?>" 
													<?php
													if ( $open_new_tab == 'yes' || $open_new_tab == 'on' ) {
														echo "target='_blank'"; }
													?>
													>
													<i class="fa <?php echo esc_html( $icon ); ?>" aria-hidden="true"></i>
												</a>
											<?php endif; ?>
											<?php
											// If Icon Link Is Empty.
											if ( empty( $link ) ) :
												?>
											<div class="contact-icon">
												<i class="fa <?php echo esc_html( $icon ); ?> " aria-hidden="true"></i>
											</div>
											<?php endif; ?>
										<?php endif; ?>

										<?php if ( ! empty( $title ) ) : // title. ?>
											<span class="title"><?php echo wp_kses( html_entity_decode( $title ), $allowed_html ); ?></span>
										<?php endif; ?>

										<?php if ( ! empty( $text ) ) : // text. ?>
											<span class="description text"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></span>
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
		</section>			
<?php endif; ?>		
<!-- End of Top Contact Info Callout -->

<div class="clearfix"></div>
