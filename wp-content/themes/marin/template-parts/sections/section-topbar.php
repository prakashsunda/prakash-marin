<?php
if ( ! function_exists( 'marin_above_header' ) ) :
	function marin_above_header() {
		$hide_show_social_icon   = get_theme_mod( 'hide_show_social_icon', true );
		$hide_show_cntct_details = get_theme_mod( 'hide_show_cntct_details', true );
		$hide_show_email_details = get_theme_mod( 'hide_show_email_details', true );
		$hide_show_mbl_details   = get_theme_mod( 'hide_show_mbl_details', true );
		if ( $hide_show_social_icon == true || $hide_show_cntct_details == true || $hide_show_email_details == true || $hide_show_mbl_details == true ) :
			?>
			<div id="above-header" class="header-above-info d-av-block theme-d-none">
				<div class="header-widget">
					<div class="av-container">
						<div class="av-columns-area">
							<div class="av-column-5">
								<div class="widget-left text-av-left text-center">
									<?php
										// above_header_first.
										$marin_topbar_icon_disable = get_theme_mod( 'marin_topbar_icon_disable', true );
										$marin_topbar_social_icons = get_theme_mod( 'marin_topbar_social_icons', marin_get_social_icon_default() );

									if ( true === $marin_topbar_icon_disable ) {
										?>
											<aside class="share-toolkit widget widget_social_widget">
												<a href="#" class="toolkit-hover"><i class="fa fa-share-alt"></i></a>
												<ul>
													<?php
													$marin_topbar_social_icons = json_decode( $marin_topbar_social_icons );
													if ( $marin_topbar_social_icons != '' ) {
														foreach ( $marin_topbar_social_icons as $social_item ) {
															$social_icon = ! empty( $social_item->icon_value ) ? apply_filters( 'marin_translate_single_string', $social_item->icon_value, 'Header section' ) : '';
															$social_link = ! empty( $social_item->link ) ? apply_filters( 'marin_translate_single_string', $social_item->link, 'Header section' ) : '';
															?>
														<li><a href="<?php echo esc_url( $social_link ); ?>"><i class="fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
															<?php
														}
													}
													?>
												</ul>
											</aside>
											<?php
									}
									?>
								</div>
							</div>
							<div class="av-column-7">
								<div class="widget-right text-av-right text-center">                                
									<?php
										$marin_contact_detail_disable = get_theme_mod( 'marin_contact_detail_disable', true );
										$marin_contact_detail_icon    = get_theme_mod( 'marin_contact_detail_icon', 'fa-support' );
										$marin_contact_detail_text    = get_theme_mod( 'marin_contact_detail_text', 'Live Chat' );
										$marin_contact_detail_link    = get_theme_mod( 'marin_contact_detail_link' );
									if ( true === $marin_contact_detail_disable ) {
										?>
												<aside class="widget widget-contact wgt-1">
													<div class="contact-area">
													<?php if ( ! empty( $marin_contact_detail_icon ) ) : ?>
															<div class="contact-icon">
																<i class="fa <?php echo esc_attr( $marin_contact_detail_icon ); ?>"></i>
															</div>
														<?php endif; ?>
														<a href="<?php echo esc_url( $marin_contact_detail_link ); ?>" class="contact-info">
															<span class="title contact"><?php echo esc_html( $marin_contact_detail_text ); ?></span>
														</a>
													</div>
												</aside>
											<?php
									}
										$marin_email_detail_disable = get_theme_mod( 'marin_email_detail_disable', true );
										$marin_email_detail_icon    = get_theme_mod( 'marin_email_detail_icon', 'fa-envelope' );
										$marin_email_detail_text    = get_theme_mod( 'marin_email_detail_text', 'info@example.com' );
										$marin_email_detail_link    = get_theme_mod( 'marin_email_detail_link' );
									?>
										<?php if ( true == $marin_email_detail_disable ) { ?>
												<aside class="widget widget-contact wgt-2">
													<div class="contact-area">
														<?php if ( ! empty( $marin_email_detail_icon ) ) : ?>
															<div class="contact-icon">
																<i class="fa <?php echo esc_attr( $marin_email_detail_icon ); ?>"></i>
															</div>
														<?php endif; ?>	
														<a href="<?php echo esc_url( $marin_email_detail_link ); ?>" class="contact-info">
															<span class="title email"><?php echo esc_html( $marin_email_detail_text ); ?></span>
														</a>
													</div>
												</aside>
											<?php
										}
											$marin_mobile_detail_disable = get_theme_mod( 'marin_mobile_detail_disable', true );
											$marin_mobile_detail_icon    = get_theme_mod( 'marin_mobile_detail_icon', 'fa-whatsapp' );
											$marin_mobile_detail_text    = get_theme_mod( 'marin_mobile_detail_text', '+01-9876543210' );
											$marin_mobile_detail_link    = get_theme_mod( 'marin_mobile_detail_link' );
										?>
										<?php if ( true === $marin_mobile_detail_disable ) { ?>
											<aside class="widget widget-contact wgt-3">
												<div class="contact-area">
													<?php if ( ! empty( $marin_mobile_detail_icon ) ) : ?>
														<div class="contact-icon">
															<i class="fa <?php echo esc_attr( $marin_mobile_detail_icon ); ?>"></i>
														</div>
													<?php endif; ?>	
													<a href="<?php echo esc_url( $marin_mobile_detail_link ); ?>" class="contact-info">
														<span class="title mobile"><?php echo esc_html( $marin_mobile_detail_text ); ?></span>
													</a>
												</div>
											</aside>
										<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endif;
	} endif;
add_action( 'marin_above_header', 'marin_above_header' );
?>
