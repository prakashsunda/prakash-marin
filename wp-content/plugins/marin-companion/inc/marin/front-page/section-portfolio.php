<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$marin_portfolio_disabled = get_theme_mod( 'marin_portfolio_disabled', true );
if ( true === $marin_portfolio_disabled ) {
	$marin_portfolio_area_title     = get_theme_mod( 'marin_portfolio_area_title', 'Our Projects' );
	$marin_portfolio_area_des       = get_theme_mod( 'marin_portfolio_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$marin_portfolio_content        = get_theme_mod( 'marin_portfolio_content', MARIN_PORTFOLIO_DEFAULT_CONTENT );
	$marin_portfolio_container_size = get_theme_mod( 'marin_portfolio_container_size', 'av-container' );
	$marin_portfolio_column_layout  = get_theme_mod( 'marin_portfolio_column_layout', 'av-column-4' );
	$marin_portfolio_count          = get_theme_mod(
		'marin_portfolio_count',
		array(
			'slider' => 3,
			'suffix' => '',
		)
	);
	?>

	<section id="portfolio-section" class="portfolio-section av-py-default project-home shapes-section">
		<div class="av-container">
			<?php if ( ! empty( $marin_portfolio_area_title ) || ! empty( $marin_portfolio_area_des ) ) : ?>
			<div class="av-columns-area">
				<div class="av-column-12">
					<div class="heading-default text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
						<?php if ( ! empty( $marin_portfolio_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $marin_portfolio_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $marin_portfolio_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $marin_portfolio_area_des ); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>
			<div class="av-filter-wrapper-1">
				<div class="av-columns-area wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
					<div class="av-column-12">
						<div id="av-filter-init-1" class="av-columns-area av-filter-init" style="position: relative; height: 708.718px;">
							<?php
							$item = 0;
							if ( ! empty( $marin_portfolio_content ) ) {
								$marin_portfolio_content = json_decode( $marin_portfolio_content );
								foreach ( $marin_portfolio_content as $portfolio_item ) {
									//if ( $item <= $marin_portfolio_count['slider'] - 1 ) {
										$title        = ! empty( $portfolio_item->title ) ? apply_filters( 'marin_translate_single_string', $portfolio_item->title, 'portfolio section' ) : '';
										$subtitle     = ! empty( $portfolio_item->subtitle ) ? apply_filters( 'marin_translate_single_string', $portfolio_item->subtitle, 'portfolio section' ) : '';
										$text         = ! empty( $portfolio_item->text ) ? apply_filters( 'marin_translate_single_string', $portfolio_item->text, 'portfolio section' ) : '';
										$link         = ! empty( $portfolio_item->link ) ? apply_filters( 'marin_translate_single_string', $portfolio_item->link, 'portfolio section' ) : '';
										$image        = ! empty( $portfolio_item->image_url ) ? apply_filters( 'marin_translate_single_string', $portfolio_item->image_url, 'portfolio section' ) : '';
										$icon         = ! empty( $portfolio_item->icon_value ) ? apply_filters( 'marin_translate_single_string', $portfolio_item->icon_value, 'portfolio section' ) : '';
										$open_new_tab = $portfolio_item->open_new_tab;
										?>

										<div class="av-column-4 av-sm-column-6 av-filter-item year-2005" style="position: absolute; left: 0%; top: 0px;">
											<figure class="portfolio-item mgf-popup">
												<div class="portfolio-inner">
												<?php if ( ! empty( $image ) ) : ?>
														<div class="portfolio-thumb">
															<div class="portfolio-thumb-img">
																<img src="<?php echo esc_url( $image ); ?>"	alt=""	loading="lazy" sizes="(max-width: 560px) 100vw, 560px" />
															</div>
															<div class="portfolio-thumber">
																<div class="portfolio-thumb-content">
																	<a href="<?php echo esc_url( $image ); ?>" class="image" 
																		<?php if ( ! empty( $title ) ) : ?>
																			title="<?php echo esc_html( $title ); ?>" 
																		<?php endif; ?>>
																		<i class="fa fa-search-plus" aria-hidden="true"></i>
																	</a>
																	<?php if ( ! empty( $text ) ) : ?>
																		<p><?php echo esc_html( $text ); ?></p>
																	<?php endif; ?>
																</div>
															</div>
														</div>
													<?php endif; ?>
													<div class="portfolio-caption">
														<div class="caption">
														<?php if ( ! empty( $subtitle ) ) : ?>
																<p><?php echo esc_html( $subtitle ); ?></p>
															<?php endif; ?>
														<?php if ( ! empty( $title ) ) : ?>
																<h6 class="portfolio-title"><?php echo esc_html( $title ); ?></h6>
															<?php endif; ?>
														</div>
													<?php if ( ! empty( $link ) ) : ?>
															<div class="more">
																<a 
																<?php
																if ( $open_new_tab == 'yes' ) {
																	echo 'target="_blank"'; }
																?>
																	href="<?php echo esc_url( $link ); ?>">
																	<i class="fa fa-angle-right" aria-hidden="true"></i>
																</a>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</figure>
										</div>
										<?php
										$item++;
									//}
								}
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<?php
				$marin_portfolio_button_disabled = get_theme_mod( 'marin_portfolio_button_disabled', true );
				$marin_portfolio_button_text     = get_theme_mod( 'marin_portfolio_button_text', 'Show More' );
				$marin_portfolio_button_link     = get_theme_mod( 'marin_portfolio_button_link', '#' );
			if ( true === $marin_portfolio_button_disabled ) {
				if ( ! empty( $marin_portfolio_button_text ) ) :
					?>
						<div class="portfolio-button wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align:center; margin-top:50px;">
							<a href="<?php echo esc_url( $marin_portfolio_button_link ); ?>" target='_blank' 
								class="av-btn av-btn-primary av-btn-bubble"><?php echo esc_html( $marin_portfolio_button_text ); ?> 
								<i class="fa fa-arrow-right"></i> 
								<span class="bubble_effect">
									<span class="circle top-left"></span><span class="circle top-left"></span><span class="circle top-left"></span> 
									<span class="button effect-button"></span> 
									<span class="circle bottom-right"></span><span class="circle bottom-right"></span><span class="circle bottom-right"></span>
								</span>
							</a>
						</div>
					<?php endif; ?>
				<?php } ?>
		</div>
		<div class="shape7 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape1.png" alt="image" /></div>
		<div class="shape8 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape8.png" alt="image" /></div>
		<div class="shape9 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape4.png" alt="image" /></div>
		<div class="shape10 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape10.png" alt="image" /></div>
		<div class="shape11 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape11.png" alt="image" /></div>
		<div class="shape12 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape12.png" alt="image" /></div>
	</section>
<?php } ?>
