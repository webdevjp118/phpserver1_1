<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artist
 */

?>

<!-- FOOTER_START -->
	<footer id="footer">    	
        <div class="common_shadow_2_hp">
          	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shadow3.png" alt="">
        </div>	
    	<div class="back-to-top-hp" id="gototop">
        	<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back_to_top.svg" alt=""></a>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-in-hp">
                    <div class="footer-middle-hp">
                    	<div class="footer_logo_hp">
                        	<a href="<?php echo get_site_url(); ?>">
                        		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer1.png" alt="">
                            </a>
                        </div>
                        <div class="footer_row_hp">
                        	<div class="footer_icon_hp">
                            	<a href="javascript:void(0)">
                            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.svg" alt="">
                                </a>
                            </div>
                            <div class="footer_icon_hp">
                            	<a href="javascript:void(0)">
                            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.svg" alt="">
                                </a>    
                            </div>
                            <div class="footer_icon_hp">
                            	<a href="javascript:void(0)">
                            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.svg" alt="">
                                </a>    
                            </div>
                            <div class="footer_icon_hp">
                            	<a href="javascript:void(0)">
                            		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiktok.svg" alt="">
                                </a>    
                            </div>
                        </div>
                        <div class="footer_copyright_hp">Copyright 2022- © OHL Inc. All Rights Reserved.</div>                    	                        
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>        
        <div class="clearfix"></div>
    </footer>
<!-- FOOTER_END -->

<?php wp_footer(); ?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script>
		$(document).ready(function() {
			var owl = $('.owl-carousel');
			owl.owlCarousel({
			margin: 10,
			nav: true,
			loop: false,
			stagePadding: 40,
			responsive: {
				0: {
				items: 1
				},
				768: {
				items: 3
				},
				1200: {
				items: 3
				}
			}
			})
		})
	</script>
</body>
</html>
