<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

	$marin_blog_disabled       = get_theme_mod( 'marin_blog_disabled', true );
	$marin_blog_area_title     = get_theme_mod( 'marin_blog_area_title', __( 'Our Blogs', 'marin-companion' ) );
	$marin_blog_area_des       = get_theme_mod( 'marin_blog_area_des', __( 'Stay updated with the latest news by reading our articles written by content writers in the industry.', 'marin-companion' ) );
	$marin_blog_count          = get_theme_mod( 'marin_blog_count', array( 'slider' => 3 ) );
	$marin_blog_design         = get_theme_mod( 'marin_blog_design', 'design1' );
	$marin_blog_container_size = get_theme_mod( 'marin_blog_container_size', 'av-container' );
	$marin_theme_blog_category = get_theme_mod( 'marin_theme_blog_category' );
if ( true === $marin_blog_disabled ) {
	?>	
<section id="post-section" class="post-section av-py-default blog-home shapes-section">
	<div class="<?php echo esc_attr( $marin_blog_container_size ); ?>">
		<?php if ( ! empty( $marin_blog_area_title ) || ! empty( $marin_blog_area_des ) ) : ?>
			<div class="av-columns-area">
				<div class="av-column-12">
					<div class="heading-default text-center wow fadeInUp">
						<?php if ( ! empty( $marin_blog_area_title ) ) : ?>
							<h3><?php echo wp_kses_post( $marin_blog_area_title ); ?></h3>
							<span class="separator"><span><span></span></span></span>
						<?php endif; ?>
						<?php if ( ! empty( $marin_blog_area_des ) ) : ?>
							<p><?php echo wp_kses_post( $marin_blog_area_des ); ?></p>
						<?php endif; ?>	
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="av-columns-area">
			<div class="av-column-12">
				<div class="post-carousel owl-carousel owl-theme">
					<?php
					$marin_blog_args = array(
						'post_type'      => 'post',
						'posts_per_page' => esc_attr( $marin_blog_count['slider'] ),
						'post__not_in'   => get_option( 'sticky_posts' ),
					);

					$marin_wp_query = new WP_Query( $marin_blog_args );
					if ( $marin_wp_query->have_posts() ) {
						$post_count = 0;
						while ( $marin_wp_query->have_posts() ) :
							$marin_wp_query->the_post();
							?>
								<article class="post-items">
								<?php if ( has_post_thumbnail() ) { ?>
										<figure class="post-image 
											<?php if ( 'design1' === $marin_blog_design ) { ?>
												post-image-absolute 
											<?php } ?>">
											<div class="featured-image">
												<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-hover">
													<?php the_post_thumbnail(); ?>
												</a>
											</div>
										</figure>
									<?php } ?>
									<div class="post-content">
										<span class="post-date"> <a href="<?php echo esc_url( get_month_link( get_post_time( 'Y' ), get_post_time( 'm' ) ) ); ?>"><span><?php echo esc_html( get_the_date( 'j' ) ); ?></span><?php echo esc_html( get_the_date( 'M, Y' ) ); ?></a> </span>
									<?php
									if ( is_single() ) :

										the_title( '<h5 class="post-title">', '</h5>' );

										else :

											the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );

											endif;
										?>

										<div class="post-footer">
											<?php
											$marin_blog_readmore_disabled = get_theme_mod( 'marin_blog_readmore_disabled', true );
											if ( true === $marin_blog_readmore_disabled ) {
												the_excerpt();
											} else {
												the_content(
													sprintf(
														__( 'Read More', 'marin-companion' ),
														'<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>'
													)
												);
											}
											?>
											<span class="post-count">
											<?php
											if ( $post_count < 9 ) :
												$post_count = $post_count + 1;
												echo sprintf( __( '0 %s', 'marin-companion' ), esc_html( $post_count ) );
												else :
													echo esc_html( $post_count + 1 );
													endif;
												?>
											</span>
										</div>
									</div>
								</article>
								<?php
								endwhile;
					}
						wp_reset_postdata();
					?>
				</div>

			</div>
		</div>
		<?php
		$marin_blog_button_disabled = get_theme_mod( 'marin_blog_button_disabled', true );
		$marin_blog_button_text     = get_theme_mod( 'marin_blog_button_text', __( 'Show More', 'marin-companion' ) );
		$marin_blog_button_link     = get_theme_mod( 'marin_blog_button_link', '#' );
		if ( true === $marin_blog_button_disabled ) {
			if ( ! empty( $marin_blog_button_text ) ) :
				?>
				<div class="blog-button" style="text-align:center; margin-top:15px;">
					<a href="<?php echo esc_url( $marin_blog_button_link ); ?>" target='_blank' 
						class="av-btn av-btn-primary av-btn-bubble"><?php echo esc_html( $marin_blog_button_text ); ?> 
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
	<div class="shape20 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape20.png" alt="image"></div>
	<div class="shape21 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape12.png" alt="image"></div>
	<div class="shape22 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape22.png" alt="image"></div>
	<div class="shape23 bg-elements"><img src="<?php echo esc_url( MARIN_COMPANION_PLUGIN_URL ); ?>inc/marin/img/clipArt/shape23.png" alt="image"></div>
</section>

	<?php
		$marin_blog_autoplay_disable = get_theme_mod( 'marin_blog_autoplay_disable', true );
		$marin_blog_loop             = get_theme_mod( 'marin_blog_loop', false );
		$marin_blog_dots             = get_theme_mod( 'marin_blog_dots', false );
		$marin_blog_nav              = get_theme_mod( 'marin_blog_nav', true );
		$marin_blog_column_layout    = get_theme_mod( 'marin_blog_column_layout', '3' );
		$marin_blog_animation_speed  = get_theme_mod(
			'marin_blog_animation_speed',
			array(
				'slider' => 6000,
				'suffix' => 'px',
			)
		);
	?>
<script>
	jQuery( document ).ready(function() {
		jQuery(".post-carousel").owlCarousel({
			rtl: jQuery("html").attr("dir") == 'rtl' ? true : false,
			items: 3,
			navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
			margin: 30,
			stagePadding: 15,
			autoplay: true,
			autoplayTimeout: 6000,
			loop: true,
			dots: false,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			responsive: {
				0: {
					items: 1
				},
				601: {
					nav: false
				},
				992: {
					nav: false
				}
			}
		});
	});
</script>
	<?php } ?>
