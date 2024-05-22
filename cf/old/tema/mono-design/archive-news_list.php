<?php get_header(); ?>

<div class="post">
			<div class="inner content">
				<div class="main">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
						'post_type'=>'news_list',
						'order'=>'DESC',
						'orderby'=> 'date',
						'paged'=>$paged,
						'posts_per_page'=>10
					);
					$wp_query = new WP_Query( $args );
					?>

					<?php if ( $wp_query->have_posts() ) : ?>
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

					<div class="box">
						<div class="text">
						<span><?php the_time("Y/m/j"); ?></span>
						<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
						</div>
					</div>

					<?php endwhile; ?>

					<div class="pager">
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
					</div><!-- /.pager -->

					<?php else : ?>
					<?php endif; ?>

					<?php wp_reset_query(); ?>
				</div>
				<div class="side">
					<?php get_sidebar('news_post'); ?>
				</div>
			</div>
		</div>

<?php get_footer(); ?>