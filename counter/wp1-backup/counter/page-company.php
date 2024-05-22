<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="pgtitle_block">
        <div class="container">
            <div class="pgtitle_aline">
                <div class="pgtitle initani initani_wbk">
                    <h1>COMPANY</h1>
                    <p>会社情報</p>
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
    <div class="just_image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/company01.jpg">
    </div>
    <div class="profile_block">
        <div class="hx10"></div>
        <div class="cwidth12">
            <div class="profile_row">
                <div class="profile_left">
                    <div class="profile_title">
                        <h2>PROFILE</h2>
                        <p>会社概要</p>
                    </div>
                    <div class="hx4"></div>
                </div>
                <div class="profile_right">
                    <div class="profile_dlt">
                        <dl>
                            <dt>社名</dt>
                            <dd>カウンター株式会社</dd>
                        </dl>
                        <dl>
                            <dt>社名（英文）</dt>
                            <dd>COUNTER Inc.</dd>
                        </dl>
                        <dl>
                            <dt>​設立</dt>
                            <dd>2020年</dd>
                        </dl>
                        <dl>
                            <dt>所在地</dt>
                            <dd>東京都中央区銀座1-22-11-2F</dd>
                        </dl>
                        <dl>
                            <dt>代表者</dt>
                            <dd>代表取締役 加島優一</dd>
                        </dl>
                        <dl>
                            <dt>社員数</dt>
                            <dd>16名（業務委託含む）</dd>
                        </dl>
                        <dl>
                            <dt>事業内容</dt>
                            <dd>
                                ブランディング・PR映像の企画制作<br>
                                TV・Web広告/YouTubeチャンネルの企画制作・運用<br>
                                クリエーターのマネージメント業務<br>
                                エンターテイメントコンテンツの企画制作
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="hx10"></div>
    </div>
    <?php get_template_part('template-parts/com-contact'); ?>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
