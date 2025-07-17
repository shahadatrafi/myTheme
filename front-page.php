<?php
// Theme font page

get_header(); ?>


<div id="service_area">
    <div class="container">
        <div class="row">
            <?php query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC$paged=' . get_query_var('post'));

            if (have_posts()):
                while (have_posts()) : the_post();

            ?>
                    <div class="col-md-4">
                        <div class="service_item">
                            <div class="service_img">
                                <?php echo the_post_thumbnail('service');?>
                            </div>
                            <h3 class="service_title"><?php the_title();?></h3>
                            <?php the_excerpt();?>
                            <a href="<?php echo get_permalink(); ?>"><button class="service_btn">Buy Now</button></a> 
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>

        </div>
    </div>
</div>


<?php get_footer(); ?>