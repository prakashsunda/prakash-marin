<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package marin
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function marin_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Parallax.
	/*
	$footer_parallax_enable      = get_theme_mod('footer_parallax_enable','1');
	if($footer_parallax_enable=='1'):
		$classes[] = "footer-parallax";
	endif; */

	return $classes;
}
add_filter( 'body_class', 'marin_body_classes' );


if ( ! function_exists( 'marin_wp_body_open' ) ) {
	/**
	 * Backward compatibility for wp_body_open hook.
	 *
	 * @since 1.0.0
	 */
	function marin_wp_body_open() {
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
	}
}


if ( ! function_exists( 'marin_str_replace_assoc' ) ) {

	/**
	 * marin_str_replace_assoc
	 *
	 * @param  array $replace
	 * @param  array $subject
	 * @return array
	 */
	function marin_str_replace_assoc( array $replace, $subject ) {
		return str_replace( array_keys( $replace ), array_values( $replace ), $subject );
	}
}

// marin Navigation.
if ( ! function_exists( 'marin_primary_navigation' ) ) :
	function marin_primary_navigation() {
		wp_nav_menu(
			array(
				'theme_location' => 'primary_menu',
				'container'      => '',
				'menu_class'     => 'menu-wrap',
				'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
				'walker'         => new WP_Bootstrap_Navwalker(),
			)
		);
	}
endif;
add_action( 'marin_primary_navigation', 'marin_primary_navigation' );


// marin Navigation Button.
if ( ! function_exists( 'marin_navigation_button' ) ) :
	function marin_navigation_button() {
		$marin_menu_btn_sh   = get_theme_mod( 'marin_menu_btn_sh', '1' );
		$marin_menu_btn_icon = get_theme_mod( 'marin_menu_btn_icon', 'fa-user' );
		$marin_menu_btn_text = get_theme_mod( 'marin_menu_btn_text' );
		$marin_menu_btn_link = get_theme_mod( 'marin_menu_btn_link' );
		if ( $marin_menu_btn_sh == '1' && ! empty( $marin_menu_btn_text ) ) :
			?>
	<li class="av-button-area">
		<a href="<?php echo esc_url( $marin_menu_btn_link ); ?>" class="av-btn av-btn-primary av-btn-bubble"><?php echo wp_kses_post( $marin_menu_btn_text ); ?> <?php
		if ( ! empty( $marin_menu_btn_icon ) ) :
			?>
			<i class="fa <?php echo esc_attr( $marin_menu_btn_icon ); ?>"></i><?php endif; ?> <span class="bubble_effect"><span class="circle top-left"></span> <span class="circle top-left"></span> <span class="circle top-left"></span> <span class="button effect-button"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span> <span class="circle bottom-right"></span></span></a>
	</li>
			<?php
endif;
	}
endif;
add_action( 'marin_navigation_button', 'marin_navigation_button' );



// marin Navigation Search.
if ( ! function_exists( 'marin_navigation_search' ) ) :
	function marin_navigation_search() {
		$marin_serche_icon_sh = get_theme_mod( 'marin_serche_icon_sh', true );
		if ( $marin_serche_icon_sh == true ) :
			?>
				<li class="search-button">
					<button id="view-search-btn" class="header-search-toggle"><i class="fa fa-search"></i></button>
					<div class="view-search-btn header-search-popup">
						<div class="search-overlay-layer"></div>
						<div class="header-search-pop">
							<form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'marin' ); ?>">
								<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'marin' ); ?></span>
								<input type="search" class="search-field header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'marin' ); ?>" name="s" id="popfocus" value="" autofocus>
								<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
							</form>
							<button type="button" class="close-style header-search-close"></button>
						</div>
					</div>
				</li>
			<?php
		endif;
	}
endif;
add_action( 'marin_navigation_search', 'marin_navigation_search' );



// marin Navigation Cart.
if ( ! function_exists( 'marin_navigation_cart' ) ) :
	function marin_navigation_cart() {
		$marin_cart_icon_enabled = get_theme_mod( 'marin_cart_icon_enabled', true );
		if ( $marin_cart_icon_enabled == true && class_exists( 'WooCommerce' ) ) :
			?>
		<li class="cart-wrapper">
			<a href="javascript:void(0);" class="cart-icon-wrap" id="cart" title="View your shopping cart">
				<i class="fa fa-shopping-bag"></i>
				<?php
				if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
					$count    = WC()->cart->cart_contents_count;
					$cart_url = wc_get_cart_url();

					if ( $count > 0 ) {
						?>
							<span><?php echo esc_html( $count ); ?></span>
						<?php
					} else {
						?>
						<span>0</span>
						<?php
					}
				}
				?>
			</a>
			<!-- Shopping Cart Start -->
			<div class="shopping-cart">
				<?php get_template_part( 'woocommerce/cart/mini', 'cart' ); ?>
			</div>
			<!-- Shopping Cart End -->
		</li>
			<?php
	endif;
	}
endif;
add_action( 'marin_navigation_cart', 'marin_navigation_cart' );



// marin Logo.
if ( ! function_exists( 'marin_logo_content' ) ) :
	function marin_logo_content() {
		if ( has_custom_logo() ) {
				the_custom_logo();
		} else {
			?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">
				<h4 class="site-title">
				<?php
					echo esc_html( get_bloginfo( 'name' ) );
				?>
				</h4>
			</a>	
			<?php
		}
		?>
		<?php
			$marin_description = get_bloginfo( 'description' );
		if ( $marin_description ) :
			?>
				<p class="site-description"><?php echo esc_html( $marin_description ); ?></p>
			<?php
		endif;
	}
endif;
add_action( 'marin_logo_content', 'marin_logo_content' );



/**
 * Add WooCommerce Cart Icon With Cart Count (https://isabelcastillo.com/woocommerce-cart-icon-count-theme-header)
 */
function marin_add_to_cart_fragment( $fragments ) {

	ob_start();
	$count = WC()->cart->cart_contents_count;
	?>

	<a href="javascript:void(0);" class="cart-icon-wrap" id="cart" title="View your shopping cart">
	<i class="fa fa-shopping-bag"></i>	
	<?php
	if ( $count > 0 ) {
		?>
		<span><?php echo esc_html( $count ); ?></span>
		<?php
	} else {
		?>

		<span><?php echo esc_html_e( '0', 'marin' ); ?></span>
		<?php
	}
	?>
	</a>
	<?php

	$fragments['a.cart-icon-wrap'] = ob_get_clean();

	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'marin_add_to_cart_fragment' );
