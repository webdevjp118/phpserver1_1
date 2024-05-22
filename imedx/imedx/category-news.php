<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/header'); ?>
<div class="aioseo-breadcrumbs">
    <span class="aioseo-breadcrumb">
        <a href="<?php echo get_site_url(); ?>/" title="iMedX TOP">iMedX TOP</a>
    </span>
    <span class="aioseo-breadcrumb-separator">›</span>
    <span class="aioseo-breadcrumb">お知らせ</span>
</div>
<div class="l-wrap">
    <div class="p-mv-page">
        <p class="p-headline__en">News</p>
        <h1 class="p-headline__ja">ニュース</h1>
    </div>
</div>
<div class="l-section l-section-news">
    <div class="l-wrap">
        <ul class="p-list p-list-news">
            <?php
                // 取得したい内容を配列に記載します（不要箇所は省略可）
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'paged'          => $paged,
                    'post_type'      => 'post',
                    'posts_per_page' => 10,
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
            ?>
        </ul>
    </div>
</div>
<div class="l-section">
    <div class="l-wrap">
        <?php wp_pagenavi(); ?>
        <?php wp_reset_postdata(); ?>
        <!-- <ul class="c-pagenation">
            <li>1</li>
            <li class="c-pagenation-btn"><a href="">2</a></li>
            <li class="c-pagenation-btn"><a href="">3</a></li>
            <li class="c-pagenation-btn"><a href="">4</a></li>
            <li class="c-pagenation-btn"><a href="">5</a></li>
            <li class="c-pagenation-btn"><a href="">6</a></li>
            <li class="c-pagenation-btn"><a href="">7</a></li>
            <li class="c-pagenation-btn"><a href="">8</a></li>
            <li class="c-pagenation-btn"><a href="">9</a></li>
            <li class="c-pagenation-btn"><a href="">10</a></li>
            <li class="c-pagenation-btn"><a href="">11</a></li>
            <li class="c-pagenation-btn"><a href="">12</a></li>
            <li class="c-pagenation-btn"><a href="">13</a></li>
        </ul> -->
    </div>
</div>
<?php get_template_part('templates/cta'); ?>
<?php get_template_part('templates/footer'); ?>
</body>
</html>