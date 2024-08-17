<?php

declare(strict_types=1);

\defined('ABSPATH') || exit('File cannot be opened directly!');

/**
 * Add block variation from json file.
 */

function register_block_variations() {
  $variations = json_decode( file_get_contents( get_template_directory() . '/includes/theme-support/block-variation/variations.json' ), true );

  
  foreach ( $variations['variations'] as $block_name => $block_variations ) {
    if (is_array($block_variations)) {
      foreach ( $block_variations['variations'] as $variation_name => $variation_settings ) {
          register_block_style(
              $block_name,
              array(
                  'name'        => $variation_name,
                  'label'       => $variation_settings['title'] ?? '',
                  'attributes'  => $variation_settings['attributes'] ?? array(),
                  'innerBlocks' => $variation_settings['innerBlocks'] ?? array(),
                  'example'     => $variation_settings['example'] ?? array(),
                  'isDefault'   => $variation_settings['isDefault'] ?? array(),
              )
          );
      }
    }
  }
}

add_action( 'init', 'register_block_variations' );