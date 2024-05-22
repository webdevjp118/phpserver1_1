<footer class="l-footer">
    <div class="l-footer__link">
        <div class="p-footer-img">
            <img
                src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_corporate.png"
                alt="iMedX"
            >
        </div>
        <ul class="p-footer-list">
            <li><a href="<?php echo get_site_url(); ?>/service">製品について</a></li>
            <li><a href="<?php echo get_site_url(); ?>/company">会社概要</a></li>
            <li><a href="<?php echo get_site_url(); ?>/policy/">企業ポリシー</a></li>
            <li><a href="<?php echo get_site_url(); ?>/news">ニュース</a></li>
            <li><a href="<?php echo get_site_url(); ?>/contact">お問い合わせ</a></li>
            <li><a href="<?php echo get_site_url(); ?>/privacy-policy">プライバシーポリシー</a></li>
        </ul>
    </div>
    <p class="l-footer__catchcopy">iMedX株式会社　All Right Reserved</p>
</footer>
<script
    type="text/javascript"
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
<?php wp_footer(); ?>