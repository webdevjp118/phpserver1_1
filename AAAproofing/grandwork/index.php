<?php
echo file_get_contents("https://www.fascinate.jp/japanese/articles");
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