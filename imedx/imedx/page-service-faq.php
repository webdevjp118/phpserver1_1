<?
/**
 * Template Name: サービス - よくある質問
 */
?>
<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<div class="p-mv-page">
    <div class="l-wrap p-mv-page__inner">
        <p class="mv-page__en">FAQ</p>
        <h1 class="mv-page__ja">よくある質問</h1>
    </div>
</div>
<div class="aioseo-breadcrumbs">
    <span class="aioseo-breadcrumb"><a href="<?php echo get_site_url(); ?>/service" title="iMedX 生活習慣病DX">iMedX 生活習慣病DX</a></span>
    <span class="aioseo-breadcrumb-separator">›</span>
    <span class="aioseo-breadcrumb">よくある質問</span>
</div>
<div class="l-section__page">
    <div class="l-wrap">
        <div class="l-section__faq">
            <h2 class="p-faq__headline">生活習慣病DXの<br class="pc-only">機能について</h2>
            <div class="p-faq__body">
                <div class="p-faq__content">
                    <div class="faq-txt faq-question">
                        <p>電子カルテとは連動するのですか？<span class="click-open"></span></p>
                    </div>
                    <div class="faq-txt faq-answer">
                        <p>一部の電子カルテとはデータ連携が可能ですが、現在主要な電子カルテメーカーとデータ連携について検討中です。</p>
                    </div>
                </div>
                <div class="p-faq__content">
                    <div class="faq-txt faq-question">
                        <p>効果は検証されていますか？<span class="click-open"></span></p>
                    </div>
                    <div class="faq-txt faq-answer">
                        <p>生活習慣病DXは各学会のガイドラインに基づいて設計しております。また、ガイドライン項目の効果はそれぞれ検証されています。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-section__faq">
            <h2 class="p-faq__headline">生活習慣病DXの<br class="pc-only">導入について</h2>
            <div class="p-faq__body">
                <div class="p-faq__content">
                    <div class="faq-txt faq-question">
                        <p>導入費用はいくらかかりますか？<span class="click-open"></span></p>
                    </div>
                    <div class="faq-txt faq-answer">
                        <p>現在期間限定で、導入費用は当社負担で提供しております。</p>
                    </div>
                </div>
                <div class="p-faq__content">
                    <div class="faq-txt faq-question">
                        <p>導入まではどのくらい時間がかかりますか？<span class="click-open"></span></p>
                    </div>
                    <div class="faq-txt faq-answer">
                        <p>契約を締結してから1～2週間程度で導入できます。</p>
                    </div>
                </div>
                <div class="p-faq__content">
                    <div class="faq-txt faq-question">
                        <p>使うために特別なシステムは必要ですか？<span class="click-open"></span></p>
                    </div>
                    <div class="faq-txt faq-answer">
                        <p>いいえ。クラウド型のソフトウェアですが、一般的なPC環境があれば利用が可能です。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-section__faq">
            <h2 class="p-faq__headline">保険適用について</h2>
            <div class="p-faq__body">
                <div class="p-faq__content">
                    <div class="faq-txt faq-question">
                        <p>生活習慣病DXは保険適用されていますか？<span class="click-open"></span></p>
                    </div>
                    <div class="faq-txt faq-answer">
                        <p>生活習慣病DXは保険適用されていませんが、DXを使うことによって生活習慣病管理料の算定が容易になります。</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_template_part('templates/service-cta'); ?>
<?php get_template_part('templates/service-footer'); ?>
<script>
    /* ----------------------------------------------------------
    faqのトグル
    ---------------------------------------------------------- */
    $(function() {
        $("div.faq-question").on("click", function() {
            $(this).next().slideToggle(200);
            $(this).next().toggleClass('is_active');
            $(this).toggleClass('is_active');
        });
    });
</script>
</body>
</html>