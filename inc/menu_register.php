<?php 



// Menu Register
register_nav_menu('primary_menu', __('Primary Menu', 'shahadatrafi'));


// walker menu add
function rafi_nav_description($item_output, $item, $depth, $args){
if(!empty($item->description)){
    $item_output = str_replace($args->link_after . '</a>', '<span class = "walker_nav">'. $item->description . '</span>' . $args->link_after . '</a>', $item_output);
}
return $item_output ;
}
add_filter('walker_nav_menu_start_el', 'rafi_nav_description', 10, 4);