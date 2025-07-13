
<?php 

// This template for post area

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
                    <?php echo the_content(); ?>
            </div>

        </div>

<?php
    endwhile;
else : _e('No post found');
endif;
?>