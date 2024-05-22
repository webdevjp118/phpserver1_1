<!-- FOOTER_START -->
<footer id="footer">
    <div class="footer_block">
        <a class="page_top" id="gototop" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/page_top.svg">
        </a>
        <div class="footer_wrap">
            <div class="footer_row">
                <div class="footer_logo"> 
                    <a href="<?php echo get_site_url(); ?>/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.svg" alt=""/>
                    </a>
                </div>
                <div class="footer_menu">
                    <ul class="footmenu_ul">
                        <li><div class="footmenu_shape"><a href="<?php echo get_site_url(); ?>/about/#about01"><div class="footmenu_cap">理念　強み</div><div class="footmenu_uline"></div></a></div></li>
                        <li><div class="footmenu_shape"><a href="<?php echo get_site_url(); ?>/plan/"><div class="footmenu_cap">学習カリキュラム</div><div class="footmenu_uline"></div></a></div></li>
                        <li><div class="footmenu_shape"><a href="<?php echo get_site_url(); ?>/review/"><div class="footmenu_cap">卒業生について</div><div class="footmenu_uline"></div></a></div></li>
                        <li><div class="footmenu_shape"><a href="<?php echo get_site_url(); ?>/video/"><div class="footmenu_cap">動画　メディア</div><div class="footmenu_uline"></div></a></div></li>
                    </ul>
                    <ul class="footmenu_ul">
                        <li><div class="footmenu_shape"><a href="<?php echo get_site_url(); ?>/news/"><div class="footmenu_cap">ニュース</div><div class="footmenu_uline"></div></a></div></li>
                        <li><div class="footmenu_shape"><a href="<?php echo get_site_url(); ?>/lecture/"><div class="footmenu_cap">無料カウンセリングについて</div><div class="footmenu_uline"></div></a></div></li>
                        <li><div class="footmenu_shape"><a href="<?php echo get_site_url(); ?>/faq/"><div class="footmenu_cap">よくある質問</div><div class="footmenu_uline"></div></a></div></li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright">©︎ 2022 株式会社ファーストビュー</div>
        </div>        
    </div>
</footer>
<!-- FOOTER_END -->
</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ScrollMagic.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
