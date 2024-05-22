<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fcnishinomiya1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Bootstrap -->
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome_all.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<body>
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <div class="header_left">
                <a class="header_logo" href="<?php echo get_site_url(); ?>/">
                    <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
                    <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
                </a>
            </div>
            <div class="header_menu">
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/outline/#vision">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">チームビジョン</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/outline/#req">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">募集要項</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/outline/#faq">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">よくある質問</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <div class="headmenu_fill">&nbsp;</div>
                <a class="headmenu_a headmenu_contact" href="<?php echo get_site_url(); ?>/contact/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">エントリー</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.827" height="12.243" viewBox="0 0 12.827 12.243">
                            <g id="Group_463" data-name="Group 463" transform="translate(12825.5 13111.426)">
                              <line id="Line_101" data-name="Line 101" x2="9.999" transform="translate(-12825.5 -13105.305)" fill="none" stroke="#fff" stroke-width="2"/>
                              <path id="Path_250" data-name="Path 250" d="M-12819.5-13110.719l5.414,5.414-5.414,5.415" fill="none" stroke="#fff" stroke-width="2"/>
                            </g>
                        </svg>
                    </div>
                </a>
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