<?php if ( ! is_active_sidebar( 'marin-sidebar-primary' ) ) {
	return; } ?>
<div id="av-secondary-content" class="av-column-4">
	<section class="sidebar">
		<?php dynamic_sidebar( 'marin-sidebar-primary' ); ?>
	</section>
</div>
