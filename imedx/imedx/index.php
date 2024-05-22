<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/header'); ?>
<div class="p-mv-top">
    <div class="p-mv-top__img"></div>
    <div class="p-headline-top">
        <p class="p-headline-top__ja">長く健康的な<br class="sp-only">寿命の実現を</p>
        <p class="p-headline-top__en">To realize a long, healthy life for all</p>
        <p class="c-text-sentence">iMedXは、最新のITテクノロジーで生活習慣指導に革新をもたらし、<br class="pc-only">患者様の健康寿命の延伸と医療機関での働き方の改革を実現します。</p>
    </div>
</div>
<div class="l-section">
    <div class="l-wrap l-section-flex l-section-top__service">
        <div class="l-section__left">
            <div class="p-headline">
                <p class="p-headline__en">Service</p>
                <h2 class="p-headline__ja">サービス紹介</h2>
            </div>
            <img
                class="sp-only u-mb2em"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/img-top-service-sp.png"
                alt="iMedX生活習慣病DX">
            <p class="c-text-sentence u-mb2em">iMedX株式会社は、糖尿病、高血圧症、脂質異常症等、生活習慣病の食事や運動の指導を劇的に効率化する「生活習慣病DX」を開発中です。</p>
            <a href="<?php echo get_site_url(); ?>/service" class="c-btn__link">サービス詳細</a>
        </div>
        <div class="l-section__right">
            <img
                class="pc-only"
                src="<?php echo get_template_directory_uri(); ?>/assets/images/img-top-service-pc.png"
                alt="iMedX生活習慣病DX">
        </div>
    </div>
</div>
<div class="l-section">
    <div class="l-wrap l-section-flex l-section-top__news">
        <div class="l-section__left">
            <p class="p-headline__en">News</p>
            <h2 class="p-headline__ja">ニュース</h2>
        </div>
        <div class="l-section__right">
            <ul class="p-list p-list-news u-mb2em">
                <?php
                    // 取得したい内容を配列に記載します（不要箇所は省略可）
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'posts_per_page'   => 3,
                    );
                    $the_query = new WP_Query( $args );
                    // 取得した記事情報の表示
                    if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ):
                    $the_query->the_post();
                ?>
                    <li class="p-list-content">
                    <?php if(empty($post->post_content)) { ?>
                        <a class="p-list-inner">
                    <?php } else { ?>
                        <a href="<?php the_permalink(); ?>" class="p-list-inner c-btn__circle">
                    <?php } ?>
                            <p class="c-text-list__ttl"><?php echo get_the_date(); ?></p>
                            <p class="c-text-list__sentence"><?php the_title(); ?></p>
                        </a>
                    </li>
                <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                ?>
            </ul>
            <a href="<?php echo get_site_url(); ?>/news" class="c-btn__link">ニュース一覧</a>
        </div>
    </div>
</div>
<div class="l-section">
    <div class="l-wrap l-section-flex l-section-top__link">
        <a href="<?php echo get_site_url(); ?>/company" class="c-btn-block company">
            <div class="c-btn-block__inner">
                <h2>会社概要</h2>
                <p class="c-text-list__sentence">iMedX株式会社は、最新のAI技術やDXにより、<br>医療現場に革新を</p>
            </div>
        </a>
        <a href="<?php echo get_site_url(); ?>/policy" class="c-btn-block policy">
            <div class="c-btn-block__inner">
                <h2>企業ポリシー</h2>
                <p class="c-text-list__sentence">生活習慣改善率の大幅な向上を、<br class="sp-only">患者様・クリニック様<br class="pc-only">双方が<br class="sp-only">Win-Winで実現できるように</p>
            </div>
        </a>
    </div>
</div>
<?php get_template_part('templates/cta'); ?>
<?php get_template_part('templates/footer'); ?>
</body>
</html>