<?php
get_header();
?>
<?php
global $wp_query;
$query = $wp_query;
get_template_part('template-parts/comreviews'); 
?>
<?php
get_footer();
