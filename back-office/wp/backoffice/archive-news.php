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

get_template_part('template-parts/common-news');

?>

<?php
get_footer();

