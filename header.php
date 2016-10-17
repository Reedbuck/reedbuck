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
            <div class="middle_header row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <svg version="1.1" id="desctop__monitor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 497.2 387.1" style="enable-background:new 0 0 497.2 387.1;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill-rule:evenodd;clip-rule:evenodd;fill:none;}
                            .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#EFEFEF;stroke:#AFAFAF;stroke-miterlimit:10;}
                            .st2{fill-rule:evenodd;clip-rule:evenodd;fill:#E2E2E2;stroke:#AFAFAF;stroke-miterlimit:10;}
                            .st3{fill-rule:evenodd;clip-rule:evenodd;fill:#43536B;}
                            .st4{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;stroke:#E2E2E2;stroke-miterlimit:10;}
                            .st5{fill-rule:evenodd;clip-rule:evenodd;fill:#74B87A;}
                            .st6{fill-rule:evenodd;clip-rule:evenodd;}
                        </style>
                        <path class="st0" d="M244.1,308.1c0,0-3.5,4.5,0,8c3.5,3.5,9,0,9,0s4-4,0-8S244.1,308.1,244.1,308.1z"/>
                        <path class="st1" d="M157.1,376.1c-8.5,0-8.3,11,0,11c8.3,0,172.3,0,181,0c8.8,0,9-11,0-11C329.1,376.1,165.6,376.1,157.1,376.1z"/>
                        <path class="st2" d="M210.1,338.1c-6.3,0-6,12,0,12c6,0,71.5,0,77,0c5.5,0,5.5-12,0-12C280.4,338.1,216.4,338.1,210.1,338.1z
                             M197.1,357.1c-6.3,0-6,12,0,12s97.5,0,103,0c5.5,0,5.5-12,0-12C293.4,357.1,203.4,357.1,197.1,357.1z M206.1,329.1l-40,47h164
                            l-37-47H206.1z"/>
                        <path class="st3" d="M0.1,17c0,0-2-17,17-17s465.1,0,465.1,0s15,2,15,15c0,13,0,299.1,0,299.1s-3.7,15-15,15
                            c-11.3,0-468.1,0-468.1,0s-14-3.3-14-13C0.1,306.4,0.1,17,0.1,17z"/>
                        <path class="st4" d="M0.1,295.1h497.1v19c0,0-3.5,15-15,15c-12.9,0-456.7,0-469.1,0c-12.5,0-12.9-15.1-13-15V295.1z"/>
                        <path class="st5" d="M468.2,312.1h-23v6h23V312.1z"/>
                        <path class="st6" d="M29.1,29h439.1v241.1H29.1V29z"/>
                    </svg>

                    <textarea class="desctop__text" name="comment" cols="40" rows="3" maxlength="200"></textarea>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4"></div>
                <div class="col-xs-4 col-sm-4 col-md-4"></div>
            </div>
        </div>
    </div>     
</header>
<script>
    
    widthmonitorarea = $(".st6")[0].getBoundingClientRect().width;
    heightmonitorarea = $(".st6")[0].getBoundingClientRect().height;
    positionmonitorarea = $(".st6").position();
    
    $(".desctop__text").width(widthmonitorarea);
    $(".desctop__text").height(heightmonitorarea);
    $(".desctop__text").css("top" , positionmonitorarea.top).css("left" , positionmonitorarea.left);
    
    function monitor_animate () {
        if($(".st5").css("fill") == "rgb(42, 84, 46)") {
            $(".st5").css("fill","rgb(116, 184, 122)");
        }
        else {
            $(".st5").css("fill","rgb(42, 84, 46)");
        }
    }
    
    setInterval(monitor_animate , 500);
</script>
	