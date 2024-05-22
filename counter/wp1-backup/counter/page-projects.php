<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="pgtitle_block">
        <div class="container">
            <div class="pgtitle_aline">
                <div class="pgtitle initani initani_wbk">
                    <h1>PROJECTS</h1>
                    <p>プロジェクト</p>
                </div>
            </div>
        </div>
    </div>
    <div class="cwidth12">
        <a class="fvrot_line" href="<?php echo get_site_url(); ?>/contact/">
            <div class="fvrot_shape">
                <img class="rot360" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fvrot01.svg">
                <div class="fvrot_center">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fvrot02.svg">
                </div>
                <div class="fvrot_center1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fvrot03.svg">
                </div>
            </div>
        </a>
    </div>
    <div class="projects_block">
        <div class="cwidth12">
            <div class="hx10"></div>
            <div class="tpproj_row">
                <div class="tpproj_left">
                    <div class="tpproj_num">01</div>
                    <div class="tpproj_content">
                        <div class="tpproj_layer0">
                            <div class="tpprojborder_text">ボーダーライン</div>
                            <div class="hx2"></div>
                            <div class="tpproj_titlep">
                                <span>「同調圧力」</span>にさよならを
                            </div>
                        </div>
                        <div class="tpproj_layer1">
                            マスメディアとのバランスを取り、多様性のある情報を小学生にも伝わる分かりやすいアニメーション表現にて発信。<br>
                            情報リテラシーの向上、情報の公平性を目指す「市民主導型の動画メディア」 です。
                            同調圧力が生む対立を無くし、閉塞感ある社会からの脱却を目的としています。
                        </div>
                    </div>
                </div>
                <div class="tpproj_right">
                    <div class="tpproj_btn">

                    </div>
                </div>
            </div>
            <!-- <div class="proj_row">
                <div class="proj_left">
                    <div class="proj_num">01</div>
                    <div class="proj_content">
                        <div class="proj_title">「同調圧力」にさよならを。</div>
                        <div class="hx2"></div>
                        <div class="proj_text">
                            マスメディアとのバランスを取り、多様性のある情報を小学生にも伝わる分かりやすいアニメーション表現にて発信。<br>
                            情報リテラシーの向上、情報の公平性を目指す「市民主導型の動画メディア」 です。<br>
                            同調圧力が生む対立を無くし、閉塞感ある社会からの脱却を目的としています。
                        </div>
                    </div>
                </div>
                <div class="proj_right">
                    <a class="com_btn2" href="#">
                        <span>View More</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.761" height="6.466" viewBox="0 0 8.761 6.466">
                            <path d="M-910.517-5248.84H-916v-1.853h5.484V-5253l3.278,3.232-3.278,3.234Z" transform="translate(916 5253)"/>
                        </svg>
                    </a>
                </div>
            </div> -->
            <div class="hx10"></div>
        </div>
    </div>
    <?php get_template_part('template-parts/com-contact'); ?>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
