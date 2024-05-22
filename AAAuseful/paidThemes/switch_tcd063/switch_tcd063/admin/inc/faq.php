<?php
/*
 * Manage faq tab
 */

// Add default values
add_filter( 'before_getting_design_plus_option', 'add_faq_dp_default_options' );

//  Add label of faq tab
add_action( 'tcd_tab_labels', 'add_faq_tab_label' );

// Add HTML of faq tab
add_action( 'tcd_tab_panel', 'add_faq_tab_panel' );

// Register sanitize function
add_filter( 'theme_options_validate', 'add_faq_theme_options_validate' );

global $faq_ph_desc_writing_mode_options;
$faq_ph_desc_writing_mode_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Horizontal writing', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Vertical writing', 'tcd-w' ) )
);

global $faq_ph_img_animation_type_options;
$faq_ph_img_animation_type_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Zoom in', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Zoom out', 'tcd-w' ) ),
  'type3' => array( 'value' => 'type3', 'label' => __( 'None', 'tcd-w' ) )
);

function add_faq_dp_default_options( $dp_default_options ) {

  // FAQ page
  $dp_default_options['faq_slug'] = 'faq';
  $dp_default_options['faq_q_bg'] = '#000000';

  // Page header
  $dp_default_options['faq_ph_title'] = '';
  $dp_default_options['faq_ph_desc'] = '';
  $dp_default_options['faq_ph_desc_font_size'] = 40;
  $dp_default_options['faq_ph_desc_font_size_sp'] = 18;
  $dp_default_options['faq_ph_desc_color'] = '#ffffff';
  $dp_default_options['faq_ph_desc_writing_mode'] = 'type1';
  $dp_default_options['faq_ph_img'] = '';
  $dp_default_options['faq_ph_img_animation_type'] = 'type3';
  $dp_default_options['faq_ph_overlay'] = '#000000';
  $dp_default_options['faq_ph_overlay_opacity'] = 0.3;

	return $dp_default_options;
}

function add_faq_tab_label( $tab_labels ) {
	$tab_labels['faq'] = __( 'FAQ', 'tcd-w' );
	return $tab_labels;
}

function add_faq_tab_panel( $dp_options ) {

	global $dp_default_options, $faq_ph_desc_writing_mode_options, $faq_ph_img_animation_type_options;
?>
<div id="tab-content-faq">
	<?php // FAQ page ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'FAQ page settings', 'tcd-w' ); ?></h3>
    <h4 class="theme_option_headline2"><?php _e( 'Slug settings', 'tcd-w' ); ?></h4>
		<p><?php _e( 'It is used in URL. You can use only alphanumeric. If it is not registerd, "faq" is used instead.', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: if you want to change the slug, change permalinks from "Plain".', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: after changing the slug, you need to go to "Permalink Settings" and click "Save Changes".', 'tcd-w' ); ?></p>
		<p><input type="text" name="dp_options[faq_slug]" value="<?php echo esc_attr( $dp_options['faq_slug'] ); ?>"></p>
    <h4 class="theme_option_headline2"><?php _e( 'Background color of "Q"', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Set the background color of the "Q" icon displayed at the beginning of the question.', 'tcd-w' ); ?></p>
    <input class="c-color-picker" type="text" name="dp_options[faq_q_bg]" data-default-color="<?php echo esc_attr( $dp_default_options['faq_q_bg'] ); ?>" value="<?php echo esc_attr( $dp_options['faq_q_bg'] ); ?>">
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Page header ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Page header settings', 'tcd-w' ); ?></h3>
    <p class="u-center"><img src="<?php echo get_template_directory_uri(); ?>/admin/assets/images/page_header.png" alt=""></p>
    <h4 class="theme_option_headline2"><?php _e( 'Title of #1', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Set the title to bottom of page header.', 'tcd-w' ); ?></p>
    <input type="text" class="regular-text" name="dp_options[faq_ph_title]" value="<?php echo esc_attr( $dp_options['faq_ph_title'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Description of #2', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set the description displayed in the center of the page header. Set the description, font color, font size, writing direction.', 'tcd-w' ); ?></p>
    <textarea class="regular-text" name="dp_options[faq_ph_desc]"><?php echo esc_textarea( $dp_options['faq_ph_desc'] ); ?></textarea>
    <p><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[faq_ph_desc_font_size]" value="<?php echo esc_attr( $dp_options['faq_ph_desc_font_size'] ); ?>"> px</p>
    <p><?php _e( 'Font size (mobile)', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[faq_ph_desc_font_size_sp]" value="<?php echo esc_attr( $dp_options['faq_ph_desc_font_size_sp'] ); ?>"> px</p>
    <div><?php _e( 'Font color', 'tcd-w' ); ?> <input type="text" name="dp_options[faq_ph_desc_color]" data-default-color="<?php echo esc_attr( $dp_default_options['faq_ph_desc_color'] ); ?>" value="<?php echo esc_attr( $dp_options['faq_ph_desc_color'] ); ?>" class="c-color-picker"></div>
    <?php foreach ( $faq_ph_desc_writing_mode_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[faq_ph_desc_writing_mode]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['faq_ph_desc_writing_mode'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Recommended image size. Width: 1450px, Height: 600px', 'tcd-w' ); ?></p>
  	<div class="image_box cf">
  		<div class="cf cf_media_field hide-if-no-js faq_ph_img">
  			<input type="hidden" value="<?php echo esc_attr( $dp_options['faq_ph_img'] ); ?>" id="faq_ph_img" name="dp_options[faq_ph_img]" class="cf_media_id">
  			<div class="preview_field"><?php if ( $dp_options['faq_ph_img'] ) { echo wp_get_attachment_image( $dp_options['faq_ph_img'], 'medium' ); } ?></div>
  			<div class="button_area">
  				<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  				<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['faq_ph_img'] ) { echo 'hidden'; } ?>">
  			</div>
  		</div>
  	</div>
    <h4 class="theme_option_headline2"><?php _e( 'Animation type of the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please select animation of background image.', 'tcd-w' ); ?></p>
    <?php foreach ( $faq_ph_img_animation_type_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[faq_ph_img_animation_type]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['faq_ph_img_animation_type'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Color overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Use overlay, to become easy to read the title on the background. Please set color of overlay.', 'tcd-w' ); ?></p>
    <input class="c-color-picker" type="text" name="dp_options[faq_ph_overlay]" data-default-color="<?php echo esc_attr( $dp_default_options['faq_ph_overlay'] ); ?>" value="<?php echo esc_attr( $dp_options['faq_ph_overlay'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Opacity of the overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set opacity of overlay (e.g. 0.3). If you do not want to display the overlay, enter "0"', 'tcd-w' ); ?></p>
    <input type="number" min="0" max="1.0" step="0.1" name="dp_options[faq_ph_overlay_opacity]" value="<?php echo esc_attr( $dp_options['faq_ph_overlay_opacity'] ); ?>">
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
</div><!-- END #tab-content-faq -->
<?php
}

function add_faq_theme_options_validate( $input ) {

  global $faq_ph_desc_writing_mode_options, $faq_ph_img_animation_type_options;

  // FAQ page
 	$input['faq_slug'] = sanitize_text_field( $input['faq_slug'] );
 	$input['faq_q_bg'] = sanitize_hex_color( $input['faq_q_bg'] );

  // Page header
 	$input['faq_ph_title'] = sanitize_text_field( $input['faq_ph_title'] );
 	$input['faq_ph_desc'] = sanitize_textarea_field( $input['faq_ph_desc'] );
 	$input['faq_ph_desc_font_size'] = absint( $input['faq_ph_desc_font_size'] );
 	$input['faq_ph_desc_font_size_sp'] = absint( $input['faq_ph_desc_font_size_sp'] );
 	$input['faq_ph_desc_color'] = sanitize_hex_color( $input['faq_ph_desc_color'] );
  if ( ! isset( $input['faq_ph_desc_writing_mode'] ) ) $input['faq_ph_desc_writing_mode'] = null;
  if ( ! array_key_exists( $input['faq_ph_desc_writing_mode'], $faq_ph_desc_writing_mode_options ) ) $input['faq_ph_desc_writing_mode'] = null;
 	$input['faq_ph_img'] = absint( $input['faq_ph_img'] );
  if ( ! isset( $input['faq_ph_img_animation_type'] ) ) $input['faq_ph_img_animation_type'] = null;
  if ( ! array_key_exists( $input['faq_ph_img_animation_type'], $faq_ph_img_animation_type_options ) ) $input['faq_ph_img_animation_type'] = null;
 	$input['faq_ph_overlay'] = sanitize_hex_color( $input['faq_ph_overlay'] );
 	$input['faq_ph_overlay_opacity'] = sanitize_text_field( $input['faq_ph_overlay_opacity'] );

	return $input;
}
