<?php
// echo file_get_contents("https://www.bifesta.jp/");
// echo str_replace('</body>','<script src="custom.js"></script></body>',file_get_contents("https://www.fascinate.jp/english/articles"));
$find = array(
    '</body>',
    '</head>',
    'src="/', 
    'srcset="/',
    'href="/assets/css/common/common.css?14"',
    'href="/assets/css/'
);
$replace = array(
    '<div class="lancer_overlay"><div class="lancer_logo"><img src="lancer_logo1.ico"></div><div class="lancer_name">howdyevさんの制作実績確認用</div></div></body>',
    '<link rel="stylesheet" href="confirm.css" media="all"></head>',
    'src="https://www.bifesta.jp/',
    'srcset="https://www.bifesta.jp/',
    'href="common.css"',
    'href="https://www.bifesta.jp/assets/css/',
);
echo str_replace($find, $replace, file_get_contents("https://www.bifesta.jp/"));
?>
<style>
    @media screen and (max-width: 767px) {
        .cms-articles.page-layout-fasgroup-media-layout .c-layout-grid__link {
            flex-wrap: wrap;
        }
        .cms-articles .lists .c-layout-grid__image,
        .cms-articles .lists .c-layout-grid__image img {
            width: 100%;
        }
    }
</style>