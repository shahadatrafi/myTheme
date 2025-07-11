<?php

// It is global footer template. It will visible every page and post..........

?>





<footer>

    <div id="main_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4"><?php dynamic_sidebar('footer-1')?></div>
                <div class="col-md-4"><?php dynamic_sidebar('footer-2')?></div>
                <div class="col-md-4"><?php dynamic_sidebar('footer-3')?></div>
            </div>
        </div>
    </div>

    <div id="copy_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?php echo get_theme_mod('rafi_footer_copy_area'); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>
</body>

</html>