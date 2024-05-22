<?php get_header(); ?>

<?php
    $category_args = null;
    $category_param = '';

    if (isset($_GET['category'])) {
        $category_param = $_GET['category'];
        $category_args = array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => array($category_param)
        );
    }
?>

<!-- CONTAIN_START -->
<section id="contain">
    <div class="main-banner-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-banner-in-hp">
                    <div class="main-middle-hp">
                        <div class="common-title-hp" data-aos="fade-up" data-aos-duration="2000" data-aos-offset="20">
                            <h3>NEWS</h3>
                            <p>お知らせ</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="main-image-hp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_news.png" alt="" />
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="newslist-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newslist-block-in-hp">
                    <div class="newslist-middle-hp">
                        <div class="category-list-hp">
                            <a class="<?php echo $category_param === ''? 'active': ''; ?>" href="<?php echo home_url(); ?>/news">すべて</a>
                            <a class="<?php echo $category_param === 'news'? 'active': ''; ?>" href="<?php echo home_url(); ?>/news?category=news">お知らせ</a>
                            <a class="<?php echo $category_param === 'notification'? 'active': ''; ?>" href="<?php echo home_url(); ?>/news?category=notification">重要なお知らせ</a>
                            <a class="<?php echo $category_param === 'other'? 'active': ''; ?>" href="<?php echo home_url(); ?>/news?category=other">その他</a>
                        </div>
                        <div class="news_list">
                            <?php
                                $args = array(
                                    'post_type' => 'news-item',
                                    'posts_per_page' => -1,
                                    'orderby' => 'publish_date',
                                    'order' => 'DESC',
                                    'tax_query' => array($category_args),
                                );
                                $query = new WP_Query($args);

                                while($query->have_posts()) {
                                    $query->the_post();

                                    $categories = get_the_category();
                                    $category_slug = 'other';
                                    $category_name = 'その他';
                                    if (count($categories) > 0) {
                                        $category_slug = $categories[0]->slug;
                                        $category_name = $categories[0]->name;
                                    }

                                    echo '
                                    <div class="news_item">
                                        <a class="news-item-content-hp" href="'.get_permalink().'">
                                            <p class="date">'.get_the_date('Y.m.d').'</p>
                                            <p class="category">'.$category_name.'</p>
                                            <p class="title">'.get_the_title().'</p>
                                        </a>
                                    </div>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>                   
    <div class="clearfix"></div>
</section>
<!-- CONTAIN_END -->

<?php get_footer(); ?>
