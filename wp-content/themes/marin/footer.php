	<div class="footer-one">
		<?php do_action( 'marin_above_footer' ); ?>
	</div>
	</div>
	<!--===// Start: Footer
		=================================-->
	<?php
		$marin_footer_effect_enable = get_theme_mod( 'marin_footer_effect_enable', false );
	?>

		<footer id="footer-section" class="footer-one footer-section  
			<?php
			if ( $marin_footer_effect_enable == true ) :
				echo esc_attr_e( 'footer-effect-active', 'marin' );
			endif;
			?>
		">
			<?php
				$marin_footer_middle_content  = get_theme_mod( 'footer_widget_middle_content', '<i class="fa fa-whatsapp"></i>' );
				$marin_footer_container_size  = get_theme_mod( 'marin_footer_container_size', 'av-container' );
				$marin_footer_column_layout   = get_theme_mod( 'marin_footer_column_layout', 'av-column-4' );
				$marin_footer_widgets_enabled = get_theme_mod( 'marin_footer_widgets_enabled', true );
			if ( $marin_footer_widgets_enabled == true ) {
				if ( is_active_sidebar( 'marin-footer-1' ) || is_active_sidebar( 'marin-footer-2' ) || is_active_sidebar( 'marin-footer-3' ) || is_active_sidebar( 'marin-footer-4' ) ) {
					?>
					<div class="footer-main">
						<div class="<?php echo esc_attr( $marin_footer_container_size ); ?>">
							<div class="av-columns-area">
								<?php if ( is_active_sidebar( 'marin-footer-1' ) ) : ?>
										<div class="<?php echo esc_attr( $marin_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4 pr-md-5">
											<?php dynamic_sidebar( 'marin-footer-1' ); ?>
										</div>
									<?php endif; ?>
								<?php if ( is_active_sidebar( 'marin-footer-2' ) ) : ?>
										<div class="<?php echo esc_attr( $marin_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4 pl-md-5">
											<?php dynamic_sidebar( 'marin-footer-2' ); ?>
										</div>
									<?php endif; ?>
								<?php if ( is_active_sidebar( 'marin-footer-3' ) ) : ?>
										<div class="<?php echo esc_attr( $marin_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4">
											<?php dynamic_sidebar( 'marin-footer-3' ); ?>
										</div>
									<?php endif; ?>
								<?php if ( is_active_sidebar( 'marin-footer-4' ) ) : ?>
										<div class="<?php echo esc_attr( $marin_footer_column_layout ); ?> col-md-6 mb-xl-0 mb-4">
											<?php dynamic_sidebar( 'marin-footer-4' ); ?>
										</div>
									<?php endif; ?>
							</div>	       
						</div>
						<!-- <?php if ( ! empty( $marin_footer_middle_content ) ) : ?>
							<div class="footer-info-overwrap"><div class="icon"><?php echo wp_kses_post( $marin_footer_middle_content ); ?></div></div>
						<?php endif; ?>	 -->
					</div>

					<?php
				}
			}
				$marin_footer_first_img = get_theme_mod( 'marin_footer_first_img', esc_url( get_template_directory_uri() . '/assets/images/logo1.png' ) );
			if ( function_exists( 'marin_get_social_icon_default' ) ) :
				$marin_footer_social_icons = get_theme_mod( 'footer_social_icons', marin_get_social_icon_default() );
				else :
					$marin_footer_social_icons = get_theme_mod( 'footer_social_icons' );
				endif;

				$marin_footer_copright_enabled = get_theme_mod( 'marin_footer_copright_enabled', true );
				if ( $marin_footer_copright_enabled == true ) {
					$marin_footer_copyright_text      = get_theme_mod( 'marin_footer_copyright_text', 'Copyright &copy; [current_year] [site_title] | Powered by [theme_author]' );
					$marin_footer_social_icon_enabled = get_theme_mod( 'marin_footer_social_icon_enabled', true );
					?>
					<div class="footer-copyright">
						<div class="av-container">
							<div class="av-columns-area">
									<?php
									if ( ! empty( $marin_footer_first_img ) && $marin_footer_social_icon_enabled === true && $marin_footer_copyright_text !== '' ) {
										$footer_column_area = 'av-column-4 av-md-column-6';
									} else {
										$footer_column_area = 'av-column-6 av-md-column-6';
									}
									?>
									<!-- If Image Is Empty -->
									<?php if ( ! empty( $marin_footer_first_img ) ) { ?>
										<div class="<?php echo esc_attr( $footer_column_area ); ?> text-md-left text-center">
											<div class="widget-left">
												<div class="logo">
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title"><img src="<?php echo esc_url( $marin_footer_first_img ); ?>"></a>
												</div>
											</div>
										</div>
									<?php } ?>

									<!-- If Image Is Empty -->
									<?php
									if ( true === $marin_footer_social_icon_enabled ) {
										?>
										<div class="<?php echo esc_attr( $footer_column_area ); ?> text-md-center text-center">
											<div class="widget-center">
												<?php if ( $marin_footer_social_icons != '' ) { ?>
													<aside class="share-toolkit widget widget_social_widget">
														<a href="#" class="toolkit-hover"><i class="fa fa-share-alt"></i></a>
														<ul>
															<?php
																$marin_footer_social_icons = json_decode( $marin_footer_social_icons );
															foreach ( $marin_footer_social_icons as $social_item ) {
																$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'marin_translate_single_string', $social_item->icon_value, 'Footer section' ) : '';
																$social_link = ! empty( $social_item->link ) ? apply_filters( 'marin_translate_single_string', $social_item->link, 'Footer section' ) : '';
																?>
																<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
															<?php } ?>
														</ul>
													</aside>
												<?php } ?>
											</div>
										</div>
									<?php } ?>

									<?php if ( ! empty( $marin_footer_copyright_text ) ) { ?>
										<div class="<?php echo esc_attr( $footer_column_area ); ?> text-av-right text-md-left text-center">
											<div class="widget-right">                          
												<?php
													$marin_copyright_allowed_tags = array(
														'[current_year]' => date_i18n( 'Y' ),
														'[site_title]' => get_bloginfo( 'name' ),
														'[theme_author]' => sprintf( __( '<a href="https://wpfrank.com/" target="_blank"> Marin </a>', 'marin' ) ),
													);
													?>

												<div class="copyright-text">
													<?php
														echo wp_kses_post( apply_filters( 'marin_footer_copyright', marin_str_replace_assoc( $marin_copyright_allowed_tags, $marin_footer_copyright_text ) ) );
													?>
												</div>
											</div>
										</div>
									<?php } ?>
							</div>
						</div>
					</div>
			<?php } ?>
		</footer>
		<!-- End: Footer
		=================================-->

		<!-- ScrollUp -->
		<?php
			$marin_goto_top_icon_enabled = get_theme_mod( 'marin_goto_top_icon_enabled', true );
		if ( $marin_goto_top_icon_enabled == true ) :
			?>
			<button type=button class="scrollup"><i class="fa fa-arrow-up"></i></button>
		<?php endif; ?>
	</div>
	<?php
	wp_footer();
	?>
</body>
</html>
