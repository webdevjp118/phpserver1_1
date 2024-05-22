<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package backoffice
 */

?>

<!-- FOOTER_START --> 
<footer id="footer" data-aos="fade-up">
	<div class="back-to-top" id="gototop">
		<a href="javascript:void(0)"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/back_to_top.svg" alt="" /></a>
	</div>    	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
				<div class="footer_middle_hp">
					<div class="footer_top_hp">
						<a class="footer_logo_hp" href="<?php echo get_site_url(); ?>"> 
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.svg" alt=""/>
						</a>                      
						<div class="footer_links_hp">
							<ul>	
								<li><a href="<?php echo get_site_url(); ?>/service/">サービス</a></li>
								<li><a href="<?php echo get_site_url(); ?>/service/#id_price">料金体系</a></li>
								<li><a href="<?php echo get_site_url(); ?>/review/">お客様の声</a></li>
								<li><a href="<?php echo get_site_url(); ?>/news/">お知らせ</a></li>
							</ul>
							<ul>	
								<li><a href="<?php echo get_site_url(); ?>/faq/">FAQ</a></li>
								<li><a href="<?php echo get_site_url(); ?>/blog/">お役立ちコンテンツ</a></li>
								<li><a href="<?php echo get_site_url(); ?>/about/">ABOUTUS</a></li>                                    
							</ul>                               
						</div>                                                  
					</div>  
					<div class="footer_row_hp">                      
						<div class="footer_title_hp"><a href="<?php echo get_site_url(); ?>/privacypolicy/">プライバシーポリシー</a></div>
						<div class="footer_copyright_hp">Copyright © 2022 Strategic Back Office Ltd. All rights reserved.</div>                    	                        
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>        
	<div class="clearfix"></div>
</footer>
<!-- FOOTER_END -->

</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script>
  $(document).ready(function() {
	var owl = $('.useful_top_hp');
	owl.owlCarousel({
	  margin: 20,
	  nav: true,
	  loop: true,
	  dots: false,
	  autoWidth:true,
	  responsive: {
		0: {
		  items: 1
		},
		768: {
		  items: 3
		},
		1200: {
		  items: 4 
		}
	  }
	})
  })
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>

<?php wp_footer(); ?>
</body>
</html>
