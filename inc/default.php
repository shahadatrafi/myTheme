<?php 

// Site Title
add_theme_support('title-tag');

// Thumbnails Image area
add_theme_support('post-thumbnails' , array('page', 'post', 'service')) ;
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


// Pagenav Function
function rafi_pagenav(){
  global $wp_query, $wp_rewrite;
  $pages ='';
  $max = $wp_query->max_num_pages;
  if(!$current = get_query_var('paged')) $current = 1;
  $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $args['total'] = $max;
  $args['current'] = $current;
  $total = 1;
  $args['prev_text'] = 'Prev';
  $args['next_text'] = 'Next';
  if ($max > 1) echo '</pre>
    <div class="wp_pagenav">';
      if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span>of</span>' . $max . '</p>';
      echo $pages . paginate_links($args);
      if ($max > 1 ) echo '</div><pre>';
}