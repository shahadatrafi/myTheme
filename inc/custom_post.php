<?php 

function custom_post_register(){
  register_post_type('service', array(
    'labels'=> array(
        'name' => ('Services'),
        'singular_name' => ('Service'),
        'menu_name' => ('Services'),
        'add_new' => ('Add New Service'),
        'add_new_item' => ('Add New Service'),
        'edit_item' => ('Edit Service'),
        'new_item' => ('New Service'),
        'view_item' => ('View Service'),
        'not_found' => ('Sorry....!! No service found. Click to add new to create one'),
        
    ),
    'public' => true,
    'has_archive' => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-list-view',
    'rewrite' => array('slug' => 'service'),
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
    'show_ui' => true,


  ));  
};

add_action('init', 'custom_post_register');