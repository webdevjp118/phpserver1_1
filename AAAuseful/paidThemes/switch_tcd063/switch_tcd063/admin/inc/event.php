<?php
/*
 * Manage event tab
 */

// Add default values
add_filter( 'before_getting_design_plus_option', 'add_event_dp_default_options' );

//  Add label of event tab
add_action( 'tcd_tab_labels', 'add_event_tab_label' );

// Add HTML of event tab
add_action( 'tcd_tab_panel', 'add_event_tab_panel' );

// Register sanitize function
add_filter( 'theme_options_validate', 'add_event_theme_options_validate' );

global $event_ph_desc_writing_mode_options;
$event_ph_desc_writing_mode_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Horizontal writing', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Vertical writing', 'tcd-w' ) )
);

global $event_ph_img_animation_type_options;
$event_ph_img_animation_type_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Zoom in', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Zoom out', 'tcd-w' ) ),
  'type3' => array( 'value' => 'type3', 'label' => __( 'None', 'tcd-w' ) )
);

function add_event_dp_default_options( $dp_default_options ) {

  // Event page
  $dp_default_options['event_breadcrumb'] = __( 'Event', 'tcd-w' );
  $dp_default_options['event_slug'] = 'event';

  // Page header
  $dp_default_options['event_ph_title'] = 'EVENT';
  $dp_default_options['event_ph_desc'] = __( 'Enter description here.' . "\n" . 'Enter description here.', 'tcd-w' );
  $dp_default_options['event_ph_desc_font_size'] = 40;
  $dp_default_options['event_ph_desc_font_size_sp'] = 18;
  $dp_default_options['event_ph_desc_color'] = '#ffffff';
  $dp_default_options['event_ph_desc_writing_mode'] = 'type1';
  $dp_default_options['event_ph_img'] = '';
  $dp_default_options['event_ph_img_animation_type'] = 'type3';
  $dp_default_options['event_ph_overlay'] = '#000000';
  $dp_default_options['event_ph_overlay_opacity'] = 0.3;

  // Archive page
	$dp_default_options['event_post_num'] = 10;

  // Single page
	$dp_default_options['event_title_font_size'] = 32;
	$dp_default_options['event_title_font_size_sp'] = 22;
	$dp_default_options['event_content_font_size'] = 14;
	$dp_default_options['event_content_font_size_sp'] = 14;

	// Display
	$dp_default_options['event_show_date'] = 1;
	$dp_default_options['event_show_thumbnail'] = 1;
	$dp_default_options['event_show_sns'] = 1;
	$dp_default_options['event_show_next_post'] = 1;
	$dp_default_options['show_related_event'] = 1;

	return $dp_default_options;
}

function add_event_tab_label( $tab_labels ) {
	$tab_labels['event'] = __( 'Event', 'tcd-w' );
	return $tab_labels;
}

function add_event_tab_panel( $dp_options ) {

	global $dp_default_options, $event_ph_desc_writing_mode_options, $event_ph_img_animation_type_options;
?>
<div id="tab-content-event">
	<?php // Event page ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Event page settings', 'tcd-w' ); ?></h3>
		<h4 class="theme_option_headline2"><?php _e( 'Breadcrumb settings', 'tcd-w' ); ?></h4>
		<p><?php _e( 'It is used in the breadcrumb navigation. If it is not registerd, "Event" is displayed instead.', 'tcd-w' ); ?></p>
		<p><input type="text" name="dp_options[event_breadcrumb]" value="<?php echo esc_attr( $dp_options['event_breadcrumb'] ); ?>"></p>
    <h4 class="theme_option_headline2"><?php _e( 'Slug settings', 'tcd-w' ); ?></h4>
		<p><?php _e( 'It is used in URL. You can use only alphanumeric. If it is not registerd, "event" is used instead.', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: if you want to change the slug, change permalinks from "Plain".', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: after changing the slug, you need to go to "Permalink Settings" and click "Save Changes".', 'tcd-w' ); ?></p>
		<p><input type="text" name="dp_options[event_slug]" value="<?php echo esc_attr( $dp_options['event_slug'] ); ?>"></p>
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Page header ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Page header settings', 'tcd-w' ); ?></h3>
    <p class="u-center"><img src="<?php echo get_template_directory_uri(); ?>/admin/assets/images/page_header.png" alt=""></p>
    <h4 class="theme_option_headline2"><?php _e( 'Title of #1', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Set the title to bottom of page header.', 'tcd-w' ); ?></p>
    <input type="text" class="regular-text" name="dp_options[event_ph_title]" value="<?php echo esc_attr( $dp_options['event_ph_title'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Description of #2', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set the description displayed in the center of the page header. Set the description, font color, font size, writing direction.', 'tcd-w' ); ?></p>
    <textarea class="regular-text" name="dp_options[event_ph_desc]"><?php echo esc_textarea( $dp_options['event_ph_desc'] ); ?></textarea>
    <p><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[event_ph_desc_font_size]" value="<?php echo esc_attr( $dp_options['event_ph_desc_font_size'] ); ?>"> px</p>
    <p><?php _e( 'Font size (mobile)', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[event_ph_desc_font_size_sp]" value="<?php echo esc_attr( $dp_options['event_ph_desc_font_size_sp'] ); ?>"> px</p>
    <div><?php _e( 'Font color', 'tcd-w' ); ?> <input type="text" name="dp_options[event_ph_desc_color]" data-default-color="<?php echo esc_attr( $dp_default_options['event_ph_desc_color'] ); ?>" value="<?php echo esc_attr( $dp_options['event_ph_desc_color'] ); ?>" class="c-color-picker"></div>
    <?php foreach ( $event_ph_desc_writing_mode_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[event_ph_desc_writing_mode]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['event_ph_desc_writing_mode'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Recommended image size. Width: 1450px, Height: 600px', 'tcd-w' ); ?></p>
  	<div class="image_box cf">
  		<div class="cf cf_media_field hide-if-no-js event_ph_img">
  			<input type="hidden" value="<?php echo esc_attr( $dp_options['event_ph_img'] ); ?>" id="event_ph_img" name="dp_options[event_ph_img]" class="cf_media_id">
  			<div class="preview_field"><?php if ( $dp_options['event_ph_img'] ) { echo wp_get_attachment_image( $dp_options['event_ph_img'], 'medium' ); } ?></div>
  			<div class="button_area">
  				<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  				<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['event_ph_img'] ) { echo 'hidden'; } ?>">
  			</div>
  		</div>
  	</div>
    <h4 class="theme_option_headline2"><?php _e( 'Animation type of the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please select animation of background image.', 'tcd-w' ); ?></p>
    <?php foreach ( $event_ph_img_animation_type_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[event_ph_img_animation_type]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['event_ph_img_animation_type'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Color overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Use overlay, to become easy to read the title on the background. Please set color of overlay.', 'tcd-w' ); ?></p>
    <input class="c-color-picker" type="text" name="dp_options[event_ph_overlay]" data-default-color="<?php echo esc_attr( $dp_default_options['event_ph_overlay'] ); ?>" value="<?php echo esc_attr( $dp_options['event_ph_overlay'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Opacity of the overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set opacity of overlay (e.g. 0.3). If you do not want to display the overlay, enter "0"', 'tcd-w' ); ?></p>
    <input type="number" min="0" max="1.0" step="0.1" name="dp_options[event_ph_overlay_opacity]" value="<?php echo esc_attr( $dp_options['event_ph_overlay_opacity'] ); ?>">
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
  <?php // Archive page ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Archive Page Settings', 'tcd-w' ); ?></h3>
    <h4 class="theme_option_headline2"><?php _e( 'Number of posts to display', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the number of posts to be displayed in archive page.', 'tcd-w' ); ?></p>
    <input class="tiny-text" type="number" min="1" step="1" name="dp_options[event_post_num]" value="<?php echo esc_attr( $dp_options['event_post_num'] ); ?>"><?php _e( ' posts', 'tcd-w' ); ?>
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Single page ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Single Page Settings', 'tcd-w' ); ?></h3>
  	<h4 class="theme_option_headline2"><?php _e( 'Font size settings', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the font size of the single page.', 'tcd-w' ); ?></p>
  	<p><label><?php _e( 'Post title', 'tcd-w' ); ?> <input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[event_title_font_size]" value="<?php echo esc_attr( $dp_options['event_title_font_size'] ); ?>"> <span>px</span></label></p>
  	<p><label><?php _e( 'Post title (mobile)', 'tcd-w' ); ?> <input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[event_title_font_size_sp]" value="<?php echo esc_attr( $dp_options['event_title_font_size_sp'] ); ?>"> <span>px</span></label></p>
  	<p><label><?php _e( 'Post contents', 'tcd-w' ); ?> <input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[event_content_font_size]" value="<?php echo esc_attr( $dp_options['event_content_font_size'] ); ?>"> <span>px</span></label></p>
  	<p><label><?php _e( 'Post contents (mobile)', 'tcd-w' ); ?> <input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[event_content_font_size_sp]" value="<?php echo esc_attr( $dp_options['event_content_font_size_sp'] ); ?>"> <span>px</span></label></p>
  	<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Display ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Display settings', 'tcd-w' ); ?></h3>
    <h4 class="theme_option_headline2"><?php _e( 'Settings for archive page and single page', 'tcd-w' ); ?></h4>
    <ul>
      <li><label><input name="dp_options[event_show_date]" type="checkbox" value="1" <?php checked( '1', $dp_options['event_show_date'] ); ?>><?php _e( 'Display date', 'tcd-w' ); ?></label></li>
    </ul>
    <h4 class="theme_option_headline2"><?php _e( 'Settings for single page', 'tcd-w' ); ?></h4>
    <ul>
    	<li><label><input name="dp_options[event_show_thumbnail]" type="checkbox" value="1" <?php checked( '1', $dp_options['event_show_thumbnail'] ); ?>><?php _e( 'Display thumbnail', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[event_show_sns]" type="checkbox" value="1" <?php checked( '1', $dp_options['event_show_sns'] ); ?>><?php _e( 'Display share buttons after the article', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[event_show_next_post]" type="checkbox" value="1" <?php checked( '1', $dp_options['event_show_next_post'] ); ?>><?php _e( 'Display next previous post link', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[show_related_event]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_related_event'] ); ?>><?php _e( 'Display related events', 'tcd-w' ); ?></label></li>
    </ul>
    <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
</div><!-- END #tab-content4 -->
<?php
}

function add_event_theme_options_validate( $input ) {

  global $event_ph_desc_writing_mode_options, $event_ph_img_animation_type_options;

  // Event page
 	$input['event_breadcrumb'] = sanitize_text_field( $input['event_breadcrumb'] );
 	$input['event_slug'] = sanitize_text_field( $input['event_slug'] );

  // Page header
 	$input['event_ph_title'] = sanitize_text_field( $input['event_ph_title'] );
 	$input['event_ph_desc'] = sanitize_textarea_field( $input['event_ph_desc'] );
 	$input['event_ph_desc_font_size'] = absint( $input['event_ph_desc_font_size'] );
 	$input['event_ph_desc_font_size_sp'] = absint( $input['event_ph_desc_font_size_sp'] );
 	$input['event_ph_desc_color'] = sanitize_hex_color( $input['event_ph_desc_color'] );
  if ( ! isset( $input['event_ph_desc_writing_mode'] ) ) $input['event_ph_desc_writing_mode'] = null;
  if ( ! array_key_exists( $input['event_ph_desc_writing_mode'], $event_ph_desc_writing_mode_options ) ) $input['event_ph_desc_writing_mode'] = null;
 	$input['event_ph_img'] = absint( $input['event_ph_img'] );
  if ( ! isset( $input['event_ph_img_animation_type'] ) ) $input['event_ph_img_animation_type'] = null;
  if ( ! array_key_exists( $input['event_ph_img_animation_type'], $event_ph_img_animation_type_options ) ) $input['event_ph_img_animation_type'] = null;
 	$input['event_ph_overlay'] = sanitize_hex_color( $input['event_ph_overlay'] );
 	$input['event_ph_overlay_opacity'] = sanitize_text_field( $input['event_ph_overlay_opacity'] );

  // Archive page
  $input['event_post_num'] = absint( $input['event_post_num'] );

  // Single page
 	$input['event_title_font_size'] = absint( $input['event_title_font_size'] );
 	$input['event_title_font_size_sp'] = absint( $input['event_title_font_size_sp'] );
 	$input['event_content_font_size'] = absint( $input['event_content_font_size'] );
 	$input['event_content_font_size_sp'] = absint( $input['event_content_font_size_sp'] );

 	// Display
 	if ( ! isset( $input['event_show_date'] ) ) $input['event_show_date'] = null;
  $input['event_show_date'] = ( $input['event_show_date'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['event_show_thumbnail'] ) ) $input['event_show_thumbnail'] = null;
  $input['event_show_thumbnail'] = ( $input['event_show_thumbnail'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['event_show_sns'] ) ) $input['event_show_sns'] = null;
  $input['event_show_sns'] = ( $input['event_show_sns'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['event_show_next_post'] ) ) $input['event_show_next_post'] = null;
  $input['event_show_next_post'] = ( $input['event_show_next_post'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_related_event'] ) ) $input['show_related_event'] = null;
  $input['show_related_event'] = ( $input['show_related_event'] == 1 ? 1 : 0 );

	return $input;
}
