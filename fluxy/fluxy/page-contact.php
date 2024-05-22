<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="pg_fv X_contact" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_contact.jpg);">
        <div class="pgfv_deco"></div>
        <div class="pgfv_title">
            <h1 class="pani4 js-split">CONTACT</h1>
            <p>お問い合わせ</p>
        </div>
    </div> 
    <div class="run_ani">
        <div class="zig_deco X_cf">
            <div class="zdeco_shape">
                <div class="zdeco_origin X_3">
                    <div class="zdeco_rect X_lmask X_3_1">
                        <div class="zdeco_color X_3_1"></div>
                    </div>
                    <div class="zdeco_rect X_lmask X_3_2">
                        <div class="zdeco_color X_3_2"></div>
                    </div>
                    <div class="zdeco_rect X_rmask X_3_3">
                        <div class="zdeco_color X_3_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white_bg contactform_pad">
        <div class="contactform_block">
            <div class="contactform_width">
                <div class="form_pos">
                    <?php echo do_shortcode('[contact-form-7 id="87d8945" title="コンタクトフォーム 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="run_ani">
        <div class="zig_deco">
            <div class="zdeco_shape X_f">
                <div class="zdeco_origin X_f">
                    <div class="zdeco_rect X_lmask X_f_1">
                        <div class="zdeco_color X_f_1"></div>
                    </div>
                    <div class="zdeco_rect X_lmask X_f_2">
                        <div class="zdeco_color X_f_2"></div>
                    </div>
                    <div class="zdeco_rect X_rmask X_f_3">
                        <div class="zdeco_color X_f_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_expand"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
