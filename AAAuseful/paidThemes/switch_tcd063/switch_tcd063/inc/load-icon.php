<?php
/**
 * Manage load icon
 */

$dp_options = get_design_plus_options();

if ( $dp_options['use_load_icon'] ) {

  // Render header HTML
  add_action( 'tcd_before_header', 'render_load_icon_html_before_header', 1 );

  // Render footer HTML
  // The priority "10" must be bigger than 1, which is the priority of add_action( 'wp_footer' ) in inc/footer-bar.php
  add_action( 'wp_footer', 'render_load_icon_html_after_footer', 10 );

  // Enqueue styles
  add_action( 'tcd_head', 'add_load_icon_styles' );
}

// Enqueue scripts
add_action( 'wp_footer', 'enqueue_load_icon_scripts', 100 );

function render_load_icon_html_before_header( $dp_options ) {
?>
  <div id="site_loader_overlay">
  <div id="site_loader_animation" class="c-load--<?php echo esc_attr( $dp_options['load_icon'] ); ?>">
    <?php if ( 'type3' === $dp_options['load_icon'] ) : ?>
    <i></i><i></i><i></i><i></i>
    <?php endif; ?>
  </div>
</div>
<?php
}

function render_load_icon_html_after_footer() {
?>
</div>
<?php
}

function enqueue_load_icon_scripts() {

  $dp_options = get_design_plus_options();

  // Convert seconds to milliseconds
  $load_time = intval( $dp_options['load_time'] ) * 1000;

?>
<script>
(function($) {
  var initialized = false;
  var initialize = function() {
    if (initialized) return;
    initialized = true;

    $(document).trigger('js-initialized');
    $(window).trigger('resize').trigger('scroll');
  };

  <?php if ( $dp_options['use_load_icon'] ) : ?>
	$(window).load(function() {
    setTimeout(initialize, 800);
		$('#site_loader_animation:not(:hidden, :animated)').delay(600).fadeOut(400);
		$('#site_loader_overlay:not(:hidden, :animated)').delay(900).fadeOut(800);
	});
	setTimeout(function(){
		setTimeout(initialize, 800);
		$('#site_loader_animation:not(:hidden, :animated)').delay(600).fadeOut(400);
		$('#site_loader_overlay:not(:hidden, :animated)').delay(900).fadeOut(800);
	}, <?php echo esc_html( $load_time ); ?>);

  <?php else : ?>

	initialize();

  <?php endif; ?>

})(jQuery);
</script>
<?php
}

function add_load_icon_styles( $dp_options ) {

  $primary_color =  $dp_options['primary_color'];
  $secondary_color =  $dp_options['secondary_color'];

  // keyframe の記述が長くなるため、ここでエスケープ
  $hex_color1 = esc_html( implode( ', ', hex2rgb( $primary_color ) ) );
  $hex_color2 = esc_html( implode( ', ', hex2rgb( $secondary_color ) ) );

  if ( 'type2' === $dp_options['load_icon'] ) :
?>
@keyframes loading-square-loader {
  0% { box-shadow: 16px -8px rgba(<?php echo $hex_color1; ?>, 0), 32px 0 rgba(<?php echo $hex_color1; ?>, 0), 0 -16px rgba(<?php echo $hex_color1; ?>, 0), 16px -16px rgba(<?php echo $hex_color1; ?>, 0), 32px -16px rgba(<?php echo $hex_color1; ?>, 0), 0 -32px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  5% { box-shadow: 16px -8px rgba(<?php echo $hex_color1; ?>, 0), 32px 0 rgba(<?php echo $hex_color1; ?>, 0), 0 -16px rgba(<?php echo $hex_color1; ?>, 0), 16px -16px rgba(<?php echo $hex_color1; ?>, 0), 32px -16px rgba(<?php echo $hex_color1; ?>, 0), 0 -32px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  10% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px -8px rgba(<?php echo $hex_color1; ?>, 0), 0 -16px rgba(<?php echo $hex_color1; ?>, 0), 16px -16px rgba(<?php echo $hex_color1; ?>, 0), 32px -16px rgba(<?php echo $hex_color1; ?>, 0), 0 -32px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  15% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -24px rgba(<?php echo $hex_color1; ?>, 0), 16px -16px rgba(<?php echo $hex_color1; ?>, 0), 32px -16px rgba(<?php echo $hex_color1; ?>, 0), 0 -32px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  20% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -24px rgba(<?php echo $hex_color1; ?>, 0), 32px -16px rgba(<?php echo $hex_color1; ?>, 0), 0 -32px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  25% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -24px rgba(<?php echo $hex_color1; ?>, 0), 0 -32px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  30% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -50px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  35% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -50px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(242, 205, 123, 0); }
  40% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -50px rgba(242, 205, 123, 0); }
  45%, 55% { box-shadow: 16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  60% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  65% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 8px rgba(<?php echo $hex_color1; ?>, 0), 0 -16px rgba(<?php echo $hex_color1; ?>, 1), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  70% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 8px rgba(<?php echo $hex_color1; ?>, 0), 0 -8px rgba(<?php echo $hex_color1; ?>, 0), 16px -16px rgba(<?php echo $hex_color1; ?>, 1), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  75% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 8px rgba(<?php echo $hex_color1; ?>, 0), 0 -8px rgba(<?php echo $hex_color1; ?>, 0), 16px -8px rgba(<?php echo $hex_color1; ?>, 0), 32px -16px rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  80% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 8px rgba(<?php echo $hex_color1; ?>, 0), 0 -8px rgba(<?php echo $hex_color1; ?>, 0), 16px -8px rgba(<?php echo $hex_color1; ?>, 0), 32px -8px rgba(<?php echo $hex_color1; ?>, 0), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  85% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 8px rgba(<?php echo $hex_color1; ?>, 0), 0 -8px rgba(<?php echo $hex_color1; ?>, 0), 16px -8px rgba(<?php echo $hex_color1; ?>, 0), 32px -8px rgba(<?php echo $hex_color1; ?>, 0), 0 -24px rgba(<?php echo $hex_color1; ?>, 0), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  90% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 8px rgba(<?php echo $hex_color1; ?>, 0), 0 -8px rgba(<?php echo $hex_color1; ?>, 0), 16px -8px rgba(<?php echo $hex_color1; ?>, 0), 32px -8px rgba(<?php echo $hex_color1; ?>, 0), 0 -24px rgba(<?php echo $hex_color1; ?>, 0), 16px -24px rgba(<?php echo $hex_color1; ?>, 0), 32px -32px rgba(<?php echo $hex_color2; ?>, 1); }
  95%, 100% { box-shadow: 16px 8px rgba(<?php echo $hex_color1; ?>, 0), 32px 8px rgba(<?php echo $hex_color1; ?>, 0), 0 -8px rgba(<?php echo $hex_color1; ?>, 0), 16px -8px rgba(<?php echo $hex_color1; ?>, 0), 32px -8px rgba(<?php echo $hex_color1; ?>, 0), 0 -24px rgba(<?php echo $hex_color1; ?>, 0), 16px -24px rgba(<?php echo $hex_color1; ?>, 0), 32px -24px rgba(<?php echo $hex_color2; ?>, 0); }
}
.c-load--type2:before { box-shadow: 16px 0 0 rgba(<?php echo $hex_color1; ?>, 1), 32px 0 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -16px 0 rgba(<?php echo $hex_color1; ?>, 1), 16px -16px 0 rgba(<?php echo $hex_color1; ?>, 1), 32px -16px 0 rgba(<?php echo $hex_color1; ?>, 1), 0 -32px rgba(<?php echo $hex_color1; ?>, 1), 16px -32px rgba(<?php echo $hex_color1; ?>, 1), 32px -32px rgba(<?php echo $hex_color2; ?>, 0); }
.c-load--type2:after { background-color: rgba(<?php echo $hex_color2; ?>, 1); }
<?php elseif ( 'type1' === $dp_options['load_icon'] ) : ?>
.c-load--type1 { border: 3px solid rgba(<?php echo esc_html( $hex_color1 ); ?>, 0.2); border-top-color: <?php echo esc_html( $primary_color ); ?>; }
<?php else : ?>
#site_loader_animation.c-load--type3 i { background: <?php echo esc_html( $dp_options['primary_color'] ); ?>; }
<?php
endif;
}
