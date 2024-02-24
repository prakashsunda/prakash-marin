<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
			<link rel="pingback" href="<?php esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
		<?php endif; ?>

		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<div class="loading-icon"> 
		<div class="app-loading"> 
			<span class="loading-icon__bar"></span> 
			<span class="loading-icon__bar"></span>  
			<span class="loading-icon__bar"></span>     
			<span class="loading-icon__bar"></span>             
		</div>
	</div>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to Content', 'marin' ); ?></a>


		<?php get_template_part( 'template-parts/sections/section', 'topbar' ); ?>
		<?php
			get_template_part( 'template-parts/sections/section', 'header-1' );
		?>
		<?php get_template_part( 'template-parts/sections/section', 'navigation' ); ?>

		<div id="content" class="marin-content">
