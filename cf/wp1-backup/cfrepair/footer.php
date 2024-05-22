<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cfrepair
 */

?>

<!-- FOOTER_START -->
<footer id="footer">
    <a href="<?php echo get_site_url(); ?>/contact/" class="footcontact_block">             
        <div class="footcontact_text">お問い合わせ</div>
        <div class="footcontact_title">
            <div class="footcontact_us">
                CONTACT US
            </div>
            <div class="footcontact_rightimg">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn_dot.svg">
            </div>
        </div>
    </a>
    <div class="footer_block">
        <div class="footer_wrap">
            <div class="footer_row">
                <div class="footer_logo"> 
                    <a href="<?php echo get_site_url(); ?>/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_black.svg" alt=""/>
                    </a>
                    <div class="footer_info">
                        <div class="footer_address">〒151-0071東京都渋谷区本町3-14-3　松尾ビル2階</div>
                        <a class="footer_tel" href="tel:03-5354-7633">TEL : 03-5354-7633</a>
                    </div>
                </div>
                <div class="footer_menu">
                    <ul class="footmenu_ul">
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/company/">
                                    <div class="footmenu_cap">会社概要</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/refrigeration/">
                                    <div class="footmenu_cap">冷凍・空調事業</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/fitness/">
                                    <div class="footmenu_cap">フィットネス事業</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/recruit/">
                                    <div class="footmenu_cap">採用情報</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright"><a href="<?php echo get_site_url(); ?>/privacypolicy/">Privacy policy</a><span>©Cfrepair</span></div>
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
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/theaterJS.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/swiper.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.matchHeight.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
