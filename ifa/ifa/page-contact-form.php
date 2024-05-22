<?php
get_header('contact');

if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    $field10 = isset($_POST['field10']) ? $_POST['field10']: '';
    $field11 = isset($_POST['field11']) ? $_POST['field11']: '';
    $field12 = isset($_POST['field12']) ? $_POST['field12']: '';
    $field13 = isset($_POST['field13']) ? $_POST['field13']: '';
    $field14 = isset($_POST['field14']) ? $_POST['field14']: '';
    $field15 = isset($_POST['field15']) ? $_POST['field15']: '';

    
    $to      = 'info@jitsugen.co.jp';

    $message = "
    お名前 : ".$field1."<br>
    フリガナ : ".$field2."<br>
    メールアドレス : ".$field3."<br>
    会社名 : ".$field5."<br>
    部署名 : ".$field6."<br>
    役職名 : ".$field7."<br>
    郵便番号 : ".$field8."<br>
    ご住所 : ".$field9."<br>
    　　　　　".$field10."<br>
    　　　　　".$field11."<br>
    TEL : ".$field12."<br>
    FAX : ".$field13."<br>
    お問合せ項目 : ".$field14."<br>
    お問合せ内容 : <br>".$field15."<br>
    ";

    $subject = '株式会社クラウドファンディング';

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

<section id="contain">    	        
    <div class="contact_block_fcp">             
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact_block_in_fcp">  
                    <div class="common_title_hp common_center_hp common_color_fcp"> 
                        <p>Contact</p>                   	
                        <h2>お問い合わせフォーム</h2>
                    </div>              
                    <form id="contact_form" action="" method="post" enctype="multipart/form-data">     	
                    <div class="contact_middle_fcp">
                        <div class="contact_top_fcp">
                            <div class="contact-form-cop">                                
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">お名前<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field1" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">フリガナ<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field2" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">メールアドレス<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="email" placeholder="" name="field3" id="input_mail" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">メールアドレス（確認）</div>
                                    <div class="form-field-input-cop">
                                        <input type="email" placeholder="" name="field4" id="input_confirm_mail" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">会社名</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field5">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">部署名</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field6">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">役職名</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field7">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">郵便番号</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field8">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">ご住所<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <div class="form-list-cop">                                        	
                                            <div class="form-list-select-cop">
                                                <select class="custom-select" name="field9" required>
                                                    <option value="">都道府県</option><option value="東京都">東京都</option><option value="北海道">北海道</option><option value="青森県">青森県</option><option value="岩手県">岩手県</option><option value="岩手県">宮城県</option><option value="秋田県">秋田県</option><option value="山形県">山形県</option><option value="福島県">福島県</option><option value="茨城県">茨城県</option><option value="栃木県">栃木県</option><option value="群馬県">群馬県</option><option value="埼玉県">埼玉県</option><option value="千葉県">千葉県</option><option value="神奈川県">神奈川県</option><option value="新潟県">新潟県</option><option value="富山県">富山県</option><option value="石川県">石川県</option><option value="福井県">福井県</option><option value="山梨県">山梨県</option><option value="長野県">長野県</option><option value="岐阜県">岐阜県</option><option value="愛知県">愛知県</option><option value="三重県">三重県</option><option value="静岡県">静岡県</option><option value="滋賀県">滋賀県</option><option value="京都府">京都府</option><option value="大阪府">大阪府</option><option value="兵庫県">兵庫県</option><option value="奈良県">奈良県</option><option value="和歌山県">和歌山県</option><option value="鳥取県">鳥取県</option><option value="島根県">島根県</option><option value="岡山県">岡山県</option><option value="広島県">広島県</option><option value="山口県">山口県</option><option value="徳島県">徳島県</option><option value="香川県">香川県</option><option value="愛媛県">愛媛県</option><option value="高知県">高知県</option><option value="福岡県">福岡県</option><option value="佐賀県">佐賀県</option><option value="長崎県">長崎県</option><option value="熊本県">熊本県</option><option value="大分県">大分県</option><option value="宮崎県">宮崎県</option><option value="鹿児島県">鹿児島県</option><option value="沖縄県">沖縄県</option>
                                                </select>                                     
                                            </div>                                                                                 
                                        </div>
                                        <input class="contact_pd_fcp" type="text" placeholder="" name="field10">       
                                        <input class="contact_pd_fcp" type="text" placeholder="" name="field11">       
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">TEL<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field12" required>                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">FAX</div>
                                    <div class="form-field-input-cop">
                                        <input type="text" placeholder="" name="field13">                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                                    
                                <div class="form-field-cop">
                                    <div class="form-field-lable-cop">お問合せ項目</div>
                                    <div class="form-field-input-cop form-field-radio-row-cop">
                                        <div class="form-radio-cp">
                                            <div class="form-field-radio-cp form-field-radio-main-cp">
                                                <label class="radio-container-cp">サービスについて
                                                    <input type="radio" checked="checked" name="field14" value="サービスについて">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-radio-cp">
                                            <div class="form-field-radio-cp form-field-radio-main-cp">
                                                <label class="radio-container-cp">ニュースリリースについて
                                                    <input type="radio" name="field14" value="ニュースリリースについて">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-radio-cp">
                                            <div class="form-field-radio-cp form-field-radio-main-cp">
                                                <label class="radio-container-cp">取材申込
                                                    <input type="radio" name="field14" value="取材申込">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-radio-cp">
                                            <div class="form-field-radio-cp form-field-radio-main-cp">
                                                <label class="radio-container-cp">ニ資料請求
                                                    <input type="radio" name="field14" value="ニ資料請求">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-radio-cp">
                                            <div class="form-field-radio-cp form-field-radio-main-cp">
                                                <label class="radio-container-cp">その他
                                                    <input type="radio" name="field14" value="その他">
                                                    <span class="checkmark-cp"></span>
                                                </label>
                                            </div>
                                        </div>                                      
                                    </div>
                                </div>
                                <div class="form-field-cop field-top-cop">
                                    <div class="form-field-lable-cop">お問合せ内容<span>必須</span></div>
                                    <div class="form-field-input-cop">
                                        <textarea placeholder="" name="field15" required></textarea>                                       
                                    </div>
                                    <div class="clearfix"></div>
                                </div>                                                                                                           
                            </div> 
                            </div>
                        <div class="contact_btn_fcp">                     
                            <input type="hidden" name="submit-confirm" value="submit-confirm">       	
                            <button type="submit" class="common_btn_hp">送信する<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white_right_arrow.svg" alt=""></a>                                           
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
