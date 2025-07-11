<?php


// Theme Function
function rafi_customizer_register($wp_customize)
{
    // Header Area
    $wp_customize->add_section('rafi_header_area', array(
        'title' => __('Header Area', 'shahadatrafi'),
        'description' => 'Customize your header here'
    ));

    $wp_customize->add_setting('rafi_logo', array(
        'default' => get_bloginfo('template_directory') . '/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'rafi_logo', array(
        'label' => 'Upload Your Logo',
        'description' => 'You can upload your logo here',
        'setting' => 'rafi_logo',
        'section' => 'rafi_header_area',
    )));

    // Menu Position
    $wp_customize->add_section('rafi_menu_option', array(
        'title' => 'Menu Position',
        'description' => 'You can change your menu position here'
    ));

    $wp_customize->add_setting('rafi_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize->add_control('rafi_menu_position', array(
        'label' => 'Select Menu Position',
        'description' => 'Align your menu here',
        'setting' => 'rafi_menu_position',
        'section' => 'rafi_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left Menu',
            'center_menu' => 'Center Menu',
            'right_menu' => 'Right Menu'
        )

    ));

    // Footer Option
    $wp_customize->add_section('rafi_footer_option', array(
        'title' => __('Footer Option', 'shahadatrafi'),
        'description' => 'Customize your footer here'

    ));

    $wp_customize->add_setting('rafi_footer_copy_area', array(
        'default' => '&copy; All right reserved by Shahadat Rafi'
    ));

    $wp_customize->add_control('rafi_footer_copy_area', array(
        'label' => 'Copyright Area',
        'description' => 'You can change copyright content here',
        'section' => 'rafi_footer_option',
        'setting' => 'rafi_footer_copy_area'
    ));

};

add_action('customize_register', 'rafi_customizer_register');
