<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package counter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<?php wp_body_open(); ?>
<div class="loading_wrap" id="first_loading">
    <div id="site_loader_overlay">
        <img class="loading_video" src="<?php echo get_stylesheet_directory_uri(); ?>/images/loading_gif.gif">
    </div>
</div>
<div class="loading_wrap" id="normal_loading">
    <div id="site_loader_overlay">
        <div id="site_loader_animation"><i></i><i></i><i></i><i></i></div>
    </div>
</div>
<div class="wrapper">
<!-- HEADER_START -->
<header id="header" class="">
    <div class="header_set">
        <a class="header_logo" href="<?php echo get_site_url(); ?>">
            <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/counter_logo.svg">
            <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/counter_logo.svg">
        </a>
        <div class="header_menu">
            <div class="header_cols">
                <div class="header_col">
                    <div class="headermenu_aflex">
                        <a class="headmenu_a" href="<?php echo get_site_url(); ?>/about/">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">ABOUT</div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                    <div class="headermenu_aflex">
                        <a class="headmenu_a" href="<?php echo get_site_url(); ?>/works/">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">WORKS</div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                    <div class="headermenu_aflex">
                        <a class="headmenu_a" href="<?php echo get_site_url(); ?>/service/">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">SERVICE</div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                    <div class="headermenu_aflex">
                        <a class="headmenu_a" href="<?php echo get_site_url(); ?>/projects/">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">PROJECTS</div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="header_col">
                    <div class="headermenu_aflex">
                        <a class="headmenu_a" href="<?php echo get_site_url(); ?>/company/">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">COMPANY</div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                    <div class="headermenu_aflex">
                        <a class="headmenu_a" href="<?php echo get_site_url(); ?>/contact/">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">CONTACT</div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                    <div class="headermenu_aflex">
                        <a class="headmenu_a" href="<?php echo get_site_url(); ?>/recruit/">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">RECRUIT</div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_foot">
                <div class="header_copyright"> © COUNTER Inc.</div>
                <div class="header_socials">
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_fb.svg"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_twitter.svg"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_youtube.svg"></a>
                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/social_insta.svg"></a>
                </div>
            </div>
        </div>
        <div class="hamburger_set js_hamburger">
            <div class="hamburger_text">Close</div>
            <div class="hamburger_btn">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</header>
<!-- HEADER_END -->