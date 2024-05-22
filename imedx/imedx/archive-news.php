<?
    /**
     * Template Name: サービス - お知らせ
     */
?>
<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<div class="p-mv-page">
    <div class="l-wrap p-mv-page__inner">
        <p class="mv-page__en">NEWS</p>
        <h1 class="mv-page__ja">お知らせ</h1>
    </div>
</div>
<div class="l-section__page">
    <div class="l-wrap">
        <?php
            // 取得したい内容を配列に記載します（不要箇所は省略可）
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'paged'          => $paged,
                'post_type'      => 'news',
                'posts_per_page' => 10,
            );
            $the_query = new WP_Query( $args );
            // 取得した記事情報の表示
            if ( $the_query->have_posts() ):
        ?>
        <ul class="p-list__news">
            <?php
                while ( $the_query->have_posts() ):
                $the_query->the_post();
            ?>
            <li class="p-list__news--item">
                <?php if(empty($post->post_content)) { ?>
                <a class="c-news">
                <?php } else { ?>
                <a href="<?php the_permalink(); ?>" class="c-news p-list__news--link">
                <?php } ?>
                    <p class="c-news__date"><?php echo get_the_date(); ?></p>
                    <p class="c-news__body"><?php the_title(); ?></p>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php else: ?>
        <p style="text-align: center;">まだお知らせがありません。</p>
        <?php endif; ?>
        <?php wp_pagenavi(); ?>
        <?php wp_reset_postdata(); ?>
        <!-- <div class="wp-pagenavi" role="navigation">
            <span aria-current="page" class="current">1</span>
            <a class="page larger" title="ページ 2" href="https://more-be.com/category/entry/page/2/">2</a>
            <a class="page larger" title="ページ 3" href="https://more-be.com/category/entry/page/3/">3</a>
            <a class="page larger" title="ページ 4" href="https://more-be.com/category/entry/page/4/">4</a>
            <a class="page larger" title="ページ 5" href="https://more-be.com/category/entry/page/5/">5</a>
            <span class="extend">...</span>
            <a class="nextpostslink" rel="next" aria-label="次のページ" href="https://more-be.com/category/entry/page/2/">次へ</a>
            <a class="last" aria-label="Last Page" href="https://more-be.com/category/entry/page/8/">8</a>
        </div> -->
    </div>
</div>
<?php get_template_part('templates/service-cta'); ?>
<?php get_template_part('templates/service-footer'); ?>
</body>
</html>