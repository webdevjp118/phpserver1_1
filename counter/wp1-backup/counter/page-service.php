<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="pgtitle_block">
        <div class="container">
            <div class="pgtitle_aline">
                <div class="pgtitle initani initani_wbk">
                    <h1>Service</h1>
                    <p>事業内容</p>
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
    <div class="service_block">
        <div class="cwidth12">
            <div class="hx10"></div>
            <div class="service_row">
                <div class="service_left">01</div>
                <div class="service_right">
                    <div class="service_title">映像制作</div>
                    <div class="hx4"></div>
                    <div class="service_text">
                        映画の様なドラマ仕立てのブランデッドムービーや、<br>
                        多彩なイラストによるアニメーションまで。<br>
                        エッジの効いた広告映像〜高品質なコーポレートムービー等、<br>
                        注目を集める映像コンテンツを企画から制作致します。
                    </div>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="service_row">
                <div class="service_left">02</div>
                <div class="service_right">
                    <div class="service_title">動画広告・プロモーション</div>
                    <div class="hx4"></div>
                    <div class="service_text">
                        YoutubeをはじめとしたSNS広告から、サイネージ広告まで<br>
                        得たい結果から逆算したマーケティングで、<br>
                        企画から媒体の選定〜動画広告までを一貫してサポート致します。
                    </div>
                </div>
            </div>
            <div class="hx4"></div>
            <div class="service_row">
                <div class="service_left">03</div>
                <div class="service_right">
                    <div class="service_title">動画DX</div>
                    <div class="hx4"></div>
                    <div class="service_text">
                        採用、研修、マニュアル、取説、営業ツールとしての動画DXで、<br>
                        事業を推進、最適化する為の動画活用をご提供。<br>
                        貴社の動画事業部として「伝える」をアップデート致します。
                    </div>
                </div>
            </div>
            <div class="hx10"></div>
        </div>
    </div>
    <?php get_template_part('template-parts/com-contact'); ?>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
