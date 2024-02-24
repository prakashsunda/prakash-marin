<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$marin_funfact_disabled = get_theme_mod( 'marin_funfact_disabled', true );
if ( true === $marin_funfact_disabled ) {
	$marin_funfact_area_title     = get_theme_mod( 'marin_funfact_area_title', 'Why Choose Us?' );
	$marin_funfact_area_des       = get_theme_mod( 'marin_funfact_area_des', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' );
	$marin_funfact_content        = get_theme_mod( 'marin_funfact_content', MARIN_FUNFACT_DEFAULT_CONTENT );
	$marin_funfact_container_size = get_theme_mod( 'marin_funfact_container_size', 'av-container' );
	$marin_funfact_column_layout  = get_theme_mod( 'marin_funfact_column_layout', 'av-column-4' );
	$marin_funfact_left_img       = get_theme_mod( 'marin_funfact_left_img', MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/funfact/funfact.png' );
	?>	
	<section id="funfact-section" class="funfact-section av-py-default funfact-home shapes-section roller rollerstart" data-roller="start:0.5">
		<div class="<?php echo esc_attr( $marin_funfact_container_size ); ?>">
			<div class="av-columns-area wow fadeInUp">

			<?php if ( ! empty( $marin_funfact_left_img ) ) : ?>
					<div class="av-column-5 funfact-person">
						<div class="funfact-person-img">
							<img src="<?php echo esc_url( $marin_funfact_left_img ); ?>">
						</div>
					</div>
				<?php endif; ?>

			<?php if ( empty( $marin_funfact_left_img ) ) : ?>
				<div class="av-column-12">
				<?php else : ?>
				<div class="av-column-7">
				<?php endif; ?>
				<?php if ( ! empty( $marin_funfact_area_title ) || ! empty( $marin_funfact_area_des ) ) : ?>
						<div class="av-columns-area">
							<div class="av-column-12">
								<div class="heading-default heading-white text-left wow fadeInUp">
									<?php if ( ! empty( $marin_funfact_area_title ) ) : ?>
										<h3><?php echo wp_kses_post( $marin_funfact_area_title ); ?></h3>
										<span class="separator"><span><span></span></span></span>
									<?php endif; ?>
									<?php if ( ! empty( $marin_funfact_area_des ) ) : ?>
										<p><?php echo wp_kses_post( $marin_funfact_area_des ); ?></p>
									<?php endif; ?>	
								</div>
							</div>
						</div>
					<?php endif; ?>
					<div class="av-columns-area funfact-wrapper">
						<?php
						if ( ! empty( $marin_funfact_content ) ) {
							$marin_funfact_content = json_decode( $marin_funfact_content );
							foreach ( $marin_funfact_content as $funfact_item ) {
								$title  = ! empty( $funfact_item->title ) ? apply_filters( 'marin_translate_single_string', $funfact_item->title, 'funfact section' ) : '';
								$text   = ! empty( $funfact_item->text ) ? apply_filters( 'marin_translate_single_string', $funfact_item->text, 'funfact section' ) : '';
								$link   = ! empty( $funfact_item->link ) ? apply_filters( 'marin_translate_single_string', $funfact_item->link, 'funfact section' ) : '';
								$image  = ! empty( $funfact_item->image_url ) ? apply_filters( 'marin_translate_single_string', $funfact_item->image_url, 'funfact section' ) : '';
								$icon   = ! empty( $funfact_item->icon_value ) ? apply_filters( 'marin_translate_single_string', $funfact_item->icon_value, 'funfact section' ) : '';
								$choice = ! empty( $funfact_item->choice ) ? apply_filters( 'marin_translate_single_string', $funfact_item->choice, 'funfact section' ) : '';
								?>
								<div class="av-column-4">
									<div class="funfact-item">
										<?php if ( $choice == 'customizer_repeater_image' ) : ?>
											<div class="funfact-icon">
												<img src="<?php echo esc_url( $image ); ?>" />
											</div>
										<?php else : ?>
											<div class="funfact-icon">
												<i class="fa <?php echo esc_attr( $icon ); ?>" aria-hidden="true"></i>
											</div>
										<?php endif; ?>

										<?php if ( ! empty( $title ) || ! empty( $text ) ) : ?>
											<h3 class="counter"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h3>
											<p><?php echo esc_html( $text ); ?></p>
										<?php endif; ?>
									</div>
								</div>
								<?php
							}
						}
						?>
					</div>
				</div>

			</div>
		</div>
		<div class="shape17 parallax-icon icon-one bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape5.png" alt="image"></div>
		<div class="shape19 parallax-icon icon-two bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape6.png" alt="image"></div>
	</section>
<?php } ?>
