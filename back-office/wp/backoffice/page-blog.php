<?php
get_header();
?>


<?php
$args = array(
    'post_type' => 'post',
    'paged' => get_query_var('paged'),
    'orderby' => 'publish_date',
    'order' => 'DESC',
);
$query = new WP_Query($args);
$category_id = 0;
get_template_part('template-parts/common-blog');
?>

<?php
get_footer();
