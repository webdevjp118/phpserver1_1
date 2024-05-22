<?php get_header(); ?>

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
    <div class="servicedetail-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 servicedetail-block-in-hp">
                    <div class="servicedetail-middle-hp">
                        <div class="servicedetail-link-list-hp">
                            <div class="row margin">
                                <?php
                                    $args = array(
                                        'post_type' => 'service-item',
                                        'posts_per_page' => -1,
                                        'orderby' => 'publish_date',
                                        'order' => 'DESC',
                                    );
                                    $query = new WP_Query($args);
                                    $index = 0;

                                    while($query->have_posts()) {
                                        $query->the_post();
                                        $index ++;

                                        echo '
                                        <div class="col-md-6 col-lg-4">
                                            <a href="#service-item'.$index.'">'.get_the_title().'</a>
                                        </div>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="service-list-hp">
                            <div class="row margin">
                                <?php
                                    $args1 = array(
                                        'post_type' => 'service-item',
                                        'posts_per_page' => -1,
                                        'orderby' => 'publish_date',
                                        'order' => 'ASC',
                                    );
                                    $query1 = new WP_Query($args1);
                                    $index = 0;

                                    while($query1->have_posts()) {
                                        $query1->the_post();
                                        $index ++;
                                        $index_padded = sprintf("%02d", $index);

                                        echo '
                                        <div class="col-lg-6">
                                            <div class="service-item-hp">
                                                <div class="bookmark" id="service-item'.$index.'"></div>
                                                <h6><span>'.$index_padded.'&nbsp;</span>'.get_the_title().'</h6>
                                                <img src="'.get_the_post_thumbnail_url().'" alt="" />
                                                '.get_field('overview').'
                                                <a class="common-btn-hp common-grey-btn-hp" target="_blank" href="'.get_field('url').'"></a>
                                            </div>
                                        </div>';
                                    }
                                ?>
                            </div>
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
