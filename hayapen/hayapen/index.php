<?php
get_header('bright');

global $wp_query;
$query = $wp_query;

$category_id = 0;
if(is_category() || is_single()){
	$category_id = get_query_var('cat');
}

get_template_part('template-parts/common-news');
?>


<?php
get_footer();
