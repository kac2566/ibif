<?php

function enqueue_scripts_and_styles_admin() {
    $theme_directory = get_template_directory_uri();

    // Enqueue script
    wp_register_script('theme-js', $theme_directory . '/dist/scripts.js', [], false, true);
    wp_enqueue_script('theme-js');

    // Enqueue style
    wp_register_style('theme-style', $theme_directory . '/dist/style.css', [], false, 'all');
    wp_enqueue_style('theme-style');
}

add_action('admin_enqueue_scripts', 'enqueue_scripts_and_styles_admin');
add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles_admin');