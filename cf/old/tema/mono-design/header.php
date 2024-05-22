<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="copyright" content="株式会社シーエフ">
<meta name="Keywords" content="<?php if(get_field('seo_keyword',$post->ID)){ ?>
<?php the_field('seo_keyword',$post->ID); ?><?php }else{ ?>空調機器,フィットネス器具,ネットショッピング,シャーロット<?php } ?>" />
<meta name="Description" content="<?php if(get_field('seo_description',$post->ID)){ ?>
<?php the_field('seo_description',$post->ID); ?><?php }else{ ?>お客様の暮らし・健康をトータルにサポート<?php } ?>" />

<title><?php if(get_field('seo_title',$post->ID)){ ?><?php the_field('seo_title',$post->ID); ?> | 株式会社シーエフ<?php }else{ ?><?php the_title(); ?>
 | 株式会社シーエフ<?php } ?>
</title>

<link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">

<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo get_template_directory_uri(); ?>/css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/layout.css" rel="stylesheet" type="text/css" />
<?php if(is_home()||is_front_page()): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/index.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('company')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/company.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('aircon')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/aircon.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('contact')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/contact.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_template_directory_uri(); ?>/css/form.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('fitness')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/fitness.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('onlineshop')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/onlineshop.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('policy')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/policy.css" rel="stylesheet" type="text/css" />
<?php elseif(is_page('recruit')): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/recruit.css" rel="stylesheet" type="text/css" />
<?php elseif(get_post_type() == 'news_list'): ?>
<link href="<?php echo get_template_directory_uri(); ?>/css/post.css" rel="stylesheet" type="text/css" />
<?php endif; ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_head(); ?>
</head>

<body>
<div id="wrap">
	
	<header>
		<div class="inner">
			<div class="logo">
				<a href="<?php echo site_url(); ?>/">
				<h1><img src="/wp-content/themes/mono-design/img/common/logo.png" alt=""></h1>
				<span>皆さんの快適ライフをサポートします。</span>
				</a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="<?php echo site_url(); ?>/contact/">●　お問合せ</a></li>
					<li><a href="<?php echo site_url(); ?>/policy/">●　ポリシー</a></li>
				</ul>
				<div class="sp_nav">MENU</div>
			</div><!--/.menu-->
		</div>
	</header>
	
	<nav>
		<ul>
			<li><a href="<?php echo site_url(); ?>/"<?php if(is_home()||is_front_page()): ?> class="on"<?php endif; ?>>トップページ</a></li>
			<li><a href="<?php echo site_url(); ?>/company/"<?php if(is_page('company')): ?> class="on"<?php endif; ?>>会社概要</a></li>
			<li><a href="<?php echo site_url(); ?>/aircon/"<?php if(is_page('aircon')): ?> class="on"<?php endif; ?>>冷凍・空調事業</a></li>
			<li><a href="<?php echo site_url(); ?>/fitness/"<?php if(is_page('fitness')): ?> class="on"<?php endif; ?>>フィットネス事業</a></li>

			<li><a href="<?php echo site_url(); ?>/recruit/"<?php if(is_page('recruit')): ?> class="on"<?php endif; ?>>採用情報</a></li>
			<li><a href="<?php echo site_url(); ?>/contact/"<?php if(is_page('contact')): ?> class="on"<?php endif; ?>>お問合せ</a></li>
			<li><a href="<?php echo site_url(); ?>/policy/"<?php if(is_page('policy')): ?> class="on"<?php endif; ?>>ポリシー</a></li>
		</ul>
	</nav>
	
	<?php if(is_home()||is_front_page()||is_page(759)): ?>
		<div class="mv">
			<?php $fields = get_post_custom(759); ?>
			<?php $val = $fields['index_main_img'][0]; ?>
			<img src="<?php the_field('index_main_img',$post->ID); ?>" alt="イメージ画像" />
		</div>
	<?php elseif(get_post_type() == 'news_list'): ?>
		<div class="content_title">
			<div class="inner">
				<h2>お知らせ</h2>
			</div>
		</div>
	<?php else: ?>
		<div class="content_title">
			<div class="inner">
				<h2><?php the_title(); ?></h2>
			</div>
		</div>
	<?php endif; ?>
	
	<main>