<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package marin
 */

get_header();
?>
<!-- Blog & Sidebar Section -->
<section id="product" class="av-py-default">
		<div class="av-container">
			<div class="av-columns-area">
			<!--Blog Detail-->
			<?php if ( ! is_active_sidebar( 'marin-woocommerce-sidebar' ) ) { ?>
				<div id="av-primary-content" class="av-column-12 wow fadeInUp">
			<?php } else { ?>	
				<div id="av-primary-content" class="av-column-8 wow fadeInUp">
				<?php
			}
				woocommerce_content();
			?>
			</div>
			<!--/End of Blog Detail-->
			<?php get_sidebar( 'woocommerce' ); ?>
		</div>	
	</div>
</section>
<!-- End of Blog & Sidebar Section -->

<?php get_footer(); ?>
