<?php

// Header 
get_header();


?>

<section id="body_area">
    <div class="container">
        <div class="archive-page-title">
            <div class="archive-page-title__overlay">
                <h1 class="archive-page-title__heading">
                    <?php the_archive_title();?>
                </h1>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <?php get_template_part('template_parts/blog_setup'); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>