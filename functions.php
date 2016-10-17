<?php



//объявление стилей
function reedbuck_enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
    wp_register_style('bootstrap-soit', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style( 'bootstrap-soit' );
    wp_register_style('bootstrap-soit-theme', get_template_directory_uri() . '/css/bootstrap-theme.css');
    wp_enqueue_style( 'bootstrap-soit-theme' );
}
add_action('wp_enqueue_scripts', 'reedbuck_enqueue_styles');


//объявление скриптов
function reedbuck_enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
    wp_register_script('botstrap-mu-js', get_template_directory_uri() . '/js/bootstrap.js');
	wp_enqueue_script('botstrap-mu-js');
}
add_action('wp_enqueue_scripts', 'reedbuck_enqueue_scripts');

//добавление пунктов меню в админке
add_action( 'init', 'true_register_post_type_init' ); // Использовать функцию только внутри хука init
 
function true_register_post_type_init() {
	$labels = array(
		'name' => 'Товары',
		'singular_name' => 'Товар', // админ панель Добавить->Функцию
		'add_new' => 'Добавить товар',
		'add_new_item' => 'Добавить новый товар', // заголовок тега <title>
		'edit_item' => 'Редактировать товар',
		'new_item' => 'Новый товар',
		'all_items' => 'Все товары',
		'view_item' => 'Просмотр товаров на сайте',
		'search_items' => 'Искать товар',
		'not_found' =>  'Товар не найден.',
		'not_found_in_trash' => 'В корзине нет товаров.',
		'menu_name' => 'Товары' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true, 
		'menu_icon' => get_stylesheet_directory_uri() .'/img/function_icon.png', // иконка в меню
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'page-attributes'),
        'rewrite' => array( 'slug' => 'catalog')
	);
	register_post_type('tovar', $args);
}

add_filter( 'post_updated_messages', 'true_post_type_messages' );
 
function true_post_type_messages( $messages ) {
	global $post, $post_ID;
 
	$messages['catalog'] = array( // uslug - название созданного нами типа записей
		0 => '', // Данный индекс не используется.
		1 => sprintf( 'Товар обновлен. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		2 => 'Параметр обновлён.',
		3 => 'Параметр удалён.',
		4 => 'Товар обновлен',
		5 => isset($_GET['revision']) ? sprintf( 'Товар восстановлен из редакции: %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( 'Товар опубликован на сайте. <a href="%s">Просмотр</a>', esc_url( get_permalink($post_ID) ) ),
		7 => 'Товар сохранен.',
		8 => sprintf( 'Отправлено на проверку. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( 'Запланировано на публикацию: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Просмотр</a>', date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( 'Черновик обновлён. <a target="_blank" href="%s">Просмотр</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	);
 
	return $messages;
}


add_theme_support( 'post-thumbnails' ); // для всех типов постов

//добавление возможность создавать меню
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}


//добавление позиций меню

    register_nav_menus( array(
	'top_menu' => 'Меню сверху',
	'footer_menu' => 'Меню в подвале'
) );


if ( ! function_exists( 'reedbuck_entry_meta' ) ) :

function reedbuck_entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() )
		echo '<span class="featured-post">' . esc_html__( 'Sticky', 'reedbuck' ) . '</span>';

	if ( ! has_post_format( 'link' ) && 'post' == get_post_type() )
		reedbuck_entry_date();

	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'reedbuck' ) );
	if ( $categories_list ) {
		echo '<span class="categories-links">' . $categories_list . '</span>';
	}

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'reedbuck' ) );
	if ( $tag_list ) {
		echo '<span class="tags-links">' . $tag_list . '</span>';
	}

	// Post author
	if ( 'post' == get_post_type() ) {
		printf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'reedbuck' ), get_the_author() ) ),
			get_the_author()
		);
	}
}
endif;


if ( ! function_exists( 'reedbuck_entry_date' ) ) :
/**
 * вывод даты для функции reedbuck_entry_date()
 */
function reedbuck_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) )
		$format_prefix = _x( '%1$s on %2$s', '1: post format name. 2: date', 'reedbuck' );
	else
		$format_prefix = '%2$s';

	$date = sprintf( '<span class="date"><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a></span>',
		esc_url( get_permalink() ),
		esc_attr( sprintf( __( 'Permalink to %s', 'reedbuck' ), the_title_attribute( 'echo=0' ) ) ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( sprintf( $format_prefix, get_post_format_string( get_post_format() ), get_the_date() ) )
	);

	if ( $echo )
		echo $date;

	return $date;
}
endif;