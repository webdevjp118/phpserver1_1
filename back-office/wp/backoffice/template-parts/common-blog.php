<?php
global $query;
global $category_id;

$cat_tab_class = "nav-link";
if(empty($category_id))
	$cat_tab_class = "nav-link active";
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
							<li class="breadcrumb-item"><a href="javascript:void(0)"><span>お役立ちコンテンツ</span></a></li>
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
									<ul class="nav nav-tabs">
										<li class="nav-item">
										<a class="<?php echo $cat_tab_class; ?>" href="<?php echo get_site_url(); ?>/blog/">すべて</a>
										</li>
<?php
$categories = get_categories(array(	'hide_empty' => false ));
foreach($categories as $category) {
	$cat_tab_class = "nav-link";
	if($category->term_id == $category_id) $cat_tab_class = "nav-link active"
?>
										<li class="nav-item">
											<a class="<?php echo $cat_tab_class; ?>" href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
										</li>
<?php
}
?>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active">
											<div class="useful_boxes_up">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y/m/d');
        $loop_permalink = get_the_permalink($loop_id);
		$loop_thumb_url = get_thumb_url($loop_id);
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
										<div class="customer_pagination_cp">
											<div class="pagination_wrap">
												<?php wp_pagenavi(array('query' => $query)); ?>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab_2-tab">...</div>
									<div class="tab-pane fade" id="tab_3" role="tabpanel" aria-labelledby="tab_3-tab">...</div>
									<div class="tab-pane fade" id="tab_4" role="tabpanel" aria-labelledby="tab_4-tab">...</div>
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
	
	<div class="please_block_sp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/footer_bg.png) no-repeat top center; background-size:cover;">             
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
										<a class="common_btn_hp white_btn_hp please_btn_bg_sp" href="<?php echo get_site_url(); ?>/service/">詳しくはこちら<svg xmlns="http://www.w3.org/2000/svg" width="7.633" height="12.437" viewBox="0 0 7.633 12.437">
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
											<a class="common_btn_hp white_btn_hp please_btn_bg_sp" href="<?php echo get_site_url(); ?>/contact/">詳しくはこちら<svg xmlns="http://www.w3.org/2000/svg" width="7.633" height="12.437" viewBox="0 0 7.633 12.437">
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