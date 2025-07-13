<?php 

// 404 page
get_header();
?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 err-page">
                <h1 class="title_404">404 ERROR</h1>
                <P>Opss! I think someting is wrong</P>
                <?php get_search_form();?>
                <a href="<?php echo home_url();?>" >Home</a>
            </div>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>