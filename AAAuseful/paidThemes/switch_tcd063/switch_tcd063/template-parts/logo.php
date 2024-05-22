<?php
$dp_options = get_design_plus_options();

$tag = is_front_page() ? 'h1' : 'div';
$use_logo_image = is_mobile() ? $dp_options['sp_header_use_logo_image'] : $dp_options['header_use_logo_image'];
$logo_image = is_mobile() ? $dp_options['sp_header_logo_image'] : $dp_options['header_logo_image'];
$is_retina = is_mobile() ? $dp_options['sp_header_logo_image_retina'] : $dp_options['header_logo_image_retina'];
?>
<<?php echo $tag; ?> class="l-header__logo c-logo<?php if ( $is_retina ) { echo ' c-logo--retina'; } ?>">
  <?php if ( 'type1' === $use_logo_image ) : ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
  <?php else : ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo wp_get_attachment_url( $logo_image ); ?>" alt="<?php bloginfo( 'name' ); ?>">
  </a>
  <?php endif; ?>
</<?php echo $tag; ?>>
