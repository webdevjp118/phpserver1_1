<?php
get_header();
?>
<?php
global $wp_query;
$query = $wp_query;
get_template_part('template-parts/comvideos'); 
?>
<?php
get_footer();