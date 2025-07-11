<?php 


// Theme css and js calling

function rafi_css_js_calling()
{
    wp_enqueue_style('rafi-style', get_stylesheet_uri());

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');

    // Js
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '5.0.2', true);
    wp_enqueue_script('main', get_template_directory_uri() . 'js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'rafi_css_js_calling');





// google font enqueue 
function rafi_google_font_add()
{
    wp_enqueue_style(
        'rafi_google_font','https://fonts.googleapis.com/css2?family=DM+Sans:opsz@9..40&family=Oswald:wght@200..700&display=swap', false );
}


add_action('wp_enqueue_scripts', 'rafi_google_font_add');



