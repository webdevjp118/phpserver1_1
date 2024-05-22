<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_bg" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_recruit.jpg);"></div>
        <div class="pgfv_front">
            <div class="pgfv_title">
                <h1 class="X_jp">選手募集／お問い合わせ</h1>
            </div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="cwidth12">
        <div class="recruit_desc">
            FC西宮は地域でも最大級の社会人サッカークラブチームです。<br>
            多くの選手やスタッフに愛され、そして地域にも愛され、クラブに関わるみなさまに30年を超えて必要とされています。<br>
            この先もずっとそんなクラブであり続けるために、日々前進しています。
        </div>
    </div>
    <div class="hx6"></div>
    <div class="news_width">
        <div class="recruit_list">
            <a class="recruit_item pioup" target="_blank" href="#">
                <div class="recruit_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_item1.jpg">
                </div>
                <div class="recruit_bottom">
                    <div class="recruitem_ttl">選手/スタッフとして入団希望の方</div>
                    <div class="recruitem_text">&nbsp;</div>
                    <div class="recruitem_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_outlink.svg"></div>
                </div>
            </a>
            <a class="recruit_item pioup" target="_blank" href="#">
                <div class="recruit_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_item2.jpg">
                </div>
                <div class="recruit_bottom">
                    <div class="recruitem_ttl">チームへのお問い合わせ</div>
                    <div class="recruitem_text">対戦ご希望/各種案内等</div>
                    <div class="recruitem_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_inlink.svg"></div>
                </div>
            </a>
            <a class="recruit_item pioup" target="_blank" href="#">
                <div class="recruit_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recruit_item3.jpg">
                </div>
                <div class="recruit_bottom">
                    <div class="recruitem_ttl">チームサポートをお考えいただいている方</div>
                    <div class="recruitem_text">企業様・店舗様・個人様</div>
                    <div class="recruitem_arrow"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_inlink.svg"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="hx8"></div>
    <?php get_template_part('template-parts/compartner'); ?>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
