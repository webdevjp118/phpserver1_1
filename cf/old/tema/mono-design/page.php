<?php get_header(); ?>

	<main>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; ?>

		<?php else : ?>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>