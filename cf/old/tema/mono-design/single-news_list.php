<?php get_header(); ?>

	<main>
		<div class="post">
			<div class="inner content">
				<div class="main">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="title"><?php the_title(); ?></div>
						<div class="date"><?php the_time('Y年m月d日') ?></div>

						<div class="text">
						<?php the_content(); ?>
						</div>

					<?php endwhile; ?>
					
						<div class="bottom_nav">
							<div class="prev"><?php previous_post_link('%link','前の記事へ') ?></div>
							<div class="next"><?php next_post_link('%link','次の記事へ') ?></div>
						</div>

					<?php else : ?>

						<h2 class="title">記事が見つかりませんでした。</h2>
						<p>検索で見つかるかもしれません。</p><br />
						<?php get_search_form(); ?>

					<?php endif; ?>
				</div>
				<div class="side">
					<?php get_sidebar('news_post'); ?>
				</div>
			</div>
		</div>
		
	</main>

<?php get_footer(); ?>