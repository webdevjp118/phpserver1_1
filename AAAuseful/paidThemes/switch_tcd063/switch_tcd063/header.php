<?php
$dp_options = get_design_plus_options();

$header_fix = is_mobile() ? $dp_options['sp_header_fix'] : $dp_options['header_fix'];

$args = array(
  'container' => 'nav',
  'container_class' => 'p-global-nav',
  'container_id' => 'js-global-nav',
  'link_after' => '<span class="p-global-nav__toggle"></span>',
  'theme_location' => 'global'
);
?>
<!doctype html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?php seo_description(); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'tcd_before_header', $dp_options ); ?>
<header id="js-header" class="l-header<?php if ( 'type2' === $header_fix ) { echo ' l-header--fixed'; } ?>">
  <div class="l-header__inner l-inner">
    <?php get_template_part( 'template-parts/logo' ); ?>
    <button id="js-menu-btn" class="p-menu-btn c-menu-btn"></button>
    <?php wp_nav_menu( $args ); ?>
  </div>
</header>
<main class="l-main">
  <?php
  if ( ! is_front_page() ) {
    get_template_part( 'template-parts/page-header' );
  }
  ?>
