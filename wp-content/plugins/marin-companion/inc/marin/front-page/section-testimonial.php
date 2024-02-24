<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$marin_testimonial_disabled   = get_theme_mod( 'marin_testimonial_disabled', true );
	$marin_testimonial_area_title = get_theme_mod( 'marin_testimonial_area_title', 'Happy <span class="primary-color">Customers</span>' );
	$marin_testimonial_area_des   = get_theme_mod( 'marin_testimonial_area_des', 'Customer Feedback About Our Works' );
	$marin_testimonial_content    = get_theme_mod( 'marin_testimonial_content', MARIN_TESTIMONIAL_DEFAULT_CONTENT );
if ( true === $marin_testimonial_disabled ) :
	?>
<section id="testimonial-section" class="testimonial-section av-py-default testimonial-home" data-roller="start:0.5">
	<div class="av-container">
	<?php if ( ! empty( $marin_testimonial_area_title ) || ! empty( $marin_testimonial_area_des ) ) : ?>
			<div class="av-columns-area">
				<div class="av-column-12">
					<div class="heading-default heading-white text-center wow fadeInUp">
						<?php if ( ! empty( $marin_testimonial_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $marin_testimonial_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $marin_testimonial_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $marin_testimonial_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="av-columns-area">
			<div class="av-md-column-10 av-xs-column-12 mx-auto">
				<div class="testimonial-carousel owl-carousel owl-theme">
				<?php
				if ( ! empty( $marin_testimonial_content ) ) {
					$marin_testimonial_content = json_decode( $marin_testimonial_content );
					foreach ( $marin_testimonial_content as $testimonial_item ) {
						$title       = ! empty( $testimonial_item->title ) ? apply_filters( 'marin_translate_single_string', $testimonial_item->title, 'testimonial section' ) : '';
						$subtitle    = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'marin_translate_single_string', $testimonial_item->subtitle, 'testimonial section' ) : '';
						$text        = ! empty( $testimonial_item->text ) ? apply_filters( 'marin_translate_single_string', $testimonial_item->text, 'testimonial section' ) : '';
						$link        = ! empty( $testimonial_item->link ) ? apply_filters( 'marin_translate_single_string', $testimonial_item->link, 'testimonial section' ) : '';
						$image       = ! empty( $testimonial_item->image_url ) ? apply_filters( 'marin_translate_single_string', $testimonial_item->image_url, 'testimonial section' ) : '';
						$designation = ! empty( $testimonial_item->designation ) ? apply_filters( 'marin_translate_single_string', $testimonial_item->designation, 'testimonial section' ) : '';
						// $open_new_tab   = $testimonial_item->open_new_tab;
						// $rating_control = $testimonial_item->rating_control;
						?>
						<div class="testimonials-item">
							<div class="testimonials-client-thumb">
								<div class="img-fluid">
									<img src="<?php echo esc_url( $image ); ?>" data-img-url="<?php echo esc_url( $image ); ?>">
								</div>
							</div>
							<div class="testimonials-content">
								<div class="testimonials-icon"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
								<div class="rating">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<?php if ( ! empty( $title ) ) : ?>
									<h4><?php echo esc_html( $title ); ?></h4>
								<?php endif; ?>
								<?php if ( ! empty( $text ) ) : ?>
									<p><?php echo esc_html( $text ); ?></p>
								<?php endif; ?>

								<div class="testimonials-title">
									<?php if ( ! empty( $subtitle ) ) : ?>
										<h5><?php echo esc_html( $subtitle ); ?></h5>
									<?php endif; ?>
									<?php if ( ! empty( $designation ) ) : ?>
										<p><?php echo esc_html( $designation ); ?></p>
									<?php endif; ?>
								</div>
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
</section>
	<?php
		$marin_testimonial_autoplay_disable = get_theme_mod( 'marin_testimonial_autoplay_disable', true );
		$marin_testimonial_loop             = get_theme_mod( 'marin_testimonial_loop', false );
		$marin_testimonial_dots             = get_theme_mod( 'marin_testimonial_dots', false );
		$marin_testimonial_nav              = get_theme_mod( 'marin_testimonial_nav', true );
		$marin_testimonial_column_layout    = get_theme_mod( 'marin_testimonial_column_layout', '5' );
		$marin_testimonial_animation_speed  = get_theme_mod(
			'marin_testimonial_animation_speed',
			array(
				'slider' => 6000,
				'suffix' => 'px',
			)
		);
	?>
<script>
	jQuery( document ).ready(function() {
		jQuery(".testimonial-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
			nav: true,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			thumbs: true,
			thumbImage: true,
			margin: 30,
			stagePadding: 15,
			autoplay: true,
			autoplayTimeout: 6000,
			loop: true,
			dots: false,
			center: true,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			responsive: {
				0: {
					items: 1
				},
				768: {
					items: 1
				},
				992: {
					items: 1,
				}
			}
		});
	});
</script>
<?php endif; ?>
