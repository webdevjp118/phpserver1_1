<?php
get_header();
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field5 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    電話番号 : ".$field2."<br>
    メールアドレス : ".$field3."<br>
    弊社からの返信方法 : ".$field4."<br>
    建物診断を希望する : ".$field5."<br>
    メッセージ : <br>".$field6."<br>
    ";

    $subject = 'Team Building';

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
<section id="contain">    	        
    <div class="banner_block_cp">             
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_cp">                    	
                    <div class="banner_middle_cp"> 
                        <div class="banner_top_cp">		     
                            <div class="banner_title_cp">
                                <h1>Contact</h1>
                                <p>お問い合わせ</p>
                            </div>
                            <div class="banner_img_cp">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_7.png" alt="" />
                            </div>
                        </div>                            
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>  
    <div class="contact_block_cop">         	               	
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_cop">                     	
                    <div class="contact_middle_cop">                        	                                                    
                        <div class="contact_box_cop">
                            <div class="contact_title_cop">
                                お電話でのお問い合わせ
                            </div>
                            <div class="contact_grid_cop js_button" data-href="tel:0466-27-1761">
                                <div class="contact_icon_cop">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact_call_icon.svg" alt=""/>
                                </div>
                                <div class="contact_number_cop">
                                    0466-27-1761
                                </div>
                            </div>
                            <div class="contact_time_cop">
                                （ 平日 09:00〜17:00 ）
                            </div>
                        </div> 
                    </div>                                                                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>                                 
        <div class="clearfix"></div>
    </div>        
    
    <div class="click_block_cop">         	               	
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 click_block_in_cop">                     	
                    <div class="company_title_cp"> 
                        <div class="company_title_in_cp">                	
                            <h2>メールでのお問い合わせはこちらから</h2>
                        </div>    
                    </div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="click_middle_cop">                        	                                                                             	                             
                        <div class="click_top_cop"> 
                            <div class="contact-form-cop">                                
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">お名前<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="お名前をご記入ください。" name="field1" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">電話番号<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="電話番号をご記入ください。" name="field2" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">メールアドレス<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="email" placeholder="メールアドレスをご記入ください。" name="field3" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop">
                                    <div class="form-field-lable-cop">弊社からの返信方法<span>必須</span></div>
                                    <div class="form-field-radio-main-cp form-field-radio-main-alone-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">お電話でのご連絡
                                                <input type="radio" name="field4" value="お電話でのご連絡" required>
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">メールでのご連絡
                                                <input type="radio" name="field4" value="メールでのご連絡">
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field-cop">
                                    <div class="form-field-lable-cop">建物診断を希望する</div>
                                    <div class="form-field-radio-main-cp form-field-radio-main-alone-cp">
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">はい
                                                <input type="radio" name="field5" value="はい">
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                        <div class="form-field-radio-cp">
                                            <label class="radio-container-cp">いいえ
                                                <input type="radio" name="field5" value="いいえ">
                                                <span class="checkmark-cp"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">メッセージ</div>
                                    <div class="form-field-input-cop">
                                        <textarea placeholder="お問い合わせ内容をご記入ください。" name="field6"></textarea>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                                                                                                        
                            </div>
                            <div class="click_btn_cop">
                                <input type="hidden" name="submit-confirm" value="submit-confirm">
                                <button type="submit">送信する<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/form_btn_right_arrow.svg" alt=""/></button>
                            </div>	
                        </div>
                    </div>
                    </form>                                                                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>                                 
        <div class="clearfix"></div>
    </div>
</section>
<?php
get_footer();
