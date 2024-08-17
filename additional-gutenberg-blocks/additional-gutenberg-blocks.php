<?php

/**
 * Plugin Name: Additional Gutenberg Blocks
 * Plugin URI: https://hovemann.net/
 * Description: Custom blocks plugin for WordPress Gutenberg
 * Requires at least: 6.4
 * Requires PHP: 8.1
 * Version: 0.0.1
 * Author: Kacper Powalka
 * Author URI: https://hovemann.net/
 * Text Domain: Additional Gutenberg Blocks
 */

/**
 * Add register block functions
 */

require_once __DIR__ . '/includes/blocks/blocks.php';

/**
 * Add Theme support functions 
 */

require_once __DIR__ .'/includes/theme-support/theme-support.php';