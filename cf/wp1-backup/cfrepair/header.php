<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cfrepair
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://use.typekit.net/hrj3xmc.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/swiper.min.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/loading.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header" class="">
        <div class="header_set">
            <a href="<?php echo get_site_url(); ?>/" class="header_logo">
                <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_green.svg">
                <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_green.svg">
            </a>
            <div class="header_menu">
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/company/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">会社概要</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/refrigeration/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">冷凍・空調事業</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/fitness/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">フィットネス事業</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/recruit/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">採用情報</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a headmenu_contact" href="<?php echo get_site_url(); ?>/contact/">
                    <div class="headmenu_shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11" viewBox="0 0 14 11">
                            <path id="Icon_ionic-md-mail" data-name="Icon ionic-md-mail" d="M13.667,2.5H2.333A1.337,1.337,0,0,0,1,3.833v8.333A1.337,1.337,0,0,0,2.333,13.5H13.667A1.337,1.337,0,0,0,15,12.167V3.833A1.337,1.337,0,0,0,13.667,2.5ZM13.5,5.333,8,9,2.5,5.333V4L8,7.667,13.5,4Z" transform="translate(-1 -2.5)"/>
                        </svg>
                        <div class="headmenu_cap">お問い合わせ</div>
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