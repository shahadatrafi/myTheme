<?php

/*
This Template displaying header
*/

?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    
</head>

<body <?php body_class() ?>>
    <header id="header_area" class="<?php echo get_theme_mod('rafi_menu_position') ?>">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('rafi_logo') ?>"></a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_id' => 'nav')) ?>
                </div>
            </div>
        </div>
    </header>