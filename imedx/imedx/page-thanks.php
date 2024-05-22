<?
/**
 * Template Name: お問い合わせ完了
 */
?>
<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/header'); ?>
<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
<div class="l-wrap">
    <div class="p-mv-page">
        <p class="p-headline__en">Thanks</p>
        <h1 class="p-headline__ja">お問い合わせ完了</h1>
    </div>
</div>
<div class="l-section l-section-single">
    <div class="l-wrap">
        <div class="p-post__main u-mb2em">
            <h2 style="text-align: center;">お問い合わせ完了しました。</h2>
        </div>
        <a class="c-btn__link" href="<?php echo get_site_url(); ?>/service">サービスを覗く</a>
    </div>
</div>
<?php get_template_part('templates/footer'); ?>
</body>
</html>