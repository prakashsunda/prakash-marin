<?php
if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-header" id="custom-header" rel="home">
		<img src="<?php esc_url( header_image() ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>">
	</a>
<?php endif; ?>

<!--===// Start: Header
=================================-->
	<header id="header-section" class="header header-one">
		<!--===// Start: Header Above
		=================================-->
		<?php
		$marin_topbar_enabled = get_theme_mod( 'marin_topbar_enabled', true );
		if ( true === $marin_topbar_enabled ) {
			do_action( 'marin_above_header' );
		}
		?>
		<!--===// End: Above Header
		=================================-->
		<div class="navigator-wrapper">
			<!--===// Start: Mobile Toggle
			=================================-->
			<div class="theme-mobile-nav <?php echo esc_attr( marin_sticky_menu() ); ?>"> 
				<div class="<?php echo esc_attr( marin_menu_size() ); ?>">
					<div class="av-columns-area">
						<div class="av-column-12">
							<div class="theme-mobile-menu">
								<div class="mobile-logo">
									<div class="logo">
										<?php do_action( 'marin_logo_content' ); ?>
									</div>
								</div>
								<div class="menu-toggle-wrap">
									<div class="mobile-menu-right"><ul class="header-wrap-right"></ul></div>
									<div class="hamburger hamburger-menu">
										<button type="button" class="toggle-lines menu-toggle">
											<div class="top-bun"></div>
											<div class="meat"></div>
											<div class="bottom-bun"></div>
										</button>
									</div>

									<div class="headtop-mobi">
										<button type="button" class="header-above-toggle"><span></span></button>
									</div>

								</div>
								<div id="mobile-m" class="mobile-menu">
									<button type="button" class="header-close-menu close-style"></button>
								</div>
								<div id="mob-h-top" class="mobi-head-top"></div>
							</div>
						</div>
					</div>
				</div>        
			</div>
			<!--===// End: Mobile Toggle
			=================================-->        

			<!--===// Start: Navigation
			=================================-->
			<div class="nav-area theme-d-none d-av-block">
				<div class="navbar-area <?php echo esc_attr( marin_sticky_menu() ); ?>">
					<div class="<?php echo esc_attr( marin_menu_size() ); ?>">
						<div class="av-columns-area">
							<div class="av-column-2 my-auto">
								<div class="logo">
									<?php do_action( 'marin_logo_content' ); ?>
								</div>
							</div>
							<div class="av-column-10 my-auto">
								<div class="theme-menu">
									<nav class="menubar">
										<?php do_action( 'marin_primary_navigation' ); ?>                            
									</nav>
									<div class="menu-right">
										<ul class="header-wrap-right">
											<?php
												$marin_cart_icon_enabled = get_theme_mod( 'marin_cart_icon_enabled', true );
											if ( true === $marin_cart_icon_enabled ) :
												do_action( 'marin_navigation_cart' );
												endif;
												$marin_serche_icon_sh = get_theme_mod( 'marin_serche_icon_sh', true );
											if ( true === $marin_serche_icon_sh ) :
												do_action( 'marin_navigation_search' );
												endif;
												$marin_menu_btn_sh = get_theme_mod( 'marin_menu_btn_sh', true );
											if ( true === $marin_menu_btn_sh ) :
												do_action( 'marin_navigation_button' );
												endif;
											?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--===// End:  Navigation
			=================================-->
		</div>
	</header>
	<!-- End: Header
	=================================-->

<?php
if ( ! is_page_template( 'templates/template-homepage.php' ) ) {
	marin_breadcrumbs_style();
}
?>
