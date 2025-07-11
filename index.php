<?php

// Header 
get_header();


?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

            <?php
                if(have_posts()): while(have_posts()) : the_post(); 
            ?>

                <div class="blog_area">
                    <div class="post_thumb">
                        <a href="<?php the_permalink(); ?>""><?php echo the_post_thumbnail('post-thumbnails') ?></a>
                    </div>
                    <div class="post_details">
                        <h3 class="post_title" ><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                        <?php echo the_excerpt(); ?>    
                    </div>
                    
                </div>

                <?php
                endwhile;
                else : _e('No post found');
            endif;
                ?>
                
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>