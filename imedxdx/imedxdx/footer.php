<!-- FOOTER_START -->
<footer id="footer">
    <div class="footer_block">
        <div class="footer_wrap">
            <div class="footer_row">
                <div class="footer_logo"> 
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.svg" alt=""/>
                    </a>
                </div>
                <div class="footer_menu">
                    <ul class="footmenu_ul">
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/">
                                    <div class="footmenu_cap">生活習慣病DXについて</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/functions/">
                                    <div class="footmenu_cap">生活習慣病DXの製品機能</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/faq/">
                                    <div class="footmenu_cap">よくあるご質問</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul class="footmenu_ul">
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/about/">
                                    <div class="footmenu_cap">会社概要</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/topics/">
                                    <div class="footmenu_cap">令和6年度改定における生活習慣病管理料</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/privacy/">
                                    <div class="footmenu_cap">サイトポリシー</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="<?php echo get_site_url(); ?>/policy/">
                                    <div class="footmenu_cap">利用規約</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright" style="display:none">
                <div>© iMedX All Right Reserved.</div>
                <div class="cgototop" id="gototop"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back_totop.svg"></div>
            </div>
        </div>        
    </div>
</footer>
<!-- FOOTER_END -->
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script defer src="<?php echo get_stylesheet_directory_uri(); ?>/js/mCustomScrollbar.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ScrollMagic.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
$( function() {
$( ".js_datepicker" ).datepicker( {
	dateFormat: 'yy年mm月dd日',
	monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
	minDate: new Date()
});
$( ".first_datepicker" ).datepicker( "setDate", new Date() );
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/additional-methods.min.js"></script>
<script>
$(document).ready(function () {
    $('#contact_form').validate({
        errorElement: "span",
        // debug: true,
        rules: {
            field1: { required: true },
            field2_1: { required: true },
            field2_2: { required: true },
            field3_1: { 
                pattern : "^[ぁ-んァ-ヶー]+$",
            },
            field3_2: { 
                pattern : "^[ぁ-んァ-ヶー]+$",
            },
            email: {
                required: true
            },
            field6: { required: true },
        },
        messages:{
            field1: {
                required: "この項目は必須です"
            },
            field2_1: {
                required: "この項目は必須です"
            },
            field2_2: {
                required: "この項目は必須です"
            },
            field3_1: {
                pattern: "「ひらがな」、「カタカナ」のみ記入してください"
            },
            field3_2: {
                pattern: "「ひらがな」、「カタカナ」のみ記入してください"
            },
            email: {
                required: "この項目は必須です",
                email: "メールアドレスが正しくありません"
            },
            field6: {
                required: "この項目は必須です"
            },
        },
    });
});
</script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<script>
    Fancybox.bind("[data-fancybox]", {
        // Your custom options
    });
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js?<?php echo get_update_no(); ?>"></script>
</body>
</html>
