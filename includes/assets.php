<?php


function real_assets(){
    wp_enqueue_style("real-style", get_template_directory_uri() . "/css/main.css", microtime());
}

add_action('wp_enqueue_scripts', 'real_assets');