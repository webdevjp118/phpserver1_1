
<footer id="footer" data-aos="fade-up">
	<!--<div class="back-to-top" id="gototop">
		<a href="javascript:void(0)"><img src="images/back_to_top.svg" alt="" /></a>
	</div>-->    	
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer_in_hp">
				<div class="footer_middle_hp">
					<div class="footer_top_hp">
						<div class="footer_left_hp">
							<a href="<?php echo get_site_url(); ?>/" class="footer_logo_hp"> 
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_logo.png" alt=""/>
							</a>     
							<div class="footer_info_hp">
								<p>株式会社クラウドファンディング<br />〒150-0013 東京都渋谷区恵比寿1-8-5<br/>東洋ビル7F</p>
								<p>
									<a href="<?php echo get_site_url(); ?>/privacy/">個人情報保護方針</a><br /> 
									<a href="<?php echo get_site_url(); ?>/law/">金融商品取引法に基づく表記</a><br/>
									<a href="<?php echo get_site_url(); ?>/solicitation/">勧誘方針</a><br/>
									<a href="<?php echo get_site_url(); ?>/contact/">相談0円（無料相談予約）</a><br />
									<a href="<?php echo get_site_url(); ?>/fiduciary/">取組方針</a><br/>
									<a href="<?php echo get_site_url(); ?>/news/">ニュース</a></p>
							</div>               
						</div>  
						<div class="footer_right_hp">
							<div class="footer_links_hp">
								<h4 class="js_button" data-href="<?php echo get_site_url(); ?>/account/">口座開設</h4>
								<h4 class="js_button" data-href="<?php echo get_site_url(); ?>/investment/">投資活動の紹介</h4>
								<ul>	
									<li><a href="#">投資先送付書面及び受領書類</a></li>
									<li><a href="#">投資銘柄</a></li>
									<li><a href="#">投資方針</a></li>                                       
								</ul>                                                                   
							</div>
							<div class="footer_links_hp">
								<h4 class="js_button" data-href="<?php echo get_site_url(); ?>/account/">口座開設</h4>
								<ul>	
									<li><a href="<?php echo get_site_url(); ?>/company/">企業概要</a></li>
									<li><a href="<?php echo get_site_url(); ?>/account/">弊社の特徴</a></li>
									<li><a href="<?php echo get_site_url(); ?>/account/">メディア掲載実績</a></li>
									<li><a href="<?php echo get_site_url(); ?>/account/">講演・出版等</a></li>
									<li><a href="<?php echo get_site_url(); ?>/account/">よくあるご質問</a></li>
								</ul>                                                                   
							</div>
							<div class="footer_links_hp">
								<h4 class="js_button" data-href="<?php echo get_site_url(); ?>/information/">日本に必要な企業統治とは</h4>
								<ul>	
									<li><a href="https://www.jpx.co.jp/equities/listing/cg/tvdivq0000008jdy-att/nlsgeu000005lnul.pdf" target="_blank">コーポレートガバナンス・コードについて</a></li>
									<li><a href="https://www.fsa.go.jp/news/r1/singi/20200324/01.pdf" target="_blank">スチュワードシップコードについて</a></li>                                       
								</ul>                                                                   
							</div>
							<div class="footer_grid_hp">
								<div class="footer_box_hp"> 
									<a href="<?php echo get_site_url(); ?>/work/">IPO実績</a>
								</div>
								<div class="footer_box_hp footer_change_hp"> 
									<a href="<?php echo get_site_url(); ?>/recruit/">アクティビスト <br />IFA積極採用中</a>
								</div>                             	                                                                                    
							</div>
						</div>                            
					</div> 
					<div class="footer_row_hp">
						<div class="footer_box_img_hp">
							<a href="<?php echo get_site_url(); ?>/account/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img1.png" alt=""/></a>
						</div>
						<div class="footer_box_img_hp">
							<a href="<?php echo get_site_url(); ?>/account/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img2.png" alt=""/></a>
						</div>
						<div class="footer_box_img_hp">
							<a href="<?php echo get_site_url(); ?>/account/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer_img3.png" alt=""/></a>
						</div>
					</div>
					<div class="footer_copytext_hp">
						© Crowd Funding Inc.
					</div>                         
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>        
	<div class="clearfix"></div>
</footer>

</div>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.5.1.slim.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
</body>
</html>
