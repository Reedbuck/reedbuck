<?php get_header(); ?>
<section class="slider_box">
    
    <?php echo do_shortcode( '[rev_slider home-head]' ) ?>
    
</section>
<section class="our_services">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center"><span class="title">МЫ ПРЕДЛАГАЕМ</span></div>
        </div>
        <div class="row sentence">
            <div class="col-xs-4 col-sm-4 col-md-4 sentence-box">
                <div class="title">Разработка сайтов под ключ</div>
                <div class="content">это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</div>
                <span class="icon-circle-down"></span>
            </div>
            <script>
                $('.our_services .sentence .icon-circle-down').click(function(){
                    
                    $(".our_services .sentence .content").css('height', '220');
                });
            </script>
            <div class="col-xs-4 col-sm-4 col-md-4 sentence-box">
                <div class="title">Общение напрямую с разработчиком</div>
                <div class="content">это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 sentence-box">
                <div class="title">Наблюдение за разработкой</div>
                <div class="content">это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</div>
            </div>
        </div>
    </div>
</section>
<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center"><span class="title">НЕДАВНО РАЗРАБОТАНЫ</span></div>
        </div>
    
    
        <div class="rb_carousel">
            <div class="rb_carousel-control">
                <div class="rb_carousel-button-left"> лево </div> 
                <div class="rb_carousel-button-right"> право </div> 
            </div>
            <div class="rb_carousel-wrapper">
                <ul class="rb_carousel-items"> 
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-clash.jpg" alt="" />
                    </li>
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-bulk.jpg" alt="" />
                    </li>
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-welt.jpg" alt="" />
                    </li>
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-clash.jpg" alt="" />
                    </li>
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-clash.jpg" alt="" />
                    </li>
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-bulk.jpg" alt="" />
                    </li>
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-welt.jpg" alt="" />
                    </li>
                    <li class="rb_carousel-block">
                        <img src="<?php bloginfo('template_url'); ?>/css/less/home/images/port-clash.jpg" alt="" />
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="rb_slider">
        <div class=""></div>
    </div>
</section>


<?php get_footer(); ?>