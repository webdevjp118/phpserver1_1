<?php
get_header();
?>
<?php

if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お問い合わせ項目 : ".$field1."<br>
    お名前 : ".$field2."<br>
    ご担当者名 : ".$field3."<br>
    メールアドレス : ".$field4."<br>
    連絡のつく電話番号 : ".$field5."<br>
    その他入力項目 : <br>".$field6."<br>
    ";

    $subject = 'Team Building';

    $headers = "From: " . $field3 . "\r\n";
    $headers .= "Reply-To: " . $field3 . "\r\n";
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
    <div class="banner_block_sp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/colum_main.png) no-repeat center center; background-size:cover;">
        <div class="banner_overlay_sp">         
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner_block_in_sp">                    	
                        <div class="banner_middle_sp"> 
                            <div class="banner_title_sp"> 
                                <h2>お問い合わせ</h2>
                            </div>
                        </div>                                               
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="breadcrumb_block_sp contact_bg_cp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb_block_in_sp">
                    <div class="breadcrumb_middle_sp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>/">Top</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)"><span>サービス/料金体系</span></a></li>
                        </ol>                                                                                             
                    </div>                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="please_block_cp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 please_block_in_cp">                     	
                    <div class="please_middle_cp">
                        <div class="please_title_cp">                                                                
                            <h2>お電話でもお気軽にご連絡ください</h2>
                            <p>下部のコンタクトフォームよりお問い合わせください。<br/>土日祝にいただいたお問い合わせは、翌営業日以降にご返答させていただきます。フォームの入力項目は、全て入力必須となります。</p>
                        </div>                        	                            
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="flow_block_sp contact_after_cp flow_middle_pd_sp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 flow_block_in_sp">                     	
                    <div class="flow_middle_sp">
                        <div class="contact_boxes_cp">
                            <div class="contact_box_cp">
                                <div class="contact_box_in_cp">                                 	
                                    今すぐ資料で確認する<br/>3分でわかる経理代行サービス
                                </div>
                                <div class="contact_box_in_cp">                                 	
                                    導入のご相談・お問い合わせ<br/>プロ経理コンサルタントが対応します！
                                </div>
                            </div>
                            <div class="contact_num_main_cp">
                                <div class="contact_num_icon_cp">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/call_svg.svg" alt="" />
                                </div>
                                <div class="contact_num_in_cp">
                                    03-6450-9885
                                </div>
                            </div>                                
                        </div>                        	
                        <div class="flow_boxes_sp flow_boxes_pd_sp">                            
                            <div class="flow_box_sp">
                                <div class="flow_box_in_sp">
                                    <div class="flow_step_sp">
                                        STEP 1
                                    </div>
                                    <div class="flow_box_img_sp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_img1.svg" alt="" />
                                    </div>                                        
                                </div>
                                <div class="flow_box_title_sp">
                                        <h2>メールか電話でお問い合わせ</h2>
                                        <p>お問い合わせ内容に合わせて、サービスをご説明いたします。</p>
                                    </div>
                            </div>
                            <div class="flow_box_sp">
                                <div class="flow_box_in_sp">
                                    <div class="flow_step_sp">
                                        STEP 2
                                    </div>
                                    <div class="flow_box_img_sp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_img2.svg" alt="" />
                                    </div>                                        
                                </div>
                                <div class="flow_box_title_sp">
                                    <h2>依頼内容のご入力</h2>
                                    <p>依頼頂ける業務内容をヒアリングシートに記入いただきます。</p>
                                </div>
                            </div>
                            <div class="flow_box_sp">
                                <div class="flow_box_in_sp">
                                    <div class="flow_step_sp">
                                        STEP 3
                                    </div>
                                    <div class="flow_box_img_sp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_img3.svg" alt="" />
                                    </div>                                        
                                </div>
                                <div class="flow_box_title_sp">
                                    <h2>事前打ち合わせ</h2>
                                    <p>ミーティングで契約で必要になる必要書類と契約後の成果物の内容を確認いただきます。</p>
                                </div>
                            </div>
                            <div class="flow_box_sp">
                                <div class="flow_box_in_sp">
                                    <div class="flow_step_sp">
                                        STEP 4
                                    </div>
                                    <div class="flow_box_img_sp">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_img4.svg" alt="" />
                                    </div>                                        
                                </div>
                                <div class="flow_box_title_sp">
                                    <h2>契約書を取り交わします。</h2>
                                    <p>業務範囲、成果物、提出方法、提出時期等を合意いただき次第、NDAや契約書を取り交わします。</p>
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
    <div class="enter_block_cp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 enter_block_in_cp">                     	
                    <div class="enter_middle_cp">
                        <div class="enter_top_cp">
                            <div class="enter_info_cp"> 
                                <h3>お問い合わせ項目を入力し「送信する」をクリックしてください。</h3>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                            <div class="enter_form_cp">                                   
                                <div class="form_field_cp form-radio-top-cp form_field_top_cp">
                                    <div class="form_field_lable_cp">お問い合わせ項目<strong>：</strong><span>必須</span></div>
                                    <div class="form-field-radio-row-cp">
                                        <div class="form-radio-cp">
                                                <label class="radio-container-cp">無料カウンセリング
                                                    <input type="radio" checked="checked" name="field1" value="無料カウンセリング">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                        </div>
                                        <div class="form-radio-cp">
                                                <label class="radio-container-cp">診察
                                                    <input type="radio" name="field1" value="診察">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                        </div>
                                        <div class="form-radio-cp">
                                                <label class="radio-container-cp">資料請求
                                                    <input type="radio" name="field1" value="資料請求">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                        </div>
                                        <div class="form-radio-cp">
                                                <label class="radio-container-cp">お問い合わせ
                                                    <input type="radio" name="field1" value="お問い合わせ" required>
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                        </div>
                                    </div>
                                </div>                                                               
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">お名前<strong>：</strong><span>必須</span></div>
                                    <div class="form_field_input_cp"><input type="text" name="field2" placeholder=" " required></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">ご担当者名<strong>：</strong><span>必須</span></div>
                                    <div class="form_field_input_cp"><input type="text" name="field3" placeholder=" " required></div>
                                    <div class="clearfix"></div>
                                </div>                                                                   
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">メールアドレス<strong>：</strong><span>必須</span></div>
                                    <div class="form_field_input_cp"><input type="email" name="field4" placeholder=" " required></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">連絡のつく電話番号<strong>：</strong><span>必須</span></div>
                                    <div class="form_field_input_cp"><input type="text" name="field5" placeholder=" " required></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form_field_cp">
                                    <div class="form_field_lable_cp">その他入力項目<strong>：必須</strong></div>
                                    <div class="form_field_input_cp"><textarea name="field6" placeholder="" required></textarea></div>
                                    <div class="clearfix"></div>
                                </div> 
                                <div class="form-field-radio-main-cp">
                                <div class="form-field-radio-cp">
                                    <label class="radio-container-cp"><a target="_blank" href="<?php echo get_site_url(); ?>/privacypolicy/">プライバシーポリシー</a>に同意して送信する
                                        <input type="checkbox" required>
                                        <span class="checkmark-cp"></span>
                                    </label>
                                </div>
                            </div>                                                                                                                                      
                            </div>
                            <div class="enter_btn_cp">
                            <input type="hidden" name="submit-confirm" value="submit-confirm">
                            <button type="submit" class="common_btn_hp">送信<svg xmlns="http://www.w3.org/2000/svg" width="7.633" height="12.437" viewBox="0 0 7.633 12.437">
<path id="Path_3" data-name="Path 3" d="M1458.916,2353.646l5.511,5.511-5.511,5.511" transform="translate(-1458.208 -2352.938)" fill="none" stroke="#fff" stroke-width="2"/>
</svg></button>
                        </div>
                            </div>
                            </form>
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
