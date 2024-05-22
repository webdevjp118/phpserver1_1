<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fcnishinomiya
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/stylesheet.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/cocoon.css" rel="stylesheet" type="text/css">
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
<div id="site_loader_overlay"><div id="site_loader_animation"><i></i><i></i><i></i><i></i></div></div>
<div class="wrapper">
<!-- HEADER_START -->
<div class="header_device">
    <header id="header">
        <div class="header_set">
            <a class="header_logo" href="#">
                <img class="headlogo_white" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
                <img class="headlogo_green" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg">
            </a>
            <div class="header_right">
                <div class="header_menu">
                    <div class="headmenu_scroll">
                        <a class="headmenu_a" href="#">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">
                                    <div class="headmenu_cap1">ニュース</div>
                                    <div class="headmenu_cap2">NEWS</div>
                                </div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                        <div class="headmenu_big">
                            <a class="headmenu_a" href="#">
                                <div class="headmenu_shape">
                                    <div class="headmenu_cap">
                                        <div class="headmenu_cap1">試合情報</div>
                                        <div class="headmenu_cap2">GAME INFO</div>
                                    </div>
                                    <div class="headmenu_uline"></div>
                                </div>
                            </a>
                            <ul class="headmenu_subul">
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                            </ul>
                        </div>
                        <div class="headmenu_big">
                            <a class="headmenu_a" href="#">
                                <div class="headmenu_shape">
                                    <div class="headmenu_cap">
                                        <div class="headmenu_cap1">チーム</div>
                                        <div class="headmenu_cap2">TEAM INFO</div>
                                    </div>
                                    <div class="headmenu_uline"></div>
                                </div>
                            </a>
                            <ul class="headmenu_subul">
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックスキックスキックスキックス</span></a></li>
                            </ul>
                        </div>
                        <a class="headmenu_a" href="#">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">
                                    <div class="headmenu_cap1">クラブ</div>
                                    <div class="headmenu_cap2">CLUB</div>
                                </div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                        <a class="headmenu_a" href="#">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">
                                    <div class="headmenu_cap1">ホームタウン</div>
                                    <div class="headmenu_cap2">HOMETOWN</div>
                                </div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                        <a class="headmenu_a" href="#">
                            <div class="headmenu_shape">
                                <div class="headmenu_cap">
                                    <div class="headmenu_cap1">パートナー</div>
                                    <div class="headmenu_cap2">PARTNER</div>
                                </div>
                                <div class="headmenu_uline"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="flex_fill"></div>
                <div class="fixed_contact">
                    <div class="head_socials">
                        <a href="#" class="head_sociala"><img class="X_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hsocial_fb.svg"></a>
                        <a href="#" class="head_sociala"><img class="X_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hsocial_line.svg"></a>
                        <a href="#" class="head_sociala"><img class="X_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hsocial_twitter.svg"></a>
                        <!-- pdropdown -->
                        <div class="headinsta_drop pdropdown">
                            <div class="head_insta pdropdown_btn">
                                <img class="headinsta_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/hsocial_insta.svg">
                            </div>
                            <!-- pdropdown_ul -->
                            <ul class="hsocial_ddownul pdropdown_ul">
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>1967</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>ブレイズ</span></a></li>
                                <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span>キックス</span></a></li>
                            </ul>
                        </div>                        
                    </div>
                    <div class="head_goods">
                        <a class="head_sociala" href="#"><img class="X_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/goods.svg"></a>
                        <a class="head_sociala" href="#"><img class="X_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/headcontact.svg"></a>
                    </div>                    
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
<?php
    // echo "<br><br><br><br><br><br><br><br>";
    // global $gTeam_List;
    // var_dump($gTeam_List);
?>