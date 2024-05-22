<?php
$dp_options = get_design_plus_options();

$use_logo_image = is_mobile() ? $dp_options['sp_footer_use_logo_image'] : $dp_options['footer_use_logo_image'];
$logo_image = is_mobile() ? $dp_options['sp_footer_logo_image'] : $dp_options['footer_logo_image'];
$is_retina = is_mobile() ? $dp_options['sp_footer_logo_image_retina'] : $dp_options['footer_logo_image_retina'];
?>
<div class="p-info__logo c-logo<?php if ( $is_retina ) { echo ' c-logo--retina'; } ?>">
  <?php if ( 'type1' === $use_logo_image ) : ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
  <?php else : ?>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <img src="<?php echo esc_attr( wp_get_attachment_url( $logo_image ) ); ?>" alt="<?php bloginfo( 'name' ); ?>">
  </a>
  <?php endif; ?>
</div>
