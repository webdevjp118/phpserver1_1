<?php get_template_part('templates/service-head'); ?>
<?php get_template_part('templates/service-header'); ?>
<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
<div class="l-section__page l-section__case">
    <div class="l-wrap">
        <?php if(have_posts()):while(have_posts()):the_post(); ?>
        <div class="p-case__head">
            <div class="p-case__head--img">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail(); ?>
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/service/assets/images/noimage.jpg" alt="NO IMAGE">
            <?php endif; ?>
            </div>
            <div class="p-case__head--txt">
                <h1><?php the_title(); ?></h1>
                <div class="p-case__detail">
                    <div class="p-case__detail--content">
                        <p class="label">クリニック名</p>
                        <p class="u-text__sentence"><?php echo get_post_meta($post->ID, 'clinic_name', true); ?></p>
                    </div>
                    <div class="p-case__detail--content">
                        <p class="label">住所</p>
                        <p class="u-text__sentence">〒<?php echo get_post_meta($post->ID, 'clinic_post', true); ?><br><?php echo get_post_meta($post->ID, 'clinic_address', true); ?></p>
                    </div>
                </div>
            </div>
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
<?php get_template_part('templates/service-footer'); ?>
</body>
</html>