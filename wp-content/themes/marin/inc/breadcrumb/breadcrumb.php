<?php
function marin_breadcrumbs() {

	$showOnHome           = '1'; // 1 - Show breadcrumbs on the homepage, 0 - don't show
	$home                 = esc_html__( 'Home', 'marin' ); // Text for the 'Home' link.
	$showCurrent          = '1'; // 1 - Show current post/page title in breadcrumb, 0 - don't show.
	$before               = '<li class="active">'; // Tag before the current breadcrumb.
	$after                = '</li>'; // Tag after the current breadcrumb.
	$breadcrumb_separator = get_theme_mod( 'breadcrumb_separator', '-' ); // Fetching breadcrumb separator from theme mods.
	global $post;
	$homeLink = home_url( '/' );

	if ( is_home() || is_front_page() ) {

		if ( $showOnHome == '1' ) {
			echo '<li><a href="' . esc_url( $homeLink ) . '">' . $home . '</a></li>';
		}
	} else {

		echo '<li><a href="' . esc_url( $homeLink ) . '">' . $home . '</a> ' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;';

		if ( is_category() ) {
			$thisCat = get_category( get_query_var( 'cat' ), false );
			if ( $thisCat->parent != 0 ) {
				echo get_category_parents( $thisCat->parent, true, ' ' . ' ' );
			}
			echo $before . esc_html__( 'Archive by category', 'marin' ) . ' "' . single_cat_title( '', false ) . '"' . $after;

		} elseif ( is_search() ) {
			echo $before . esc_html__( 'Search results for', 'marin' ) . ' "' . get_search_query() . '"' . $after;

		} elseif ( is_day() ) {
			echo '<a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . get_the_time( 'Y' ) . '</a> ' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;';
			echo '<a href="' . esc_url( get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) ) . '">' . get_the_time( 'F' ) . '</a> ' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;';
			echo $before . get_the_time( 'd' ) . $after;

		} elseif ( is_month() ) {
			echo '<a href="' . esc_url( get_year_link( get_the_time( 'Y' ) ) ) . '">' . get_the_time( 'Y' ) . '</a> ' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;';
			echo $before . get_the_time( 'F' ) . $after;

		} elseif ( is_year() ) {
			echo $before . get_the_time( 'Y' ) . $after;

		} elseif ( is_single() && ! is_attachment() ) {
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object( get_post_type() );
				$slug      = $post_type->rewrite;
				echo '<a href="' . esc_url( $homeLink ) . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
				if ( $showCurrent == '1' ) {
					echo ' ' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;' . $before . get_the_title() . $after;
				}
			} else {
				$cat = get_the_category();
				if ( ! empty( $cat ) ) {
					$cat  = $cat[0];
					$cats = get_category_parents( $cat, true, ' ' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;' );
					if ( $showCurrent == '0' ) {
						$cats = preg_replace( '#^(.+)\s$#', '$1', $cats );
					}
					echo $cats;
				}
				if ( $showCurrent == '1' ) {
					echo $before . get_the_title() . $after;
				}
			}
		} elseif ( is_page() && ! $post->post_parent ) {
			if ( $showCurrent == '1' ) {
				echo $before . get_the_title() . $after;
			}
		} elseif ( is_page() && $post->post_parent ) {
			$parent_id   = $post->post_parent;
			$breadcrumbs = array();
			while ( $parent_id ) {
				$page          = get_page( $parent_id );
				$breadcrumbs[] = '<a href="' . esc_url( get_permalink( $page->ID ) ) . '">' . get_the_title( $page->ID ) . '</a>' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;';
				$parent_id     = $page->post_parent;
			}

			$breadcrumbs = array_reverse( $breadcrumbs );
			for ( $i = 0; $i < count( $breadcrumbs ); $i++ ) {
				echo $breadcrumbs[ $i ];
				if ( $i != count( $breadcrumbs ) - 1 ) {
					echo ' ' . '&nbsp;' . wp_kses_post( $breadcrumb_separator ) . '&nbsp;';
				}
			}
			if ( $showCurrent == '1' ) {
				echo ' ' . $before . get_the_title() . $after;
			}
		} elseif ( is_tag() ) {
			echo $before . esc_html__( 'Posts tagged', 'marin' ) . ' "' . single_tag_title( '', false ) . '"' . $after;

		} elseif ( is_author() ) {
			$userdata = get_userdata( get_query_var( 'author' ) );
			echo $before . esc_html__( 'Articles posted by', 'marin' ) . ' ' . $userdata->display_name . $after;

		} elseif ( is_404() ) {
			echo $before . esc_html__( 'Error 404', 'marin' ) . $after;
		}

		if ( get_query_var( 'paged' ) ) {
			echo ' (' . esc_html__( 'Page', 'marin' ) . ' ' . get_query_var( 'paged' ) . ')';
		}

		echo '</li>';
	}
}
