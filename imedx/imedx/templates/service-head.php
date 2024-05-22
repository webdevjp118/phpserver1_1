<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/service/style.css">
    <?php if(is_page( '13' )): ?> <!-- 固定ページ：サービスページ -->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/service/assets/css/swiper-bundle.min.css" media="screen and (min-width: 600px)">
        <script src="<?php echo get_template_directory_uri(); ?>/service/assets/js/swiper-bundle.min.js"></script>
    <?php endif; ?>
    <?php wp_head(); ?>
</head>