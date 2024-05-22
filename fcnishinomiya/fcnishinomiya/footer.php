<!-- FOOTER_START -->
<div class="footer_socials">
    <div class="footsocial_right">
        <div class="footsocial_awrap"><a class="footsocial_a" target="_blank" href="<?php echo get_field('social_twitter', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foot_twitter.svg"><span class="X_span">X (旧Twitter)</span></a></div>
        <div class="footsocial_awrap"><a class="footsocial_a" target="_blank" href="<?php echo get_field('social_fb', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foot_fb.svg"><span class="X_span">Facebook</span></a></div>
        <div class="footsocial_awrap"><a class="footsocial_a" target="_blank" href="<?php echo get_field('social_line', 'option'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foot_line.svg"><span class="X_span">LINE</span></a></div>
        <div class="footsocial_awrap pdropdown">
            <div class="footsocial_a pdropdown_btn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/foot_insta.svg"><span class="X_span">Instagram</span></div>
            <ul class="footsocial_ddownul pdropdown_ul" style="display: none;">
<?php
if( have_rows('social_instagram', 'option') ):
    while( have_rows('social_instagram', 'option') ) : the_row();
?>            
                <li><a target="_blank" href="<?php echo get_sub_field('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg_social_arrow.svg"><span><?php echo get_sub_field('team'); ?></span></a></li>
<?php
    endwhile;
endif;
?>            
            </ul>
        </div>
    </div>    
</div>
<footer id="footer">
    <div class="footer_block">
        <div class="footer_wrap">
            <div class="footer_row">
                <div class="footer_logo"> 
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.svg" alt=""/>
                    </a>
                </div>
                <div class="footer_menu">
                    <ul class="footmenu_ul">
                        <li>
                            <div class="footmenu_shape">
                                <a href="#">
                                    <div class="footmenu_cap">Top</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="#">
                                    <div class="footmenu_cap">About us</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="#">
                                    <div class="footmenu_cap">Service</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="#">
                                    <div class="footmenu_cap">Company</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="footmenu_shape">
                                <a href="#">
                                    <div class="footmenu_cap">Recruit</div>
                                    <div class="footmenu_uline"></div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer_copyright">©PROS Co., Ltd. All Rights Reserved.</div>
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
