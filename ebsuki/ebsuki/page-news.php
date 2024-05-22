<?php
get_header();
?>
<?php
$related_args = array(
	'post_type' => 'post',
    'paged' => get_query_var('paged'),
);
$query = new WP_Query( $related_args );
get_template_part('template-parts/comnews'); 
?>
<?php
get_footer();
