<?php get_header(); ?>

<!-- CONTAIN_START -->
<section id="contain">
    <div class="main-banner-hp top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-banner-in-hp">
                    <div class="main-middle-hp">
                        <h4 data-aos="fade-up" data-aos-duration="2000">
                            資本主義への挑戦。<br>
                            コミュニティが主体となる<br>
                            未来を創る
                        </h4>
                        <h2 data-aos="fade-up" data-aos-duration="2000" data-aos-delay="200">CODE<span>GROUP</span></h2>
                        <div class="scroll-down-hp">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scroll_down_arrow.svg" alt="" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="company-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 company-block-in-hp">
                    <div class="company-middle-hp">
                        <div class="company-title-hp">
                            <div class="common-title-hp">
                                <h3>COMPANY</h3>
                                <p>企業情報</p>
                            </div>
                            <a class="common-btn-hp" href="<?php echo get_site_url(); ?>/company">VIEW MORE</a>
                        </div>
                        <a href="<?php echo get_site_url(); ?>/company/">
                            <div class="company-content-hp">
                                <p data-aos="fade-right" data-aos-duration="2000">
                                    グループビジョン<br><br>
                                    コーポレートメッセージ<br><br>
                                    多角的事業運営の理由<br><br>
                                    私たちの社会活動と地域創生<br><br>
                                    会社概要
                                </p>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/company_img1.png" alt="" data-aos="fade-left" data-aos-duration="2000" />
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="service-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 service-block-in-hp">
                    <div class="service-middle-hp">
                        <div class="service-title-hp">
                            <div class="common-title-hp">
                                <h3>SERVICE</h3>
                                <p>事業情報</p>
                            </div>
                            <a class="common-btn-hp" href="<?php echo get_site_url(); ?>/service">VIEW MORE</a>
                        </div>
                        <a href="<?php echo get_site_url(); ?>/service/">
                            <div class="service-content-hp">
                                <?php
                                        $args = array(
                                            'post_type' => 'service-item',
                                            'posts_per_page' => -1,
                                            'orderby' => 'publish_date',
                                            'order' => 'ASC',
                                        );
                                        $query = new WP_Query($args);
                                        $service_images = [];
                                        while($query->have_posts()) {
                                            $query->the_post();
                                            array_push($service_images, get_the_post_thumbnail_url());
                                        }
                                ?>
                                <div class="service-gallery-hp">
                                    <div class="service-gallery-column-hp">
                                        <?php
                                            foreach($service_images as $each_image) {
                                                echo '<img src="'. $each_image .'" alt="" />';
                                            }
                                        ?>
                                    </div>
                                    <div class="service-gallery-column-hp">
                                        <?php
                                            foreach($service_images as $each_image) {
                                                echo '<img src="'. $each_image .'" alt="" />';
                                            }
                                        ?>
                                    </div>
                                    <div class="service-gallery-column-hp">
                                        <?php
                                            foreach($service_images as $each_image) {
                                                echo '<img src="'. $each_image .'" alt="" />';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="news-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 news-block-in-hp">
                    <div class="news-middle-hp">
                        <div class="news_title_tp">
                            <div class="news-title-hp">
                                <div class="common-title-hp">
                                    <h3>NEWS</h3>
                                    <p>お知らせ</p>
                                </div>
                                <a class="common-btn-hp" href="<?php echo get_site_url(); ?>/news">VIEW MORE</a>
                            </div>
                        </div>
                        <div class="news_list">
                            <?php
                                $args = array(
                                    'post_type' => 'news-item',
                                    'posts_per_page' => 3,
                                    'orderby' => 'publish_date',
                                    'order' => 'DESC',
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
