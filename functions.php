<?php

declare(strict_types=1);

\defined('ABSPATH') || exit;

const THEME_DIR = __DIR__;

/**
 * Add theme supports for specific features and post types.
 */
require_once __DIR__ . '/includes/theme-support/index.php';


/**
 * Register pattern categories.
 */

if ( ! function_exists( 'register_custom_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since 
	 * @return void
	 */
	function register_custom_pattern_categories() {

		register_block_pattern_category(
			'ibif',
			array(
				'label'       => _x( 'Ibif', 'Block pattern category' ),
				'description' => __( 'A collection of full page layouts.' ),
			)
		);
	}
endif;

add_action( 'init', 'register_custom_pattern_categories' );

add_filter( 'acf/load_field/name=wd_nav_menus', 'wd_nav_menus_load' );
function wd_nav_menus_load( $field ) {

     $menus = wp_get_nav_menus();

     if ( ! empty( $menus ) ) {

          foreach ( $menus as $menu ) {
               $field['choices'][ $menu->slug ] = $menu->name;
          }

     }

     return $field;

}