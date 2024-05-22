<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    電話番号 : ".$field3."<br>
    お問い合わせ内容 : <br>".$field4."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }
}
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    	<div class="banner_block_rp">                     	
            <div class="container-fluid">
                <div class="row">
                    <div class="col banner_block_in_rp">                    	
                        <div class="banner_middle_rp"> 
                        	<div class="banner_top_rp">
                            	<div class="banner_left_rp">
                                	<div class="banner_left_title_rp">
                                    	<h1>お問い合わせ</h1>
                                        <h3>Contact</h3>
                                    </div>
                                </div>
                                <div class="banner_right_rp">
                                	<a><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_img8.png" alt="" /></a>
                                </div>
                            </div>			     
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="hour_block_cp">                     	
            <div class="container">
                <div class="row">
                    <div class="col hour_block_in_cp">                    	
                        <div class="hour_middle_cp"> 
							<div class="hour_top_cp">
                            	<div class="hour_info_cp">
                                	お問い合わせから２４時間以内に返信させていただきます。
                                </div>
                                <div class="hour_boxes_cp">
                                	<div class="hour_box_cp">	
                                    	<div class="hour_box_in_cp">
                                        	<div class="hour_box_title_cp">
                                            	まずはフランクに相談してみたい方向け
                                            </div>
                                            <div class="hour_box_btn_cp">
                                            	<a href="#">
                                                	<div class="hour_box_grid_cp">
                                                    	<div class="hour_box_grid_in_cp">
                                                            <div class="hour_grid_icon_cp">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/line_icon.svg" alt="" />
                                                            </div>
                                                            <div class="hour_grid_info_cp">
                                                                LINEでご相談
                                                            </div>
                                                        </div>    
                                                        <div class="hour_box_icon_cp">
                                                        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right_arrow.svg" alt="" />
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hour_box_cp hour_box_bg_cp">	
                                    	<div class="hour_box_in_cp">
                                        	<div class="hour_box_title_cp">
                                            	まずはフランクに相談してみたい方向け
                                            </div>
                                            <div class="hour_box_btn_cp">
                                            	<a href="#">
                                                	<div class="hour_box_grid_cp">
                                                    	<div class="hour_box_grid_in_cp">
                                                            <div class="hour_grid_icon_cp">
                                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram_icon.svg" alt="" />
                                                            </div>
                                                            <div class="hour_grid_info_cp">
                                                                インスタグラムでご相談
                                                            </div>
                                                        </div>    
                                                        <div class="hour_box_icon_cp">
                                                        	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right_arrow.svg" alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="hour_box_info_cp">
                                                    	解説準備中
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                       
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="content_block_cp">                     	
            <div class="container">
                <div class="row">
                    <div class="col content_block_in_cp">                    	
                        <div class="content_middle_cp"> 
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="content_top_cp">
                                    <div class="content_form_cp">
                                        <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span>名前</div>
                                                <div class="form-field-input-cop">
                                                    <input type="text" placeholder=" ⼭⽥太郎" name="field1" required>                                        
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop"><span>必須</span>メールアドレス</div>
                                            <div class="form-field-input-cop">
                                                <input type="email" placeholder="example@co.jp" name="field2" required>                                        
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>                                
                                        <div class="form-field-cop">
                                                <div class="form-field-lable-cop"><span>必須</span>電話番号</div>
                                                <div class="form-field-input-cop">
                                                    <input type="text" placeholder="0123456789" name="field3" required>                                        
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        <div class="form-field-cop">
                                            <div class="form-field-lable-cop"><span>必須</span>お問い合わせ内容 </div>
                                            <div class="form-field-input-cop">
                                                <textarea type="" placeholder="" name="field4" required></textarea>                                        
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="content_btn_cp">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <button id="submit-btn" class="btn -type5" type="submit">送 信</button>
                                </div>  
                            </form>                 
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
        <div class="contact_block_cp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/contact_img.png) no-repeat center center; background-size:cover;">                     	
            <div class="container">
                <div class="row">
                    <div class="col contact_block_in_cp"> 
                    	<div class="common_title_hp">
                            	<h2>Contact</h2>
                                <p>お問い合わせ</p>
                            </div>                   	
                        <div class="contact_middle_cp">  
                             <div class="contact_top_cp">
                             	<div class="contact_box_cp">
                                	<div class="contact_box_info_cp">
                                    	各種相談無料ですので、お気軽にお問い合わせ下さい。
                                    </div>
                                    <div class="contact_box_in_cp">
                                        <div class="contact_left_cp">
                                        	<div class="contact_left_grid_cp">
                                            	<div class="contact_grid_icon_cp">
                                                	<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone_icon.svg" alt="" /></a>
                                                </div>
                                                <div class="contact_grid_number_cp">
                                                	0980-75-0720
                                                </div>
                                            </div>
                                        </div>
                                        <div class="contact_right_cp">
                                        	<div class="contact_btn_cp">
                                                <a href="<?php echo get_site_url(); ?>/contact/" class="common_btn_hp">お問い合わせ<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                                                <div class="contact_icon_cp">
                                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file_icon.svg" alt="" />
                                                </div>
                                          	</div>
                                        </div>
                                    </div>    
                                </div>
                             </div>                	
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
            <div class="clearfix"></div>
        </div>
    </section>
<!-- CONTAIN_END -->
<?php
get_footer();
