<?php
get_header();
?>
<!-- CONTAIN_START -->
<?php get_template_part('template-parts/first-visit'); ?>
<?php get_template_part('template-parts/dial-modal'); ?>
<input type="hidden" id="history_id" value="historyId_01">
<?php get_template_part('template-parts/fixed-cta'); ?>
<section id="contain">
    <div class="instad_head"></div>
    <div class="request_fv fvani_pos">
        <h1>WEB申し込み：プランの選択</h1>
    </div>
    <div class="cwidth12">
        <div class="hx8"></div>
        <div class="request_preview">
            <div class="reqpre_ttl"><span class="colordx">生活習慣病DX</span>スタンダードプラン</div>
            <div class="reqpre_sttl">無料トライアル1週間付き</div>
            <div class="reqpre_item">
                <div class="reqpre_cap">初期費用　99,000[税込]</div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tprice_arrow.svg">
                <div class="reqpre_val">無料キャンペーン実施中</div>
            </div>
            <div class="reqpre_item">
                <div class="reqpre_cap">月額費用　33,000[税込]</div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tprice_arrow.svg">
                <div class="reqpre_val">2ヵ月間無料キャンペーン実施中</div>
            </div>
            <div class="reqpre_note">※無料期間終了後の3ヵ月分の先払いが必要です</div>
            <div class="reqpre_btn">
                <a href="https://www.imedx-service.com/plans">申し込む</a>
            </div>
        </div>
    </div>
    <div class="hx12"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
