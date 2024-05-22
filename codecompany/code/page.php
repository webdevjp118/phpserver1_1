<?php get_header(); ?>

<!-- CONTAIN_START -->
<section id="contain">
    <div class="newsdetail-block-hp">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 newsdetail-block-in-hp">
                    <div class="newsdetail-middle-hp">
                        <h5 class="newsdetail-title-hp"><?php echo get_the_title(); ?></h5>
                        <div class="newsdetail-content-hp">
                            <div class="pmhwp">
                                <?php echo get_the_content(); ?>
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
