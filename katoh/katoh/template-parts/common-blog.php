<?php
global $query;
$category_id = 0;
$catpage_title = "";
if(is_category() || is_single()){
	$category_id = get_query_var('cat');
    $category_all = get_queried_object();
    $catpage_title = $category_all->name;
}	
?>

<!-- CONTAIN_START -->
<section id="contain">
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/pg_blog.jpg);"></div>
        <div class="cwidth12">
            <div class="under_fvlogo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/under_fvlogo.svg"></div>
            <div class="pbreadcrumb">
                <p class="pbreadcrumb_a">
                    <a href="<?php echo get_site_url(); ?>/">ホーム</a>
<?php if(!empty($catpage_title)){ ?>               
                    &nbsp;＞&nbsp;
                    <a href="<?php echo get_site_url(); ?>/blog/">スタッフブログ</a>
                    &nbsp;＞&nbsp;
                    <span><?php echo $catpage_title; ?></span>
<?php } else { ?>
                    &nbsp;＞&nbsp;
                    <span>スタッフブログ</span>
<?php } ?>
                </p>
            </div>
            <div class="pgfv_title">
                <div class="pgfv_title1">
                    <h1>スタッフブログ</h1>
                    <p>BLOG</p>
                </div>
            </div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="cwidth12">
        <div class="page_row">
            <div class="page_main">
                <div class="brod_list">
<?php
if ( $query->have_posts() ) :
    while ( $query->have_posts() ) :
        $query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_content = get_the_excerpt();
        $loop_date = get_the_date('Y.m.d');
        $loop_category_name = "";
        $loop_category_objects = get_the_category($loop_id);
        foreach($loop_category_objects as $cd){
            $loop_category_name = $cd->cat_name;
            break;
        }
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
?>                    
                    <a class="brod_item" href="<?php echo $loop_permalink; ?>">
                        <div class="brod_img">
                            <img src="<?php echo $loop_thumb_url; ?>">
                        </div>                        
                        <div class="brod_right">
                            <div class="brod_top">
                                <div class="brod_date"><?php echo $loop_date; ?></div>
                                <div class="brod_cat"><?php echo $loop_category_name; ?></div>
                            </div>
                            <div class="hx2"></div>
                            <div class="brod_title"><?php echo $loop_title; ?></div>
                            <div class="brod_text">
                                <?php echo $loop_content; ?>
                            </div>
                        </div>
                    </a>
<?php
    endwhile;
endif;	
?>                      
                </div>
                <div class="news_pageination">
                    <div class="pagination_wrap">
                        <?php wp_pagenavi(array('query' => $query)); ?>
                    </div>									
                </div>  
            </div>
            <?php get_template_part('template-parts/blog-side'); ?>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->