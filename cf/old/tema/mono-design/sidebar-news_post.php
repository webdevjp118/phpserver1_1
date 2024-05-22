<div class="box">
<h2>最近の投稿</h2>
<ul>
<?php
	$args = array(
	'post_type'=>'news_list',
	'order'=>'DESC',
	'orderby'=> 'date',
	'posts_per_page'=>5
);
$wp_query = new WP_Query( $args );
?>

<?php if ( $wp_query->have_posts() ) : ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

	<li>
	<span><?php the_time("Y/m/j"); ?></span>
	<a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
	</li>

<?php endwhile; ?>

<?php else : ?>
<?php endif; ?>

<?php wp_reset_query(); ?>

</ul>
</div>