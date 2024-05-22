<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brooklyn
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
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <div class="header_left">
                <a class="header_logo" href="<?php echo get_site_url(); ?>/">
                    <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_white.png">
                    <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_black.png">
                </a>
            </div>
            <div class="header_menu">
                <div class="headmenu_adiv">
                    <a class="headmenu_a" href="<?php echo get_site_url(); ?>/">
                        <div class="headmenu_shape">
                            <div class="headmenu_cap">TOP</div>
                            <div class="headmenu_uline"></div>
                        </div>
                    </a>
                </div>
                <div class="headmenu_adiv">
                    <a class="headmenu_a" href="<?php echo get_site_url(); ?>/about/">
                        <div class="headmenu_shape">
                            <div class="headmenu_cap">ABOUT</div>
                            <div class="headmenu_uline"></div>
                        </div>
                    </a>
                </div>
                <div class="headmenu_adiv">
                    <a class="headmenu_a" href="<?php echo get_site_url(); ?>/projects">
                        <div class="headmenu_shape">
                            <div class="headmenu_cap">PROJECTS</div>
                            <div class="headmenu_uline"></div>
                        </div>
                    </a>
                </div>
                <div class="headmenu_adiv">
                    <a class="headmenu_a" href="<?php echo get_site_url(); ?>/workflow/">
                        <div class="headmenu_shape">
                            <div class="headmenu_cap">WORKFLOW</div>
                            <div class="headmenu_uline"></div>
                        </div>
                    </a>
                </div>
                <div class="headmenu_adiv">
                    <a class="headmenu_a" href="<?php echo get_site_url(); ?>/recruit/">
                        <div class="headmenu_shape">
                            <div class="headmenu_cap">RECRUIT</div>
                            <div class="headmenu_uline"></div>
                        </div>
                    </a>
                </div>
                <div class="headmenu_adiv">
                    <a class="headmenu_a" href="<?php echo get_site_url(); ?>/contact/">
                        <div class="headmenu_shape">
                            <div class="headmenu_cap">CONTACT</div>
                            <div class="headmenu_uline"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="hamburger_set js_hamburger">
                <a href="javascript:void(0)">
                    <div class="hamburger_btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
    </header>
</div>
<!-- HEADER_END -->