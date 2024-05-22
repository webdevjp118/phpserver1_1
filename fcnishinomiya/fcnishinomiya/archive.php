<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ebsuki
 */

get_header();
?>
<?php
global $wp_query;
$query = $wp_query;
get_template_part('template-parts/comnews'); 
?>
<?php
get_footer();
