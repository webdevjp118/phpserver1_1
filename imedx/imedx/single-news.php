<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<div class="l-section__page l-section__case">
    <div class="l-wrap">
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="p-case__head--txt">
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="p-case__body">
                <?php the_content(); ?>
            </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>
</div>
<?php get_template_part('templates/service-cta'); ?>
<?php get_template_part('templates/service-footer'); ?>
</body>
</html>