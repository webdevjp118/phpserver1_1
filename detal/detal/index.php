<?php
get_header();
?>
<!-- CONTAIN_START -->
<section id="contain">    	                                
	<div class="banner_block_cp">        	            
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_cp">
					<div class="banner_middle_cp"> 
						<div class="banner_title_cp">
							<h3>ブログ</h3>
							<p>BLOG</p>
						</div>                           
						<div class="banner_img_cp">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_4.png" alt="">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="breadcrumb_block_cp">             
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_cp">
					<div class="breadcrumb_middle_cp">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">TOP</a></li>
							<li class="breadcrumb-item"><a href="javascript:void(0)">ブログ一覧</a></li>                                                              
						</ol>                                                                                             
					</div>                       
					<div class="clearfix"></div>
				</div>
			</div>
		</div>            
		<div class="clearfix"></div>
	</div>    
	<div class="blog_block_bp">        	            
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_block_in_bp">
					<div class="blog_middle_bp">                         	                           
						<div class="blog_top_bp">
<?php
if(have_posts() ) {
    while(have_posts() ) {
        the_post();

        $post_id = get_the_ID();
		$post_date = get_the_date('Y.m.d');
        $post_link = get_permalink( $post_id );
        $blog_img = get_stylesheet_directory_uri()."/images/blog_img.png";
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
        if(!empty($image)) $blog_img = $image[0];
?>							
							<div class="blog_box_bp">
								<div class="blog_img_bp">
									<a href="<?php echo $post_link; ?>">
										<div class="img_div">
											<img src="<?php echo $blog_img; ?>" alt="">
										</div>
									</a>	
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
<?php if(have_posts()): ?>
    <div class="pagination_wrap">
        <div class="pagination">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
<?php endif; ?>
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
