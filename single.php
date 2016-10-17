<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Reebuck
 * @since Reebuck 1.0
 */

get_header(); ?>

<div class="single-tovars">
    <div class="container">
        <?php 
                            $args = array(
                           'post_type' => 'tovar',
                           'posts_per_page' => 1,
                           'publish' => true,
                           'paged' => get_query_var('paged'),
                           'orderby' => 'menu_order',
                            ); 
                            query_posts($args);
                            if ( have_posts() ) { 
                            ?>
                            <?php    
                                while (have_posts()) {
                                the_post();
                                    
                                    

$thumb_id = get_post_thumbnail_id();

$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);





                                    ?>
        <div class="tovar-single">
            <div class="col-md-5">
                <div class="col-md-12">
               <!-- <div class="tovar-single-image">
                    <?php echo get_the_post_thumbnail(); ?><br></a>
                    <img src="<?php echo get_field( "dop_photo1" ) ?>" class="dop-photo dop-photo1">
                    <img src="<?php echo get_field( "dop_photo2" ) ?>" class="dop-photo dop-photo2">
                    <img src="<?php echo get_field( "dop_photo3" ) ?>" class="dop-photo dop-photo3">
                    
                </div> -->
            <div class="action" style="padding:0px;">
                <div class="row info" style="padding:0px;margin-top:20px;">
            <div class="image-product">
            <span class="zoom"><img itemprop="image" class="main-image" src="<?php echo get_field( "dop_photo1" ) ?>">
                    <div class="mini-gallery">
                        <img src="<?php echo get_field( "dop_photo1" ) ?>">
                        <img src="<?php echo get_field( "dop_photo2" ) ?>">
                        <img src="<?php echo get_field( "dop_photo3" ) ?>">
                    </div>

                    </span>
            </div>
            </div>
            </div>
                </div>
                
                <div class="col-md-12">
                <iframe class="videoyoutube" src="https://www.youtube.com/embed/<?php echo get_field( "tov_video" ) ?>?autoplay=0&loop=0&showinfo=0&theme=light&color=white&controls=0&modestbranding=1&start=0&fs=1&iv_load_policy=1&wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            </div>
            <div class="col-md-7">
                <div class="col-md-12">
                    <div class="tovar-single-title"><h1><?php echo get_the_title(); ?></h1></div>
                </div>
                <div class="col-md-7">
                    <div class="col-md-12">
                        <div class="tovar-single-content">
                            <?php echo get_the_content(); ?>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-5" style="display:table;">
                    <div style="margin-top:5px; margin-bottom:5px;">
                        <div class="col-xs-2 col-sm-2 col-md-12" style="margin-top:5px;"><img src="/wp-content/themes/reedbuck/assets/img/car.png" alt="" style="float: left; margin-right: 30px; height: 25px;">
                            <div style="float-right">Бесплатная<br>доставка до двери</div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-12" style="margin-top:5px;"><img src="/wp-content/themes/reedbuck/assets/img/money.png" alt="" style="float: left; margin-right: 30px; height: 25px;">
                            <div style="float-right">Без предоплаты<br>заказа</div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-12" style="margin-top:5px;"><img src="/wp-content/themes/reedbuck/assets/img/calendar.png" alt="" style="float: left; margin-right: 43px; height: 25px;">
                            <div style="float-right">Возврат<br>30 дней</div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-12" style="margin-top:5px;">
                            <img class="block" id="u1519_img" src="/wp-content/themes/reedbuck/assets/img/tovar_ic3.png" alt=""  style="float: left; margin-right: 38px; height: 25px;"><div style="float-right">Упаковка<br>в подарок!</div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-12" style="margin-top:5px;">
                            <img class="block" id="u1519_img" src="/wp-content/themes/reedbuck/assets/img/rossiyskiy.jpg" alt="" style="float: left; margin-right: 35px; height: 25px;"><div style="float-right">ОСТ <br>117-3-003-95</div>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col-md-12">
                    <div class="col-md-12 tovar-single-charter">
                        
                            <h4>Характеристики:</h4>
                            <div class="col-md-6">
                                <div class="checkcharak checkcharak1">Артикул</div>
                                <div class="checkcharak">Вес</div>
                                <div class="checkcharak checkcharak1">Материал</div>
                                <div class="checkcharak">Проба</div>
                                <div class="checkcharak checkcharak1">Объем</div>
                                <div class="checkcharak">Высота</div>
                                <div class="checkcharak checkcharak1">Ручная работа</div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkcharak checkcharak1"><?php echo get_field( "article" ) ?></div>
                                <div class="checkcharak"><?php echo get_field( "ves" ) ?></div>
                                <div class="checkcharak checkcharak1"><?php echo get_field( "material" ) ?></div>
                                <div class="checkcharak"><?php echo get_field( "proba" ) ?></div>
                                <div class="checkcharak checkcharak1"><?php echo get_field( "obeom" ) ?></div>
                                <div class="checkcharak"><?php echo get_field( "visota" ) ?></div>
                                <div class="checkcharak checkcharak1"><?php echo get_field( "hand_made" ) ?></div>
                            </div>
                        
                    </div>
                </div>
                <div class="col-md-12" style="margin-top:20px;">
                    <div class="tovar-single-cart-box">
                        Старая цена
                        <div class="old_price"><?php echo get_field( "old_price" ) ?></div>
                        Новая цена
                        <div class="new_price"><?php echo get_field( "new_price" ) ?></div>
                        Цена гдето
			<div class="proc_price"><?php
    $nnewproce = get_field( "new_price" );
    $newproce = str_replace(" ","",$nnewproce);
	
                                    
	$prockof = (int) get_field( "tov-proc-price" );
	$goodprice = $newproce - $newproce * ($prockof) / 100;
                                    echo $goodprice
							
 ?>руб.</div>
                        <div class="top-info-content-botton">
                            <a class="eModal-1"><div class="button-podr">Быстрый заказ</div></a>
                        </div>
                        <a class="eModal-1"><div style="width:100%; text-align:center; margin-top:10px;"><span class="eModal-1" style="border-bottom: 1px dashed #0080ff;font-size:14px; width:100%;">Купить в рассрочку на 2 месяца</span></div></a>
                    </div>
                </div>
                
            </div>
        </div>
        <?php }// end while ?>
        <?php } // endif; ?> 
        <div><?php echo do_shortcode('[frontpage_news widget="16" name="Похожие товары"]'); ?></div>
        
    </div>
</div>
<div class="modaldiv"></div>

	<script>
        var animTime = 2000;
        var modal = $('.modaldiv');
        $(".modaldiv").click(function(e){
            $(this).removeClass('focusimage');
               
               modal.animate({'opacity': 0},1000);
            $(this).hide(animTime);
            $('.focusimage').removeClass('focusimage');
        });
        
       $('.tovar-single-image img').click(function(e){
           
           
           
            if($(this).hasClass('focusimage') ) {
                $(this).removeClass('focusimage');
               
               modal.animate({'opacity': 0},1000);
                
                modal.hide(animTime);
           
        }
           else {
               
               $(this).addClass('focusimage');
           
           var urllist = 'url(';
           var skobka = ')';
               
           modal.animate({'opacity': 1},1000)
           modal.css('top', (window.innerHeight - modal.height()) / 2);
           modal.css('left', (window.innerWidth - modal.width()) / 2);
           
           modal.css('background-image', urllist + $(e.target).attr('src') + skobka );
            modal.addClass('focusimage');
               modal.show(animTime);
           }
       });

     /*   $('.tovar-single-image img').click(function(e){
           
            if($(this).css('width') != '500px') {
                $('.rebelet').removeAttr('style');
                $(this).addClass('rebelet');
                widtheig = $(this).css('width')
               $(this).animate({'width':500},1000).css('height','auto').css('position','absolute').css('z-index','99999'); 
           }
            else {
                $(this).animate({'width':widtheig},1000).animate({'z-index':1},1000).css('position','relative');
                
            }
           }); */
        $('.modal-content').delegate('.mini-gallery img','click',function(){
        $(this).parent().parent().find('.zoom img:nth-child(2)').remove();
        big_image=$(this).attr('src');
        big_image=big_image.replace('web','');
        $(this).parent().parent().find('.zoom img').attr('src',big_image);
        $(this).parent().parent().find('.zoom').zoom();
    });
    $('.action').delegate('.mini-gallery img','click',function(){
        big_image=$(this).attr('src');
        big_image=big_image.replace('web','');
        $(this).parent().parent().children('img.main-image').attr('src',big_image);
        $('.zoomImg').remove();
        $('.zoom').zoom();
    });


    //Модуль увеличения картинки товара только для больших мониторов
    $('.zoom').zoom();
</script>
<?php get_footer();
