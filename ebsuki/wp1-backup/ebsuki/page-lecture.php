<?php
get_header();
?>
<!-- CONTAIN_START -->
<div class="site_bg"></div>
<section id="contain">    	        
    <div class="pg_fv">
        <div class="pgfv_layer0">
            <div class="pgfv_title">
                <h1>Lecture</h1>
                <p>LINE無料レクチャー</p>
            </div>
        </div>
        <div class="pgfv_layer1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/net.svg">
        </div>
        <div class="pgfv_bg"></div>
        <div class="breadcrumb_block">
            <a href="<?php echo get_site_url(); ?>/">HOME</a>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bread_line.svg">
            <span>LINE無料カウンセリング</span>
        </div>
    </div>
    <div class="pglecture_block">
        <div class="hx3"></div>
        <div class="lecture_title"><h2>無料レクチャー簡単3STEP!</h2></div>
        <div class="hx3"></div>
        <div class="lecture_flow">
            <div class="lecture_item">
                <div class="lecture_no">01</div>
                <div class="lecture_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lecture01.jpg"></div>
                <div class="hx2"></div>
                <div class="lecture_text">ORコードもしくは、<br>下記のLINE追加ボタンを押して下さい。</div>
            </div>
            <div class="lecture_item">
                <div class="lecture_no">02</div>
                <div class="lecture_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lecture02.jpg"></div>
                <div class="hx2"></div>
                <div class="lecture_text">「追加」を押して、<br>公式LINEを追加してください。</div>
            </div>
            <div class="lecture_item">
                <div class="lecture_no">03</div>
                <div class="lecture_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lecture03.jpg"></div>
                <div class="hx2"></div>
                <div class="lecture_text">LINE追加後、簡単なアンケートに回答して無料レクチャーに申し込みください。</div>
            </div>
        </div>
        <div class="hx10"></div>
        <div class="lecture_btnwrap">
            <a class="lecture_btn">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/lecture_line.svg"><span>無料レクチャー</span>
            </a>
        </div>
        <div class="hx10"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
