<?php
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
<link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&display=swap" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/extra.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/pmhwp.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
<!-- HEADER_START -->
<header id="header">
	<div class="header-hp">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 header-in-hp">
					<div class="header-left-hp">
						<div class="logo-hp">
							<a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.png" alt=""/></a>
						</div>
						<div class="clearfix"></div>
					</div>                        
					<div class="header-right-hp">                        	              
						<div class="navigation-hp">
							<nav class="navbar navbar-expand-lg navbar-light">
								<div class="collapse navbar-collapse navigation-main-hp" id="navbarSupportedContent">
									<div class="header_main_logo_hp js_button" data-href="<?php echo get_site_url(); ?>/">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt=""/>
									</div>
									<div class="header_main_hp">                                        
										<div class="header_menu_top_hp">
											<div class="header_links_hp">
												<h3>会社案内</h3>
												<ul>	
													<li><a href="<?php echo get_site_url(); ?>/company/#id_company1">会社概要</a></li>
													<li><a href="<?php echo get_site_url(); ?>/company/#id_company2">沿革</a></li>
													<li><a href="<?php echo get_site_url(); ?>/company/#id_company3">加入団体</a></li>
													<li><a href="<?php echo get_site_url(); ?>/company/#id_company4">主要取引先</a></li>
													<li><a href="<?php echo get_site_url(); ?>/company/#id_company5">アクセス</a></li>
												</ul>                                                                    
											</div>
											<div class="header_links_hp">
												<h3 class="js_button" data-href="<?php echo get_site_url(); ?>/service/">事業案内</h3>
												<ul>	
													<li><a href="<?php echo get_site_url(); ?>/service-detail/#id_service_detail1">戸建て住宅の塗装</a></li>
													<li><a href="<?php echo get_site_url(); ?>/service-detail/#id_service_detail2">大規模修繕</a></li>
													<li><a href="<?php echo get_site_url(); ?>/service-detail/#id_service_detail3">企業サポート</a></li>
													<li><a href="<?php echo get_site_url(); ?>/service-detail/#id_service_detail4">公共事業</a></li>
												</ul>                                                                    
											</div>
											<div class="header_links_hp">
												<h3 class="js_button" data-href="<?php echo get_site_url(); ?>/painting/">こだわりの塗装</h3>
												<ul>	
													<li><a href="<?php echo get_site_url(); ?>/painting/">塗装技術をご紹介</a></li>
													<li><a href="<?php echo get_site_url(); ?>/painting/#id_painting">国内大手塗料メーカー</a></li>                                            
												</ul>                                                                  
											</div>
											<div class="header_links_hp">
												<h3 class="js_button" data-href="<?php echo get_site_url(); ?>/recruit/">採用情報</h3>
												<ul>	
													<li><a href="<?php echo get_site_url(); ?>/recruit/#id_recruit1">施工管理</a></li>
													<li><a href="<?php echo get_site_url(); ?>/recruit/#id_recruit2">事務</a></li>
													<li><a href="<?php echo get_site_url(); ?>/recruit/#id_recruit3">塗装技術者</a></li>                                            
												</ul>                                                                    
											</div>
											<div class="header_links_hp">
												<h3><a href="<?php echo get_site_url(); ?>/news/">お知らせ</a></h3>
												<h3><a href="<?php echo get_site_url(); ?>/contact">お問い合わせ</a></h3>                                                                      
											</div>
										</div>                                            
										<div class="header_menu_bottom_hp">
											<div class="header_menu_grid_hp">
												<div class="header_menu_box_hp">
													<div class="header_img_hp">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_phone_icon.svg" alt=""/>
													</div>
													<div class="header_info_hp">
														<h6>お電話でのお問い合わせ</h6>
														<h4 data-href="tel:0466-27-1761" class="js_button">0466-27-1761</h4>	
														<p>（ 平日 09:00〜17:00 ）</p>
													</div>
												</div>
												<div class="header_menu_box_hp header_menu_pd_hp">
													<div class="header_img_hp">
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_mail_icon.svg" alt=""/>
													</div>
													<div class="header_info_hp">
														<h6>メールでのお問い合わせ</h6>                                                        
													</div>
													<div class="header_menu_btn_hp">
														<a href="<?php echo get_site_url(); ?>/contact/">お問い合わせ</a>
													</div>
												</div>
											</div>
										</div>                                            
									</div>  
								</div>
							</nav>
							<div class="clearfix"></div>    
						</div>
					</div>
					
					<div class="header_row_hp">
						<div class="header_btn_hp header_btn_1_hp">
							<a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_call_icon.svg" alt=""/>
								<div data-href="tel:0466-27-1761" class="js_button">
									0466-27-1761<br /> <span>（ 平日 09:00〜17:00 ）</span>
								</div>
							</a>	
						</div>
						<div class="header_btn_hp box_color_hp">
							<a href="<?php echo get_site_url(); ?>/contact/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_mail_icon.svg" alt=""/>お問い合わせ</a>	
						</div>
						<div class="mobile-menu-hp">
							<a href="javascript:void(0)">
								<div class="menu-toggle-btn-hp">
									<span></span>
									<span></span>
									<span class="change_hp">menu</span>
								</div>
							</a>
						</div>
					</div>
					
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</header>
<!-- HEADER_END -->