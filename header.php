<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/reedbuck/wow-animation/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.js"></script>
    <?php wp_head(); ?>
    
</head>
    
    
<body <?php body_class(); ?>>

    <div class="our_container">
<header>
    
    <div class="header">
        <section class="top-info-box"></section>
        <div class="container">
            <div class="top_header row">
                <div class="col-xs-12 col-sm-12 col-md-3">
                    <div class="header_logo wow fadeInLeft">
                        <a href="/">
                            <img src="/wp-content/themes/reedbuck/images/vertical-logo.png">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 header_menu_box wow fadeInDown">
                    <?php wp_nav_menu( array( 'container_class' => 'head_nav_menu', 'theme_location' => 'top_menu' ) ); ?>
                </div>
            </div>
        </div>
    </div>     
</header>
	