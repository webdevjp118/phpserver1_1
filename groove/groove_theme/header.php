<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

  <!-- reset -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- 共通CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/pmhwp.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="headerInner">
      <div class="headerLogo">
        <figure class="logo">
          <a href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo_header.png" alt=""></a>
        </figure>
      </div>
      <nav class="headerNav">
        <ul class="navList">
          <li class="navItem"><a href="<?php echo get_site_url(); ?>/about">私たちについて</a></li>
          <li class="navItem subItem"><a href="<?php echo get_site_url(); ?>/about#ごあいさつ">ごあいさつ</a></li>
          <li class="navItem subItem"><a href="<?php echo get_site_url(); ?>/about#会社理念">会社理念</a></li>
          <li class="navItem subItem"><a href="<?php echo get_site_url(); ?>/about#業務内容">業務内容</a></li>
          <li class="navItem"><a href="<?php echo get_site_url(); ?>/company">会社情報</a></li>
          <li class="navItem subItem"><a href="<?php echo get_site_url(); ?>/company#会社概要">会社概要</a></li>
          <li class="navItem subItem"><a href="<?php echo get_site_url(); ?>/company#沿革">沿革</a></li>
          <li class="navItem subItem"><a href="<?php echo get_site_url(); ?>/company#主な取引先">主な取引先</a></li>
          <li class="navItem subItem"><a href="<?php echo get_site_url(); ?>/company#本社・事務所">本社・事務所</a></li>
          <li class="navItem"><a href="<?php echo get_site_url(); ?>/information">お知らせ</a></li>
          <li class="navItem"><a href="<?php echo get_site_url(); ?>/partner">パートナー募集</a></li>
        </ul>
        <div class="btnBox">
          <a href="<?php echo get_site_url(); ?>/recruit" class="btn -type1">採用応募</a>
          <a href="<?php echo get_site_url(); ?>/contact" class="btn -type2">お問い合わせ</a>
        </div>
        <div class="sp">
          <div class="overlay" id="js-overlay"></div>
          <div class="hamburger"><span></span><span></span><span></span></div>
        </div>
      </nav>
    </div>
  </header>
