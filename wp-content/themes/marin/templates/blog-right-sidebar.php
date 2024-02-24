<?php
/**
 * Template Name: Blog Right Sidebar
 */
get_header();
?>
<section id="post-section" class="post-section av-py-default">
	<div class="av-container">
		<div class="av-columns-area">

			<div id="av-primary-content" class="<?php echo esc_attr( marin_template_layout() ); ?>">

				<?php
					$marin_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
					$marin_args  = array(
						'post_type' => 'post',
						'paged'     => $marin_paged,
					);

					$marin_loop = new WP_Query( $marin_args );
					if ( $marin_loop->have_posts() ) :
						// Start the Loop.
						while ( $marin_loop->have_posts() ) :
							$marin_loop->the_post();
							// includelude the post format-specific template for the content.
							get_template_part( 'template-parts/content/content', 'page' );
						endwhile;
						?>

					<!-- Custom Pagination -->
						<?php
						$marin_big        = 999999999; // Set a big number to ensure all pages are included in the pagination links.
						$marin_pagination = paginate_links(
							array(
								'base'      => str_replace( $marin_big, '%#%', esc_url( get_pagenum_link( $marin_big ) ) ),
								'format'    => '?paged=%#%',
								'current'   => max( 1, get_query_var( 'paged' ) ),
								'total'     => $marin_loop->max_num_pages,
								'prev_text' => '<i class="fa fa-angle-double-left"></i>',
								'next_text' => '<i class="fa fa-angle-double-right"></i>',
								'type'      => 'array', // Generate an array of links.
							)
						);

						if ( $marin_pagination ) :
							?>
							<nav class="navigation pagination" aria-label="<?php echo esc_attr__( 'Posts navigation', 'marin' ); ?>">
								<h2 class="screen-reader-text"><?php echo esc_html__( 'Posts navigation', 'marin' ); ?></h2>
								<div class="nav-links">
								<?php
								foreach ( $marin_pagination as $marin_page_link ) {
									echo $marin_page_link;
								}
								?>
								</div>
							</nav>
						<?php endif; ?>
						<!-- Custom Pagination -->	

				<?php else : ?>
					<?php get_template_part( 'template-parts/content/content', 'none' ); ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
