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

    // FAQ
    $faq_label = array(
        'name'          => __('Faq Post', 'textdomain'),
        'singular_name' => __('Faq Post', 'textdomain'),
        'add_new'       => __('Add Faq Post', 'textdomain'),
        'add_new_item'  => __('Add New Faq Post', 'textdomain'),
        'edit item'     => __('Edit Faq Post', 'textdomain'),
        'all_items'     => __('Faq Post', 'textdomain')
    );
    $faqPost_args = array(
        'labels'            => $faq_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag','category'),
        'supports'          => array('title', 'editor', 'thumbnail', 'excerpt')
    );
    register_post_type('faqPost', $faqPost_args);
    
}

add_action('init', 'real_custom_post');