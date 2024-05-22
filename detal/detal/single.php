<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">  
	<div class="breadcrumb_block_cp padding_bdp">             
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_cp">
					<div class="breadcrumb_middle_cp">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">TOP</a></li>
							<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/blog">ブログ一覧</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</a></li>                                                              
						</ol>                                                                                             
					</div>                       
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div> 
<?php
$this_post_id = 0;
while ( have_posts() ) :
	the_post();
	$this_post_id = get_the_ID();
?>	
	<div class="detail_block_bdp">        	            
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 detail_block_in_bdp">
					<div class="detail_middle_bdp">                         	                           
						<div class="detail_info_bdp">
							<h3><?php the_date('Y.m.d'); ?></h3>
							<h4><?php the_title(); ?></h4>
							<div class="pmhwp">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="detail_btn2_bdp">
							<a class="common_btn_hp" href="<?php echo get_site_url(); ?>/blog">一覧へ戻る</a>                                  
						</div>                            
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php
endwhile;
?>      
	<div class="new_block_bdp new_change_hp">        	            
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 new_block_in_bdp">
					<div class="new_middle_bdp"> 
						<div class="new_title_bdp">
							<h3>新着ブログ</h3>
							<p>BLOG</p>
						</div>
						<div class="blog_top_bp new_pd_bdp">
<?php
$exclude_ids[] = $this_post_id;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
	'post__not_in' => $exclude_ids, 
);
$post_query = new WP_Query($args);
if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
        $post_query->the_post();

        $post_id = get_the_ID();
		$post_date = get_the_date('Y.m.d');
        $post_link = get_permalink( $post_id );
        $blog_img = get_stylesheet_directory_uri()."/images/blog_img.png";
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
        if(!empty($image)) $blog_img = $image[0];
?>
							<div class="blog_box_bp">
								<div class="blog_img_bp">
									<a href="<?php echo $post_link; ?>"><div class="img_div"><img src="<?php echo $blog_img; ?>" alt=""></div></a>	
								</div>
								<div class="blog_info_bp">
									<h3><?php echo $post_date; ?></h3>
									<p><?php the_title(); ?></p>
								</div>
							</div>
<?php
	}
}
?>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
																								
	<div class="clearfix"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
