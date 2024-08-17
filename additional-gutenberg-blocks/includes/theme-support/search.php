<?php 

function modify_search_query($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_search()) {
        $query->set('post_type', 'post');
    }
}
add_action('pre_get_posts', 'modify_search_query');