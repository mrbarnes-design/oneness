<?php

function oneness_files() {
    wp_enqueue_style('oneness-main-styles', get_theme_file_uri('/build/index.css'));  
}

add_action('wp_enqueue_scripts', 'oneness_files')

?>