<?php 

// Add Favicon with WordPress Hook 

add_action( 'wp_head', 'set_favicon');
function set_favicon(){
    echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . "/assets/images/favicon.ico' />" . "\n";
}

function add_custom_mime_types($mimes) {
    $mimes['ico'] = 'image/x-icon';
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_custom_mime_types');