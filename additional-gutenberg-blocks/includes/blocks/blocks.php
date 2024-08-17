<?php 

function register_blocks_category( $categories ) {
	
	$categories[] = array(
		'slug'  => 'theme-acf',
		'title' => 'Ibif'
	);

	return $categories;
}

if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
	add_filter( 'block_categories_all', 'register_blocks_category' );
} else {
	add_filter( 'block_categories', 'register_blocks_category' );
}


function register_theme_blocks() {
	/**
	 * We register our block's with WordPress's handy
	 * register_block_type();
	 *
	 * @link https://developer.wordpress.org/reference/functions/register_block_type/
	 */

	register_block_type( __DIR__ . '/header-nav');
	register_block_type( __DIR__ . '/logo');
	register_block_type( __DIR__ . '/back-to-top');
}
// Here we call our register_acf_block() function on init.
add_action( 'init', 'register_theme_blocks' );