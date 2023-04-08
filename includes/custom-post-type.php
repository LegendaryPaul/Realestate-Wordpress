<?php

function real_custom_post(){
    $real_label = array(
        'name'          => __('Real Post', 'textdomain'),
        'singular_name' => __('Real Post', 'textdomain'),
        'add_new'       => __('Add Real Post', 'textdomain'),
        'add_new_item'  => __('Add New Real Post', 'textdomain'),
        'edit item'     => __('Edit Real Post', 'textdomain'),
        'all_items'     => __('Real Post', 'textdomain')
    );
    $realPost_args = array(
        'labels'            => $real_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('realPost', $realPost_args);


    // LATEST BLOGS
    $latest_label = array(
        'name'          => __('Latest Post', 'textdomain'),
        'singular_name' => __('Latest Post', 'textdomain'),
        'add_new'       => __('Add Latest Post', 'textdomain'),
        'add_new_item'  => __('Add New Latest Post', 'textdomain'),
        'edit item'     => __('Edit Latest Post', 'textdomain'),
        'all_items'     => __('Latest Post', 'textdomain')
    );
    $latestPost_args = array(
        'labels'            => $latest_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('latestPost', $latestPost_args);


    // ABOUT
    $about_label = array(
        'name'          => __('About Us Post', 'textdomain'),
        'singular_name' => __('About Post', 'textdomain'),
        'add_new'       => __('Add About Post', 'textdomain'),
        'add_new_item'  => __('Add New About Post', 'textdomain'),
        'edit item'     => __('Edit About Post', 'textdomain'),
        'all_items'     => __('About Post', 'textdomain')
    );
    $aboutPost_args = array(
        'labels'            => $about_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('aboutPost', $aboutPost_args);

    // PROPERTIES
    $properties_label = array(
        'name'          => __('Properties Post', 'textdomain'),
        'singular_name' => __('Properties Post', 'textdomain'),
        'add_new'       => __('Add Properties Post', 'textdomain'),
        'add_new_item'  => __('Add New Properties Post', 'textdomain'),
        'edit item'     => __('Edit Properties Post', 'textdomain'),
        'all_items'     => __('Properties Post', 'textdomain')
    );
    $propertiesPost_args = array(
        'labels'            => $properties_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('propertiesPost', $propertiesPost_args);
    
}

add_action('init', 'real_custom_post');