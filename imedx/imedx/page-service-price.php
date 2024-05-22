<?
/**
 * Template Name: サービス - 料金
 */
?>
<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<div class="p-mv-page">
    <div class="l-wrap p-mv-page__inner">
        <p class="mv-page__en">PRICE</p>
        <h1 class="mv-page__ja">料金</h1>
    </div>
</div>
<div class="aioseo-breadcrumbs">
    <span class="aioseo-breadcrumb"><a href="<?php echo get_site_url(); ?>/service" title="iMedX 生活習慣病DX">iMedX 生活習慣病DX</a></span>
    <span class="aioseo-breadcrumb-separator">›</span>
    <span class="aioseo-breadcrumb">料金</span>
</div>
<div class="l-section__page">
    <div class="l-wrap p-price">
        <div class="p-price-box">
            <span class="u-tag u-tag-red">期間限定</span>
            <div class="p-price-box__headline">
                <h2 class="price-ttl">初期導入費用無料！</h2>
                <p class="u-text__sentence">ご利用料金は診察時にかかります</p>
            </div>
            <p class="price-txt">料金について詳しくは、<br class="sp-only">こちらからお問合せください<br>当社スタッフが説明いたします</p>
            <a href="<?php echo get_site_url(); ?>/service/contact" class="c-btn-link c-btn-arrow">料金についてはこちら</a>
        </div>
        <div class="p-price-box">
            <span class="u-tag u-tag-blue">診療報酬</span>
            <div class="p-price-box__headline">
                <h2 class="price-ttl">生活習慣病管理料を活用</h2>
            </div>
            <p class="price-txt">収益シミュレーションはこちら<br>簡単3ステップ</p>
            <a href="<?php echo get_site_url(); ?>/service/simulation" class="c-btn-link c-btn-arrow">診療報酬簡易<br>シミュレーション</a>
        </div>
    </div>
</div>
<?php get_template_part('templates/service-footer'); ?>
</body>
</html>