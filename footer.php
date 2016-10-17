<div class="footer_navigation_box">
    <div class="page-container container">
        <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInLeft">
            <div class="header_logo footer_logo">
                <a href="/">
                    <img src="/wp-content/themes/reedbuck/images/logo_welt.png">
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 navigation_footer_form wow fadeInUp">
            <?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]') ?> 
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 footer_nav_menu wow fadeInRight">
            <?php wp_nav_menu( array( 'container_class' => 'head_nav_menu', 'theme_location' => 'footer_menu' ) ); ?>
        </div>
    </div>
    
</div>
<div class="footer_social_box">
    <div class="page-container container">
        <div class="col-xs-12 col-sm-6 col-md-6">COMPUTERWELT ©2016</div>
        <div class="col-xs-12 col-sm-6 col-md-6" style="text-align:right;">by REEDBUCK STUDIO</div>
    </div>
</div>

<?php wp_footer(); ?>

<script src="/wp-content/themes/reedbuck/wow-animation/wow.min.js"></script>
<script>
    new WOW().init();
</script>

</body>
</html>