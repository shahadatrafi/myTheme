
<?php

// shortcode here


// Basic Shortcode

function basic_shortcode()
{
    return "It's a basic shortcode. I have used as first time in my theme here";
}

add_shortcode('test', 'basic_shortcode');

// Button Shortcode

function button_shortcode($atts, $content)
{

    $values = shortcode_atts(array(
        'url' => '#'
    ), $atts);
    return '<a class="service_btn" target="_blank" href="' . esc_attr($values['url']) . '">' . $content . '</a>';
}

add_shortcode('button', 'button_shortcode');


// Service section shortcode
function service_shortcode($atts)
{
    ob_start();
    $query = new WP_query(array(
        'post_type' => 'service',
        'post_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'title',

    ));

    if ($query->have_posts()) {
        ?>
    
            <section id="service_area">
    <div class="container">
        <div class="row">
            <?php while ($query -> have_posts()): $query -> the_post();?>
                    <div class="col-md-4">
                        <div class="service_item">
                            <div class="service_img">
                                <?php echo the_post_thumbnail('service'); ?>
                            </div>
                            <h3 class="service_title"><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php echo get_permalink(); ?>"><button class="service_btn">Buy Now</button></a>
                        </div>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            ?>

        </div>
    </div>
</section>

        <?php $myvariable = ob_get_clean();
        return $myvariable;
    }
}

add_shortcode('service', 'service_shortcode');
