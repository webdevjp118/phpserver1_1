<?php
get_header('bright');

global $wp_query;
$query = $wp_query;

$category_id = get_queried_object()->term_id;

get_template_part('template-parts/common-works');
?>


<?php
get_footer();
