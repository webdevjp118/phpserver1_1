<div class="information_right_ip">
    <div class="information_search_btn_ip">
        <div class="information_search_input_ip">                        	                                             
            <form role="search" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" placeholder="キーワード検索" name="s" value="<?php echo esc_attr( get_search_query() ); ?>">
                <input type="hidden" name="post_type" value="post" />
            </form>
        </div>
    </div>
    <div class="information_title_ip">
        <h2>読まれている記事</h2>
    </div>
    <div class="useful_right_boxes_up">                                    
<?php
$favor_args = array(
	'post_type' => 'post',
	'orderby'   => 'meta_value_num',
	'meta_key'  => 'visit_count',
	'order' => 'DESC',
	'posts_per_page' => 3
);
$favor_query = new WP_Query($favor_args);
$favor_count = 0;
if ( $favor_query->have_posts() ) :
    while ( $favor_query->have_posts() ) :
        $favor_query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y.m.d');
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_url = get_thumb_url($loop_id);
		$favor_count++;
?>	
        <div class="useful_right_box_up">
            <a href="<?php echo $loop_permalink; ?>">
                <div class="useful_box_left_up">
                    <img src="<?php echo $loop_thumb_url; ?>" alt="" />
                    <div class="useful_box_num_up"><?php echo $favor_count; ?></div>
                </div>
                <div class="useful_box_right_up">
                    <div class="useful_box_right_info_up">
                        <?php echo $loop_title; ?>
                    </div>
                    <div class="useful_box_right_date_up">
                        <?php echo $loop_date; ?>
                    </div>
                </div>
            </a>
        </div>
<?php
	endwhile;
endif;
?>
    </div>
    <div class="information_right_top_ip">                                        
        <div class="information_title_ip">
            <h2>最新のお知らせ</h2>
        </div>
        <div class="information_boxes_ip">
<?php
$news_args = array(
	'post_type' => 'news',
	'paged' => get_query_var('paged'),
	'orderby' => 'publish_date',
	'order' => 'DESC',
	'posts_per_page' => 3
);
$news_query = new WP_Query($news_args);
if ( $news_query->have_posts() ) :
    while ( $news_query->have_posts() ) :
        $news_query->the_post();
        $loop_id = get_the_id();
        $loop_title = get_the_title();
        $loop_date = get_the_date('Y.m.d');
        $loop_permalink = get_the_permalink($loop_id);
        $loop_thumb_id = get_post_thumbnail_id($loop_id); //get the featured image
        $thumb_url_array = wp_get_attachment_image_src($loop_thumb_id, 'thumbnail-size', true);
        $loop_thumb_url = $thumb_url_array[0];
?>
            <div class="information_box_ip">
                <a href="<?php echo $loop_permalink; ?>">
                    <div class="information_img_ip">
                        <img src="<?php echo $loop_thumb_url; ?>" alt="" />
                    </div>
                    <div class="information_info_ip">
                        <h3><?php echo $loop_date; ?></h3>
                        <p><?php echo $loop_title; ?></p>
                    </div>
                </a>
            </div>
<?php
	endwhile;
endif;
?>
        </div>    
    </div>
    <div class="information_title_ip">
        <h2>TAG</h2>
    </div>
    <div class="useful_tag_up useful_tag_pd_up">                                    	
        <div class="useful_tag_boxes_up">
<?php
$tags = get_tags(array(	'hide_empty' => false ));
foreach($tags as $tag) {

?>
            <div class="useful_tag_box_up">
                <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
            </div>
<?php
}
?>
        </div>
    </div>
    <div class="information_title_ip information_title_pd_ip">
        <h2>月別アーカイブ</h2>
    </div>
    <div class="information_right_bottom_ip useful_padding_up">                                     	    
        <ul>
<?php 
$monthly_links = get_monthly_archive_array();
foreach($monthly_links as $monthly_link) {
	echo '<li><a href="'.$monthly_link['value'].'">'.get_jp_date($monthly_link['name']).'</a></li>';
}
?>
        </ul>
    </div>
</div>