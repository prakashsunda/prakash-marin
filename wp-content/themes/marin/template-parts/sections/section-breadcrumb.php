<?php
$marin_page_header_disabled = get_theme_mod( 'marin_page_header_disabled', true );
$marin_page_header_effect   = get_theme_mod( 'marin_page_header_effect', true );

if ( $marin_page_header_disabled ) : ?>
	<section id="breadcrumb-section" class="breadcrumb-area breadcrumb-left <?php echo $marin_page_header_effect ? 'breadcrumb-effect-active' : ''; ?>">
		<div class="av-container">
			<div class="av-columns-area">
				<div class="av-column-12">
					<div class="breadcrumb-content">
						<div class="breadcrumb-heading wow fadeInLeft">
							<h2>
								<?php
								if ( is_home() || is_front_page() ) :
									echo esc_html( single_post_title() );
								elseif ( is_day() ) :
									printf( esc_html__( 'Daily Archives: %s', 'marin' ), esc_html( get_the_date() ) );
								elseif ( is_month() ) :
									printf( esc_html__( 'Monthly Archives: %s', 'marin' ), esc_html( get_the_date( 'F Y' ) ) );
								elseif ( is_year() ) :
									printf( esc_html__( 'Yearly Archives: %s', 'marin' ), esc_html( get_the_date( 'Y' ) ) );
								elseif ( is_category() ) :
									printf( esc_html__( 'Category Archives: %s', 'marin' ), esc_html( single_cat_title( '', false ) ) );
								elseif ( is_tag() ) :
									printf( esc_html__( 'Tag Archives: %s', 'marin' ), esc_html( single_tag_title( '', false ) ) );
								elseif ( is_404() ) :
									echo esc_html__( 'Error 404', 'marin' );
								elseif ( is_author() ) :
									printf( esc_html__( 'Author: %s', 'marin' ), esc_html( get_the_author() ) );
								elseif ( class_exists( 'woocommerce' ) ) :
									if ( is_shop() ) {
										woocommerce_page_title();
									} elseif ( is_cart() || is_checkout() ) {
										the_title();
									} else {
										the_title();
									}
								else :
									the_title();
								endif;
								?>
							</h2>
						</div>
						<ol class="breadcrumb-list wow fadeInRight">
							<?php
							if ( function_exists( 'marin_breadcrumbs' ) ) {
								echo wp_kses_post( marin_breadcrumbs() );
							}
							?>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
