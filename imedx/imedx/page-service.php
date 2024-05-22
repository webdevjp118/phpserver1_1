<?
/**
 * Template Name: サービス
 */
?>
<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<!-- メインビジュアル -->
<div class="p-mv-top">
    <div class="l-wrap">
        <div class="p-mv-top__txt">
            <ul class="mv-tag">
                <li>糖尿病</li>
                <li>高血圧症</li>
                <li>脂質異常症</li>
            </ul>
            <h1 class="mv-ttl">iMedX 生活習慣病DX</h1>
            <p class="mv-sentence">患者様・クリニック様にWin-Winの<br>生活習慣指導を最新のDXの力で</p>
            <ul class="mv-benefit">
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/icon_mv_strength1.png" alt="">
                    <span class="u-border-blue"><span class="u-weight__big u-color-blue">僅かな</span>医師の<span class="u-weight__big u-color-blue">時間</span>で<span class="u-weight__big u-color-blue">質の高い</span>生活習慣指導</span>
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/icon_mv_strength2.png" alt="">
                    <span class="u-border-blue">指導項目を<span class="u-weight__big u-color-blue">個別化</span>し、患者様が格段に<span class="u-weight__big u-color-blue">実行し易い</span></span>
                </li>
                <li>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/icon_mv_strength3.png" alt="">
                    <span class="u-border-blue"><span class="u-weight__big u-color-blue">診療報酬</span>を活用しクリニック<span class="u-weight__big u-color-blue">経営に貢献</span></span>
                </li>
            </ul>
            <a href="<?php echo get_site_url(); ?>/service/contact" class="pc-only c-btn-arrow c-btn-link">問合せ/無料デモ予約</a>
        </div>
    </div>
</div>
<!-- iMedX 生活習慣病DXとは -->
<a href="<?php echo get_site_url(); ?>/service/contact" class="c-btn-arrow c-btn-link sp-only" style="margin: 24px auto;"> 問合せ/無料デモ予約</a>
<div class="l-section__about bg-blue">
    <div class="l-wrap l-flex p-about">
        <div class="p-about__video">
            <iframe
                src="https://www.youtube.com/embed/ZIEpui_xvuo"
                title="YouTube video player"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
        <div class="p-about__txt">
            <div class="p-about__inner">
                <h2>iMedX 生活習慣病DXとは</h2>
                <p class="u-text__sentence">医師の生活習慣病患者様に対しての食事や運動指導を劇的に効率化し、<br>患者様の実行率を高めるデジタルトランスフォーメーション技術です。</p>
                <a href="<?php echo get_site_url(); ?>/service/detail" class="c-btn-arrow c-btn-link">詳しい機能はこちら</a>
            </div>
        </div>
    </div>
</div>
<!-- お知らせ -->
<?php
    // 取得したい内容を配列に記載します（不要箇所は省略可）
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
    $args = array(
        'paged'          => $paged,
        'post_type'      => 'news',
        'posts_per_page' => 3,
    );
    $the_query = new WP_Query( $args );
    // 取得した記事情報の表示
    if ( $the_query->have_posts() ):
?>
<div class="l-section__page">
    <div class="l-wrap l-flex">
        <h2 class="p-headline__left">NEWS</h2>
        <ul class="p-list__news">
            <?php
                while ( $the_query->have_posts() ):
                $the_query->the_post();
            ?>
            <li class="p-list__news--item">
                <?php if(empty($post->post_content)) { ?>
                <a class="c-news">
                <?php } else { ?>
                <a href="<?php the_permalink(); ?>" class="p-list__news--link c-news">
                <?php } ?>
                    <p class="c-news__date"><?php echo get_the_date(); ?></p>
                    <p class="c-news__body"><?php the_title(); ?></p>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<!-- 導入のベネフィット-->
<div class="l-section__page">
    <div class="l-wrap">
        <h2 class="p-headline__top">導入のベネフィット</h2>
        <ul class="p-benefit">
            <li>
                <div class="p-benefit-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/img_top_benefit1.jpg" alt="僅かな医師の時間で質の高い生活習慣指導が可能に">
                </div>
                <div class="p-benefit-txt">
                    <h3><span class="u-color-blue">僅かな</span>医師の<span class="u-color-blue">時間で</span><br><span class="u-color-blue">質の高い</span>生活習慣指導が可能に</h3>
                    <p class="u-text__sentence">従来は、医師等による生活習慣指導は、長い時間と大きな手間を要していました。これに対して、iMedX 生活習慣病DXでは、ソフトウェアによる各種自動化や患者アプリによる詳細の解説を組合せることで、医師にとって短時間で、質の高い生活習慣指導を行うことが可能になります。<br>また、オンライン栄養食事指導をiMedXが用意することで、クリニックの負担なく、さらに手厚い指導も可能にしています。</p>
                </div>
            </li>
            <li>
                <div class="p-benefit-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/img_top_benefit2.jpg" alt="重症化予防項目を患者個別化し格段に実行し易く">
                </div>
                <div class="p-benefit-txt">
                    <h3>重症化予防項目を<span class="u-color-blue">患者個別化</span>し<br>格段に<span class="u-color-blue">実行し易く</span></h3>
                    <p class="u-text__sentence">従来は、患者様の実行負担が大きく継続的な実施が難しいことが、生活習慣改善が行われない大きな要因でした。<br>iMedX 生活習慣病DXでは、各学会の治療ガイドライン等計12?冊を統合処理。これらに示されている生活習慣指導項目を各患者様に対して”個別化”し、優先順位付けをすることで、患者様にとって負担の低く、実行し易い生活習慣改善メニューを作ることができます。</p>
                </div>
            </li>
            <li>
                <div class="p-benefit-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/img_top_benefit3.jpg" alt="診療報酬を活用しクリニック経営に貢献">
                </div>
                <div class="p-benefit-txt">
                    <h3><span class="u-color-blue">診療報酬</span>を活用し<span class="u-color-blue">時間で</span><br>クリニック経営に貢献</h3>
                    <p class="u-text__sentence">生活習慣改善を広く継続させるには、クリニック自身も健全な収益を得られなければなりません。<br>従来は活用の難しかった生活習慣病管理料を、iMedX 生活習慣病DXでは実行計画書類を自動設計すること等により、効率的に使用することができるようになります。</p>
                    <div class="p-benefit-point">
                        <div class="p-benefit-point__txt">
                            <p class="u-weight__bold">活用する診療報酬点数</p>
                            <p class="u-text__sentence">（特定疾患療養管理料との差）</p>
                        </div>
                        <table class="p-benefit-point__table">
                            <tr>
                                <th>糖尿病</th>
                                <td><span class="u-color-light-blue u-weight__bold">720点</span><span class="u-small">（＋495点）</span></td>
                            </tr>
                            <tr>
                                <th>高血圧症</th>
                                <td><span class="u-color-light-blue u-weight__bold">620点</span><span class="u-small">（＋395点）</span></td>
                            </tr>
                            <tr>
                                <th>脂質異常症</th>
                                <td><span class="u-color-light-blue u-weight__bold">570点</span><span class="u-small">（＋345点）</span></td>
                            </tr>
                        </table>
                    </div>
                    <a class="c-btn__white" href="<?php echo get_site_url(); ?>/service/simulation">収益シミュレーションはこちら
                        <svg xmlns="http://www.w3.org/2000/svg" width="20.243" height="13.501" viewBox="0 0 20.243 13.501">
                            <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.784,11.51a.919.919,0,0,0-.007,1.294l4.275,4.282H8.782a.914.914,0,0,0,0,1.828H25.045L20.77,23.2a.925.925,0,0,0,.007,1.294.91.91,0,0,0,1.287-.007l5.794-5.836h0a1.026,1.026,0,0,0,.19-.288.872.872,0,0,0,.07-.352.916.916,0,0,0-.26-.64l-5.794-5.836A.9.9,0,0,0,20.784,11.51Z" transform="translate(-7.875 -11.252)" fill="#74bcd4"/>
                        </svg>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- オファー -->
<div class="l-section__offer">
    <div class="l-wrap l-flex p-offer">
        <div class="p-offer__txt">
            <div class="p-offer__inner">
                <span class="u-tag u-tag-red">期間限定</span>
                <h2 class="offer-headline">初期費用無料！<br>診察毎の使用料のみで使用可</h2>
                <p class="u-text__sentence u-mt2em u-mb3em">期間限定で初期導入費用無料。<br>iMedX 生活習慣病DXの導入にあたって、クリニックの経営リスクをゼロの近づけるための料金体系にしています。</p>
                <a class="c-btn-link c-btn-arrow pc-only" href="<?php echo get_site_url(); ?>/service/price">料金についてはこちら</a>
            </div>
        </div>
        <div class="p-offer__img">
            <picture>
                <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/img_top_free_pc.png" media="(min-width: 600px)" type="image/jpg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/service/assets/images/img_top_free_sp.png" alt="男女の医者が2名">
            </picture>
        </div>
        <a class="c-btn-link c-btn-arrow sp-only" href="">料金についてはこちら</a>
    </div>
</div>
<?php get_template_part('templates/service-cta'); ?>
<!-- クリニック導入事例 -->
<div class="l-section">
    <h2 class="p-headline__top">クリニック導入事例</h2>
    <div class="p-clinic">
        <div class="swiper">
            <button class="swiper-button-prev"></button>
            <ul class="p-clinic__list swiper-wrapper swiper-wrap">
                <?php
                    // 取得したい内容を配列に記載します（不要箇所は省略可）
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'paged'          => $paged,
                        'post_type'      => 'case',
                        'posts_per_page' => 10,
                    );
                    $the_query = new WP_Query( $args );
                    // 取得した記事情報の表示
                    if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ):
                    $the_query->the_post();
                ?>
                <li class="p-clinic__content swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <div class="c-clinic__img">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/service/assets/images/noimage.jpg" alt="NO IMAGE">
                            <?php endif; ?>
                        </div>
                        <div class="c-clinic__detail">
                            <p class="c-clinic__name"><?php echo get_post_meta($post->ID, 'clinic_name', true); ?></p>
                            <p class="c-clinic__sentence">院長　<?php echo get_post_meta($post->ID, 'clinic_docter', true); ?><br>専門：<?php echo get_post_meta($post->ID, 'clinic_expert', true); ?></p>
                            <span class="c-btn__case"></span>
                        </div>
                    </a>
                </li>
                <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </ul>
            <button class="swiper-button-next"></button>
        </div>
    </div>
</div>
<!-- 導入の流れ-->
<div class="l-section bg-blue">
    <div class="l-wrap p-flow">
        <h2 class="p-headline__top">導入の流れ</h2>
        <ul class="p-flow-list">
            <li>
                <span class="flow-tag">STEP 1</span>
                <p class="flow-ttl">「お問合せ」フォームよりご連絡</p>
            </li>
            <li>
                <span class="flow-tag">STEP 2</span>
                <p class="flow-ttl">製品のデモ</p>
                <p class="font-txt">・製品機能や導入事例等のご説明<br>・費用や詳細の収益のシミュレーション</p>
            </li>
            <li>
                <span class="flow-tag">STEP 3</span>
                <p class="flow-ttl">システムの導入</p>
                <p class="font-txt">【期間限定】導入費用無料</p>
            </li>
            <li>
                <span class="flow-tag">STEP 4</span>
                <p class="flow-ttl">充実したアフターサービス</p>
                <p class="font-txt">・導入後のサポートに重点を置いた体制<br>・システムの使い方等テクニカルサポート<br>・効果的な活用方法のコンサルテーション<br>・その他継続的に有益な情報をご提供</p>
            </li>
        </ul>
        <a href="<?php echo get_site_url(); ?>/service/contact" class="c-btn-link c-btn-arrow">問合せ/無料デモ予約</a>
        <p class="u-text__sentence">製品デモ、お見積り及び収益シミュレーション等に関しては、こちらからお問合せください</p>
    </div>
</div>
<!-- 企業ポリシー -->
<div class="l-section">
    <div class="l-wrap p-policy">
        <h2 class="p-headline__top">企業ポリシー</h2>
        <p class="u-text__sentence u-text__center">生活習慣改善率の大幅な向上を、患者様・クリニック様双方がWin-Winで実現できるように</p>
        <div class="policy-detail">
            <p class="u-text__sentence">国民の健康寿命の延伸に関しては、患者様のQOL向上、国民皆保険制度の維持といった様々な観点から、政府や厚生労働省をはじめとして各省庁や団体が推進を図っています。<br>
            そしてそのための重要な施策として、生活習慣病の重症化予防、すなわち患者様の生活習慣改善率の大幅な向上が必要なことは周知のことと思います。 がんを含めた三大生活習慣病による死亡者数は、死亡者全体の半数以上を占めているという事実のみならず、実際に生活習慣病の悪化による合併症を患った患者様の辛い状態に接するにつけ、このようになる前に対処できなかったと自責をされる先生の話もよく伺います。<br>
            しかし、これまでは、クリニック様での生活習慣指導を多くの患者様に実施していくことは、医師にとっての大きな時間負担や管理栄養士の雇用の問題などから、極めて実現の難しいものでした。<br>
            またもちろん、クリニック様にとってもこの努力に見合う正当な収益も得られないと、現実的に継続可能な施策にはなりえません。<br>
            iMedX株式会社は、AI等最新のテクノロジーを通じて生活習慣改善率の大幅な向上という重大な社会問題の解決を、患者様・クリニック様双方が「現実的に」Win-Winで継続して実現できるように、革新的な製品とサービスでご支援していきます。</p>
        </div>
    </div>
</div>
<?php get_template_part('templates/service-cta'); ?>
<?php get_template_part('templates/service-footer'); ?>
<script>
    /* ----------------------------------------------------------
        スライダー
    ---------------------------------------------------------- */
    $(function() {
        if ($(window).width() > 600) {
            const swiper = new Swiper(".swiper", {
                // ページネーションが必要なら追加
                pagination: {
                    el: ".swiper-pagination"
                },
                spaceBetween: 20, // スペース
                slidesPerView: 3,
                allowTouchMove: false,
                // ナビボタンが必要なら追加
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                }
            });
        }
    });
</script>
</body>
</html>