<?php
get_header();
?>
<?php
$field1_1 = isset($_POST['field1_1']) ? $_POST['field1_1']: '';
$field1_2 = isset($_POST['field1_2']) ? $_POST['field1_2']: '';
$field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
$field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
$field3 = isset($_POST['field3']) ? $_POST['field3']: '';
$field4 = isset($_POST['field4']) ? $_POST['field4']: '';
$field5 = isset($_POST['field5']) ? $_POST['field5']: '';
$field6 = isset($_POST['field6']) ? $_POST['field6']: '';
$field7_1 = isset($_POST['field7_1']) ? $_POST['field7_1']: '';
$field7_2 = isset($_POST['field7_2']) ? $_POST['field7_2']: '';
$field8_1 = isset($_POST['field8_1']) ? $_POST['field8_1']: '';
$field8_2 = isset($_POST['field8_2']) ? $_POST['field8_2']: '';
$field8_3 = isset($_POST['field8_3']) ? $_POST['field8_3']: '';
$field8_4 = isset($_POST['field8_4']) ? $_POST['field8_4']: '';
$field9_1 = isset($_POST['field9_1']) ? $_POST['field9_1']: '';
$field9_2 = isset($_POST['field9_2']) ? $_POST['field9_2']: '';
$field9_3 = isset($_POST['field9_3']) ? $_POST['field9_3']: '';
$field10 = isset($_POST['field10']) ? $_POST['field10']: '';
$field11 = isset($_POST['field11']) ? $_POST['field11']: '';
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
                                <h2>資料請求</h2>
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
                            <li class="breadcrumb-item"><a href="#">Top</a></li>
                            <li class="breadcrumb-item"><a href="#"><span>資料請求</span></a></li>
                        </ol>                                                                                             
                    </div>                       
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="data_block_dp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 data_block_in_dp">                     	
                    <div class="data_middle_dp">
                        <div class="data_boxes_dp">
                            <div class="data_box_dp data_box_1_dp">
                                <a href="#">入力</a>
                            </div>
                            <div class="data_box_dp data_box_2_dp">
                                <a class="active" href="#">確認</a>
                            </div>
                            <div class="data_box_dp data_box_bg_dp">
                                <a href="#">完了</a>
                            </div>
                        </div>
                        <form action="<?php echo get_site_url(); ?>/request-result/" method="post" enctype="multipart/form-data">
                        <div class="data_top_dp">
                            <div class="enter_info_cp"> 
                                <h3>※ 「入力内容の確認へ」ボタンを押す前に、別ページへ移動すると正しく申込みできない場合があります。 <br/>
                                    ※ 旧字体の漢字を入力すると文字化けする場合があるため、常用漢字にて入力ください。
                                    </h3>
                            </div>
                            <div class="contact-form-cop">                                
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">氏名<strong>：</strong></div> 
                                <div class="form-field-input-cop">
                                    <p><?php echo $field1_1.' '.$field1_2; ?></p>
                                    <input type="hidden" name="field1_1" value="<?php echo $field1_1; ?>">
                                    <input type="hidden" name="field1_2" value="<?php echo $field1_2; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">カナ氏名<strong>：</strong></div> 
                                <div class="form-field-input-cop">
                                    <p><?php echo $field2_1.' '.$field2_2; ?></p>
                                    <input type="hidden" name="field2_1" value="<?php echo $field2_1; ?>">
                                    <input type="hidden" name="field2_2" value="<?php echo $field2_2; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop post-code-cop">
                                <div class="form-field-lable-cop">年齢<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field3; ?></p>
                                    <input type="hidden" name="field3" value="<?php echo $field3; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">性別<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field4; ?></p>
                                    <input type="hidden" name="field4" value="<?php echo $field4; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop field-top-cop">
                                <div class="form-field-lable-cop">職業<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field5; ?></p>
                                    <input type="hidden" name="field5" value="<?php echo $field5; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">会社名<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field6; ?></p>
                                    <input type="hidden" name="field6" value="<?php echo $field6; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>                                
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">郵便番号<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field7_1.'-'.$field7_2; ?></p>
                                    <input type="hidden" name="field7_1" value="<?php echo $field7_1; ?>">
                                    <input type="hidden" name="field7_2" value="<?php echo $field7_2; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>                                                                                                
                            <div class="form-field-cop field-top-cop">
                                <div class="form-field-lable-cop">住所<strong>：</strong></div>                                    
                                <div class="form-field-input-cop">
                                    <p><?php echo $field8_1.' '.$field8_2.' '.$field8_3.' '.$field8_4; ?></p>
                                    <input type="hidden" name="field8_1" value="<?php echo $field8_1; ?>">
                                    <input type="hidden" name="field8_2" value="<?php echo $field8_2; ?>">
                                    <input type="hidden" name="field8_3" value="<?php echo $field8_3; ?>">
                                    <input type="hidden" name="field8_4" value="<?php echo $field8_4; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">電話番号<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field9_1.'-'.$field9_2.'-'.$field9_3; ?></p>
                                    <input type="hidden" name="field9_1" value="<?php echo $field9_1; ?>">
                                    <input type="hidden" name="field9_2" value="<?php echo $field9_2; ?>">
                                    <input type="hidden" name="field9_3" value="<?php echo $field9_3; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-field-cop field-top-cop">
                                <div class="form-field-lable-cop">E-mail<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field10; ?></p>
                                    <input type="hidden" name="field10" value="<?php echo $field10; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>                                
                            <div class="form-field-cop">
                                <div class="form-field-lable-cop">資料請求<strong>：</strong></div>
                                <div class="form-field-input-cop">
                                    <p><?php echo $field11; ?></p>
                                    <input type="hidden" name="field11" value="<?php echo $field11; ?>">
                                </div>
                                <div class="clearfix"></div>
                            </div>                                                                                                                                
                        </div>
                            <div class="enter_btn_cp">
                                <input type="hidden" name="submit-confirm" value="submit-confirm">
                                <button type="submit" class="common_btn_hp">請求する<svg xmlns="http://www.w3.org/2000/svg" width="7.633" height="12.437" viewBox="0 0 7.633 12.437">
                                    <path id="Path_3" data-name="Path 3" d="M1458.916,2353.646l5.511,5.511-5.511,5.511" transform="translate(-1458.208 -2352.938)" fill="none" stroke="#fff" stroke-width="2"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="data_bottom_info_dp">
                                ※ メールアドレスを入力した方には、申込み完了メールが自動送信されます。<br/>
                                ※ 記入いただいた情報は、本学園による案内書・入学関連情報の発信や連絡のみに使用します。<br/>
                                ※ 入力された内容は、SSL通信により、個人情報を暗号化し送信します。
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
<!-- CONTAIN_END -->

<?php
get_footer();
