<?php
// エラーを出力する
ini_set('display_errors', "On");
?>
	<?php get_header(); ?>

	<main>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

		<h2 class="title">
		<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
		<?php the_title(); ?>
		</a>
		</h2>

		<div class="blog_info clearfix">
		<ul>
		<li class="cal"><?php the_time('Y年m月d日') ?></li>
		<li class="cat"><?php the_category(', ') ?></li>
		<li class="tag"><?php the_tags('', ', '); ?></li>
		</ul>
		</div>

		<?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>

		<?php the_content('続きを読む'); ?>

	<?php endwhile; ?>

		<div class="nav-below">
		<span class="nav-previous"><?php next_posts_link('古い記事へ') ?></span>
		<span class="nav-next"><?php previous_posts_link('新しい記事へ') ?></span>
		</div><!-- /.nav-below -->

	<?php else : ?>

		<h2 class="title">記事が見つかりませんでした。</h2>
		<p>検索で見つかるかもしれません。</p><br />
		<?php get_search_form(); ?>

	<?php endif; ?>
	</main>

	<aside>
	<?php get_sidebar(); ?>
	</aside>

<?php get_footer(); ?>