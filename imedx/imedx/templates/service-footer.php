<footer class="l-footer">
    <div class="l-wrap">
        <div class="l-footer__link">
            <div class="footer-img">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/service/assets/images/logo_service.png"
                    alt="iMedX"
                >
            </div>
            <ul class="footer-list">
                <li><a href="<?php echo get_site_url(); ?>/">iMedX 公式トップ</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service">iMedX 商品トップページ</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service/detail">機能</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service/faq">よくある質問</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service/case">導入事例</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service/detail#environment">対応機器・動作環境</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service/price">料金</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service/simulation">シミュレーション</a></li>
                <li><a href="<?php echo get_site_url(); ?>/service/contact">医療機関用問合せ</a></li>
            </ul>
        </div>
    </div>
    <p class="l-footer__catchcopy">iMedX 生活習慣病DX　All Right Reserved</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<?php if(is_page( '13' )): ?>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/service/assets/js/index.js"></script>
<?php wp_footer(); ?>