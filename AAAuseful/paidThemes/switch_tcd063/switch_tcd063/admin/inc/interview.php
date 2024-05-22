<?php
/*
 * Manage interview tab
 */

// Add default values
add_filter( 'before_getting_design_plus_option', 'add_interview_dp_default_options' );

//  Add label of interview tab
add_action( 'tcd_tab_labels', 'add_interview_tab_label' );

// Add HTML of interview tab
add_action( 'tcd_tab_panel', 'add_interview_tab_panel' );

// Register sanitize function
add_filter( 'theme_options_validate', 'add_interview_theme_options_validate' );

global $interview_ph_desc_writing_mode_options;
$interview_ph_desc_writing_mode_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Horizontal writing', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Vertical writing', 'tcd-w' ) )
);

global $interview_ph_img_animation_type_options;
$interview_ph_img_animation_type_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Zoom in', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Zoom out', 'tcd-w' ) ),
  'type3' => array( 'value' => 'type3', 'label' => __( 'None', 'tcd-w' ) )
);

function add_interview_dp_default_options( $dp_default_options ) {

  // Interview page
  $dp_default_options['interview_breadcrumb'] = __( 'Interview', 'tcd-w' );
  $dp_default_options['interview_slug'] = 'interview';

  // Interview category
  $dp_default_options['interview_category_slug'] = 'interview_category';

  // Page header
  $dp_default_options['interview_ph_title'] = 'INTERVIEW';
  $dp_default_options['interview_ph_desc'] = __( 'Enter description here.' . "\n" . 'Enter description here.', 'tcd-w' );
  $dp_default_options['interview_ph_desc_font_size'] = 40;
  $dp_default_options['interview_ph_desc_font_size_sp'] = 18;
  $dp_default_options['interview_ph_desc_color'] = '#ffffff';
  $dp_default_options['interview_ph_desc_writing_mode'] = 'type1';
  $dp_default_options['interview_ph_img'] = '';
  $dp_default_options['interview_ph_img_animation_type'] = 'type3';
  $dp_default_options['interview_ph_overlay'] = '#000000';
  $dp_default_options['interview_ph_overlay_opacity'] = 0.3;

  // Archive page
	$dp_default_options['interview_archive_catch'] = '';
	$dp_default_options['interview_archive_desc'] = '';
	$dp_default_options['interview_post_num'] = 12;

  // Single page
	$dp_default_options['interview_title_font_size'] = 34;
	$dp_default_options['interview_title_font_size_sp'] = 18;

	// Display
	$dp_default_options['interview_show_category'] = 1;
	$dp_default_options['interview_show_next_post'] = 1;
	$dp_default_options['show_related_interview'] = 1;

	return $dp_default_options;
}

function add_interview_tab_label( $tab_labels ) {
	$tab_labels['interview'] = __( 'Interview', 'tcd-w' );
	return $tab_labels;
}

function add_interview_tab_panel( $dp_options ) {

	global $dp_default_options, $interview_ph_desc_writing_mode_options, $interview_ph_img_animation_type_options;
?>
<div id="tab-content-interview">
	<?php // Interview page ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Interview page settings', 'tcd-w' ); ?></h3>
		<h4 class="theme_option_headline2"><?php _e( 'Breadcrumb settings', 'tcd-w' ); ?></h4>
		<p><?php _e( 'It is used in the breadcrumb navigation. If it is not registerd, "Interview" is displayed instead.', 'tcd-w' ); ?></p>
		<p><input type="text" name="dp_options[interview_breadcrumb]" value="<?php echo esc_attr( $dp_options['interview_breadcrumb'] ); ?>"></p>
    <h4 class="theme_option_headline2"><?php _e( 'Slug settings', 'tcd-w' ); ?></h4>
		<p><?php _e( 'It is used in URL. You can use only alphanumeric. If it is not registerd, "interview" is used instead.', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: if you want to change the slug, change permalinks from "Plain".', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: after changing the slug, you need to go to "Permalink Settings" and click "Save Changes".', 'tcd-w' ); ?></p>
		<p><input type="text" name="dp_options[interview_slug]" value="<?php echo esc_attr( $dp_options['interview_slug'] ); ?>"></p>
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
  <?php // Interview category ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Interview category settings', 'tcd-w' ); ?></h3>
    <h4 class="theme_option_headline2"><?php _e( 'Slug settings', 'tcd-w' ); ?></h4>
		<p><?php _e( 'It is used in URL. You can use only alphanumeric. If it is not registerd, "interview_category" is used instead.', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: if you want to change the slug, change permalinks from "Plain".', 'tcd-w' ); ?></p>
		<p><?php _e( 'Note: after changing the slug, you need to go to "Permalink Settings" and click "Save Changes".', 'tcd-w' ); ?></p>
		<p><input type="text" name="dp_options[interview_category_slug]" value="<?php echo esc_attr( $dp_options['interview_category_slug'] ); ?>"></p>
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Page header ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Page header settings', 'tcd-w' ); ?></h3>
    <p class="u-center"><img src="<?php echo get_template_directory_uri(); ?>/admin/assets/images/page_header.png" alt=""></p>
    <h4 class="theme_option_headline2"><?php _e( 'Title of #1', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Set the title to bottom of page header.', 'tcd-w' ); ?></p>
    <input type="text" class="regular-text" name="dp_options[interview_ph_title]" value="<?php echo esc_attr( $dp_options['interview_ph_title'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Description of #2', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set the description displayed in the center of the page header. Set the description, font color, font size, writing direction.', 'tcd-w' ); ?></p>
    <textarea class="regular-text" name="dp_options[interview_ph_desc]"><?php echo esc_textarea( $dp_options['interview_ph_desc'] ); ?></textarea>
    <p><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[interview_ph_desc_font_size]" value="<?php echo esc_attr( $dp_options['interview_ph_desc_font_size'] ); ?>"> px</p>
    <p><?php _e( 'Font size (mobile)', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[interview_ph_desc_font_size_sp]" value="<?php echo esc_attr( $dp_options['interview_ph_desc_font_size_sp'] ); ?>"> px</p>
    <div><?php _e( 'Font color', 'tcd-w' ); ?> <input type="text" name="dp_options[interview_ph_desc_color]" data-default-color="<?php echo esc_attr( $dp_default_options['interview_ph_desc_color'] ); ?>" value="<?php echo esc_attr( $dp_options['interview_ph_desc_color'] ); ?>" class="c-color-picker"></div>
    <?php foreach ( $interview_ph_desc_writing_mode_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[interview_ph_desc_writing_mode]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['interview_ph_desc_writing_mode'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Recommended image size. Width: 1450px, Height: 600px', 'tcd-w' ); ?></p>
  	<div class="image_box cf">
  		<div class="cf cf_media_field hide-if-no-js interview_ph_img">
  			<input type="hidden" value="<?php echo esc_attr( $dp_options['interview_ph_img'] ); ?>" id="interview_ph_img" name="dp_options[interview_ph_img]" class="cf_media_id">
  			<div class="preview_field"><?php if ( $dp_options['interview_ph_img'] ) { echo wp_get_attachment_image( $dp_options['interview_ph_img'], 'medium' ); } ?></div>
  			<div class="button_area">
  				<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  				<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['interview_ph_img'] ) { echo 'hidden'; } ?>">
  			</div>
  		</div>
  	</div>
    <h4 class="theme_option_headline2"><?php _e( 'Animation type of the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please select animation of background image.', 'tcd-w' ); ?></p>
    <?php foreach ( $interview_ph_img_animation_type_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[interview_ph_img_animation_type]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['interview_ph_img_animation_type'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Color overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Use overlay, to become easy to read the title on the background. Please set color of overlay.', 'tcd-w' ); ?></p>
    <input class="c-color-picker" type="text" name="dp_options[interview_ph_overlay]" data-default-color="<?php echo esc_attr( $dp_default_options['interview_ph_overlay'] ); ?>" value="<?php echo esc_attr( $dp_options['interview_ph_overlay'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Opacity of the overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set opacity of overlay (e.g. 0.3). If you do not want to display the overlay, enter "0"', 'tcd-w' ); ?></p>
    <input type="number" min="0" max="1.0" step="0.1" name="dp_options[interview_ph_overlay_opacity]" value="<?php echo esc_attr( $dp_options['interview_ph_overlay_opacity'] ); ?>">
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
  <?php // Archive page ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Archive Page Settings', 'tcd-w' ); ?></h3>
  	<h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Set the catchphrase is displayed under the page header.', 'tcd-w' ); ?></p>
    <input class="regular-text" type="text" name="dp_options[interview_archive_catch]" value="<?php echo esc_attr( $dp_options['interview_archive_catch'] ); ?>">
  	<h4 class="theme_option_headline2"><?php _e( 'Description', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Set a description to be displayed after the heading under the page header.', 'tcd-w' ); ?></p>
    <textarea class="large-text" name="dp_options[interview_archive_desc]"><?php echo esc_textarea( $dp_options['interview_archive_desc'] ); ?></textarea>
    <h4 class="theme_option_headline2"><?php _e( 'Number of posts to display', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the number of posts to be displayed in archive page. ', 'tcd-w' ); ?></p>
    <input class="tiny-text" type="number" min="1" step="1" name="dp_options[interview_post_num]" value="<?php echo esc_attr( $dp_options['interview_post_num'] ); ?>"><?php _e( ' posts', 'tcd-w' ); ?>
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Single page ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Single Page Settings', 'tcd-w' ); ?></h3>
  	<h4 class="theme_option_headline2"><?php _e( 'Font size settings', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the font size of the single page title.', 'tcd-w' ); ?></p>
  	<p><label><?php _e( 'Post title', 'tcd-w' ); ?> <input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[interview_title_font_size]" value="<?php echo esc_attr( $dp_options['interview_title_font_size'] ); ?>"> <span>px</span></label></p>
  	<p><label><?php _e( 'Post title (mobile)', 'tcd-w' ); ?> <input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[interview_title_font_size_sp]" value="<?php echo esc_attr( $dp_options['interview_title_font_size_sp'] ); ?>"> <span>px</span></label></p>
  	<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Display ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Display settings', 'tcd-w' ); ?></h3>
    <h4 class="theme_option_headline2"><?php _e( 'Settings for archive page and single page', 'tcd-w' ); ?></h4>
    <ul>
      <li><label><input name="dp_options[interview_show_category]" type="checkbox" value="1" <?php checked( '1', $dp_options['interview_show_category'] ); ?>><?php _e( 'Display category', 'tcd-w' ); ?></label></li>
    </ul>
    <h4 class="theme_option_headline2"><?php _e( 'Settings for single page', 'tcd-w' ); ?></h4>
    <ul>
    	<li><label><input name="dp_options[interview_show_next_post]" type="checkbox" value="1" <?php checked( '1', $dp_options['interview_show_next_post'] ); ?>><?php _e( 'Display next previous post link', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[show_related_interview]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_related_interview'] ); ?>><?php _e( 'Display related interviews', 'tcd-w' ); ?></label></li>
    </ul>
    <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
</div><!-- END #tab-content-interview -->
<?php
}

function add_interview_theme_options_validate( $input ) {

  global $interview_ph_desc_writing_mode_options, $interview_ph_img_animation_type_options;

  // Interview page
 	$input['interview_breadcrumb'] = sanitize_text_field( $input['interview_breadcrumb'] );
 	$input['interview_slug'] = sanitize_text_field( $input['interview_slug'] );

  // Interview category
 	$input['interview_category_slug'] = sanitize_text_field( $input['interview_category_slug'] );

  // Page header
 	$input['interview_ph_title'] = sanitize_text_field( $input['interview_ph_title'] );
 	$input['interview_ph_desc'] = sanitize_textarea_field( $input['interview_ph_desc'] );
 	$input['interview_ph_desc_font_size'] = absint( $input['interview_ph_desc_font_size'] );
 	$input['interview_ph_desc_font_size_sp'] = absint( $input['interview_ph_desc_font_size_sp'] );
 	$input['interview_ph_desc_color'] = sanitize_hex_color( $input['interview_ph_desc_color'] );
  if ( ! isset( $input['interview_ph_desc_writing_mode'] ) ) $input['interview_ph_desc_writing_mode'] = null;
  if ( ! array_key_exists( $input['interview_ph_desc_writing_mode'], $interview_ph_desc_writing_mode_options ) ) $input['interview_ph_desc_writing_mode'] = null;
 	$input['interview_ph_img'] = absint( $input['interview_ph_img'] );
  if ( ! isset( $input['interview_ph_img_animation_type'] ) ) $input['interview_ph_img_animation_type'] = null;
  if ( ! array_key_exists( $input['interview_ph_img_animation_type'], $interview_ph_img_animation_type_options ) ) $input['interview_ph_img_animation_type'] = null;
 	$input['interview_ph_overlay'] = sanitize_hex_color( $input['interview_ph_overlay'] );
 	$input['interview_ph_overlay_opacity'] = sanitize_text_field( $input['interview_ph_overlay_opacity'] );

  // Archive page
  $input['interview_archive_catch'] = sanitize_text_field( $input['interview_archive_catch'] );
  $input['interview_archive_desc'] = sanitize_textarea_field( $input['interview_archive_desc'] );
  $input['interview_post_num'] = absint( $input['interview_post_num'] );

  // Single page
 	$input['interview_title_font_size'] = absint( $input['interview_title_font_size'] );
 	$input['interview_title_font_size_sp'] = absint( $input['interview_title_font_size_sp'] );

 	// Display
 	if ( ! isset( $input['interview_show_category'] ) ) $input['interview_show_category'] = null;
  $input['interview_show_category'] = ( $input['interview_show_category'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['interview_show_next_post'] ) ) $input['interview_show_next_post'] = null;
  $input['interview_show_next_post'] = ( $input['interview_show_next_post'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_related_interview'] ) ) $input['show_related_interview'] = null;
  $input['show_related_interview'] = ( $input['show_related_interview'] == 1 ? 1 : 0 );

	return $input;
}
