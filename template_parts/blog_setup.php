<?php

// This template for blog area

?>



<?php
if (have_posts()): while (have_posts()) : the_post();
?>

        <div class="blog_area">
            <div class="post_thumb">
                <a href="<?php the_permalink(); ?>""><?php echo the_post_thumbnail('post-thumbnails') ?></a>
                    </div>
                    <div class=" post_details">
                    <h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
                    <?php echo the_excerpt(); ?>
            </div>

        </div>

<?php
    endwhile;
else : _e('No post found');
endif;
?>
<div id="page_nav">
    <?php if ('ali_pagenav') {
        rafi_pagenav();
    } else { ?>
        <?php next_posts_link(); ?>
        <?php previous_posts_link(); ?>
    <?php } ?>
</div>