<?php 

// Site Title
add_theme_support('title-tag');

// Thumbnails Image area
add_theme_support('post-thumbnails' , array('page', 'post')) ;
add_image_size('post-thumbnails', 1200, 400, true);

// Excerpt 40 words
function rafi_excerpt_more($more){
    global $post;
    return '<br><br> <a class="readmore" href="'. get_permalink( $post->ID ) . '">'. 'Read Full Blog' .'</a>';
}

add_filter('excerpt_more', 'rafi_excerpt_more');

function rafi_excerpt_length($length){
    return 40;
}
add_filter('excerpt_length','rafi_excerpt_length', 999);