<?php get_header(); ?>

<?php
    $categories = get_the_category();
    $category_slug = 'other';
    $category_name = 'その他';
    if (count($categories) > 0) {
        $category_slug = $categories[0]->slug;
        $category_name = $categories[0]->name;
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
                            <h3>SERVICE</h3>
                            <p>事業紹介</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="main-image-hp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_service.png" alt="" />
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="newsdetail-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newsdetail-block-in-hp">
                    <div class="newsdetail-middle-hp">
                        <div class="newsdetail-date-hp"></div>
                        <h5 class="newsdetail-title-hp"><?php echo get_the_title(); ?></h5>
                        <div class="newsdetail-image-hp">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                        </div>
                        <div class="newsdetail-content-hp">
                            <?php echo get_field('overview'); ?>
                        </div>
                        <div class="sitem_hx1"></div>
                        <div class="newsdetail-content-hp">
                            <?php echo get_the_content(); ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="service_link"><a target="_blank" href="<?php echo get_field('url'); ?>"><span>公式サイト</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-window.svg"></a></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</section>
<!-- CONTAIN_END -->

<?php get_footer(); ?>
