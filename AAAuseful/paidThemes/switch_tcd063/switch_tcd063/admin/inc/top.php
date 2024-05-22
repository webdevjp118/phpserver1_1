<?php
/*
 * Manage front page tab
 */

// Add default values
add_filter( 'before_getting_design_plus_option', 'add_top_dp_default_options' );

// Add label of front page tab
add_action( 'tcd_tab_labels', 'add_top_tab_label' );

// Add HTML of front page tab
add_action( 'tcd_tab_panel', 'add_top_tab_panel' );

// Register sanitize function
add_filter( 'theme_options_validate', 'add_top_theme_options_validate' );

global $header_content_type_options;
$header_content_type_options = array(
  'type2' => array( 'value' => 'type1', 'label' => __( 'Image slider', 'tcd-w' ) ),
  'type3' => array( 'value' => 'type2', 'label' => __( 'Video', 'tcd-w' ) ),
  'type4' => array( 'value' => 'type3', 'label' => __( 'YouTube', 'tcd-w' ) )
);

global $header_slider_img_animation_type_options;
$header_slider_img_animation_type_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Zoom in', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Zoom out', 'tcd-w' ) ),
  'type3' => array( 'value' => 'type3', 'label' => __( 'None', 'tcd-w' ) )
);

global $header_slider_animation_time_options;
$header_slider_animation_time_options = array();
for ( $i = 5; $i <= 10; $i++ ) {
  $header_slider_animation_time_options[$i] = array(
    'value' => $i,
    'label' => sprintf( __( '%d seconds', 'tcd-w' ), $i )
  );
}

global $writing_mode_options;
$writing_mode_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Vertical writing', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Horizontal writing', 'tcd-w' ) )
);

global $index_4_images_and_text_layout_options;
$index_4_images_and_text_layout_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Top: images, Bottom: text', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Top: text, Bottom: images', 'tcd-w' ) )
);

global $index_news_and_event_layout_options;
$index_news_and_event_layout_options = array(
  'type1' => array( 'value' => 'type1', 'label' => __( 'Left: News, Right: Event', 'tcd-w' ) ),
  'type2' => array( 'value' => 'type2', 'label' => __( 'Left: Event, Right: News', 'tcd-w' ) )
);

function add_top_dp_default_options( $dp_default_options ) {

  // Header contents
  $dp_default_options['header_content_type'] = 'type1';

  // Image slider
  for ( $i = 1; $i <= 5; $i++ ) {
    $dp_default_options['header_slider_img' . $i] = '';
    $dp_default_options['header_slider_img_sp' . $i] = '';
    $dp_default_options['header_slider_img_animation_type' . $i] = 'type3';
    $dp_default_options['header_slider_overlay' . $i] = '#000000';
    $dp_default_options['header_slider_overlay_opacity' . $i] = 0.3;
    $dp_default_options['header_slider_catch' . $i] = sprintf( __( 'Enter slider%d' . "\n" . 'catchphrase', 'tcd-w' ), $i );
    $dp_default_options['header_slider_catch_font_size' . $i] = 40;
    $dp_default_options['header_slider_catch_font_size_sp' . $i] = 20;
    $dp_default_options['header_slider_catch_color' . $i] = '#ffffff';
    $dp_default_options['header_slider_catch_writing_mode' . $i] = 'type2';
  }
  $dp_default_options['header_slider_animation_time'] = 7;

  // Video
  $dp_default_options['header_video'] = '';
  $dp_default_options['header_video_img'] = '';
  $dp_default_options['header_video_catch'] = '';
  $dp_default_options['header_video_catch_font_size'] = 40;
  $dp_default_options['header_video_catch_font_size_sp'] = 20;
  $dp_default_options['header_video_catch_color'] = '#ffffff';
  $dp_default_options['header_video_catch_writing_mode'] = 'type1';
  $dp_default_options['header_video_overlay'] = '#000000';
  $dp_default_options['header_video_overlay_opacity'] = '0.3';

  // YouTube
  $dp_default_options['header_youtube_id'] = '';
  $dp_default_options['header_youtube_img'] = '';
  $dp_default_options['header_youtube_catch'] = '';
  $dp_default_options['header_youtube_catch_font_size'] = 40;
  $dp_default_options['header_youtube_catch_font_size_sp'] = 20;
  $dp_default_options['header_youtube_catch_color'] = '#ffffff';
  $dp_default_options['header_youtube_catch_writing_mode'] = 'type1';
  $dp_default_options['header_youtube_overlay'] = '#000000';
  $dp_default_options['header_youtube_overlay_opacity'] = '0.3';

  // Contents after the header content
  $dp_default_options['display_index_content01'] = 1;
  $dp_default_options['index_content01_catch'] = __( 'Enter catchphrase here.', 'tcd-w' );
  $dp_default_options['index_content01_catch_font_size'] = 36;
  $dp_default_options['index_content01_catch_font_size_sp'] = 20;
  $dp_default_options['index_content01_desc'] = __( 'Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. ', 'tcd-w' );
  $dp_default_options['index_content01_color'] = '#ffffff';
  $dp_default_options['index_content01_bg'] = '#000000';
  $dp_default_options['index_content01_btn_bg'] = '#000000';
  $dp_default_options['index_content01_btn_bg_hover'] = '#442506';
  $dp_default_options['index_content01_btn_color'] = '#ffffff';
  $dp_default_options['index_content01_btn_color_hover'] = '#ffffff';

  // Contents builder
  $dp_default_options['index_contents_order'] = array(
    '4_images_and_text',
    'three_column',
    'news_and_event',
    'interview',
    'plan_content',
    'image',
    'blog',
    'catch_and_desc',
    'wysiwyg1',
    'wysiwyg2',
    'wysiwyg3'
  );

  // 4 images and text
  $dp_default_options['display_index_4_images_and_text'] = 1;
  $dp_default_options['index_4_images_and_text_layout'] = 'type1';
  $dp_default_options['index_4_images_and_text_bg'] = '#f5f5f5';
  for ( $i = 1; $i <= 4; $i++ ) {
    $dp_default_options['index_4_images_and_text_img' . $i] = '';
  }
  $dp_default_options['index_4_images_and_text_catch'] = __( 'Enter catchphrase here.', 'tcd-w' );
  $dp_default_options['index_4_images_and_text_catch_font_size'] = 36;
  $dp_default_options['index_4_images_and_text_catch_font_size_sp'] = 20;
  $dp_default_options['index_4_images_and_text_catch_color'] = '#442606';
  $dp_default_options['index_4_images_and_text_desc'] = __( 'Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' );

  // Three column
  $dp_default_options['display_index_three_column'] = 1;
  $dp_default_options['index_three_column_bg'] = '#f5f5f5';

  for ( $i = 1; $i <= 3; $i++ ) {
    $dp_default_options['index_three_column_title' . $i] = sprintf( __( 'Column%d', 'tcd-w' ), $i );
    $dp_default_options['index_three_column_img' . $i] = '';
    $dp_default_options['index_three_column_desc' . $i] = __( 'Enter description here. Enter description here. Enter description here. ' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here. ', 'tcd-w' );
    $dp_default_options['index_three_column_btn_label' . $i] = __( 'Sample button', 'tcd-w' );
    $dp_default_options['index_three_column_btn_url' . $i] = '#';
    $dp_default_options['index_three_column_btn_target' . $i] = 0;
  }

  // News and event
  $dp_default_options['display_index_news_and_event'] = 1;
  $dp_default_options['index_news_and_event_layout'] = 'type1';
  $dp_default_options['index_news_and_event_bg'] = '#f3f3f3';
  $dp_default_options['index_news_title'] = 'NEWS';
  $dp_default_options['index_news_title_font_size'] = 40;
  $dp_default_options['index_news_title_font_size_sp'] = 28;
  $dp_default_options['index_news_title_color'] = '#000000';
  $dp_default_options['index_news_sub'] = __( 'News', 'tcd-w' );
  $dp_default_options['index_news_num'] = 5;
  $dp_default_options['index_news_link_text'] = __( 'News archive', 'tcd-w' );
  $dp_default_options['index_news_link_color'] = '#000000';
  $dp_default_options['index_news_link_color_hover'] = '#442602';
  $dp_default_options['index_event_title'] = 'EVENT';
  $dp_default_options['index_event_title_font_size'] = 40;
  $dp_default_options['index_event_title_font_size_sp'] = 28;
  $dp_default_options['index_event_title_color'] = '#000000';
  $dp_default_options['index_event_sub'] = __( 'Event', 'tcd-w' );
  $dp_default_options['index_event_num'] = 3;
  $dp_default_options['index_event_link_text'] = __( 'Event archive', 'tcd-w' );
  $dp_default_options['index_event_link_color'] = '#000000';
  $dp_default_options['index_event_link_color_hover'] = '#442602';

  // Interview
  $dp_default_options['display_index_interview'] = 1;
  $dp_default_options['index_interview_title'] = 'Interview';
  $dp_default_options['index_interview_title_font_size'] = 40;
  $dp_default_options['index_interview_title_font_size_sp'] = 28;
  $dp_default_options['index_interview_title_color'] = '#000000';
  $dp_default_options['index_interview_sub'] = __( 'Interview', 'tcd-w' );
  $dp_default_options['index_interview_num'] = 8;
  $dp_default_options['index_interview_link_text'] = __( 'Interview archive', 'tcd-w' );

  // Plan contents
  $dp_default_options['display_index_plan_content'] = 1;
  $dp_default_options['index_plan_content_catch'] = __( 'Enter catchphrase here.', 'tcd-w' );
  $dp_default_options['index_plan_content_catch_font_size'] = 36;
  $dp_default_options['index_plan_content_catch_font_size_sp'] = 20;
  $dp_default_options['index_plan_content_catch_color'] = '#442506';
  $dp_default_options['index_plan_content_desc'] = __( 'Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' );
  $dp_default_options['index_plan_content_post_id'] = 2;
  $dp_default_options['index_plan_content_link_text'] = __( 'Plans and Pricing', 'tcd-w' );

  // Full width image
  $dp_default_options['display_index_image'] = 1;
  $dp_default_options['index_image_image'] = '';
  $dp_default_options['index_image_catch'] = __( 'Enter catchphrase here.', 'tcd-w' );
  $dp_default_options['index_image_catch_font_size'] = 36;
  $dp_default_options['index_image_catch_font_size_sp'] = 20;
  $dp_default_options['index_image_desc'] = __( 'Enter description here. Enter description here. Enter description here.' . "\n" . 'Enter description here. Enter description here. Enter description here. Enter description here. Enter description here.', 'tcd-w' );
  $dp_default_options['index_image_btn_label'] = __( 'Sample button', 'tcd-w' );
  $dp_default_options['index_image_btn_url'] = '#';
  $dp_default_options['index_image_btn_target'] = 0;

  // Blog
  $dp_default_options['display_index_blog'] = 1;
  $dp_default_options['index_blog_title'] = 'BLOG';
  $dp_default_options['index_blog_title_font_size'] = 40;
  $dp_default_options['index_blog_title_font_size_sp'] = 28;
  $dp_default_options['index_blog_title_color'] = '#000000';
  $dp_default_options['index_blog_sub'] = __( 'Blog', 'tcd-w' );
  $dp_default_options['index_blog_num'] = 4;
  $dp_default_options['index_blog_link_text'] = __( 'Blog archive', 'tcd-w' );

  // Catchphrase & description
  $dp_default_options['display_index_catch_and_desc'] = 0;
  $dp_default_options['index_catch_and_desc_catch'] = '';
  $dp_default_options['index_catch_and_desc_catch_font_size'] = 36;
  $dp_default_options['index_catch_and_desc_catch_font_size_sp'] = 20;
  $dp_default_options['index_catch_and_desc_catch_color'] = '#442506';
  $dp_default_options['index_catch_and_desc_desc'] = '';

  // Wysiwyg
  for( $i = 1; $i <= 3; $i++ ) {
    $dp_default_options['display_index_wysiwyg' . $i] = 0;
    $dp_default_options['index_wysiwyg_editor' . $i] = '';
  }

	return $dp_default_options;
}

function add_top_tab_label( $tab_labels ) {
	$tab_labels['top'] = __( 'Front page', 'tcd-w' );
	return $tab_labels;
}

function add_top_tab_panel( $dp_options ) {
  global $dp_default_options, $header_content_type_options, $header_slider_img_animation_type_options, $header_slider_animation_time_options, $writing_mode_options, $index_4_images_and_text_layout_options, $index_news_and_event_layout_options;
?>
<div id="tab-content-top">
	<?php // Header content ?>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Header content settings', 'tcd-w' ); ?></h3>
    <p><?php _e( 'You can set header content as the first view of your site. ', 'tcd-w' ); ?></p>
    <div class="theme_option_message"><?php echo __( '<p>Image slider:You can set 5 slides or 1 image as fixed header.</p><p>Video:You can display MP4 format videos.</p><p>Youtube:You can display Youtube videos.</p>', 'tcd-w' ); ?></div>
    <h4 class="theme_option_headline2"><?php _e( 'Header content type', 'tcd-w' ); ?></h4>
    <?php foreach ( $header_content_type_options as $option ) : ?>
    <p><label><input type="radio" name="dp_options[header_content_type]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['header_content_type'] ); ?>><?php echo esc_html_e( $option['label'] ); ?></label></p>
    <?php endforeach; ?>
		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
	</div>
  <?php // Image slider ?>
  <div id="header_content_type_type1"<?php if ( 'type1' !== $dp_options['header_content_type'] ) { echo ' style="display: none;"'; } ?>>
	  <div class="theme_option_field cf">
  	  <h3 class="theme_option_headline"><?php _e( 'Image slider settings', 'tcd-w' ); ?></h3>
        <p><?php _e( 'Please set slider item.', 'tcd-w' ); ?></p>        
		  <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'Item', 'tcd-w' ); ?><?php echo $i; ?></h3>
      	<div class="sub_box_content">
      		<h4 class="theme_option_headline2"><?php _e( 'Image', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Image for PC. Recommended size: width:1450px, height:815px', 'tcd-w' ); ?></p>
          <p><?php _e( 'Recommended size: width:1450px, height:815px', 'tcd-w' ); ?></p>
      		<div class="image_box cf">
      			<div class="cf cf_media_field hide-if-no-js">
      				<input type="hidden" value="<?php echo esc_attr( $dp_options['header_slider_img' . $i] ); ?>" id="header_slider_img<?php echo $i; ?>" name="dp_options[header_slider_img<?php echo $i; ?>]" class="cf_media_id">
      				<div class="preview_field"><?php if ( $dp_options['header_slider_img' . $i] ) { echo wp_get_attachment_image( $dp_options['header_slider_img' . $i], 'medium' ); } ?></div>
      				<div class="button_area">
      					<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
      					<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['header_slider_img' . $i] ) { echo 'hidden'; } ?>">
      				</div>
      			</div>
      		</div>
      		<h4 class="theme_option_headline2"><?php _e( 'Image for mobile', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Image for mobile and tablet. Recommended size: width:820px, height:787px', 'tcd-w' ); ?></p>
      		<div class="image_box cf">
      			<div class="cf cf_media_field hide-if-no-js">
      				<input type="hidden" value="<?php echo esc_attr( $dp_options['header_slider_img_sp' . $i] ); ?>" id="header_slider_img_sp<?php echo $i; ?>" name="dp_options[header_slider_img_sp<?php echo $i; ?>]" class="cf_media_id">
      				<div class="preview_field"><?php if ( $dp_options['header_slider_img_sp' . $i] ) { echo wp_get_attachment_image( $dp_options['header_slider_img_sp' . $i], 'medium' ); } ?></div>
      				<div class="button_area">
      					<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
      					<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['header_slider_img_sp' . $i] ) { echo 'hidden'; } ?>">
      				</div>
      			</div>
      		</div>
          <h4 class="theme_option_headline2"><?php _e( 'Animation type of the background image', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Please select animation of background image.', 'tcd-w' ); ?></p>

          <?php foreach ( $header_slider_img_animation_type_options as $option ) : ?>
          <p><label><input type="radio" name="dp_options[header_slider_img_animation_type<?php echo $i; ?>]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['header_slider_img_animation_type' . $i] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
          <?php endforeach; ?>

          <h4 class="theme_option_headline2"><?php _e( 'Color overlay on the background image', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Use overlay, to become easy to read the catchphrase on the background. Please set color of overlay.', 'tcd-w' ); ?></p>
          <input class="c-color-picker" type="text" name="dp_options[header_slider_overlay<?php echo $i; ?>]" data-default-color="<?php echo esc_attr( $dp_default_options['header_slider_overlay' . $i] ); ?>" value="<?php echo esc_attr( $dp_options['header_slider_overlay' . $i] ); ?>">
          <h4 class="theme_option_headline2"><?php _e( 'Opacity of the overlay on the background image', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Please set opacity of overlay. If you do not want to display the overlay, enter "0"', 'tcd-w' ); ?></p>
          <input type="number" min="0" max="1.0" step="0.1" name="dp_options[header_slider_overlay_opacity<?php echo $i; ?>]" value="<?php echo esc_attr( $dp_options['header_slider_overlay_opacity' . $i] ); ?>">
      		<h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Please set the catchphrase displayed in the center of the header. Set the catchphrase, font color, font size, writing direction.', 'tcd-w' ); ?></p>
          <textarea class="regular-text" name="dp_options[header_slider_catch<?php echo $i; ?>]"><?php echo esc_textarea( $dp_options['header_slider_catch' . $i] ); ?></textarea>
          <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" class="tiny-text" name="dp_options[header_slider_catch_font_size<?php echo $i; ?>]" value="<?php echo esc_attr( $dp_options['header_slider_catch_font_size' . $i] ); ?>"> px</label></p>
          <p><label><?php _e( 'Font size (mobile)', 'tcd-w' ); ?> <input type="number" min="1" step="1" class="tiny-text" name="dp_options[header_slider_catch_font_size_sp<?php echo $i; ?>]" value="<?php echo esc_attr( $dp_options['header_slider_catch_font_size_sp' . $i] ); ?>"> px</label></p>
          <p><label for="header_slider_catch_color<?php echo $i; ?>"><?php _e( 'Font color', 'tcd-w' ); ?> </label><input type="text" class="c-color-picker" id="header_slider_catch_color<?php echo $i; ?>" name="dp_options[header_slider_catch_color<?php echo $i; ?>]" value="<?php echo esc_attr( $dp_options['header_slider_catch_color' . $i] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['header_slider_catch_color' . $i] ); ?>"></p>

          <?php foreach ( $writing_mode_options as $option ) : ?>
          <p><label><input type="radio" name="dp_options[header_slider_catch_writing_mode<?php echo $i; ?>]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['header_slider_catch_writing_mode' . $i] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
          <?php endforeach; ?>

		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
		  <?php endfor; ?>
      <h4 class="theme_option_headline2"><?php _e( 'Image slider animation time', 'tcd-w' ); ?></h4>
        <p><?php _e( 'Please set transition speed. (5 to 10 seconds)', 'tcd-w' ); ?></p>
      <select name="dp_options[header_slider_animation_time]">

        <?php foreach ( $header_slider_animation_time_options as $option ) : ?>
        <option value="<?php echo esc_attr( $option['value'] ); ?>" <?php selected( $option['value'], $dp_options['header_slider_animation_time'] ); ?>><?php echo esc_attr_e( $option['label'] ); ?></option>
        <?php endforeach; ?>

      </select>
		  <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
    </div>
  </div>
  <?php // Video ?>
  <div id="header_content_type_type2"<?php if ( 'type2' !== $dp_options['header_content_type'] ) { echo ' style="display: none;"'; } ?>>
	  <div class="theme_option_field cf">
  	  <h3 class="theme_option_headline"><?php _e( 'Video settings', 'tcd-w' ); ?></h3>
      <h4 class="theme_option_headline2"><?php _e( 'Video file', 'tcd-w' ); ?></h4>
      <p><?php _e( 'Please upload MP4 format file.', 'tcd-w' ); ?></p>
      <div class="image_box cf">
		    <div class="cf cf_media_field hide-if-no-js header_video">
		    	<input type="hidden" value="<?php echo esc_attr( $dp_options['header_video'] ); ?>" id="header_video" name="dp_options[header_video]" class="cf_media_id">
		    	<div class="preview_field preview_field_video">
		    		<?php if ( $dp_options['header_video'] ) : ?>
		    		<h5><?php _e( 'Uploaded MP4 file', 'tcd-w' ); ?></h5>
        		<p><?php echo esc_html( wp_get_attachment_url( $dp_options['header_video'] ) ); ?></p>
		    		<?php endif; ?>
        	</div>
        	<div class="button_area">
        		<input type="button" value="<?php _e( 'Select MP4 file', 'tcd-w' ); ?>" class="cfmf-select-video button">
        		<input type="button" value="<?php _e( 'Remove MP4 file', 'tcd-w' ); ?>" class="cfmf-delete-video button <?php if ( ! $dp_options['header_video'] ) { echo 'hidden'; }; ?>">
        	</div>
        </div>
      </div>
      <h4 class="theme_option_headline2"><?php _e( 'Substitute image', 'tcd-w' ); ?></h4>
      <p><?php _e( 'Substitute image is displayed on tablet and mobile devices. Recommended size: width:1450px, height:815px', 'tcd-w' ); ?></p>
      <div class="image_box cf">
      	<div class="cf cf_media_field hide-if-no-js">
      		<input type="hidden" value="<?php echo esc_attr( $dp_options['header_video_img'] ); ?>" id="header_video_img" name="dp_options[header_video_img]" class="cf_media_id">
      		<div class="preview_field"><?php if ( $dp_options['header_video_img'] ) { echo wp_get_attachment_image( $dp_options['header_video_img'], 'medium' ); } ?></div>
      		<div class="button_area">
      			<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
      			<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['header_video_img'] ) { echo 'hidden'; } ?>">
      		</div>
      	</div>
      </div>
      <h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
        <p><?php _e( 'Please set the catchphrase displayed in the center of the header. Set the catchphrase, font color, font size, writing direction.', 'tcd-w' ); ?></p>
      <textarea class="regular-text" name="dp_options[header_video_catch]"><?php echo esc_textarea( $dp_options['header_video_catch'] ); ?></textarea>
      <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[header_video_catch_font_size]" value="<?php echo esc_attr( $dp_options['header_video_catch_font_size'] ); ?>" class="tiny-text"> px</label></p>
      <p><label><?php _e( 'Font size (mobile)', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[header_video_catch_font_size_sp]" value="<?php echo esc_attr( $dp_options['header_video_catch_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
      <p><label for="header_video_catch_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[header_video_catch_color]" value="<?php echo esc_attr( $dp_options['header_video_catch_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['header_video_catch_color'] ); ?>"></p>
      <?php foreach ( $writing_mode_options as $option ) : ?>
      <p><label><input type="radio" name="dp_options[header_video_catch_writing_mode]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['header_video_catch_writing_mode'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
      <?php endforeach; ?>
  	  <h4 class="theme_option_headline2"><?php _e( 'Color overlay on the background', 'tcd-w' ); ?></h4>
        <p><?php _e( 'Use overlay, to become easy to read the catchphrase on the background. Please set color of overlay.', 'tcd-w' ); ?></p>
      <input type="text" class="c-color-picker" name="dp_options[header_video_overlay]" value="<?php echo esc_attr( $dp_options['header_video_overlay'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['header_video_overlay'] ); ?>">
  	  <h4 class="theme_option_headline2"><?php _e( 'Opacity of the overlay on the background', 'tcd-w' ); ?></h4>
        <p><?php _e( 'Please set opacity of overlay. If you do not want to display the overlay, enter "0"', 'tcd-w' ); ?></p>
      <input type="number" min="0" max="1" step="0.1" name="dp_options[header_video_overlay_opacity]" value="<?php echo esc_attr( $dp_options['header_video_overlay_opacity'] ); ?>">
		  <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
    </div>
  </div>
  <?php // YouTube ?>
  <div id="header_content_type_type3"<?php if ( 'type3' !== $dp_options['header_content_type'] ) { echo ' style="display: none;"'; } ?>>
	  <div class="theme_option_field cf">
  	  <h3 class="theme_option_headline"><?php _e( 'YouTube settings', 'tcd-w' ); ?></h3>
  	  <h4 class="theme_option_headline2"><?php _e( 'Video ID of YouTube', 'tcd-w' ); ?></h4>
      <p><?php _e( 'Please input a video ID of YouTube', 'tcd-w' ); ?></p>
      <input type="text" name="dp_options[header_youtube_id]" value="<?php echo esc_attr( $dp_options['header_youtube_id'] ); ?>">
      <h4 class="theme_option_headline2"><?php _e( 'Substitute image', 'tcd-w' ); ?></h4>
      <p><?php _e( 'Substitute image is displayed on tablet and mobile devices. Recommended size: width:1450px, height:815px', 'tcd-w' ); ?></p>
      <div class="image_box cf">
      	<div class="cf cf_media_field hide-if-no-js">
      		<input type="hidden" value="<?php echo esc_attr( $dp_options['header_youtube_img'] ); ?>" id="header_youtube_img" name="dp_options[header_youtube_img]" class="cf_media_id">
      		<div class="preview_field"><?php if ( $dp_options['header_youtube_img'] ) { echo wp_get_attachment_image( $dp_options['header_youtube_img'], 'medium' ); } ?></div>
      		<div class="button_area">
      			<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
      			<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['header_youtube_img'] ) { echo 'hidden'; } ?>">
      		</div>
      	</div>
      </div>
      <h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
        <p><?php _e( 'Please set the catchphrase displayed in the center of the header. Set the catchphrase, font color, font size, writing direction.', 'tcd-w' ); ?></p>
      <textarea class="regular-text" name="dp_options[header_youtube_catch]"><?php echo esc_textarea( $dp_options['header_youtube_catch'] ); ?></textarea>
      <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[header_youtube_catch_font_size]" value="<?php echo esc_attr( $dp_options['header_youtube_catch_font_size'] ); ?>" class="tiny-text"> px</label></p>
      <p><label><?php _e( 'Font size (mobile)', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[header_youtube_catch_font_size_sp]" value="<?php echo esc_attr( $dp_options['header_youtube_catch_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
      <p><label for="header_youtube_catch_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[header_youtube_catch_color]" value="<?php echo esc_attr( $dp_options['header_youtube_catch_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['header_youtube_catch_color'] ); ?>"></p>
      <?php foreach ( $writing_mode_options as $option ) : ?>
      <p><label><input type="radio" name="dp_options[header_youtube_catch_writing_mode]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['header_youtube_catch_writing_mode'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
      <?php endforeach; ?>
  	  <h4 class="theme_option_headline2"><?php _e( 'Color overlay on the background', 'tcd-w' ); ?></h4>
        <p><?php _e( 'Use overlay, to become easy to read the catchphrase on the background. Please set color of overlay.', 'tcd-w' ); ?></p>
      <input type="text" class="c-color-picker" name="dp_options[header_youtube_overlay]" value="<?php echo esc_attr( $dp_options['header_youtube_overlay'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['header_youtube_overlay'] ); ?>">
  	  <h4 class="theme_option_headline2"><?php _e( 'Opacity of the overlay on the background', 'tcd-w' ); ?></h4>
        <p><?php _e( 'Please set opacity of overlay. If you do not want to display the overlay, enter "0"', 'tcd-w' ); ?></p>
      <input type="number" min="0" max="1" step="0.1" name="dp_options[header_youtube_overlay_opacity]" value="<?php echo esc_attr( $dp_options['header_youtube_overlay_opacity'] ); ?>">
		  <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
    </div>
  </div>
	<div class="theme_option_field cf">
    <h3 class="theme_option_headline"><?php _e( 'Contents settings after the header content', 'tcd-w' ); ?></h3>
      <p><?php _e( 'You can set the catchphrase and description to be displayed below the header content.', 'tcd-w' ); ?></p>
    <p><label><input type="checkbox" name="dp_options[display_index_content01]" value="1" <?php checked( 1, $dp_options['display_index_content01'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
    <h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
    <textarea class="large-text" name="dp_options[index_content01_catch]"><?php echo esc_textarea( $dp_options['index_content01_catch'] ); ?></textarea>
    <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_content01_catch_font_size]" value="<?php echo esc_attr( $dp_options['index_content01_catch_font_size'] ); ?>" class="tiny-text"> px</label></p>
    <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_content01_catch_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_content01_catch_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
    <h4 class="theme_option_headline2"><?php _e( 'Description', 'tcd-w' ); ?></h4>
    <textarea class="large-text" name="dp_options[index_content01_desc]"><?php echo esc_textarea( $dp_options['index_content01_desc'] ); ?></textarea>
    <h4 class="theme_option_headline2"><?php _e( 'Color settings', 'tcd-w' ); ?></h4>
      <p><?php _e( 'Set font color and background color of catchphrase and description.', 'tcd-w' ); ?></p>
    <p><label for="index_content01_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_content01_color]" value="<?php echo esc_attr( $dp_options['index_content01_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_content01_color'] ); ?>"></p>
    <p><label for="index_content01_bg"><?php _e( 'Background color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_content01_bg]" value="<?php echo esc_attr( $dp_options['index_content01_bg'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_content01_bg'] ); ?>"></p>
    <h4 class="theme_option_headline2"><?php _e( 'Button settings', 'tcd-w' ); ?></h4>
      <p><?php _e( 'Set the color of the scroll down button to be displayed under the description.', 'tcd-w' ); ?></p>
    <p><label for="index_content01_btn_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_content01_btn_color]" value="<?php echo esc_attr( $dp_options['index_content01_btn_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_content01_btn_color'] ); ?>"></p>
    <p><label for="index_content01_btn_bg"><?php _e( 'Background color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_content01_btn_bg]" value="<?php echo esc_attr( $dp_options['index_content01_btn_bg'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_content01_btn_bg'] ); ?>"></p>
    <p><label for="index_content01_btn_color_hover"><?php _e( 'Font color on hover', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_content01_btn_color_hover]" value="<?php echo esc_attr( $dp_options['index_content01_btn_color_hover'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_content01_btn_color_hover'] ); ?>"></p>
    <p><label for="index_content01_btn_bg_hover"><?php _e( 'Background color on hover', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_content01_btn_bg_hover]" value="<?php echo esc_attr( $dp_options['index_content01_btn_bg_hover'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_content01_btn_bg_hover'] ); ?>"></p>
	  <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
  </div>
	<div class="theme_option_field cf">
  	<h3 class="theme_option_headline"><?php _e( 'Main content', 'tcd-w' ); ?></h3>
    <p><?php _e( 'You can change order by dragging each headline of option field.', 'tcd-w' ); ?></p>
    <div class="sortable">
      <?php
      foreach ( $dp_options['index_contents_order'] as $order ) :
      ?>
      <?php
        if ( '4_images_and_text' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( '4 images and text', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Displays the contents of 4 square images + text.', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="4_images_and_text">
          <p><label><input type="checkbox" name="dp_options[display_index_4_images_and_text]" value="1" <?php checked( 1, $dp_options['display_index_4_images_and_text'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
          <h4 class="theme_option_headline2"><?php _e( 'Layout', 'tcd-w' ); ?></h4>
          <fieldset class="cf radio_images_2col">
            <?php foreach ( $index_4_images_and_text_layout_options as $option ) : ?>
            <label>
              <input type="radio" name="dp_options[index_4_images_and_text_layout]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['index_4_images_and_text_layout'] ); ?>>
              <?php echo esc_html( $option['label'] ); ?>
              <img src="<?php echo get_template_directory_uri(); ?>/admin/assets/images/top_4image_text_<?php echo esc_attr( $option['value'] ); ?>.png" alt="">
            </label>
            <?php endforeach; ?>
          </fieldset>
      		<h4 class="theme_option_headline2"><?php _e( 'Background color', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the background color of the text area.', 'tcd-w' ); ?></p>
            <input type="text" class="c-color-picker" name="dp_options[index_4_images_and_text_bg]" value="<?php echo esc_attr( $dp_options['index_4_images_and_text_bg'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_4_images_and_text_bg'] ); ?>">
      		<h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the catchphrase, font size, font color.', 'tcd-w' ); ?></p>
          <input type="text" name="dp_options[index_4_images_and_text_catch]" value="<?php echo esc_attr( $dp_options['index_4_images_and_text_catch'] ); ?>" class="large-text">
          <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_4_images_and_text_catch_font_size]" value="<?php echo esc_attr( $dp_options['index_4_images_and_text_catch_font_size'] ); ?>" class="tiny-text"> px</p>
          <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_4_images_and_text_catch_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_4_images_and_text_catch_font_size_sp'] ); ?>" class="tiny-text"> px</p>
          <div>
            <label for="index_4_images_and_text_catch_color"><?php _e( 'Font color', 'tcd-w' ); ?></label>
            <input type="text" class="c-color-picker" name="dp_options[index_4_images_and_text_catch_color]" data-default-color="<?php echo esc_attr( $dp_default_options['index_4_images_and_text_catch_color'] ); ?>" value="<?php echo esc_attr( $dp_options['index_4_images_and_text_catch_color'] ); ?>" id="index_4_images_and_text_catch_color">
          </div>
      		<h4 class="theme_option_headline2"><?php _e( 'Description', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set descriptive text to be displayed under the catchphrase.', 'tcd-w' ); ?></p>
          <textarea name="dp_options[index_4_images_and_text_desc]" class="large-text"><?php echo esc_textarea( $dp_options['index_4_images_and_text_desc'] ); ?></textarea>
          <?php for ( $i = 1; $i <= 4; $i++ ) : ?>
          <h4 class="theme_option_headline2"><?php _e( 'Image', 'tcd-w' ); ?><?php echo $i; ?></h4>
          <p><?php _e( 'Recommended image size. Width: 570px, Height: 570px', 'tcd-w' ); ?></p>
        	<div class="image_box cf">
            <div class="cf cf_media_field hide-if-no-js index_4_images_and_text_img<?php echo $i ?>">
        			<input type="hidden" value="<?php echo esc_attr( $dp_options['index_4_images_and_text_img' . $i] ); ?>" id="index_4_images_and_text_img<?php echo $i ?>" name="dp_options[index_4_images_and_text_img<?php echo $i ?>]" class="cf_media_id">
        			<div class="preview_field"><?php if ( $dp_options['index_4_images_and_text_img' . $i] ) { echo wp_get_attachment_image( $dp_options['index_4_images_and_text_img' . $i], 'medium' ); } ?></div>
        			<div class="button_area">
        				<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
        				<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['index_4_images_and_text_img' . $i] ) { echo 'hidden'; } ?>">
        			</div>
        		</div>
        	</div>
          <?php endfor; ?>

		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
        elseif ( 'three_column' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( '3-column contents', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Display three content boxes horizontally.', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="three_column">
          <p><label><input type="checkbox" name="dp_options[display_index_three_column]" value="1" <?php checked( 1, $dp_options['display_index_three_column'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Background color', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the background color of the text area.', 'tcd-w' ); ?></p>
          <p><input class="c-color-picker" type="text" name="dp_options[index_three_column_bg]" value="<?php echo esc_attr( $dp_options['index_three_column_bg'] ); ?>" data-dafault-color="<?php echo esc_attr( $dp_default_options['index_three_column_bg'] ); ?>"></p>

          <?php for ( $i = 1; $i <= 3; $i++ ) : ?>
		      <div class="sub_box cf">
            <h3 class="theme_option_subbox_headline"><?php _e( 'Column', 'tcd-w' ); ?><?php echo $i; ?></h3>
            <div class="sub_box_content">
      		    <h4 class="theme_option_headline2"><?php _e( 'Title', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Settings for heading at left top of image.', 'tcd-w' ); ?></p>
              <input type="text" name="dp_options[index_three_column_title<?php echo $i; ?>]" value="<?php echo esc_attr( $dp_options['index_three_column_title' . $i] ); ?>" class="regular-text">
      		    <h4 class="theme_option_headline2"><?php _e( 'Image', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Recommended image size. Width: 740px, Height: 520px', 'tcd-w' ); ?></p>
        	    <div class="image_box cf">
                <div class="cf cf_media_field hide-if-no-js index_three_column_img<?php echo $i ?>">
        	    		<input type="hidden" value="<?php echo esc_attr( $dp_options['index_three_column_img' . $i] ); ?>" id="index_three_column_img<?php echo $i ?>" name="dp_options[index_three_column_img<?php echo $i ?>]" class="cf_media_id">
        	    		<div class="preview_field"><?php if ( $dp_options['index_three_column_img' . $i] ) { echo wp_get_attachment_image( $dp_options['index_three_column_img' . $i], 'medium' ); } ?></div>
        	    		<div class="button_area">
        	    			<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
        	    			<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['index_three_column_img' . $i] ) { echo 'hidden'; } ?>">
        	    		</div>
        	    	</div>
        	    </div>
      		    <h4 class="theme_option_headline2"><?php _e( 'Description', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the description to be displayed below the image.', 'tcd-w' ); ?></p>
              <textarea name="dp_options[index_three_column_desc<?php echo $i; ?>]" class="large-text"><?php echo esc_textarea( $dp_options['index_three_column_desc' . $i] ); ?></textarea>
      		    <h4 class="theme_option_headline2"><?php _e( 'Button settings', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the button to be displayed at the bottom.', 'tcd-w' ); ?></p>
              <p><label><?php _e( 'Button label', 'tcd-w' ); ?> <input type="text" class="regular-text" name="dp_options[index_three_column_btn_label<?php echo $i; ?>]" value="<?php echo esc_attr( $dp_options['index_three_column_btn_label' . $i] ); ?>"></label></p>
              <p><label><?php _e( 'Button URL', 'tcd-w' ); ?> <input type="text" class="regular-text" name="dp_options[index_three_column_btn_url<?php echo $i; ?>]" value="<?php echo esc_attr( $dp_options['index_three_column_btn_url' . $i] ); ?>"></label></p>
              <p><label><input type="checkbox" name="dp_options[index_three_column_btn_target<?php echo $i; ?>]" value="1" <?php checked( 1, $dp_options['index_three_column_btn_target' . $i] ); ?>> <?php _e( 'Open with new window', 'tcd-w' ); ?></label></p>
		  		    <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
            </div>
          </div>
          <?php endfor; ?>

		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
        elseif ( 'news_and_event' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'News and event', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Displays the post list of post type "news" and post type "event".', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="news_and_event">
          <p><label><input type="checkbox" name="dp_options[display_index_news_and_event]" value="1" <?php checked( 1, $dp_options['display_index_news_and_event'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>

      		<h4 class="theme_option_headline2"><?php _e( 'Background color', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the background color of the contents.', 'tcd-w' ); ?></p>
          <input type="text" class="c-color-picker" name="dp_options[index_news_and_event_bg]" value="<?php echo esc_attr( $dp_options['index_news_and_event_bg'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_news_and_event_bg'] ); ?>">

      		<h4 class="theme_option_headline2"><?php _e( 'Layout', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the display position of the news post list and the event post list.', 'tcd-w' ); ?></p>
          <?php foreach ( $index_news_and_event_layout_options as $option ) : ?>
          <p><label><input type="radio" name="dp_options[index_news_and_event_layout]" value="<?php echo esc_attr( $option['value'] ); ?>" <?php checked( $option['value'], $dp_options['index_news_and_event_layout'] ); ?>> <?php echo esc_html( $option['label'] ); ?></label></p>
          <?php endforeach; ?>

		      <div class="sub_box cf">
          	<h3 class="theme_option_subbox_headline"><?php _e( 'News settings', 'tcd-w' ); ?></h3>
            <div class="sub_box_content">
      		    <h4 class="theme_option_headline2"><?php _e( 'Title', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the heading.', 'tcd-w' ); ?></p>
              <input type="text" name="dp_options[index_news_title]" value="<?php echo esc_attr( $dp_options['index_news_title'] ); ?>" class="regular-text">
              <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_news_title_font_size]" value="<?php echo esc_attr( $dp_options['index_news_title_font_size'] ); ?>" class="tiny-text"> px</label></p>
              <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_news_title_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_news_title_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
              <p><label for="index_news_title_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_news_title_color]" id="index_news_title_color" value="<?php echo esc_attr( $dp_options['index_news_title_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_options['index_news_title_color'] ); ?>"></p>
      		    <h4 class="theme_option_headline2"><?php _e( 'Sub title', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the subtitle.', 'tcd-w' ); ?></p>
              <input type="text" name="dp_options[index_news_sub]" value="<?php echo esc_attr( $dp_options['index_news_sub'] ); ?>" class="regular-text">
      		    <h4 class="theme_option_headline2"><?php _e( 'Display number', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the number of displayed posts.', 'tcd-w' ); ?></p>
              <input class="tiny-text" type="number" min="1" step="1" name="dp_options[index_news_num]" value="<?php echo esc_attr( $dp_options['index_news_num'] ); ?>"><?php _e( ' posts', 'tcd-w' ); ?>
      		    <h4 class="theme_option_headline2"><?php _e( 'Archive link', 'tcd-w' ); ?></h4>
                <p><?php _e( 'You can set the button to archive page displayed at bottom of the post list. If you set blank, link is not displayed.', 'tcd-w' ); ?></p>
              <p><label><?php _e( 'Link text', 'tcd-w' ); ?> <input type="text" class="regular-text" name="dp_options[index_news_link_text]" value="<?php echo esc_attr( $dp_options['index_news_link_text'] ); ?>"></label></p>
              <p>
                <label for="index_news_link_color"><?php _e( 'Font color', 'tcd-w' ); ?></label>
                <input type="text" class="c-color-picker" name="dp_options[index_news_link_color]" value="<?php echo esc_attr( $dp_options['index_news_link_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_news_link_color'] ); ?>" id="index_news_link_color">
              </p>
              <p>
                <label for="index_news_link_color"><?php _e( 'Font color on hover', 'tcd-w' ); ?></label>
                <input type="text" class="c-color-picker" name="dp_options[index_news_link_color_hover]" value="<?php echo esc_attr( $dp_options['index_news_link_color_hover'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_news_link_color_hover'] ); ?>" id="index_news_link_color_hover">
              </p>
		  		    <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
            </div>
          </div>

		      <div class="sub_box cf">
          	<h3 class="theme_option_subbox_headline"><?php _e( 'Event settings', 'tcd-w' ); ?></h3>
            <div class="sub_box_content">
      		    <h4 class="theme_option_headline2"><?php _e( 'Title', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the heading.', 'tcd-w' ); ?></p>
              <input type="text" name="dp_options[index_event_title]" value="<?php echo esc_attr( $dp_options['index_event_title'] ); ?>" class="regular-text">
              <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_event_title_font_size]" value="<?php echo esc_attr( $dp_options['index_event_title_font_size'] ); ?>" class="tiny-text"> px</label></p>
              <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_event_title_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_event_title_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
              <p><label for="index_event_title_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_event_title_color]" id="index_event_title_color" value="<?php echo esc_attr( $dp_options['index_event_title_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_options['index_event_title_color'] ); ?>"></p>
      		    <h4 class="theme_option_headline2"><?php _e( 'Sub title', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the subtitle.', 'tcd-w' ); ?></p>
              <input type="text" name="dp_options[index_event_sub]" value="<?php echo esc_attr( $dp_options['index_event_sub'] ); ?>" class="regular-text">
      		    <h4 class="theme_option_headline2"><?php _e( 'Display number', 'tcd-w' ); ?></h4>
                <p><?php _e( 'Set the number of displayed posts.', 'tcd-w' ); ?></p>
              <input class="tiny-text" type="number" min="1" step="1" name="dp_options[index_event_num]" value="<?php echo esc_attr( $dp_options['index_event_num'] ); ?>"><?php _e( ' posts', 'tcd-w' ); ?>
      		    <h4 class="theme_option_headline2"><?php _e( 'Archive link', 'tcd-w' ); ?></h4>
                <p><?php _e( 'You can set the button to archive page displayed at bottom of the post list. If you set blank, link is not displayed.', 'tcd-w' ); ?></p>
              <p><label><?php _e( 'Link text', 'tcd-w' ); ?> <input type="text" class="regular-text" name="dp_options[index_event_link_text]" value="<?php echo esc_attr( $dp_options['index_event_link_text'] ); ?>"></label></p>
              <p>
                <label for="index_event_link_color"><?php _e( 'Font color', 'tcd-w' ); ?></label>
                <input type="text" class="c-color-picker" name="dp_options[index_event_link_color]" value="<?php echo esc_attr( $dp_options['index_event_link_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_event_link_color'] ); ?>" id="index_event_link_color">
              </p>
              <p>
                <label for="index_event_link_color"><?php _e( 'Font color on hover', 'tcd-w' ); ?></label>
                <input type="text" class="c-color-picker" name="dp_options[index_event_link_color_hover]" value="<?php echo esc_attr( $dp_options['index_event_link_color_hover'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_event_link_color_hover'] ); ?>" id="index_event_link_color_hover">
              </p>
		  		    <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
            </div>
          </div>

		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
        elseif ( 'interview' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'Interview', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Displays the post list of post type "interview".', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="interview">
          <p><label><input type="checkbox" name="dp_options[display_index_interview]" value="1" <?php checked( 1, $dp_options['display_index_interview'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Title', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the heading.', 'tcd-w' ); ?></p>
          <input type="text" name="dp_options[index_interview_title]" value="<?php echo esc_attr( $dp_options['index_interview_title'] ); ?>" class="regular-text">
          <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_interview_title_font_size]" value="<?php echo esc_attr( $dp_options['index_interview_title_font_size'] ); ?>" class="tiny-text"> px</label></p>
          <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_interview_title_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_interview_title_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
          <p><label for="index_interview_title_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_interview_title_color]" id="index_interview_title_color" value="<?php echo esc_attr( $dp_options['index_interview_title_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_options['index_interview_title_color'] ); ?>"></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Sub title', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the subtitle.', 'tcd-w' ); ?></p>
          <input type="text" name="dp_options[index_interview_sub]" value="<?php echo esc_attr( $dp_options['index_interview_sub'] ); ?>" class="regular-text">
      		<h4 class="theme_option_headline2"><?php _e( 'Display number', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the number of displayed posts.', 'tcd-w' ); ?></p>
          <input class="tiny-text" type="number" min="1" step="1" name="dp_options[index_interview_num]" value="<?php echo esc_attr( $dp_options['index_interview_num'] ); ?>"><?php _e( ' posts', 'tcd-w' ); ?>
      		<h4 class="theme_option_headline2"><?php _e( 'Archive link', 'tcd-w' ); ?></h4>
            <p><?php _e( 'You can set the button to archive page displayed at right end of the heading. If you set blank, button is not displayed.', 'tcd-w' ); ?></p>
          <p><label><?php _e( 'Link text', 'tcd-w' ); ?> <input type="text" class="regular-text" name="dp_options[index_interview_link_text]" value="<?php echo esc_attr( $dp_options['index_interview_link_text'] ); ?>"></label></p>
		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
        elseif ( 'plan_content' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'Plan contents', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Display the plan table created with page template 3. Create a new fixed page before selecting the following settings, select template 3 and set "D plan table"', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="plan_content">
          <p><label><input type="checkbox" name="dp_options[display_index_plan_content]" value="1" <?php checked( 1, $dp_options['display_index_plan_content'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Set the catchphrase, font size, font color.', 'tcd-w' ); ?></p>
          <input type="text" name="dp_options[index_plan_content_catch]" value="<?php echo esc_attr( $dp_options['index_plan_content_catch'] ); ?>" class="regular-text">
          <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_plan_content_catch_font_size]" value="<?php echo esc_attr( $dp_options['index_plan_content_catch_font_size'] ); ?>" class="tiny-text"> px</label></p>
          <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_plan_content_catch_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_plan_content_catch_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
          <p><label for="index_plan_content_catch_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_plan_content_catch_color]" id="index_plan_content_catch_color" value="<?php echo esc_attr( $dp_options['index_plan_content_catch_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_default_options['index_plan_content_catch_color'] ); ?>"></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Description', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Set the description to be displayed below the catchphrase.', 'tcd-w' ); ?></p>
          <textarea name="dp_options[index_plan_content_desc]" class="large-text"><?php echo esc_textarea( $dp_options['index_plan_content_desc'] ); ?></textarea>
      		<h4 class="theme_option_headline2"><?php _e( 'Post ID', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Please input a post ID of a page. The plan table for the page is displayed.', 'tcd-w' ); ?></p>
          <input type="number" min="1" step="1" name="dp_options[index_plan_content_post_id]" value="<?php echo esc_attr( $dp_options['index_plan_content_post_id'] ); ?>" class="tiny-text">
            <h4 class="theme_option_headline2"><?php _e( 'Link to selected page', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Set the link button to the fixed page specified in "Post ID" setting. The button is displayed at the bottom of the content. If you set blank, button is not displayed.', 'tcd-w' ); ?></p>
          <p><label><?php _e( 'Link text', 'tcd-w' ); ?> <input type="text" class="regular-text" name="dp_options[index_plan_content_link_text]" value="<?php echo esc_attr( $dp_options['index_plan_content_link_text'] ); ?>"></label></p>
		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
        elseif ( 'image' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'Full width image', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Display text + button on the full width image.', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="image">
          <p><label><input type="checkbox" name="dp_options[display_index_image]" value="1" <?php checked( 1, $dp_options['display_index_image'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Image', 'tcd-w' ); ?></h4>
          <p><?php _e( 'Recommended image size. Width: 1450px, Height: 500px', 'tcd-w' ); ?></p>
        	<div class="image_box cf">
        		<div class="cf cf_media_field hide-if-no-js index_image_image">
        			<input type="hidden" value="<?php echo esc_attr( $dp_options['index_image_image'] ); ?>" id="index_image_image" name="dp_options[index_image_image]" class="cf_media_id">
        			<div class="preview_field"><?php if ( $dp_options['index_image_image'] ) { echo wp_get_attachment_image( $dp_options['index_image_image'], 'medium' ); } ?></div>
        			<div class="button_area">
        				<input type="button" value="<?php _e( 'Select Image', 'tcd-w' ); ?>" class="cfmf-select-img button">
        				<input type="button" value="<?php _e( 'Remove Image', 'tcd-w' ); ?>" class="cfmf-delete-img button <?php if ( ! $dp_options['index_image_image'] ) { echo 'hidden'; } ?>">
        			</div>
        		</div>
        	</div>
      		<h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the catchphrase, font size, font color.', 'tcd-w' ); ?></p>
          <input type="text" name="dp_options[index_image_catch]" value="<?php echo esc_attr( $dp_options['index_image_catch'] ); ?>" class="regular-text">
          <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_image_catch_font_size]" value="<?php echo esc_attr( $dp_options['index_image_catch_font_size'] ); ?>" class="tiny-text"> px</label></p>
          <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_image_catch_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_image_catch_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Description', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the description to be displayed below the catchphrase.', 'tcd-w' ); ?></p>
          <textarea class="large-text" name="dp_options[index_image_desc]"><?php echo esc_textarea( $dp_options['index_image_desc'] ); ?></textarea>
      		<h4 class="theme_option_headline2"><?php _e( 'Button settings', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the button to be displayed at the bottom.', 'tcd-w' ); ?></p>
          <p><label><?php _e( 'Button label', 'tcd-w' ); ?> <input type="text" name="dp_options[index_image_btn_label]" value="<?php echo esc_attr( $dp_options['index_image_btn_label'] ); ?>" class="regular-text"></label></p>
          <p><label><?php _e( 'Button URL', 'tcd-w' ); ?> <input type="text" name="dp_options[index_image_btn_url]" value="<?php echo esc_attr( $dp_options['index_image_btn_url'] ); ?>" class="regular-text"></label></p>
          <p><label><input type="checkbox" name="dp_options[index_image_btn_target]" value="1" <?php checked( 1, $dp_options['index_image_btn_target'] ); ?>> <?php _e( 'Open with new window', 'tcd-w' ); ?></label></p>
		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
        elseif ( 'blog' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'Blog', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Displays the blog post.', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="blog">
          <p><label><input type="checkbox" name="dp_options[display_index_blog]" value="1" <?php checked( 1, $dp_options['display_index_blog'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Title', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the heading.', 'tcd-w' ); ?></p>
          <input type="text" name="dp_options[index_blog_title]" value="<?php echo esc_attr( $dp_options['index_blog_title'] ); ?>" class="regular-text">
          <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_blog_title_font_size]" value="<?php echo esc_attr( $dp_options['index_blog_title_font_size'] ); ?>" class="tiny-text"> px</label></p>
          <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_blog_title_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_blog_title_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
          <p><label for="index_blog_title_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_blog_title_color]" id="index_blog_title_color" value="<?php echo esc_attr( $dp_options['index_blog_title_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_options['index_blog_title_color'] ); ?>"></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Sub title', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the subtitle.', 'tcd-w' ); ?></p>
          <input type="text" name="dp_options[index_blog_sub]" value="<?php echo esc_attr( $dp_options['index_blog_sub'] ); ?>" class="regular-text">
      		<h4 class="theme_option_headline2"><?php _e( 'Display number', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the number of displayed posts.', 'tcd-w' ); ?></p>
          <input class="tiny-text" type="number" min="1" step="1" name="dp_options[index_blog_num]" value="<?php echo esc_attr( $dp_options['index_blog_num'] ); ?>"><?php _e( ' posts', 'tcd-w' ); ?>
      		<h4 class="theme_option_headline2"><?php _e( 'Archive link', 'tcd-w' ); ?></h4>
            <p><?php _e( 'You can set the button to archive page displayed at right end of the heading. If you set blank, button is not displayed.', 'tcd-w' ); ?></p>
          <p><label><?php _e( 'Link text', 'tcd-w' ); ?> <input type="text" class="regular-text" name="dp_options[index_blog_link_text]" value="<?php echo esc_attr( $dp_options['index_blog_link_text'] ); ?>"></label></p>
		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
      elseif ( 'catch_and_desc' === $order ) :
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'Catchphrase and description', 'tcd-w' ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Display a catchphrase and description.', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="catch_and_desc">
          <p><label><input type="checkbox" name="dp_options[display_index_catch_and_desc]" value="1" <?php checked( 1, $dp_options['display_index_catch_and_desc'] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Catchphrase', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the catchphrase, font size, font color.', 'tcd-w' ); ?></p>
          <textarea name="dp_options[index_catch_and_desc_catch]" class="large-text"><?php echo esc_textarea( $dp_options['index_catch_and_desc_catch'] ); ?></textarea>
          <p><label><?php _e( 'Font size', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_catch_and_desc_catch_font_size]" value="<?php echo esc_attr( $dp_options['index_catch_and_desc_catch_font_size'] ); ?>" class="tiny-text"> px</label></p>
          <p><label><?php _e( 'Font size for mobile', 'tcd-w' ); ?> <input type="number" min="1" step="1" name="dp_options[index_catch_and_desc_catch_font_size_sp]" value="<?php echo esc_attr( $dp_options['index_catch_and_desc_catch_font_size_sp'] ); ?>" class="tiny-text"> px</label></p>
          <p><label for="index_catch_and_desc_catch_color"><?php _e( 'Font color', 'tcd-w' ); ?></label> <input type="text" class="c-color-picker" name="dp_options[index_catch_and_desc_catch_color]" id="index_catch_and_desc_catch_color" value="<?php echo esc_attr( $dp_options['index_catch_and_desc_catch_color'] ); ?>" data-default-color="<?php echo esc_attr( $dp_options['index_catch_and_desc_catch_color'] ); ?>"></p>
      		<h4 class="theme_option_headline2"><?php _e( 'Description', 'tcd-w' ); ?></h4>
            <p><?php _e( 'Set the description to be displayed below the catchphrase.', 'tcd-w' ); ?></p>
          <textarea name="dp_options[index_catch_and_desc_desc]" class="large-text"><?php echo esc_textarea( $dp_options['index_catch_and_desc_desc'] ); ?></textarea>
		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php
      elseif ( 'wysiwyg1' === $order || 'wysiwyg2' === $order || 'wysiwyg3' === $order ) :
        $key = mb_substr( $order, -1 );
      ?>
		  <div class="sub_box cf">
      	<h3 class="theme_option_subbox_headline"><?php _e( 'Wysiwyg contents', 'tcd-w' ); ?><?php echo esc_html( $key ); ?></h3>
      	<div class="sub_box_content">
          <p><?php _e( 'Please create content freely as you like blog posts.', 'tcd-w' ); ?></p>
          <input type="hidden" name="dp_options[index_contents_order][]" value="wysiwyg<?php echo esc_attr( $key ); ?>">
          <p><label><input type="checkbox" name="dp_options[display_index_wysiwyg<?php echo esc_attr( $key ); ?>]" value="1" <?php checked( 1, $dp_options['display_index_wysiwyg' . $key] ); ?>> <?php _e( 'Display this content', 'tcd-w' ); ?></label></p>
			    <?php
          wp_editor(
            $dp_options['index_wysiwyg_editor' . $key],
            'index_wysiwyg_editor' . $key,
            array(
              'textarea_name' => 'dp_options[index_wysiwyg_editor' . $key . ']',
              'textarea_rows' => 10
            )
          );
          ?>
		  		<input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
		  	</div>
		  </div><!-- .sub_box END -->
      <?php endif; endforeach; ?>
		  <input type="submit" class="button-ml ajax_button" value="<?php _e( 'Save Changes', 'tcd-w' ); ?>">
    </div>
  </div>
</div><!-- END #tab-content3 -->
<?php
}

function add_top_theme_options_validate( $input ) {

  global $dp_default_options, $header_content_type_options, $header_slider_animation_options, $header_slider_animation_time_options, $header_slider_img_animation_type_options, $writing_mode_options, $index_4_images_and_text_layout_options, $index_news_and_event_layout_options;

  // Image slider
  for ( $i = 1; $i <= 5; $i++ ) {
	  $input['header_slider_img' . $i] = absint( $input['header_slider_img' . $i] );
	  $input['header_slider_img_sp' . $i] = absint( $input['header_slider_img_sp' . $i] );
    if ( ! isset( $input['header_slider_img_animation_type' . $i] ) ) $input['header_slider_img_animation_type' . $i] = null;
    if ( ! array_key_exists( $input['header_slider_img_animation_type' . $i], $header_slider_img_animation_type_options ) ) $input['header_slider_img_animation_type' . $i] = null;
    $input['header_slider_overlay' . $i] = sanitize_hex_color( $input['header_slider_overlay' . $i] );
    $input['header_slider_overlay_opacity' . $i] = sanitize_text_field( $input['header_slider_overlay_opacity' . $i] );
	  $input['header_slider_catch' . $i] = sanitize_textarea_field( $input['header_slider_catch' . $i] );
	  $input['header_slider_catch_font_size' . $i] = absint( $input['header_slider_catch_font_size' . $i] );
	  $input['header_slider_catch_font_size_sp' . $i] = absint( $input['header_slider_catch_font_size_sp' . $i] );
	  $input['header_slider_catch_color' . $i] = sanitize_hex_color( $input['header_slider_catch_color' . $i] );
    if ( ! isset( $input['header_slider_catch_writing_mode' . $i] ) ) $input['header_slider_catch_writing_mode' . $i] = null;
    if ( ! array_key_exists( $input['header_slider_catch_writing_mode' . $i], $writing_mode_options ) ) $input['header_slider_catch_writing_mode' . $i] = null;
  }
  if ( ! isset( $input['header_slider_animation_time'] ) ) $input['header_slider_animation_time'] = null;
  if ( ! array_key_exists( $input['header_slider_animation_time'], $header_slider_animation_time_options ) ) $input['header_slider_animation_time'] = null;

  // Video
	$input['header_video'] = absint( $input['header_video'] );
	$input['header_video_img'] = absint( $input['header_video_img'] );
	$input['header_video_catch'] = sanitize_textarea_field( $input['header_video_catch'] );
	$input['header_video_catch_font_size'] = absint( $input['header_video_catch_font_size'] );
	$input['header_video_catch_font_size_sp'] = absint( $input['header_video_catch_font_size_sp'] );
	$input['header_video_catch_color'] = sanitize_hex_color( $input['header_video_catch_color'] );
  if ( ! isset( $input['header_video_catch_writing_mode'] ) ) $input['header_video_catch_writing_mode'] = null;
  if ( ! array_key_exists( $input['header_video_catch_writing_mode'], $writing_mode_options ) ) $input['header_video_catch_writing_mode'] = null;
  $input['header_video_overlay'] = sanitize_hex_color( $input['header_video_overlay'] );
  $input['header_video_overlay_opacity'] = sanitize_text_field( $input['header_video_overlay_opacity'] );

  // YouTube
	$input['header_youtube_id'] = sanitize_text_field( $input['header_youtube_id'] );
	$input['header_youtube_img'] = absint( $input['header_youtube_img'] );
	$input['header_youtube_catch'] = sanitize_textarea_field( $input['header_youtube_catch'] );
	$input['header_youtube_catch_font_size'] = absint( $input['header_youtube_catch_font_size'] );
	$input['header_youtube_catch_font_size_sp'] = absint( $input['header_youtube_catch_font_size_sp'] );
	$input['header_youtube_catch_color'] = sanitize_hex_color( $input['header_youtube_catch_color'] );
  if ( ! isset( $input['header_youtube_catch_writing_mode'] ) ) $input['header_youtube_catch_writing_mode'] = null;
  if ( ! array_key_exists( $input['header_youtube_catch_writing_mode'], $writing_mode_options ) ) $input['header_youtube_catch_writing_mode'] = null;
  $input['header_youtube_overlay'] = sanitize_hex_color( $input['header_youtube_overlay'] );
  $input['header_youtube_overlay_opacity'] = sanitize_text_field( $input['header_youtube_overlay_opacity'] );

  // Contents after the header content
  if ( ! isset( $input['display_index_content01'] ) ) $input['display_index_content01'] = null;
	$input['display_index_content01'] = ( $input['display_index_content01'] == 1 ? 1 : 0 );
  $input['index_content01_catch'] = sanitize_textarea_field( $input['index_content01_catch'] );
  $input['index_content01_catch_font_size'] = absint( $input['index_content01_catch_font_size'] );
  $input['index_content01_catch_font_size_sp'] = absint( $input['index_content01_catch_font_size_sp'] );
  $input['index_content01_desc'] = sanitize_textarea_field( $input['index_content01_desc'] );
  $input['index_content01_color'] = sanitize_hex_color( $input['index_content01_color'] );
  $input['index_content01_bg'] = sanitize_hex_color( $input['index_content01_bg'] );
  $input['index_content01_btn_bg'] = sanitize_hex_color( $input['index_content01_btn_bg'] );
  $input['index_content01_btn_color'] = sanitize_hex_color( $input['index_content01_btn_color'] );
  $input['index_content01_btn_bg_hover'] = sanitize_hex_color( $input['index_content01_btn_bg_hover'] );
  $input['index_content01_btn_color_hover'] = sanitize_hex_color( $input['index_content01_btn_color_hover'] );

  // Contents builder
  if ( ! isset( $input['index_contents_order'] ) || count( $input['index_contents_order'] ) !== count( $dp_default_options['index_contents_order'] ) ) {
    $input['index_contents_order'] = $dp_default_options['index_contents_order'];
  }
  foreach ( $input['index_contents_order'] as $order ) {
    if ( ! in_array( $order, $dp_default_options['index_contents_order'] ) ) {
      $input['index_contents_order'] = $dp_default_options['index_contents_order'];
      break;
    }
  }

  // 4 images and text
  if ( ! isset( $input['display_index_4_images_and_text'] ) ) $input['display_index_4_images_and_text'] = null;
	$input['display_index_4_images_and_text'] = ( $input['display_index_4_images_and_text'] == 1 ? 1 : 0 );
  if ( ! isset( $input['index_4_images_and_text_layout'] ) ) $input['index_4_images_and_text_layout'] = null;
  if ( ! array_key_exists( $input['index_4_images_and_text_layout'], $index_4_images_and_text_layout_options ) ) $input['index_4_images_and_text_layout'] = null;
  $input['index_4_images_and_text_bg'] = sanitize_hex_color( $input['index_4_images_and_text_bg'] );
  for ( $i = 1; $i <= 4; $i++ ) {
    $input['index_4_images_and_text_img' . $i] = absint( $input['index_4_images_and_text_img' . $i] );
  }
  $input['index_4_images_and_text_catch'] = sanitize_text_field( $input['index_4_images_and_text_catch'] );
  $input['index_4_images_and_text_catch_font_size'] = absint( $input['index_4_images_and_text_catch_font_size'] );
  $input['index_4_images_and_text_catch_font_size_sp'] = absint( $input['index_4_images_and_text_catch_font_size_sp'] );
  $input['index_4_images_and_text_catch_color'] = sanitize_hex_color( $input['index_4_images_and_text_catch_color'] );
  $input['index_4_images_and_text_desc'] = sanitize_textarea_field( $input['index_4_images_and_text_desc'] );

  // Three column
  if ( ! isset( $input['display_index_three_column'] ) ) $input['display_index_three_column'] = null;
	$input['display_index_three_column'] = ( $input['display_index_three_column'] == 1 ? 1 : 0 );
  $input['index_three_column_bg'] = sanitize_hex_color( $input['index_three_column_bg'] );

  for ( $i = 1; $i <= 3; $i++ ) {
    $input['index_three_column_title' . $i] = sanitize_text_field( $input['index_three_column_title' . $i] );
    $input['index_three_column_img' . $i] = absint( $input['index_three_column_img' . $i] );
    $input['index_three_column_desc' . $i] = sanitize_textarea_field( $input['index_three_column_desc' . $i] );
    $input['index_three_column_btn_label' . $i] = sanitize_text_field( $input['index_three_column_btn_label' . $i] );
    $input['index_three_column_btn_url' . $i] = sanitize_text_field( $input['index_three_column_btn_url' . $i] );
    if ( ! isset( $input['index_three_column_btn_target' . $i] ) ) $input['index_three_column_btn_target' . $i] = null;
	  $input['index_three_column_btn_target' . $i] = ( $input['index_three_column_btn_target' . $i] == 1 ? 1 : 0 );
  }

  // News and event
	if ( ! isset( $input['display_index_news_and_event'] ) ) $input['display_index_news_and_event'] = null;
	$input['display_index_news_and_event'] = ( $input['display_index_news_and_event'] == 1 ? 1 : 0 );
  if ( ! isset( $input['index_news_and_event_layout'] ) ) $input['index_news_and_event_layout'] = null;
  if ( ! array_key_exists( $input['index_news_and_event_layout'], $index_news_and_event_layout_options ) ) $input['index_news_and_event_layout'] = null;
	$input['index_news_and_event_bg'] = sanitize_hex_color( $input['index_news_and_event_bg'] );
	$input['index_news_title'] = sanitize_text_field( $input['index_news_title'] );
	$input['index_news_title_font_size'] = absint( $input['index_news_title_font_size'] );
	$input['index_news_title_font_size_sp'] = absint( $input['index_news_title_font_size_sp'] );
  $input['index_news_title_color'] = sanitize_hex_color( $input['index_news_title_color'] );
	$input['index_news_sub'] = sanitize_text_field( $input['index_news_sub'] );
	$input['index_news_num'] = absint( $input['index_news_num'] );
	$input['index_news_link_text'] = sanitize_text_field( $input['index_news_link_text'] );
	$input['index_news_link_color'] = sanitize_hex_color( $input['index_news_link_color'] );
	$input['index_news_link_color_hover'] = sanitize_hex_color( $input['index_news_link_color_hover'] );
	$input['index_event_title'] = sanitize_text_field( $input['index_event_title'] );
	$input['index_event_title_font_size'] = absint( $input['index_event_title_font_size'] );
	$input['index_event_title_font_size_sp'] = absint( $input['index_event_title_font_size_sp'] );
  $input['index_event_title_color'] = sanitize_hex_color( $input['index_event_title_color'] );
	$input['index_event_sub'] = sanitize_text_field( $input['index_event_sub'] );
	$input['index_event_num'] = absint( $input['index_event_num'] );
	$input['index_event_link_text'] = sanitize_text_field( $input['index_event_link_text'] );
	$input['index_event_link_color'] = sanitize_hex_color( $input['index_event_link_color'] );
	$input['index_event_link_color_hover'] = sanitize_hex_color( $input['index_event_link_color_hover'] );

  // Interview
	if ( ! isset( $input['display_index_interview'] ) ) $input['display_index_interview'] = null;
	$input['display_index_interview'] = ( $input['display_index_interview'] == 1 ? 1 : 0 );
	$input['index_interview_title'] = sanitize_text_field( $input['index_interview_title'] );
	$input['index_interview_title_font_size'] = absint( $input['index_interview_title_font_size'] );
	$input['index_interview_title_font_size_sp'] = absint( $input['index_interview_title_font_size_sp'] );
  $input['index_interview_title_color'] = sanitize_hex_color( $input['index_interview_title_color'] );
	$input['index_interview_sub'] = sanitize_text_field( $input['index_interview_sub'] );
	$input['index_interview_num'] = absint( $input['index_interview_num'] );
	$input['index_interview_link_text'] = sanitize_text_field( $input['index_interview_link_text'] );

  // Plan contents
	if ( ! isset( $input['display_index_plan_content'] ) ) $input['display_index_plan_content'] = null;
	$input['display_index_plan_content'] = ( $input['display_index_plan_content'] == 1 ? 1 : 0 );
	$input['index_plan_content_catch'] = sanitize_text_field( $input['index_plan_content_catch'] );
	$input['index_plan_content_catch_font_size'] = absint( $input['index_plan_content_catch_font_size'] );
	$input['index_plan_content_catch_font_size_sp'] = absint( $input['index_plan_content_catch_font_size_sp'] );
  $input['index_plan_content_catch_color'] = sanitize_hex_color( $input['index_plan_content_catch_color'] );
  $input['index_plan_content_post_id'] = absint( $input['index_plan_content_post_id'] );
	$input['index_plan_content_link_text'] = sanitize_text_field( $input['index_plan_content_link_text'] );

  // Image
	if ( ! isset( $input['display_index_image'] ) ) $input['display_index_image'] = null;
	$input['display_index_image'] = ( $input['display_index_image'] == 1 ? 1 : 0 );
  $input['index_image_image'] = absint( $input['index_image_image'] );
  $input['index_image_catch'] = sanitize_text_field( $input['index_image_catch'] );
  $input['index_image_catch_font_size'] = absint( $input['index_image_catch_font_size'] );
  $input['index_image_catch_font_size_sp'] = absint( $input['index_image_catch_font_size_sp'] );
  $input['index_image_desc'] = sanitize_textarea_field( $input['index_image_desc'] );
  $input['index_image_btn_label'] = sanitize_text_field( $input['index_image_btn_label'] );
  $input['index_image_btn_url'] = sanitize_text_field( $input['index_image_btn_url'] );
	if ( ! isset( $input['index_image_btn_target'] ) ) $input['index_image_btn_target'] = null;
	$input['index_image_btn_target'] = ( $input['index_image_btn_target'] == 1 ? 1 : 0 );

  // Blog
	if ( ! isset( $input['display_index_blog'] ) ) $input['display_index_blog'] = null;
	$input['display_index_blog'] = ( $input['display_index_blog'] == 1 ? 1 : 0 );
	$input['index_blog_title'] = sanitize_text_field( $input['index_blog_title'] );
	$input['index_blog_title_font_size'] = absint( $input['index_blog_title_font_size'] );
	$input['index_blog_title_font_size_sp'] = absint( $input['index_blog_title_font_size_sp'] );
  $input['index_blog_title_color'] = sanitize_hex_color( $input['index_blog_title_color'] );
	$input['index_blog_sub'] = sanitize_text_field( $input['index_blog_sub'] );
	$input['index_blog_num'] = absint( $input['index_blog_num'] );
	$input['index_blog_link_text'] = sanitize_text_field( $input['index_blog_link_text'] );

  // Catchphrase & description
 	if ( ! isset( $input['display_index_catch_and_desc'] ) ) $input['display_index_catch_and_desc'] = null;
  $input['display_index_catch_and_desc'] = ( $input['display_index_catch_and_desc'] == 1 ? 1 : 0 );
  $input['index_catch_and_desc_catch'] = sanitize_textarea_field( $input['index_catch_and_desc_catch'] );
  $input['index_catch_and_desc_catch_font_size'] = absint( $input['index_catch_and_desc_catch_font_size'] );
  $input['index_catch_and_desc_catch_font_size_sp'] = absint( $input['index_catch_and_desc_catch_font_size_sp'] );
  $input['index_catch_and_desc_catch_color'] = sanitize_hex_color( $input['index_catch_and_desc_catch_color'] );
  $input['index_catch_and_desc_desc'] = sanitize_textarea_field( $input['index_catch_and_desc_desc'] );

  // Wysiwyg
  for ( $i = 1; $i <= 3; $i++ ) {
 	  if ( ! isset( $input['display_index_wysiwyg' . $i] ) ) $input['display_index_wysiwyg' . $i] = null;
    $input['display_index_wysiwyg' . $i] = ( $input['display_index_wysiwyg' . $i] == 1 ? 1 : 0 );
  }

	return $input;
}
