<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$marin_about_area_disabled = get_theme_mod( 'marin_about_area_disabled', true );
if ( true === $marin_about_area_disabled ) {
	$marin_about_area_title     = get_theme_mod( 'marin_about_area_title', __( 'We Are Professional', 'marin-companion' ) );
	$marin_about_area_subtitle  = get_theme_mod( 'marin_about_area_subtitle', __( 'About Our Skills', 'marin-companion' ) );
	$marin_about_area_des       = get_theme_mod( 'marin_about_area_des', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'marin-companion' ) );
	$marin_about_container_size = get_theme_mod( 'marin_about_container_size', 'av-container' );
	$marin_about_column_layout  = get_theme_mod( 'marin_about_column_layout', 'av-column-6' );
	$marin_about_img            = get_theme_mod( 'marin_about_img', MARIN_COMPANION_PLUGIN_URL . 'inc/marin/img/about/about.png' );
	$marin_about_img_text       = get_theme_mod( 'marin_about_img_text', __( 'Call Us : +70 975 975 70', 'marin-companion' ) );
	$marin_about_editor_content = get_theme_mod( 'marin_about_editor_content' );
	$marin_about_content        = get_theme_mod( 'marin_about_content', MARIN_ABOUT_DEFAULT_CONTENT );
	?>	
	<section id="about-section" class="about-section av-py-default about-home shapes-section">
		<div class="av-container">
			<div class="av-columns-area">
				<?php if ( ! empty( $marin_about_img ) ) : ?>
					<div class="av-column-6 mb-4 mb-av-0">
						<div class="about-content">
							<div class="shapedotted bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/dotted_shape.png" alt="image"></div>
							<img src="<?php echo esc_url( $marin_about_img ); ?>">

							<?php if ( ! empty( $marin_about_img_text ) ) : ?>
								<div class="about-content-summery">
									<div class="about-summery"><?php echo esc_html( $marin_about_img_text ); ?><i></i><i></i><i></i><i></i></div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>

				<!-- About Section -->
				<?php if ( empty( $marin_about_img ) ) : ?>
					<div class="av-column-12">
				<?php else : ?>
					<div class="av-column-6">
				<?php endif; ?>
					<div class="about-panel">
						<?php if ( ! empty( $marin_about_area_title ) || ! empty( $marin_about_area_subtitle ) ) : ?>
							<div class="heading-title">
								<div class="heading-default text-center wow fadeInUp">
									<?php if ( ! empty( $marin_about_area_title ) ) : ?>
										<h3><?php echo wp_kses_post( $marin_about_area_title ); ?></h3>
									<?php endif; ?>
									<?php if ( ! empty( $marin_about_area_subtitle ) ) : ?>
										<h6><?php echo wp_kses_post( $marin_about_area_subtitle ); ?></h6>
									<?php endif; ?>
									<span class="separator"><span><span></span></span></span>
								</div>
							</div>
						<?php endif; ?>
						<?php if ( ! empty( $marin_about_area_des ) ) : ?>
							<p class="about-description"><?php echo wp_kses_post( $marin_about_area_des ); ?></p>
						<?php endif; ?>
						<div class="about-wrapper">
							<?php
							if ( ! empty( $marin_about_content ) ) {
								$marin_about_content = json_decode( $marin_about_content );
								foreach ( $marin_about_content as $about_item ) {
									$title  = ! empty( $about_item->title ) ? apply_filters( 'marin_translate_single_string', $about_item->title, 'about section' ) : '';
									$number = ! empty( $about_item->number ) ? apply_filters( 'marin_translate_single_string', $about_item->number, 'about section' ) : '';
									?>
									<div class="skills-wrapper">
										<div class="skill-panel">
											<?php if ( ! empty( $title ) ) : ?>
												<div class="skill-heading"><?php echo esc_html( $title ); ?></div>
											<?php endif; ?>
											<?php if ( ! empty( $number ) ) : ?>
												<div class="skillbar" data-percent="<?php echo esc_html( $number ); ?>%">
													<div class="skill-bar-percent" style="left: 50%;"><span class="count-bar"><?php echo esc_html( $number ); ?></span>%</div>
													<div class="skillbar-bar" style="width: 50%;"></div>
												</div>
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
		</div>
	</section>
<?php } ?>
