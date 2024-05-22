<?
/**
 * Template Name: サービス - 医療機関向けお問合せ
 */
?>
<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<div class="p-mv-page">
    <div class="l-wrap p-mv-page__inner">
        <p class="mv-page__en">CONTACT</p>
        <h1 class="mv-page__ja">医療機関向けお問合せ</h1>
    </div>
</div>
<div class="aioseo-breadcrumbs">
    <span class="aioseo-breadcrumb"><a href="<?php echo get_site_url(); ?>/service" title="iMedX 生活習慣病DX">iMedX 生活習慣病DX</a></span>
    <span class="aioseo-breadcrumb-separator">›</span>
    <span class="aioseo-breadcrumb">無料体験デモ申込</span>
</div>
<div class="l-section__page">
    <div class="l-wrap p-simulation">
        <p class="u-text__sentence">以下のフォームより、必要事項の記入をお願いします。<br class="pc-only">弊社担当者からご連絡させていただきます。</p>
        <p class="u-text__sentence u-mt1em">医療機関専用お問合せ番号からも連絡いただけます。</p>
        <a class="c-btn__tel" href="tel:0300000000">
            <span class="tel-number">03-XXXX-YYYY</span>
            <span class="tel-txt">（平日7:00～21:00）</span>
        </a>
        <a class="c-btn__other" href="<?php echo get_site_url(); ?>/contact">企業へのお問合せはこちら</a>
        <?php echo do_shortcode('[contact-form-7 id="119" title="製品サイトお問い合わせ"]'); ?>
    </div>
</div>
<p class="l-footer__catchcopy">iMedX 生活習慣病DX　All Right Reserved</p>
<script
    type="text/javascript"
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
    /* ----------------------------------------------------------
        ハンバーガーメニュー
    ---------------------------------------------------------- */
    /* オープン */
    $('.l-menu__open').on('click', function() {
        $('.l-overlay').toggleClass('is_open');
        $('.l-menu').toggleClass('is_open');
    });
    /* クローズ */
    $('.l-menu__close').on('click', function() {
        $('.l-overlay').removeClass('is_open');
        $('.l-menu').removeClass('is_open');
    });

    /* ----------------------------------------------------------
        注意モーダル
    ---------------------------------------------------------- */
    /* 注意モーダル - 日本語ページ - はい */
    function setCookiePage() {
        document.cookie = 'health-care-worker=true';
        document.location.reload();
    };

    // /* 注意モーダル - 日本語ページ - いいえ */
    function noHealthCareWorker() {
        document.cookie = 'health-care-worker=false';
        document.location.href = history. back();
    };
    // チェックが入ったら送信可能にする
    $(function(){
        $('input[name=checkagree]').on('change',function() {
            $('input.c-btn__send').toggleClass('is_send');
        });
    });

    // お問い合わせ送信について
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = '/service/contact/thanks';
    }, false );
</script>
<?php wp_footer(); ?>
</body>
</html>