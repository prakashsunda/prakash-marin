<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package marin
 */
$marin_archive_blog_design   = get_theme_mod( 'marin_archive_blog_design', 'design1' );
$marin_blog_content_ordering = get_theme_mod( 'marin_blog_content_ordering', array( 'meta-one', 'title', 'meta-two', 'content' ) );
// Grid Left Sidebar and right Siderbar code for Grid Templates.

// Check if the sidebar is active.
if ( is_active_sidebar( 'marin-sidebar-primary' ) ) {
	$div_classes = 'av-column-6 av-md-column-6';
} else {
	$div_classes = 'av-column-4 av-md-column-6';
}

// Get the current post object.
$grid_template = get_queried_object();

// Check if it's a page and has a template assigned.
if ( is_page() && ! empty( $grid_template->page_template ) ) {
	// Get the template name from the page's meta information.
	$template_name = basename( $grid_template->page_template, '.php' );

	// If the specific template is assigned, update $div_classes.
	if ( $template_name === 'blog-grid-no-sidebar' ) {
		$div_classes = 'av-column-4 av-md-column-6';
	}
}

?>
<div class="<?php echo esc_attr( $div_classes ); ?>">
	<article class="post-items">
		<?php if ( has_post_thumbnail() ) { ?>
			<figure class="post-image 
			<?php
			if ( 'design1' === $marin_archive_blog_design ) {
				?>
				post-image-absolute <?php } ?>">
				<div class="featured-image">
					<a href="<?php echo esc_url( get_permalink() ); ?>" class="post-hover">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
			</figure>
		<?php } ?>
		<div class="post-content">
			<?php foreach ( $marin_blog_content_ordering as $marin_blog_content_order ) : ?>
				<?php if ( 'meta-one' === $marin_blog_content_order ) : ?>
					<span class="post-date"> 
						<a href="<?php echo esc_url( get_month_link( get_post_time( 'Y' ), get_post_time( 'm' ) ) ); ?>">
							<span><?php echo esc_html( get_the_date( 'j' ) ); ?></span>
							<?php echo esc_html( get_the_date( 'M, Y' ) ); ?>
						</a> 
					</span>
					<?php
				elseif ( 'title' === $marin_blog_content_order ) :
					if ( is_single() ) :

						the_title( '<h5 class="post-title">', '</h5>' );

						else :

							the_title( sprintf( '<h5 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );

					endif;
						?>
					<?php
				elseif ( 'meta-two' === $marin_blog_content_order ) :
					$marin_cat_list = get_the_category_list();
					if ( ! empty( $marin_cat_list ) ) {
						?>

							<span class="cat-links"><i class="fa fa-thin fa-list"></i> <?php the_category( ', ' ); ?> </span>

						<?php
					}
					$marin_tag_list = get_the_tag_list();
					if ( ! empty( $marin_tag_list ) ) {
						?>

							<span class="tag-links"><i class="fa fa-solid fa-tags"></i> <?php the_tags( '', ', ', '' ); ?> </span>

					<?php } ?>

				<?php elseif ( 'content' === $marin_blog_content_order ) : ?>
					<div class="post-footer">
						<?php
						$marin_excerpt_disabled = get_theme_mod( 'marin_excerpt_disabled', true );
						if ( $marin_excerpt_disabled == true ) {
							the_excerpt();
						} else {
							the_content(
								sprintf(
								/* translators: %s: Name of current post. */
									wp_kses( __( 'Read More %s <span class="meta-nav">&rarr;</span>', 'marin' ), array( 'span' => array( 'class' => array() ) ) ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								)
							);
						}
						?>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</article>
</div>
