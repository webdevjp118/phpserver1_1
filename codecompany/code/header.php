<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo is_home()? "くらべる株式会社": get_the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Cormorant+Garamond&family=Montserrat&family=Noto+Sans+JP:wght@400;700&family=Poppins&family=Shippori+Mincho:wght@500&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos/dist/aos.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/images/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body class="">
<div class="wrapper">

<!-- HEADER_START -->
<header id="header" class="header-hp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-in-hp">
                <a class="logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg" alt="" />
                </a>
                <div class="navigation">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url(); ?>/company">COMPANY</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url(); ?>/service">SERVICE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo home_url(); ?>/news">NEWS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo get_site_url(); ?>/contact/">CONTACT</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="mobile-menu-icon-hp">
                    <div class="menu-toggle-btn">
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="overlay-mobile-menu-hp"></div>
<div class="clearfix"></div>
<!-- HEADER_END -->
