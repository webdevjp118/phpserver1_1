<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package estate
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
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/pmhwp.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favico.png">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="background_color_hp">
<?php wp_body_open(); ?>
<div class="wrapper">
<!-- HEADER_START -->
	<header id="header">
        <div class="header-hp">
            <div class="container-fluid">
                <div class="row">
                    <div class="col header-in-hp">
                    	<div class="header-left-hp">
                            <div class="logo-hp">
                            	<a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/K&G.svg" alt="" /></a>
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
                                        <ul class="navbar-nav ml-auto">
                                            <li><a href="<?php echo get_site_url(); ?>/sale/">売買仲介</a></li>                                            
                                            <li><a href="<?php echo get_site_url(); ?>/rental/">賃貸仲介</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/business/">事業内容</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/inheritance/">相続コンサル</a></li>
                                            <li><a href="<?php echo get_site_url(); ?>/company/">会社案内</a></li>
                                            <li><a class="header_btn_hp" href="<?php echo get_site_url(); ?>/contact/">お問い合わせ</a></li>                                           
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
<!-- HEADER_END -->