<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$marin_team_disabled       = get_theme_mod( 'marin_team_disabled', true );
	$marin_team_area_title     = get_theme_mod( 'marin_team_area_title', 'Meet The <span class="primary-color">Team</span>' );
	$marin_team_area_des       = get_theme_mod( 'marin_team_area_des', '' );
	$marin_team_container_size = get_theme_mod( 'marin_team_container_size', 'av-container' );
	$marin_team_content        = get_theme_mod( 'marin_team_content', MARIN_TEAM_DEFAULT_CONTENT );
if ( true === $marin_team_disabled ) :
	?>
<section id="team-section" class="team-section av-py-default team-home shapes-section">
	<div class="av-container">
	<?php if ( ! empty( $marin_team_area_title ) || ! empty( $marin_team_area_des ) ) : ?>
			<div class="av-columns-area">
				<div class="av-column-12">
					<div class="heading-default text-center wow fadeInUp">
						<?php if ( ! empty( $marin_team_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $marin_team_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $marin_team_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $marin_team_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="av-columns-area">
			<div class="av-column-12">
				<div class="team-carousel owl-carousel owl-theme">
				<?php
				if ( ! empty( $marin_team_content ) ) {
					$marin_team_content = json_decode( $marin_team_content );
					foreach ( $marin_team_content as $team_item ) {
						$title        = ! empty( $team_item->title ) ? apply_filters( 'marin_translate_single_string', $team_item->title, 'team section' ) : '';
						$subtitle     = ! empty( $team_item->subtitle ) ? apply_filters( 'marin_translate_single_string', $team_item->subtitle, 'team section' ) : '';
						$text         = ! empty( $team_item->text ) ? apply_filters( 'marin_translate_single_string', $team_item->text, 'team section' ) : '';
						$link         = ! empty( $team_item->link ) ? apply_filters( 'marin_translate_single_string', $team_item->link, 'team section' ) : '';
						$image        = ! empty( $team_item->image_url ) ? apply_filters( 'marin_translate_single_string', $team_item->image_url, 'team section' ) : '';
						$open_new_tab = $team_item->open_new_tab;
						// $open_new_tab = ! empty( $team_item->open_new_tab ) ? apply_filters( 'marin_translate_single_string', $team_item->open_new_tab, 'team section' ) : '';
						?>
						<div class="team-member">
							<div class="team-thumb">
								<?php if ( ! empty( $image ) ) : ?>
									<img src="<?php echo esc_url( $image ); ?>">
								<?php endif; ?>
								<div class="team-view">
									<a href="<?php echo esc_url( $link ); ?>">
										<i class="fa fa-eye" aria-hidden="true"></i>
									</a>
								</div>
								<div class="team-thumber">
									<aside class="widget widget_social_widget">
										<ul>
											<li>
												<?php
												if ( ! empty( $team_item->social_repeater ) ) :
													$icons         = html_entity_decode( $team_item->social_repeater );
													$icons_decoded = json_decode( $icons, true );
													if ( ! empty( $icons_decoded ) ) :
														foreach ( $icons_decoded as $value ) {
															$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'marin_translate_single_string', $value['icon'], 'Team section' ) : '';
															$social_link = ! empty( $value['link'] ) ? apply_filters( 'marin_translate_single_string', $value['link'], 'Team section' ) : '';
															if ( ! empty( $social_icon ) ) {
																?>
																<a
																	<?php
																	if ( $open_new_tab == 'yes' ) {
																		echo 'target="_blank"'; }
																	?>
																	href="<?php echo esc_url( $social_link ); ?>">
																	<i class="fa <?php echo esc_attr( $social_icon ); ?> "></i>
																</a>							
																<?php
															}
														}
													endif;
												endif;
												?>
											</li>
										</ul>
									</aside>
								</div>
							</div>

							<?php if ( ! empty( $title ) || ! empty( $subtitle ) || ! empty( $text ) ) : ?>
								<div class="team-info">
									<h5>
										<a href="<?php echo esc_url( $link ); ?>">
											<?php echo esc_html( $title ); ?>
										</a>
									</h5>
									<p><?php echo esc_html( $subtitle ); ?></p>
									<p><?php echo esc_html( $text ); ?></p>
								</div>
							<?php endif; ?>
						</div>
						<?php
					}
				}
				?>
				</div>
			</div>
		</div>
	</div>
	<div class="shape13 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape8.png" alt="image"></div>
	<div class="shape14 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape3.png" alt="image"></div>
	<div class="shape15 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape4.png" alt="image"></div>
	<div class="shape16 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape12.png" alt="image"></div>
</section>
	<?php
		$marin_team_autoplay_disable = get_theme_mod( 'marin_team_autoplay_disable', true );
		$marin_team_dots             = get_theme_mod( 'marin_team_dots', false );
		$marin_team_nav              = get_theme_mod( 'marin_team_nav', true );
		$marin_team_column_layout    = get_theme_mod( 'marin_team_column_layout', '4' );
	?>
<script>
	jQuery( document ).ready(function() {
		jQuery(".team-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
			nav: true,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			margin: 30,
			stagePadding: 0,
			autoplay: true,
			autoplayTimeout: 6000,
			loop: true,
			dots: false,
			//center: true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			responsive: {
				0: {
					items: 2
				},
				768: {
					items: 3
				},
				992: {
					items: 4,
				}
			}
		});
	});
</script>
<?php endif; ?>
