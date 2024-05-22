<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fluxy
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
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="site_loader_overlay">
<?php
$slug = get_post_field( 'post_name', get_post() );
if($slug == 'service') {
?>
    <div id="service_loader">
        <div id="service_string">
            <span>世</span>
            <span>界</span>
            <span>が</span>
            <span>あ</span>
            <span>な</span>
            <span>た</span>
            <span>を</span>
            <span>認</span>
            <span>知</span>
            <span>す</span>
            <span>る。</span>
        </div>
    </div>
<?php
} else if(is_home()) {
?>
    <div id="fluxy_loader">
        <div id="fluxy_string">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f.png">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/l.png">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/u.png">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x.png">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/y.png">
        </div>
    </div>
<?php 
} else { 
?>
    <div id="site_loader_animation"><i></i><i></i><i></i><i></i></div>
<?php 
}
?>
</div>
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
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/service/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">サービス</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/price/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">料金</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/company/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">会社案内</div>
                        <div class="headmenu_uline"></div>
                    </div>
                </a>
                <a class="headmenu_a" href="<?php echo get_site_url(); ?>/contact/">
                    <div class="headmenu_shape">
                        <div class="headmenu_cap">お問い合わせ</div>
                        <div class="headmenu_uline"></div>
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