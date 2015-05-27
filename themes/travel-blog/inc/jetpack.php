<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Travel Blog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function travel_blog_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'travel_blog_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function travel_blog_jetpack_setup
add_action( 'after_setup_theme', 'travel_blog_jetpack_setup' );

function travel_blog_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function travel_blog_infinite_scroll_render