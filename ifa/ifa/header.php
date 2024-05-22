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
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.default.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" rel="stylesheet" type="text/css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script>
  (function(d) {
    var config = {
      kitId: 'nzt8uel',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

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

<header id="header">
	<div class="header-hp">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 header-in-hp">
					<div class="header-left-hp">
						<div class="logo-hp">
							<a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header_logo.png" alt="" /></a>
						</div>
						<div class="clearfix"></div>
					</div>                        
					<div class="header-right-hp">
						<div class="mobile-menu-hp">
							<a href="javascript:void(0)">
								<div class="menu-toggle-btn-hp">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</a>
						</div>              
						<div class="navigation-hp">
							<nav class="navbar navbar-expand-lg navbar-light">
								<div class="collapse navbar-collapse navigation-main-hp" id="navbarSupportedContent">
									<ul class="navbar-nav">
										<li><a href="<?php echo get_site_url(); ?>/account/">口座開設</a></li>                                            
										<li><a href="<?php echo get_site_url(); ?>/investment/">投資活動の紹介</a></li>
										<li><a href="<?php echo get_site_url(); ?>/company/">企業概要</a></li>
										<li><a class="header_pd_hp" href="<?php echo get_site_url(); ?>/information/">日本に必要な企業統治とは</a></li>                                           
									</ul>
									<ul class="">
										<li><a class="header_btn_hp" href="<?php echo get_site_url(); ?>/work/">IPO実績</a></li>
										<li><a class="header_btn_hp header_box_hp" href="<?php echo get_site_url(); ?>/recruit/">アクティビスト<br />IFA積極採用中</a></li>
									</ul>
								</div>
							</nav>
							<div class="clearfix"></div>    
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</header>