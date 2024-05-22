<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package detal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
	<link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fonts.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/fontawesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/pmhwp.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body>
<div class="wrapper">
<?php wp_body_open(); ?>
<!-- HEADER_START -->
<header id="header" class="header-hp">
	<div class="container-fluid">    	
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 header-in-hp">
				<div class="logo-hp">
					<a href="<?php echo get_site_url(); ?>/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo1.png" alt="">
					</a>
				</div>
				<div class="header_img_hp">
					<a href="<?php echo get_site_url(); ?>/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header1.png" alt="">
					</a>
				</div> 
				<div class="header_right_hp">
					<div class="header_right_line_hp">
						<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/line_Brand_icon.png" alt=""><br>LINE相談</a>
					</div>
					<div class="header_request_hp">
						<a href="<?php echo get_site_url(); ?>/contact"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_1.svg" alt=""></span><br>資料請求はこちら</a>
					</div>
					<div class="header_inquirie_hp">
						<a href="tel:072-894-8248">ご予約・お問い合わせ<br><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_2.svg" alt="">072-894-8248</span></a>
					</div>
					<div class="header_reception_hp">
						<a href="<?php echo get_site_url(); ?>/contact">24時間受付<br><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon_3.svg" alt="">ご相談はこちら</span></a>
					</div>
				</div>                   				
				<div class="navigation">                   	
					<div class="navigation_in_hp">                            
						<nav class="navbar navbar-expand-lg navbar-light">
							<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/">ホーム</a>
										<a class="nav-link nav-link1" href="<?php echo get_site_url(); ?>/">HOME</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/#feature">当医院の特徴</a>
										<a class="nav-link nav-link1" href="<?php echo get_site_url(); ?>/#feature">FEATURE</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/information">医院紹介</a>
										<a class="nav-link nav-link1" href="<?php echo get_site_url(); ?>/information">ABOUT</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/inplant">インプラント治療</a>
										<a class="nav-link nav-link1" href="<?php echo get_site_url(); ?>/inplant">DENTAL IMPLANT</a>
									</li>                                        
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/price">費用</a>
										<a class="nav-link nav-link1" href="<?php echo get_site_url(); ?>/price">PRICE</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0)">よくある質問</a>
										<a class="nav-link nav-link1" href="javascript:void(0)">FAQ</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/blog">ブログ</a>
										<a class="nav-link nav-link1" href="<?php echo get_site_url(); ?>/blog">BLOG</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="javascript:void(0)">アクセス</a>
										<a class="nav-link nav-link1" href="javascript:void(0)">ACCESS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="<?php echo get_site_url(); ?>/contact">お問合せ</a>
										<a class="nav-link nav-link1" href="<?php echo get_site_url(); ?>/contact">CONTACT</a>
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

