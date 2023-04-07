<?php
// THEME SUPPORTS
function theBlog_support(){
    register_nav_menus(array(
        'header_menu' => __('header menu', 'text_domain')
    ));
    // FOR THE CUSTOM MENU
    add_theme_support('menus');
    // ADD SO YOU CAN INPUT IMAGE TO YOUR POST
    add_theme_support('post-thumbnails');
    
}


add_action('after_setup_theme', 'theBlog_support');