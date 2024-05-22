<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

get_template_part('template-parts/common-blog');

?>

<?php
get_footer();

