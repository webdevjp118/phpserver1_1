<?php
get_header();
?>
<!-- CONTAIN_START -->
<div class="state_vals is_top"></div>
<?php 
$fv_image1 = get_field('image1', 'option'); 
$fv_image2 = get_field('image2', 'option'); 
$fv_image3 = get_field('image3', 'option'); 
?>
<section id="contain">
    <div class="top_fv fv_anipos">
        <div class="tpfv_slide owl-carousel owl-theme">
            <div class="item">
                <div class="tpfv_screen">
                    <img src="<?php echo $fv_image1?$fv_image1:get_stylesheet_directory_uri().'/images/top_fv1.jpg'; ?>">
                </div>
            </div>
            <div class="item">
                <div class="tpfv_screen">
                    <img src="<?php echo $fv_image2?$fv_image2:get_stylesheet_directory_uri().'/images/top_fv1.jpg'; ?>">
                </div>
            </div>
            <div class="item">
                <div class="tpfv_screen">
                    <img src="<?php echo $fv_image3?$fv_image3:get_stylesheet_directory_uri().'/images/top_fv1.jpg'; ?>">
                </div>
            </div>
        </div>
        <div class="tpfv_tdeco"></div>
        <div class="tpfv_mask"></div>
        <div class="tpfv_bdeco"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_bdeco.svg"></div>
        <div class="tpfv_conte">
            <div class="tpfv_title">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfv_conte.svg">
            </div>
        </div>
    </div>
    <div class="tpstart_sec">
        <div class="cwidth12">
            <div class="tpstart_row">
                <div class="tpstart_left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vision_logo.svg"></div>
                <div class="tpstart_right">
                    <div class="tpstart_title">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpstart_title.svg">
                    </div>
                    <div class="tpstart_text">
                        現在９つのカテゴリーを持つ地域でも最大級のサッカークラブFC西宮。各カテゴリーの在籍、移動は選手自身の意向により自由に選択ができます。<br>
                        様々なレベルやスキルに応じたチームがここにはあります。その場所には年齢も幅広く、いろいろな経験・職業を持つ仲間たちがいます。みなさんの生涯におけるスポーツ活動と仲間として合った場所にぜひ参加してください。<br>
                        また、私たちをサポートしていただけるスタッフも募集しています。誇れるサッカークラブ作りを一緒に行いましょう。<br>
                        ご希望のカテゴリにお気軽にエントリーしてください。
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="zig_deco X_flipX pinpos">
        <div class="zig_deco">
            <div class="zdeco_shape">
                <div class="zdeco8_origin">
                    <div class="zdeco8_lmask1">
                        <div class="zdeco8_limg1"></div>
                    </div>
                    <div class="zdeco8_rmask1">
                        <div class="zdeco8_rimg1"></div>
                    </div>
                    <div class="zdeco8_rmask2">
                        <div class="zdeco8_rimg2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
    <div class="tpall_sec">
        <div class="tpvision">
            <div class="tpvision_btn">
                <a class="tpall_btn" href="<?php echo get_site_url(); ?>/outline/#vision">
                    <div class="X_en">VISION</div>
                    <div class="X_jp"><span>チームビジョン</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpall_btn.svg"></div>
                </a>
            </div>
            <div class="tpvision_img">
                <div class="lecom_polyani pinpos">
                    <div class="lecom_bg">
                        <img class="lecom_bg2 X_3" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpvision2.svg">
                        <img class="lecom_bg1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpvision1.svg">
                    </div>
                    <div class="lecom_imgwrap">
                        <img class="lecom_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpvision.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="tpup_ball pinpos">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpupball.svg">
        </div>
        <div class="tptwo_btns">
            <div class="tprequire">
                <div class="tprequire_img">
                    <div class="lecom_polyani pinpos">
                        <div class="lecom_bg">
                            <img class="lecom_bg1 X_2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tprequire1.svg">
                            <img class="lecom_bg2 X_4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tprequire2.svg">
                        </div>
                        <div class="lecom_imgwrap">
                            <img class="lecom_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tprequire.png">
                        </div>
                    </div>
                </div>
                <div class="tprequire_btn">
                    <a class="tpall_btn" href="<?php echo get_site_url(); ?>/outline/#req">
                        <div class="X_en">Requirements</div>
                        <div class="X_jp"><span>募集要項</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpall_btn.svg"></div>
                    </a>
                </div>
            </div>
            <div class="tpfaq">
                <div class="tpfaq_img">
                    <div class="lecom_polyani pinpos">
                        <div class="lecom_bg">
                            <img class="lecom_bg2 X_5" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfaq2.svg">
                            <img class="lecom_bg1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfaq1.svg">
                        </div>
                        <div class="lecom_imgwrap">
                            <img class="lecom_img" src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpfaq.png">
                        </div>
                    </div>
                </div>
                <div class="tpfaq_btn">
                    <a class="tpall_btn" href="<?php echo get_site_url(); ?>/outline/#faq">
                        <div class="X_en">FAQ</div>
                        <div class="X_jp"><span>よくある質問</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tpall_btn.svg"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="tpentry_btn pioup">
            <a class="com_btn" href="#"><span>エントリー</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_inlink.svg"></a>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
