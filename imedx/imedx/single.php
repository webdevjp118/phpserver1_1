<?php get_template_part('templates/head'); ?>
<?php get_template_part('templates/header'); ?>
<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
<div class="l-section l-section-single">
    <div class="l-wrap">
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="p-post__headline">
                <h1><?php the_title(); ?></h1>
                <p><?php echo get_the_date(); ?></p>
            </div>
            <div class="p-post__main">
                <?php the_content(); ?>
            </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>
</div>
<?php get_template_part('templates/cta'); ?>
<?php get_template_part('templates/footer'); ?>
</body>
</html>