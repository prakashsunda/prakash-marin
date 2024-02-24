<?php
if ( ! function_exists( 'marin_excerpt_length' ) ) :
	/**
	 * Sets the post excerpt length to n words.
	 *
	 * function tied to the excerpt_length filter hook.
	 *
	 * @uses filter excerpt_length
	 *
	 * @since marin Pro 1.0
	 */
	function marin_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		// Getting data from Customizer Options.
		$length = get_theme_mod( 'marin_excerpt_length', 30 );

		return absint( $length );
	}
	endif; // marin_excerpt_length.
	add_filter( 'excerpt_length', 'marin_excerpt_length', 999 );

if ( ! function_exists( 'marin_excerpt_more' ) ) :
	/**
	 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a option from customizer
	 *
	 * @return string option from customizer prepended with an ellipsis.
	 */
	function marin_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}

		$more_tag_text = get_theme_mod( 'marin_excerpt_more_text', esc_html__( 'Continue Reading', 'marin' ) );

		$link = sprintf(
			'<p><a href="%1$s" class="av-btn av-btn-secondary av-btn-bubble">%2$s<i class="fa fa-arrow-right"></i><span class="bubble_effect"><span class="circle top-left"></span><span class="circle top-left"></span><span class="circle top-left"></span><span class="button effect-button"></span><span class="circle bottom-right"></span><span class="circle bottom-right"></span><span class="circle bottom-right"></span></span></a></p>',
			esc_url( get_permalink() ),
			/* translators: %s: Name of current post */
			wp_kses_data( $more_tag_text ) . '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>'
		);

		return $link;
	}
	endif;
	add_filter( 'excerpt_more', 'marin_excerpt_more' );

if ( ! function_exists( 'marin_custom_excerpt' ) ) :
	/**
	 * Adds Continue reading link to more tag excerpts.
	 *
	 * function tied to the get_the_excerpt filter hook.
	 *
	 * @since marin Pro 1.0
	 */
	function marin_custom_excerpt( $output ) {
		if ( has_excerpt() && ! is_attachment() ) {
			$more_tag_text = get_theme_mod( 'marin_excerpt_more_text', esc_html__( 'Read More', 'marin' ) );

			$link = sprintf(
				'<p><a href="%1$s" class="av-btn av-btn-secondary av-btn-bubble">%2$s<i class="fa fa-arrow-right"></i><span class="bubble_effect"><span class="circle top-left"></span><span class="circle top-left"></span><span class="circle top-left"></span><span class="button effect-button"></span><span class="circle bottom-right"></span><span class="circle bottom-right"></span><span class="circle bottom-right"></span></span></a></p>',
				esc_url( get_permalink() ),
				/* translators: %s: Name of current post */
				wp_kses_data( $more_tag_text ) . '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>'
			);

			$link = ' &hellip; ' . $link;

			$output .= $link;
		}

		return $output;
	}
	endif; // marin_custom_excerpt.
	add_filter( 'get_the_excerpt', 'marin_custom_excerpt' );

if ( ! function_exists( 'marin_more_link' ) ) :
	/**
	 * Replacing Read More link to the_content more.
	 *
	 * function tied to the the_content_more_link filter hook.
	 *
	 * @since marin Pro 1.0
	 */
	function marin_more_link( $more_link, $more_link_text ) {
		$more_tag_text = get_theme_mod( 'marin_excerpt_more_text', esc_html__( 'Read More', 'marin' ) );

		return ' &hellip; ' . str_replace( $more_link_text, wp_kses_data( $more_tag_text ), $more_link );
	}
	endif; // marin_more_link.
	add_filter( 'the_content_more_link', 'marin_more_link', 10, 2 );

