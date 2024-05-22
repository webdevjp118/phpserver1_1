<?php

/*
 * Manage blog tab
 */

// Add default values
add_filter( 'before_getting_design_plus_option', 'add_blog_dp_default_options' );

//  Add label of blog tab
add_action( 'tcd_tab_labels', 'add_blog_tab_label' );

// Add HTML of blog tab
add_action( 'tcd_tab_panel', 'add_blog_tab_panel' );

// Register sanitize function
add_filter( 'theme_options_validate', 'add_blog_theme_options_validate' );

global $ph_desc_writing_mode_options;
$ph_desc_writing_mode_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Horizontal writing', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Vertical writing', 'tcd-w' ) )
);

global $ph_img_animation_type_options;
$ph_img_animation_type_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Zoom in', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Zoom out', 'tcd-w' ) ),
  'type3' => array( 'value' => 'type3', 'label' => __( 'None', 'tcd-w' ) )
);

global $pagenation_type_options;
$pagenation_type_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Page numbers', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Read more button', 'tcd-w' ) )
);

global $month_type_options;
$month_type_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'English', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Japanese', 'tcd-w' ) )
);

function add_blog_dp_default_options( $dp_default_options ) {

  // Page header
  $dp_default_options['ph_title'] = 'BLOG';
  $dp_default_options['ph_desc'] = __( 'Enter description here.' . "\n" . 'Enter description here.', 'tcd-w' );
  $dp_default_options['ph_desc_font_size'] = 40;
  $dp_default_options['ph_desc_font_size_sp'] = 18;
  $dp_default_options['ph_desc_color'] = '#ffffff';
  $dp_default_options['ph_desc_writing_mode'] = 'type1';
  $dp_default_options['ph_img'] = '';
  $dp_default_options['ph_img_animation_type'] = 'type3';
  $dp_default_options['ph_overlay'] = '#000000';
  $dp_default_options['ph_overlay_opacity'] = 0.3;

  // Archive page
	$dp_default_options['archive_catch'] = '';

  // Single page
	$dp_default_options['title_font_size'] = 32;
	$dp_default_options['title_font_size_sp'] = 20;
	$dp_default_options['content_font_size'] = 16;
	$dp_default_options['content_font_size_sp'] = 14;
	$dp_default_options['pagenation_type'] = 'type1';

	// Display
	$dp_default_options['show_date'] = 1;
	$dp_default_options['show_category'] = 1;
	$dp_default_options['show_tag'] = 1;
	$dp_default_options['show_author'] = 1;
	//$dp_default_options['show_thumbnail'] = 1;
	//$dp_default_options['show_sns_top'] = 1;
	$dp_default_options['show_sns_btm'] = 1;
	$dp_default_options['show_next_post'] = 1;
	$dp_default_options['show_related_post'] = 1;
	$dp_default_options['show_comment'] = 1;
	$dp_default_options['show_trackback'] = 1;
	$dp_default_options['month_type'] = 'type1';

  // Single page banner
  //for ( $i = 1; $i <= 6; $i++ ) {
  for ( $i = 3; $i <= 6; $i++ ) {
	  $dp_default_options['single_ad_code' . $i] = '';
	  $dp_default_options['single_ad_image' . $i] = false;
	  $dp_default_options['single_ad_url' . $i] = '';
  }

  // Single page banner (mobile)
	$dp_default_options['single_mobile_ad_code1'] = '';
	$dp_default_options['single_mobile_ad_image1'] = false;
	$dp_default_options['single_mobile_ad_url1'] = '';

	return $dp_default_options;

}

function add_blog_tab_label( $tab_labels ) {
	$tab_labels['blog'] = __( 'Blog', 'tcd-w' );
	return $tab_labels;
}

function add_blog_tab_panel( $dp_options ) {

	global $dp_default_options, $ph_desc_writing_mode_options, $ph_img_animation_type_options, $month_type_options, $pagenation_type_options;
?>
<div id="tab-content-blog">
	<?php // Page header ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Page header settings', 'tcd-w' ); ?></h3>
    <p class="u-center"><img src="<?php echo get_template_directory_uri(); ?>/admin/assets/images/page_header.png" alt=""></p>
    <h4 class="theme_option_headline2"><?php _e( 'Title of #1', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Set the title to bottom of page header.', 'tcd-w' ); ?></p>
    <input type="text" class="regular-text" name="dp_options[ph_title]" value="<?php echo esc_attr( $dp_options['ph_title'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Description of #2', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set the description displayed in the center of the page header. Set the description, font color, font size, writing direction.', 'tcd-w' ); ?></p>
    <textarea class="regular-text" name="dp_options[ph_desc]"><?php echo esc_textarea( $dp_options['ph_desc'] ); ?></textarea>
    <p><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[ph_desc_font_size]" value="<?php echo esc_attr( $dp_options['ph_desc_font_size'] ); ?>"> px</p>
    <p><?php _e( 'Font size (mobile)', 'tcd-w' ); ?> <input type="number" class="tiny-text" min="1" step="1" name="dp_options[ph_desc_font_size_sp]" value="<?php echo esc_attr( $dp_options['ph_desc_font_size_sp'] ); ?>"> px</p>
    <div><?php _e( 'Font color', 'tcd-w' ); ?> <input type="text" name="dp_options[ph_desc_color]" data-default-color="<?php echo esc_attr( $dp_default_options['ph_desc_color'] ); ?>" value="<?php echo esc_attr( $dp_options['ph_desc_color'] ); ?>" class="c-color-picker"></div>
    <?php foreach ( $ph_desc_writing_mode_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[ph_desc_writing_mode]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['ph_desc_writing_mode'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Recommended image size. Width: 1450px, Height: 600px', 'tcd-w' ); ?></p>
  	<div class="image_box cf">
  		<div class="cf cf_media_field hide-if-no-js ph_img">
  			<input type="hidden" value="<?php echo esc_attr( $dp_options['ph_img'] ); ?>" id="ph_img" name="dp_options[ph_img]" class="cf_media_id">
  			<div class="preview_field"><?php if ( $dp_options['ph_img'] ) { echo wp_get_attachment_image( $dp_options['ph_img'], 'medium' ); } ?></div>
  			<div class="button_area">
  				<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  				<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['ph_img'] ) { echo 'hidden'; } ?>">
  			</div>
  		</div>
  	</div>
    <h4 class="theme_option_headline2"><?php _e( 'Animation type of the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please select animation of background image.', 'tcd-w' ); ?></p>
    <?php foreach ( $ph_img_animation_type_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[ph_img_animation_type]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['ph_img_animation_type'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <h4 class="theme_option_headline2"><?php _e( 'Color overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Use overlay, to become easy to read the title on the background. Please set color of overlay.', 'tcd-w' ); ?></p>
    <input class="c-color-picker" type="text" name="dp_options[ph_overlay]" data-default-color="<?php echo esc_attr( $dp_default_options['ph_overlay'] ); ?>" value="<?php echo esc_attr( $dp_options['ph_overlay'] ); ?>">
    <h4 class="theme_option_headline2"><?php _e( 'Opacity of the overlay on the background image', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please set opacity of overlay (e.g. 0.3). If you do not want to display the overlay, enter "0"', 'tcd-w' ); ?></p>
    <input type="number" min="0" max="1.0" step="0.1" name="dp_options[ph_overlay_opacity]" value="<?php echo esc_attr( $dp_options['ph_overlay_opacity'] ); ?>">
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
  <?php // Archive page ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Archive Page Settings', 'tcd-w' ); ?></h3>
  	<h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
    <p><?php _e( 'The catchphrase is displayed after the page header.', 'tcd-w' ); ?></p>
    <input class="regular-text" type="text" name="dp_options[archive_catch]" value="<?php echo esc_attr( $dp_options['archive_catch'] ); ?>">
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
  <?php // Single page ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Single Page Settings', 'tcd-w' ); ?></h3>
  	<h4 class="theme_option_headline2"><?php _e( 'Font size of post title', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the font size of the single page title.', 'tcd-w' ); ?></p>
  	<input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[title_font_size]" value="<?php echo esc_attr( $dp_options['title_font_size'] ); ?>"> <span>px</span>
  	<h4 class="theme_option_headline2"><?php _e( 'Font size of post title (mobile)', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the font size of the single page title for mobile.', 'tcd-w' ); ?></p>
  	<input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[title_font_size_sp]" value="<?php echo esc_attr( $dp_options['title_font_size_sp'] ); ?>"> <span>px</span>
  	<h4 class="theme_option_headline2"><?php _e( 'Font size of post contents', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the font size of the single page contents.', 'tcd-w' ); ?></p>
  	<input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[content_font_size]" value="<?php echo esc_attr( $dp_options['content_font_size'] ); ?>"> <span>px</span>
  	<h4 class="theme_option_headline2"><?php _e( 'Font size of post contents (mobile)', 'tcd-w' ); ?></h4>
    <p><?php _e( 'You can set the font size of the single page contents for mobile.', 'tcd-w' ); ?></p>
  	<input class="hankaku tiny-text" type="number" min="1" step="1" name="dp_options[content_font_size_sp]" value="<?php echo esc_attr( $dp_options['content_font_size_sp'] ); ?>"> <span>px</span>
  	<h4 class="theme_option_headline2"><?php _e( 'Pagenation settings', 'tcd-w' ); ?></h4>
    <p><?php _e( 'By inserting the tag <! - nextpage -> in the article body, you can split an article into multiple pages. You can select pagenation, \"Pager\" or \"Read more button\".', 'tcd-w' ); ?></p>
    <fieldset class="cf radio_images">
      <?php foreach ( $pagenation_type_options as $option ) : ?>
      <label>
        <input type="radio" name="dp_options[pagenation_type]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['pagenation_type'] ); ?>>
        <?php echo esc_html_e( $option['label'] ); ?>
        <img src="<?php echo get_template_directory_uri(); ?>/admin/assets/images/page_link_<?php echo esc_attr( $option['value'] ); ?>.jpg" alt="">
      </label>
      <?php endforeach; ?>
    </fieldset>
  	<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Display ?>
  <div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Display settings', 'tcd-w' ); ?></h3>
    <p><?php _e( 'Please check items to display.', 'tcd-w' ); ?></p>
    <h4 class="theme_option_headline2"><?php _e( 'Settings for archive page and single page', 'tcd-w' ); ?></h4>
    <ul>
        <li><label><input name="dp_options[show_date]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_date'] ); ?>><?php _e( 'Display date', 'tcd-w' ); ?></label></li>
        <li><label><input name="dp_options[show_category]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_category'] ); ?>><?php _e( 'Display category', 'tcd-w' ); ?></label></li>
    </ul>
    <h4 class="theme_option_headline2"><?php _e( 'Settings for single page', 'tcd-w' ); ?></h4>
    <ul>
    	<li><label><input name="dp_options[show_tag]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_tag'] ); ?>><?php _e( 'Display tags', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[show_author]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_author'] ); ?>><?php _e( 'Display author', 'tcd-w' ); ?></label></li>
      <?php /*
    	<li><label><input name="dp_options[show_thumbnail]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_thumbnail'] ); ?>><?php _e( 'Display thumbnail', 'tcd-w' ); ?></label></li>
      <li><label><input name="dp_options[show_sns_top]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_sns_top'] ); ?>><?php _e( 'Display share buttons before the article', 'tcd-w' ); ?></label></li>
      */ ?>
    	<li><label><input name="dp_options[show_sns_btm]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_sns_btm'] ); ?>><?php _e( 'Display share buttons after the article', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[show_next_post]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_next_post'] ); ?>><?php _e( 'Display next previous post link', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[show_related_post]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_related_post'] ); ?>><?php _e( 'Display related post', 'tcd-w' ); ?></label></li>
    	<li><label><input name="dp_options[show_comment]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_comment'] ); ?>><?php _e( 'Display comment', 'tcd-w' ); ?></label></li>
    	<li><label><input id="dp_options[show_trackback]" name="dp_options[show_trackback]" type="checkbox" value="1" <?php checked( '1', $dp_options['show_trackback'] ); ?>><?php _e( 'Display trackbacks', 'tcd-w' ); ?></label></li>
    </ul>
    <h4 class="theme_option_headline2"><?php _e( 'How to display months', 'tcd-w' ); ?></h4>
    <p><?php _e( 'Please select which language to use to display months.', 'tcd-w' ); ?></p>
    <?php foreach ( $month_type_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[month_type]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['month_type'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
    <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
	<?php // Single page banner ?>
  <?php /*
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Single page banner settings', 'tcd-w' ); ?>1</h3>
  	<p><?php _e( 'This banner will be displayed before contents.', 'tcd-w' ); ?></p>
  	<div class="sub_box cf">
  		<h3 class="theme_option_subbox_headline"><?php _e( 'Left banner', 'tcd-w' ); ?></h3>
			<div class="sub_box_content">
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Banner code', 'tcd-w' ); ?></h4>
  				<p><?php _e( 'If you are using google adsense, enter all code below.', 'tcd-w' ); ?></p>
  				<textarea class="large-text" rows="10" name="dp_options[single_ad_code1]"><?php echo esc_textarea( $dp_options['single_ad_code1'] ); ?></textarea>
  			</div>
  			<p><?php _e( 'If you are not using google adsense, you can register your banner image and affiliate code individually.', 'tcd-w' ); ?></p>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register banner image.', 'tcd-w' ); _e( 'Recommend size. Width:300px Height:250px', 'tcd-w' ); ?></h4>
  				<div class="image_box cf">
  					<div class="cf cf_media_field hide-if-no-js single_ad_image1">
  						<input type="hidden" value="<?php echo esc_attr( $dp_options['single_ad_image1'] ); ?>" id="single_ad_image1" name="dp_options[single_ad_image1]" class="cf_media_id">
  						<div class="preview_field"><?php if ( $dp_options['single_ad_image1'] ) { echo wp_get_attachment_image( $dp_options['single_ad_image1'], 'medium' ); } ?></div>
  						<div class="button_area">
  							<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  							<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['single_ad_image1'] ) { echo 'hidden'; } ?>">
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register affiliate code', 'tcd-w' ); ?></h4>
  				<input class="regular-text" type="text" name="dp_options[single_ad_url1]" value="<?php echo esc_attr( $dp_options['single_ad_url1'] ); ?>">
  				<input type="submit" class="button-ml ajax_button" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>">
  			</div>
			</div>
  	</div><!-- END .sub_box -->
  	<div class="sub_box cf">
  		<h3 class="theme_option_subbox_headline"><?php _e( 'Right banner', 'tcd-w' ); ?></h3>
			<div class="sub_box_content">
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Banner code', 'tcd-w' ); ?></h4>
  				<p><?php _e( 'If you are using google adsense, enter all code below.', 'tcd-w' ); ?></p>
  				<textarea class="large-text" rows="10" name="dp_options[single_ad_code2]"><?php echo esc_textarea( $dp_options['single_ad_code2'] ); ?></textarea>
  			</div>
  			<p><?php _e( 'If you are not using google adsense, you can register your banner image and affiliate code individually.', 'tcd-w' );  ?></p>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register banner image.', 'tcd-w' ); _e( 'Recommend size. Width:300px Height:250px', 'tcd-w' ); ?></h4>
  				<div class="image_box cf">
  					<div class="cf cf_media_field hide-if-no-js single_ad_image2">
  						<input type="hidden" value="<?php echo esc_attr( $dp_options['single_ad_image2'] ); ?>" id="single_ad_image2" name="dp_options[single_ad_image2]" class="cf_media_id">
  						<div class="preview_field"><?php if ( $dp_options['single_ad_image2'] ) { echo wp_get_attachment_image($dp_options['single_ad_image2'], 'medium' ); } ?></div>
  						<div class="button_area">
  							<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  							<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['single_ad_image2'] ) { echo 'hidden'; } ?>">
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register affiliate code', 'tcd-w' );  ?></h4>
  				<input class="regular-text" type="text" name="dp_options[single_ad_url2]" value="<?php echo esc_attr( $dp_options['single_ad_url2'] ); ?>">
  				<input type="submit" class="button-ml ajax_button" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>">
  			</div>
  		</div><!-- END .sub_box -->
		</div>
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
  </div><!-- END .theme_option_field -->
  */ ?>
	<div class="theme_option_field cf">
    <?php /*
    <h3 class="theme_option_headline"><?php _e( 'Single page banner settings', 'tcd-w' ); ?>2</h3>
    */ ?>
  	<h3 class="theme_option_headline"><?php _e( 'Single page banner settings', 'tcd-w' ); ?>1</h3>
  	<p><?php _e( 'This banner will be displayed after contents.', 'tcd-w' ); ?></p>
  	<div class="sub_box cf">
  		<h3 class="theme_option_subbox_headline"><?php _e( 'Left banner', 'tcd-w' ); ?></h3>
			<div class="sub_box_content">
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Banner code', 'tcd-w' ); ?></h4>
  				<p><?php _e( 'If you are using google adsense, enter all code below.', 'tcd-w' ); ?></p>
  				<textarea class="large-text" rows="10" name="dp_options[single_ad_code3]"><?php echo esc_textarea( $dp_options['single_ad_code3'] ); ?></textarea>
  			</div>
            <p><?php _e( 'If you are not using google adsense, you can register your banner image and affiliate code individually. If an advertisement code is entered in the above setting field, the following setting will be invalid.', 'tcd-w' ); ?></p>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register banner image.', 'tcd-w' ); _e( 'Recommend size. Width:300px Height:250px', 'tcd-w' ); ?></h4>
  				<div class="image_box cf">
  					<div class="cf cf_media_field hide-if-no-js single_ad_image3">
  						<input type="hidden" value="<?php echo esc_attr( $dp_options['single_ad_image3'] ); ?>" id="single_ad_image3" name="dp_options[single_ad_image3]" class="cf_media_id">
  						<div class="preview_field"><?php if ( $dp_options['single_ad_image3'] ) { echo wp_get_attachment_image( $dp_options['single_ad_image3'], 'medium' ); } ?></div>
  						<div class="button_area">
  							<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  							<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['single_ad_image3'] ) { echo 'hidden'; } ?>">
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register affiliate code', 'tcd-w' ); ?></h4>
  				<input class="regular-text" type="text" name="dp_options[single_ad_url3]" value="<?php echo esc_attr( $dp_options['single_ad_url3'] ); ?>">
  				<input type="submit" class="button-ml ajax_button" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>">
  			</div>
			</div>
  	</div><!-- END .sub_box -->
  	<div class="sub_box cf">
  		<h3 class="theme_option_subbox_headline"><?php _e( 'Right banner', 'tcd-w' ); ?></h3>
			<div class="sub_box_content">
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Banner code', 'tcd-w' ); ?></h4>
  				<p><?php _e( 'If you are using google adsense, enter all code below.', 'tcd-w' ); ?></p>
  				<textarea class="large-text" rows="10" name="dp_options[single_ad_code4]"><?php echo esc_textarea( $dp_options['single_ad_code4'] ); ?></textarea>
  			</div>
            <p><?php _e( 'If you are not using google adsense, you can register your banner image and affiliate code individually. If an advertisement code is entered in the above setting field, the following setting will be invalid.', 'tcd-w' ); ?></p>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register banner image.', 'tcd-w' ); _e( 'Recommend size. Width:300px Height:250px', 'tcd-w' ); ?></h4>
  				<div class="image_box cf">
  					<div class="cf cf_media_field hide-if-no-js single_ad_image4">
  						<input type="hidden" value="<?php echo esc_attr( $dp_options['single_ad_image4'] ); ?>" id="single_ad_image4" name="dp_options[single_ad_image4]" class="cf_media_id">
  						<div class="preview_field"><?php if ( $dp_options['single_ad_image4'] ) { echo wp_get_attachment_image($dp_options['single_ad_image4'], 'medium' ); } ?></div>
  						<div class="button_area">
  							<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  							<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['single_ad_image4'] ) { echo 'hidden'; } ?>">
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register affiliate code', 'tcd-w' );  ?></h4>
  				<input class="regular-text" type="text" name="dp_options[single_ad_url4]" value="<?php echo esc_attr( $dp_options['single_ad_url4'] ); ?>">
  				<input type="submit" class="button-ml ajax_button" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>">
  			</div>
  		</div><!-- END .sub_box -->
		</div>
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
  </div><!-- END .theme_option_field -->
	<div class="theme_option_field cf">
    <?php /*
    <h3 class="theme_option_headline"><?php _e( 'Single page banner settings', 'tcd-w' ); ?>3</h3>
    */ ?>
  	<h3 class="theme_option_headline"><?php _e( 'Single page banner settings', 'tcd-w' ); ?>2</h3>
  	<p><?php _e( 'Please copy and paste the short code inside the content to show this banner.', 'tcd-w' ); ?></p>
  	<p><?php _e( 'Short code', 'tcd-w' );  ?> : <input type="text" readonly="readonly" value="[s_ad]"></p>
  	<div class="sub_box cf">
  		<h3 class="theme_option_subbox_headline"><?php _e( 'Left banner', 'tcd-w' ); ?></h3>
			<div class="sub_box_content">
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Banner code', 'tcd-w' ); ?></h4>
  				<p><?php _e( 'If you are using google adsense, enter all code below.', 'tcd-w' ); ?></p>
  				<textarea class="large-text" rows="10" name="dp_options[single_ad_code5]"><?php echo esc_textarea( $dp_options['single_ad_code5'] ); ?></textarea>
  			</div>
            <p><?php _e( 'If you are not using google adsense, you can register your banner image and affiliate code individually. If an advertisement code is entered in the above setting field, the following setting will be invalid.', 'tcd-w' ); ?></p>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register banner image.', 'tcd-w' ); _e( 'Recommend size. Width:300px Height:250px', 'tcd-w' ); ?></h4>
  				<div class="image_box cf">
  					<div class="cf cf_media_field hide-if-no-js single_ad_image5">
  						<input type="hidden" value="<?php echo esc_attr( $dp_options['single_ad_image5'] ); ?>" id="single_ad_image5" name="dp_options[single_ad_image5]" class="cf_media_id">
  						<div class="preview_field"><?php if ( $dp_options['single_ad_image5'] ) { echo wp_get_attachment_image( $dp_options['single_ad_image5'], 'medium' ); } ?></div>
  						<div class="button_area">
  							<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  							<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['single_ad_image5'] ) { echo 'hidden'; } ?>">
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register affiliate code', 'tcd-w' ); ?></h4>
  				<input class="regular-text" type="text" name="dp_options[single_ad_url5]" value="<?php echo esc_attr( $dp_options['single_ad_url5'] ); ?>">
  				<input type="submit" class="button-ml ajax_button" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>">
  			</div>
			</div>
  	</div><!-- END .sub_box -->
  	<div class="sub_box cf">
  		<h3 class="theme_option_subbox_headline"><?php _e( 'Right banner', 'tcd-w' ); ?></h3>
			<div class="sub_box_content">
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Banner code', 'tcd-w' ); ?></h4>
  				<p><?php _e( 'If you are using google adsense, enter all code below.', 'tcd-w' ); ?></p>
  				<textarea class="large-text" rows="10" name="dp_options[single_ad_code6]"><?php echo esc_textarea( $dp_options['single_ad_code6'] ); ?></textarea>
  			</div>
            <p><?php _e( 'If you are not using google adsense, you can register your banner image and affiliate code individually. If an advertisement code is entered in the above setting field, the following setting will be invalid.', 'tcd-w' ); ?></p>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register banner image.', 'tcd-w' ); _e( 'Recommend size. Width:300px Height:250px', 'tcd-w' ); ?></h4>
  				<div class="image_box cf">
  					<div class="cf cf_media_field hide-if-no-js single_ad_image6">
  						<input type="hidden" value="<?php echo esc_attr( $dp_options['single_ad_image6'] ); ?>" id="single_ad_image6" name="dp_options[single_ad_image6]" class="cf_media_id">
  						<div class="preview_field"><?php if ( $dp_options['single_ad_image6'] ) { echo wp_get_attachment_image( $dp_options['single_ad_image6'], 'medium' ); } ?></div>
  						<div class="button_area">
  							<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
  							<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if( ! $dp_options['single_ad_image6'] ) { echo 'hidden'; } ?>">
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="theme_option_content">
  				<h4 class="theme_option_headline2"><?php _e( 'Register affiliate code', 'tcd-w' ); ?></h4>
  				<input class="regular-text" type="text" name="dp_options[single_ad_url6]" value="<?php echo esc_attr( $dp_options['single_ad_url6'] ); ?>">
  				<input type="submit" class="button-ml ajax_button" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>">
  			</div>
  		</div>
  	</div><!-- END .sub_box -->
    <input type="submit" class="button-ml ajax_button" value="<?php echo _e( 'Save Changes', 'tcd-w' ); ?>">
  </div><!-- END .theme_option_field -->
 	<?php // Single page banner ?>
	<div class="theme_option_field cf">
		<h3 class="theme_option_headline"><?php _e( 'Single page banner settings (mobile)', 'tcd-w' ); ?></h3>
		<p><?php _e( 'This banner will be displayed on mobile device.', 'tcd-w' ); ?></p>
 	 	<div class="theme_option_content">
 	 		<h4 class="theme_option_headline2"><?php _e( 'Banner code', 'tcd-w' ); ?></h4>
 	    <p><?php _e( 'If you are using google adsense, enter all code below.', 'tcd-w' ); ?></p>
 	    <textarea class="large-text" rows="10" name="dp_options[single_mobile_ad_code1]"><?php echo esc_textarea( $dp_options['single_mobile_ad_code1'] ); ?></textarea>
 	  </div>
      <p><?php _e( 'If you are not using google adsense, you can register your banner image and affiliate code individually. If an advertisement code is entered in the above setting field, the following setting will be invalid.', 'tcd-w' ); ?></p>
 	  <div class="theme_option_content">
 	  	<h4 class="theme_option_headline2"><?php _e( 'Register banner image.', 'tcd-w' ); ?></h4>
 	  	<div class="image_box cf">
 	    	<div class="cf cf_media_field hide-if-no-js single_mobile_ad_image1">
 	      	<input type="hidden" value="<?php echo esc_attr( $dp_options['single_mobile_ad_image1'] ); ?>" id="single_mobile_ad_image" name="dp_options[single_mobile_ad_image1]" class="cf_media_id">
 	      	<div class="preview_field"><?php if($dp_options['single_mobile_ad_image1']){ echo wp_get_attachment_image($dp_options['single_mobile_ad_image1'], 'medium' ); }; ?></div>
 	      	<div class="buttton_area">
 	       		<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
 	       		<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if(!$dp_options['single_mobile_ad_image1']){ echo 'hidden'; }; ?>">
 	     		</div>
 	    	</div>
			</div>
 	  </div>
 	 	<div class="theme_option_content">
 	    <h4 class="theme_option_headline2"><?php _e( 'Register affiliate code', 'tcd-w' ); ?></h4>
 	    <input id="dp_options[single_mobile_ad_url1]" class="regular-text" type="text" name="dp_options[single_mobile_ad_url1]" value="<?php echo esc_attr( $dp_options['single_mobile_ad_url1'] ); ?>">
 	  	<input type="submit" class="button-ml ajax_button" value="<?php echo __( 'Save Changes', 'tcd-w' ); ?>">
		</div>
	</div><!-- END .theme_option_field -->
</div><!-- END #tab-content4 -->
<?php
}

function add_blog_theme_options_validate( $input ) {

  global $ph_desc_writing_mode_options, $ph_img_animation_type_options, $pagenation_type_options, $month_type_options;

  // Page header
 	$input['ph_title'] = sanitize_text_field( $input['ph_title'] );
 	$input['ph_desc'] = sanitize_textarea_field( $input['ph_desc'] );
 	$input['ph_desc_font_size'] = absint( $input['ph_desc_font_size'] );
 	$input['ph_desc_font_size_sp'] = absint( $input['ph_desc_font_size_sp'] );
 	$input['ph_desc_color'] = sanitize_hex_color( $input['ph_desc_color'] );
  if ( ! isset( $input['ph_desc_writing_mode'] ) ) $input['ph_desc_writing_mode'] = null;
  if ( ! array_key_exists( $input['ph_desc_writing_mode'], $ph_desc_writing_mode_options ) ) $input['ph_desc_writing_mode'] = null;
 	$input['ph_img'] = absint( $input['ph_img'] );
  if ( ! isset( $input['ph_img_animation_type'] ) ) $input['ph_img_animation_type'] = null;
  if ( ! array_key_exists( $input['ph_img_animation_type'], $ph_img_animation_type_options ) ) $input['ph_img_animation_type'] = null;
 	$input['ph_overlay'] = sanitize_hex_color( $input['ph_overlay'] );
 	$input['ph_overlay_opacity'] = sanitize_text_field( $input['ph_overlay_opacity'] );

  // Archive page
  $input['archive_catch'] = sanitize_text_field( $input['archive_catch'] );

  // Single page
 	$input['title_font_size'] = absint( $input['title_font_size'] );
 	$input['title_font_size_sp'] = absint( $input['title_font_size_sp'] );
 	$input['content_font_size'] = absint( $input['content_font_size'] );
 	$input['content_font_size_sp'] = absint( $input['content_font_size_sp'] );
  if ( ! isset( $input['pagenation_type'] ) ) $input['pagenation_type'] = null;
  if ( ! array_key_exists( $input['pagenation_type'], $pagenation_type_options ) ) $input['pagenation_type'] = null;

 	// Display
 	if ( ! isset( $input['show_date'] ) ) $input['show_date'] = null;
  $input['show_date'] = ( $input['show_date'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_category'] ) ) $input['show_category'] = null;
  $input['show_category'] = ( $input['show_category'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_tag'] ) ) $input['show_tag'] = null;
  $input['show_tag'] = ( $input['show_tag'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_author'] ) ) $input['show_author'] = null;
  $input['show_author'] = ( $input['show_author'] == 1 ? 1 : 0 );
 	//if ( ! isset( $input['show_thumbnail'] ) ) $input['show_thumbnail'] = null;
  //$input['show_thumbnail'] = ( $input['show_thumbnail'] == 1 ? 1 : 0 );
 	//if ( ! isset( $input['show_sns_top'] ) ) $input['show_sns_top'] = null;
  //$input['show_sns_top'] = ( $input['show_sns_top'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_sns_btm'] ) ) $input['show_sns_btm'] = null;
  $input['show_sns_btm'] = ( $input['show_sns_btm'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_next_post'] ) ) $input['show_next_post'] = null;
  $input['show_next_post'] = ( $input['show_next_post'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_related_post'] ) ) $input['show_related_post'] = null;
  $input['show_related_post'] = ( $input['show_related_post'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_comment'] ) ) $input['show_comment'] = null;
  $input['show_comment'] = ( $input['show_comment'] == 1 ? 1 : 0 );
 	if ( ! isset( $input['show_trackback'] ) ) $input['show_trackback'] = null;
  $input['show_trackback'] = ( $input['show_trackback'] == 1 ? 1 : 0 );
  if ( ! isset( $input['month_type'] ) ) $input['month_type'] = null;
  if ( ! array_key_exists( $input['month_type'], $month_type_options ) ) $input['month_type'] = null;

  // Single page banner
	//for ( $i = 1; $i <= 6; $i++ ) {
	for ( $i = 3; $i <= 6; $i++ ) {
 		$input['single_ad_code' . $i] = $input['single_ad_code' . $i];
 		$input['single_ad_image' . $i] = absint( $input['single_ad_image' . $i] );
 		$input['single_ad_url' . $i] = esc_url_raw( $input['single_ad_url' . $i] );
	}

  // Single page banner (mobile)
	$input['single_mobile_ad_code1'] = $input['single_mobile_ad_code1'];
 	$input['single_mobile_ad_image1'] = absint( $input['single_mobile_ad_image1'] );
 	$input['single_mobile_ad_url1'] = esc_url_raw( $input['single_mobile_ad_url1'] );

	return $input;
}
