<?php get_header(); ?>

<?php $tax = single_term_title("", false); ?>

<main>
	
	<div class="portfolio_list">
		<div class="inner content">
		
			<ul class="list">
				<li><a href="/portfolio_post_cat/一戸建住宅/"<?php if($tax=='一戸建住宅'){ ?> class="on"<?php } ?>>一戸建て住宅</a></li>
				<li><a href="/portfolio_post_cat/集合住宅/"<?php if($tax=='集合住宅'){ ?> class="on"<?php } ?>>集合住宅</a></li>
				<li><a href="/portfolio_post_cat/学校教育施設/"<?php if($tax=='学校教育施設'){ ?> class="on"<?php } ?>>学校・教育施設</a></li>
				<li><a href="/portfolio_post_cat/店舗・その他/"<?php if($tax=='店舗・その他'){ ?> class="on"<?php } ?>>店舗・その他</a></li>
			</ul>
		
			<div class="genre">
				<h3><?php echo $tax; ?></h3>
			</div>

			<div class="list_box">

			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;//現在のページ数を設定(必要な場合のみ)

				$args = array(
				'post_type'=>'portfolio_post',
				'taxonomy'=>'portfolio_post_cat',//タクソノミーの指定
				'term'=>$tax,//タームの指定(日本語いける)
				'order'=>'DESC',//大きい順　※必須
				'orderby'=> 'date',//date (日付順) modified (変更順)menu_order (ドラッグ＆ドロップ対応)　※必須
				'paged'=>$paged,//ページングの際、必ず必要
				'posts_per_page'=>50
			);
			$wp_query = new WP_Query( $args );
			?>

			<?php if ( $wp_query->have_posts() ) : ?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
			
				<div class="box">
					<a href="<?php the_permalink(); ?>">
					<?php
					$attachment_id = get_field('list_img',$post->ID);
					$attachment_id = wp_get_attachment_image_src($attachment_id, "portfolio_img_s");
					$attachment_id = $attachment_id[0];
					?>
					<img src="<?php echo $attachment_id; ?>">
					</a>
					<div class="name">
						<h3><?php the_title() ?></h3>
					</div>
				</div><!--/.box-->

			<?php endwhile; ?>

			<?php // ページ送り(不要な場合は削除)
			$big = 999999999; 
			echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'type' => 'list'
			) );
			?>

			<?php else : ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>

			</div>

		</div>
	</div>

</main>

<?php get_footer(); ?>