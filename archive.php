<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Fourteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Reebuck
 * @since Reebuck 1.0
 */

get_header(); ?>

<div class="posttovar">
    <div class="container">
        <div class="col-md-12 text-center" style="margin-top:60px;margin-bottom:60px;">
                <h2 id="toCatalog"><span>Кувшины из серебра</span></h2>
            </div>
        <?php 
                            $args = array(
                           'post_type' => 'tovar',
                           'posts_per_page' => 30,
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
                                    ?>
                            <div class="col-md-4 tovar_box">
                                <div class="col-md-12 tovar_box_dop">
                                    <a href="<?php echo get_the_guid(); ?>">
                                    <div class="col-md-12 tovar_box_image">
                                        <?php echo get_the_post_thumbnail(); ?>
                                    </div>
                                    </a>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="tovar_box_title">
                                                <?php echo get_the_title(); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-12 tovar_box_content">
                                            <span class="old_price"><?php echo get_field( "old_price" ) ?></span>
                                            <span class="new_price"><?php echo get_field( "new_price" ) ?></span>
                                        </div>
                                        <div class="col-md-12 top-info-content-botton">
                                            <a class="eModal-1"><div class="button-podr">Быстрый заказ</div></a>
                                        </div>
                                        <div class="col-md-12 tovar_box_button">
                                            <a href="<?php echo get_the_guid(); ?>"><div class="button-podr">Подробнее</div></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }// end while ?>
                            
                            <?php } // endif; ?> 
    </div>
</div>

<?php
get_footer();
