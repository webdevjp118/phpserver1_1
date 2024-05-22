<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package backoffice
 */

get_header();
?>

<?php
global $wp_query;
$query = $wp_query;

$category_id = 0;
if(is_category() || is_single()){
	$category_id = get_query_var('cat');
}

$post_type = "post";
if(isset($_GET['post_type'])) $post_type = $_GET['post_type'];

if($post_type == 'news') {
	get_template_part('template-parts/common-news');
}
else {
	get_template_part('template-parts/common-blog');
}

?>

<?php
get_footer();
