<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artist
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
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fontawesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<?php wp_body_open(); ?>
<!-- HEADER_START -->
	<header id="header" class="header-hp">
    	<div class="container">    	
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-in-hp">
                	<div class="logo-hp">
                    	<a href="<?php echo get_site_url(); ?>/">
                        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo1.svg" alt="">
                        </a>
                    </div>	
                    <div class="mobile_social_hp">
                    	<div class="mobile_social_in_hp">
                        	<div class="mobile_social_img_hp">
                            	<a href="javascript:void(0);">
                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.svg" alt="">
                                </a>
                            </div>
                            <div class="mobile_social_img_hp">
                            	<a href="javascript:void(0);">
                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.svg" alt="">
                                </a>
                            </div>
                            <div class="mobile_social_img_hp">
                            	<a href="javascript:void(0);">
                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.svg" alt="">
                                </a>
                            </div>
                            <div class="mobile_social_img_hp">
                            	<a href="javascript:void(0);">
                                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>				
                    <div class="navigation">                   	
                    	<div class="navigation_in_hp">                            
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_site_url(); ?>/schedule/">SCHEDULE</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_site_url(); ?>/info/">INFO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_site_url(); ?>/discography/">DISCOGRAPHY</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_site_url(); ?>/profile/">PROFILE</a>
                                        </li>                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_site_url(); ?>/fan-club/">FANCLUB</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_site_url(); ?>/goods/">GOODS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo get_site_url(); ?>/contact/">CONTACT</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>                            
                        </div>
                    </div>                                                            
                    <div class="entry_box_main_hp">                        
                        <div class="mobile-menu-icon-hp">
                            <div class="menu-toggle-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>
<!-- HEADER_END -->