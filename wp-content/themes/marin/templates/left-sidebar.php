<?php
/**
 * Template Name: Page With Left Sidebar
 **/

get_header();
?>
<section class="post-section av-py-default">
	<div class="av-container">

		<!-- Classes for sidebar None -->
		<?php
		if ( ! is_active_sidebar( 'marin-sidebar-primary' ) ) {
			$marin_div_classes = 'av-column-12 av-md-column-12';
		} else {
			$marin_div_classes = 'av-column-8 av-md-column-8';
		}
		?>

		<div class="av-columns-area wow fadeInUp">
			<div class="<?php echo esc_attr( $marin_div_classes ); ?>  wow fadeInUp">
				<?php
					the_post();
				the_content();

				if ( $post->comment_status == 'open' ) {
					comments_template( '', true ); // show comments.
				}
				?>
			</div>
			<?php
			if ( is_active_sidebar( 'marin-sidebar-primary' ) ) {
				get_sidebar();
			}
			?>
		</div>
	</div>
</section> 
<?php get_footer(); ?>
