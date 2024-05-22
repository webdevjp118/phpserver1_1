<?
/**
 * Template Name: サービス - 導入事例一覧
 */
?>
<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<div class="p-mv-page">
    <div class="l-wrap p-mv-page__inner">
        <p class="mv-page__en">CASE</p>
        <h1 class="mv-page__ja">導入事例一覧</h1>
    </div>
</div>
<div class="aioseo-breadcrumbs">
    <span class="aioseo-breadcrumb">
        <a href="<?php echo get_site_url(); ?>/service" title="iMedX 生活習慣病DX">iMedX 生活習慣病DX</a>
    </span>
    <span class="aioseo-breadcrumb-separator">›</span>
    <span class="aioseo-breadcrumb">導入事例一覧</span>
</div>
<div class="l-section__page">
    <div class="l-wrap p-clinic">
        <ul class="p-clinic__list">
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
            <li class="p-clinic__content">
                <a href="<?php the_permalink(); ?>">
                    <div class="c-clinic__img">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/service/assets/images/noimage.jpg" alt="NO IMAGE">
                        <?php endif; ?>
                    </div>
                    <div class="c-clinic__detail">
                        <p class="c-clinic__ttl"><?php the_title(); ?></p>
                        <p class="c-clinic__name"><?php echo get_post_meta($post->ID, 'clinic_name', true); ?></p>
                        <p class="c-clinic__sentence">院長　<?php echo get_post_meta($post->ID, 'clinic_docter', true); ?><br>専門：<?php echo get_post_meta($post->ID, 'clinic_expert', true); ?></p>
                        <span class="c-btn__case"></span>
                    </div>
                </a>
            </li>
            <?php
                endwhile;
                endif;
            ?>
        </ul>
        <?php wp_pagenavi(); ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<?php get_template_part('templates/service-cta'); ?>
<?php get_template_part('templates/service-footer'); ?>
</body>
</html>