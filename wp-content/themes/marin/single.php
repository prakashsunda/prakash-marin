<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marin
 */

get_header();
?>
<section id="post-section" class="post-section av-py-default">
	<div class="av-container">
		<div class="av-columns-area">
			<?php
			$marin_single_blog_pages_layout = get_theme_mod( 'marin_single_blog_pages_layout', 'marin_right_sidebar' );
			if ( 'marin_left_sidebar' === $marin_single_blog_pages_layout ) :
				get_sidebar();
				endif;
			?>
			<div id="av-primary-content" class="<?php echo esc_attr( marin_single_post_layout() ); ?>">

				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();
						?>
						<?php get_template_part( 'template-parts/content/content', 'single' ); ?>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php comments_template( '', true ); // show comments. ?>
			</div>
			<?php if ( 'marin_right_sidebar' === $marin_single_blog_pages_layout ) : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
