<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package backoffice
 */

get_header();
?>
<?php
$loop_id = get_the_ID();
$loop_title = get_the_title();
$loop_date = get_the_date('Y.m.d');
$loop_thumb_url = get_thumb_url($loop_id);

$visit_count = get_post_meta($loop_id, 'visit_count', true);
if(empty($visit_count)) $visit_count = 0;
$visit_count++;
update_post_meta($loop_id, 'visit_count', $visit_count);
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
	<div class="banner_block_sp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/colum_main.png) no-repeat center center; background-size:cover;">
		<div class="banner_overlay_sp">         
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_sp">                    	
						<div class="banner_middle_sp"> 
							<div class="banner_title_sp"> 
								<h2>お役立ちコンテンツ</h2>
							</div>
						</div>                                               
						<div class="clearfix"></div>
					</div>
				</div>
			</div>            
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="breadcrumb_block_sp">             
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sp">
					<div class="breadcrumb_middle_sp">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Top</a></li>
							<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/blog/"><span>お役立ちコンテンツ</span></a></li>
						</ol>                                                                                             
					</div>                       
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>        
	<div class="information_block_ip">             
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 information_block_in_ip">                     	
					<div class="information_middle_ip">
						<div class="information_top_ip">
							<div class="information_left_ip">                        		
								<div class="feedback_top_fp">	
									<div class="feedback_img_fp">                                 
										<img src="<?php echo $loop_thumb_url; ?>" alt="" /> 
									</div>
									<div class="feedback_box_fp">
										<div class="feedback_info_fp">
											<h3><?php echo $loop_title; ?></h3>
											<div class="details_top_dp">
												<div class="details_info_dp">
													<?php echo $loop_date; ?>
												</div>
												<div class="details_boxes_dp">
<?php
$tags = get_tags();
foreach($tags as $tag) {
?>
													<div class="details_box_dp">
														<a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
													</div>
<?php
}
?>
												</div>
												<div class="details_icon_dp">
													<ul>
														<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb.svg" alt="" /></a></li>
														<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.svg" alt="" /></a></li>
														<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.svg" alt="" /></a></li>
														<li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.svg" alt="" /></a></li>
													</ul>
												</div>                                                    
											</div>
										</div>
										<div class="blog_content">
											<div class="pmhwp">
												<?php the_content(); ?>
											</div>
										</div>
										
									</div>   
								</div>                                    
								<div class="feedback_btn2_fp details_pd3_dp">
									<a class="common_btn_hp" href="<?php echo get_site_url(); ?>/blog/">一覧へもどる<svg xmlns="http://www.w3.org/2000/svg" width="7.633" height="12.437" viewBox="0 0 7.633 12.437">
		<path id="Path_3" data-name="Path 3" d="M1458.916,2353.646l5.511,5.511-5.511,5.511" transform="translate(-1458.208 -2352.938)" fill="none" stroke="#fff" stroke-width="2"/>
		</svg></a>
								</div>
								<div class="details_main_dp">
									<div class="details_subtitle_dp">
										<h2>おすすめ記事</h2>	
									</div>
									<div class="useful_boxes_up details_pd2_dp">
<?php
$favor_args = array(
	'post_type' => 'post',
	'orderby'   => 'meta_value_num',
	'meta_key'  => 'visit_count',
	'order' => 'DESC',
	'posts_per_page' => 4
);
$favor_query = new WP_Query($favor_args);
$favor_count = 0;
if ( $favor_query->have_posts() ) :
    while ( $favor_query->have_posts() ) :
        $favor_query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
		$loop_content = get_the_excerpt($loop_id);
        $loop_date = get_the_date('Y.m.d');
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
		$favor_count++;
?>	
										<div class="useful_box_up">
											<a href="<?php echo $loop_permalink; ?>">
												<div class="useful_img_up">
													<img src="<?php echo $loop_thumb_url; ?>" alt="" />
												</div>
												<div class="useful_box_in_up">
													<div class="useful_title_up">
														<?php echo $loop_title; ?>
													</div>
													<div class="useful_info_up">
														<?php echo $loop_content; ?>
													</div>
												</div>
											</a>
										</div>
<?php
	endwhile;
endif;
?>
									</div>
								</div>  
							</div>    
							
							<?php get_template_part('template-parts/blog-sidebar'); ?>

						</div>
					</div>                                               
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>
	<div class="please_block_sp" style="url(<?php echo get_stylesheet_directory_uri(); ?>/images/footer_bg.png) no-repeat top center; background-size:cover;">             
		<div class="please_overlay_sp">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 please_block_in_sp">                     	
						<div class="please_middle_sp">                        	                            
							<div class="please_boxes_sp">
								<div class="please_box_sp">
									<div class="please_box_title_sp">
										導入のご相談はお気軽にご連絡ください
									</div>
									<div class="please_box_info_sp">
										<p>今すぐ資料で確認する<br/>3分でわかる経理代行サービス</p>
									</div>
									<div class="please_btn_sp">
										<a class="common_btn_hp white_btn_hp please_btn_bg_sp" href="#">詳しくはこちら<svg xmlns="http://www.w3.org/2000/svg" width="7.633" height="12.437" viewBox="0 0 7.633 12.437">
			<path id="Path_3" data-name="Path 3" d="M1458.916,2353.646l5.511,5.511-5.511,5.511" transform="translate(-1458.208 -2352.938)" fill="none" stroke="#26A9E0" stroke-width="2"/>
		</svg></a>
									</div>
								</div>
								<div class="please_box_sp">
									<div class="please_box_in_sp">
										<div class="please_grid_sp">
											<div class="please_left_sp">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call.svg" alt="" />
											</div>
											<div class="please_right_sp">
												<a href="#">03-6450-9885</a>
											</div>
										</div>
										<div class="please_box_info_sp">
											<p>導入のご相談・お問い合わせ<br/>プロ経理コンサルタントが対応します！</p>
										</div>
										<div class="please_btn_sp">
											<a class="common_btn_hp white_btn_hp please_btn_bg_sp" href="#">詳しくはこちら<svg xmlns="http://www.w3.org/2000/svg" width="7.633" height="12.437" viewBox="0 0 7.633 12.437">
				<path id="Path_3" data-name="Path 3" d="M1458.916,2353.646l5.511,5.511-5.511,5.511" transform="translate(-1458.208 -2352.938)" fill="none" stroke="#26A9E0" stroke-width="2"/>
			</svg></a>
										</div>
									</div>
								</div>
							</div>
						</div>                                               
						<div class="clearfix"></div>
					</div>
				</div>
			</div>            
		</div>
		<div class="clearfix"></div>
	</div>                          
</section>
<!-- CONTAIN_END -->

<?php
get_footer();
