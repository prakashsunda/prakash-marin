<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package marin
 */

get_header();
?>
<section id="post-section" class="post-section av-py-default">
	<div class="av-container">
		<div class="av-columns-area">
			<?php
			$marin_archive_blog_pages_layout = get_theme_mod( 'marin_archive_blog_pages_layout', 'marin_right_sidebar' );
			if ( 'marin_left_sidebar' === $marin_archive_blog_pages_layout ) :
				get_sidebar();
				endif;
			?>
			<div id="av-primary-content" class="<?php echo esc_attr( marin_post_layout() ); ?>">	

				<?php if ( have_posts() ) : ?>

					<?php
					while ( have_posts() ) :
						the_post();

							get_template_part( 'template-parts/content/content', 'search' );

					endwhile;
					?>

					<!-- Pagination -->
					<?php
						$posts_pagination = get_the_posts_pagination(
							array(
								'mid_size'  => 1,
								'prev_text' => '<i class="fa fa-angle-double-left"></i>',
								'next_text' => '<i class="fa fa-angle-double-right"></i>',
							)
						);
						echo wp_kses_post( $posts_pagination );
						?>
					<!-- Pagination -->	

				<?php else : ?>

					<?php get_template_part( 'template-parts/content/content', 'none' ); ?>

				<?php endif; ?>
			</div>
			<?php if ( 'marin_right_sidebar' === $marin_archive_blog_pages_layout ) : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
