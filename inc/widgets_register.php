<?php
// sidebar widgets
function rafi_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Sidebar Area', 'shahadatrafi'),
        'id' => 'sidebar-1',
        'description'=> 'You can set your sidebar here',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'=> '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Col 1', 'shahadatrafi'),
        'id' => 'footer-1',
        'description'=> 'You can set your footer column here',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'=> '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Col 2', 'shahadatrafi'),
        'id' => 'footer-2',
        'description'=> 'You can set your footer column here',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'=> '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => __('Footer Col 3', 'shahadatrafi'),
        'id' => 'footer-3',
        'description'=> 'You can set your footer column here',
        'before_widget' => '<div class="child_sidebar">',
        'after_widget'=> '</div>',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>'
    ));
}

add_action('widgets_init', 'rafi_widgets_register');