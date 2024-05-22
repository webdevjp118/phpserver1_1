<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; // URL to the reCAPTCHA server
    $recaptcha_secret = '6Ld0y1spAAAAAANhmNQTxo-Z6CimA1gDOOB-mqde'; // Secret key
    $recaptcha_response = $_POST['recaptchaResponse']; // Response from reCAPTCHA server, added to the form during processing
    $recaptcha = file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response); // Send request to the server
    $recaptcha = json_decode($recaptcha); // Decode the JSON response
    if($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == "contact"){ // If the response is valid
        // run email send routine
    } else {
        echo '<script>alert("You are not a human!"); location.href="'.home_url().'"</script>';
    }

    $fld_question_type = isset($_POST['fld_question_type']) ? $_POST['fld_question_type']: '';
    $fld_name = isset($_POST['fld_name']) ? $_POST['fld_name']: '';
    $fld_phone = isset($_POST['fld_phone']) ? $_POST['fld_phone']: '';
    $fld_email = isset($_POST['fld_email']) ? $_POST['fld_email']: '';
    $fld_post1 = isset($_POST['fld_post1']) ? $_POST['fld_post1']: '';
    $fld_pref1 = isset($_POST['fld_pref1']) ? $_POST['fld_pref1']: '';
    $fld_addr1 = isset($_POST['fld_addr1']) ? $_POST['fld_addr1']: '';
    $fld_post2 = isset($_POST['fld_post2']) ? $_POST['fld_post2']: '';
    $fld_pref2 = isset($_POST['fld_pref2']) ? $_POST['fld_pref2']: '';
    $fld_addr2 = isset($_POST['fld_addr2']) ? $_POST['fld_addr2']: '';
    $fld_size = isset($_POST['fld_size']) ? $_POST['fld_size']: '';
    $fld_maker = isset($_POST['fld_maker']) ? $_POST['fld_maker']: '';
    $fld_message = isset($_POST['fld_message']) ? $_POST['fld_message']: '';
    
    // $to      = 'info@r-kosan.co.jp,fb@arcuate.jp';
    $to      = 'info@r-kosan.co.jp,fb@arcuate.jp';

    $message = "
	以下は「神奈川給湯器交換センター」のお問い合わせフォームから送信された内容です。<br>
    https://xn--bnq94jn9b7w4bjtq.com/<br>
	<br>
    ご相談項目 : ".$fld_question_type."<br>
	<br>
    お名前または法人名＆担当者名 : ".$fld_name."<br>
    連絡先電話番号 : ".$fld_phone."<br>
    メールアドレス : ".$fld_email."<br>
    <br>
    ＜ご住所＞<br>
    郵便番号 : ".$fld_post1."<br>
    都道府県 : ".$fld_pref1."<br>
    住所 : ".$fld_addr1."<br>
    <br>
    ＜取付先ご住所＞<br>
    郵便番号 : ".$fld_post2."<br>
    都道府県 : ".$fld_pref2."<br>
    住所 : ".$fld_addr2."<br>
    <br>
    設置希望サイズ : ".$fld_size."<br>
    設置希望機種 : ".$fld_maker."<br>
    お問い合わせ内容 : <br>".$fld_message."<br>
    <br>
    <br>
    <br>
    **************************************<br>
    内容確認の上、担当よりご連絡させていただきますのでお待ちください。<br>
    ※こちらのメールにお心当たりがない場合は、お手数ではございますが下記までご連絡をお願いいたします。<br>
    <br>
    【神奈川給湯器交換センター】<br>
    運営会社：株式会社アール恒産<br>
    所在地：〒106-0045 東京都港区麻布十番1-3-8-101<br>
    フリーダイヤル：0120-313-606<br>
    メールアドレス：info@r-kosan.co.jp<br>
    **************************************<br>
    ";

    $subject = '神奈川給湯器交換センターにお問い合わせがありました';

    $headers = "From: " . $fld_email . "\r\n";
    $headers .= "Reply-To: " . $fld_email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }
    
    $fromCompany      = 'info@r-kosan.co.jp';
    $to      = $fld_email;
    $subject = '神奈川給湯器交換センターにお問い合わせがありました';

    $headers = "From: " . $fromCompany . "\r\n";
    $headers .= "Reply-To: " . $fromCompany . "\r\n";
    $headers .= "Bcc: info@r-kosan.co.jp, prgfinal216@gmail.com" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
        echo '<script>location.href="'.home_url().'/failed"</script>';
    }
}
?>
<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Ld0y1spAAAAALxgmUpVmFhz4hoxRwXvokKa76Ev"></script>
<!-- <script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
    //  document.getElementById("contact_form").submit();
   }
</script> -->
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="cwidth14">
            <div class="pgfv_title X_2"><h1>お問い合わせ</h1></div>
        </div>
    </div>
    <div class="pg_frame">
        <div class="pgf_inner">
            <div class="hx4"></div>
            <div class="contact_p">
                <p>
                    以下のフォームに必要事項をご入力の上、「確認画面へ」を押してください。<br>
                    無料お見積もりやお問い合わせはこちらのフォームにて承っております。<br>
                    <span>※は必須入力項目です。（24時間受付）</span>
                </p>
            </div>
            <div class="hx4"></div>
            <div class="form_pos">
                <form action="" method="post" enctype="multipart/form-data" id="contact_form">
                    <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
                    <div class="form_field">
                        <div class="field_cap">ご相談項目</div>
                        <div class="field_control">
                            <div class="checkbox_wrap"><input type="checkbox" name="fld_question_type" class="checkbox_radio1" value="給湯器交換について" id="fld_question_type1"><label for="fld_question_type1">給湯器交換について</label></div>
                            <div class="checkbox_wrap"><input type="checkbox" name="fld_question_type" class="checkbox_radio1" value="給湯器リースについて" id="fld_question_type2"><label for="fld_question_type2">給湯器リースについて</label></div>
                            <div class="checkbox_wrap"><input type="checkbox" name="fld_question_type" class="checkbox_radio1" value="その他相談" id="fld_question_type3"><label for="fld_question_type3">その他相談</label></div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">お名前または法人名＆担当者名<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="fld_name" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">連絡先電話番号<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="fld_phone" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">メールアドレス<span>*</span></div>
                        <div class="field_control">
                            <input type="email" name="fld_email" id="input_email" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">確認のためもう一度<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="fld_email_confirm" id="input_confirm_email" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">ご住所<span>*</span></div>
                        <div class="field_address">
                            <div class="field_address2">
                                <div class="field_cap">郵便番号</div>
                                <div class="field_address3">
                                    <div class="field_address4">
                                        <div class="field_control">
                                            <input type="text" name="fld_post1" onKeyUp="AjaxZip3.zip2addr(this,'','fld_pref1','fld_addr1');" required/>
                                        </div>
                                    </div>
                                    <div class="field_address5"><p>※7桁で入力　» <a target="_blank" href="https://www.post.japanpost.jp/zipcode/">郵便番号を調べる</a></p></div>
                                </div>
                            </div>
                            <div class="field_address2">
                                <div class="field_cap">都道府県</div>
                                <div class="field_address3">
                                    <div class="field_address4">
                                        <div class="field_control">
                                            <select name="fld_pref1">
                                                <option value=""></option>
                                                <option value="北海道" data-pref-id="01">北海道</option>
                                                <option value="青森県" data-pref-id="02">青森県</option>
                                                <option value="岩手県" data-pref-id="03">岩手県</option>
                                                <option value="宮城県" data-pref-id="04">宮城県</option>
                                                <option value="秋田県" data-pref-id="05">秋田県</option>
                                                <option value="山形県" data-pref-id="06">山形県</option>
                                                <option value="福島県" data-pref-id="07">福島県</option>
                                                <option value="茨城県" data-pref-id="08">茨城県</option>
                                                <option value="栃木県" data-pref-id="09">栃木県</option>
                                                <option value="群馬県" data-pref-id="10">群馬県</option>
                                                <option value="埼玉県" data-pref-id="11">埼玉県</option>
                                                <option value="千葉県" data-pref-id="12">千葉県</option>
                                                <option value="東京都" data-pref-id="13">東京都</option>
                                                <option value="神奈川県" data-pref-id="14">神奈川県</option>
                                                <option value="新潟県" data-pref-id="15">新潟県</option>
                                                <option value="富山県" data-pref-id="16">富山県</option>
                                                <option value="石川県" data-pref-id="17">石川県</option>
                                                <option value="福井県" data-pref-id="18">福井県</option>
                                                <option value="山梨県" data-pref-id="19">山梨県</option>
                                                <option value="長野県" data-pref-id="20">長野県</option>
                                                <option value="岐阜県" data-pref-id="21">岐阜県</option>
                                                <option value="静岡県" data-pref-id="22">静岡県</option>
                                                <option value="愛知県" data-pref-id="23">愛知県</option>
                                                <option value="三重県" data-pref-id="24">三重県</option>
                                                <option value="滋賀県" data-pref-id="25">滋賀県</option>
                                                <option value="京都府" data-pref-id="26">京都府</option>
                                                <option value="大阪府" data-pref-id="27">大阪府</option>
                                                <option value="兵庫県" data-pref-id="28">兵庫県</option>
                                                <option value="奈良県" data-pref-id="29">奈良県</option>
                                                <option value="和歌山県" data-pref-id="30">和歌山県</option>
                                                <option value="鳥取県" data-pref-id="31">鳥取県</option>
                                                <option value="島根県" data-pref-id="32">島根県</option>
                                                <option value="岡山県" data-pref-id="33">岡山県</option>
                                                <option value="広島県" data-pref-id="34">広島県</option>
                                                <option value="山口県" data-pref-id="35">山口県</option>
                                                <option value="徳島県" data-pref-id="36">徳島県</option>
                                                <option value="香川県" data-pref-id="37">香川県</option>
                                                <option value="愛媛県" data-pref-id="38">愛媛県</option>
                                                <option value="高知県" data-pref-id="39">高知県</option>
                                                <option value="福岡県" data-pref-id="40">福岡県</option>
                                                <option value="佐賀県" data-pref-id="41">佐賀県</option>
                                                <option value="長崎県" data-pref-id="42">長崎県</option>
                                                <option value="熊本県" data-pref-id="43">熊本県</option>
                                                <option value="大分県" data-pref-id="44">大分県</option>
                                                <option value="宮崎県" data-pref-id="45">宮崎県</option>
                                                <option value="鹿児島県" data-pref-id="46">鹿児島県</option>
                                                <option value="沖縄県" data-pref-id="47">沖縄県</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field_address5 disb_pc"><p>&nbsp;</div>
                                </div>
                            </div>
                            <div class="field_address1">
                                <div class="field_cap">住　　所</div>
                                <div class="field_control">
                                    <input type="text" name="fld_addr1" id="auto_address1_2"/>
                                </div>
                            </div>
                            <!-- <div class="field_address1">
                                <div class="field_cap">町村丁番</div>
                                <div class="field_control">
                                    <input type="text" name="field3" id="auto_address1_3"/>
                                </div>
                            </div>
                            <div class="field_address1">
                                <div class="field_cap">建物名称</div>
                                <div class="field_control">
                                    <input type="text" name="field3" id="auto_address1_4"/>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">取付先ご住所</div>
                        <div class="field_address">
                            <div class="field_address2">
                                <div class="field_cap">郵便番号</div>
                                <div class="field_address3">
                                    <div class="field_address4">
                                        <div class="field_control">
                                            <input type="text" name="fld_post2" onKeyUp="AjaxZip3.zip2addr(this,'','fld_pref2','fld_addr2');"/>
                                        </div>
                                    </div>
                                    <!-- <div class="addressfill_btn" id="js_autoaddress2">住所自動入力</div> -->
                                    <div class="field_address5"><p>※7桁で入力　» <a target="_blank" href="https://www.post.japanpost.jp/zipcode/">郵便番号を調べる</a></p></div>
                                </div>
                            </div>
                            <div class="field_address2">
                                <div class="field_cap">都道府県</div>
                                <div class="field_address3">
                                    <div class="field_address4">
                                        <div class="field_control">
                                            <select name="fld_pref2">
                                                <option value=""></option>
                                                <option value="北海道" data-pref-id="01">北海道</option>
                                                <option value="青森県" data-pref-id="02">青森県</option>
                                                <option value="岩手県" data-pref-id="03">岩手県</option>
                                                <option value="宮城県" data-pref-id="04">宮城県</option>
                                                <option value="秋田県" data-pref-id="05">秋田県</option>
                                                <option value="山形県" data-pref-id="06">山形県</option>
                                                <option value="福島県" data-pref-id="07">福島県</option>
                                                <option value="茨城県" data-pref-id="08">茨城県</option>
                                                <option value="栃木県" data-pref-id="09">栃木県</option>
                                                <option value="群馬県" data-pref-id="10">群馬県</option>
                                                <option value="埼玉県" data-pref-id="11">埼玉県</option>
                                                <option value="千葉県" data-pref-id="12">千葉県</option>
                                                <option value="東京都" data-pref-id="13">東京都</option>
                                                <option value="神奈川県" data-pref-id="14">神奈川県</option>
                                                <option value="新潟県" data-pref-id="15">新潟県</option>
                                                <option value="富山県" data-pref-id="16">富山県</option>
                                                <option value="石川県" data-pref-id="17">石川県</option>
                                                <option value="福井県" data-pref-id="18">福井県</option>
                                                <option value="山梨県" data-pref-id="19">山梨県</option>
                                                <option value="長野県" data-pref-id="20">長野県</option>
                                                <option value="岐阜県" data-pref-id="21">岐阜県</option>
                                                <option value="静岡県" data-pref-id="22">静岡県</option>
                                                <option value="愛知県" data-pref-id="23">愛知県</option>
                                                <option value="三重県" data-pref-id="24">三重県</option>
                                                <option value="滋賀県" data-pref-id="25">滋賀県</option>
                                                <option value="京都府" data-pref-id="26">京都府</option>
                                                <option value="大阪府" data-pref-id="27">大阪府</option>
                                                <option value="兵庫県" data-pref-id="28">兵庫県</option>
                                                <option value="奈良県" data-pref-id="29">奈良県</option>
                                                <option value="和歌山県" data-pref-id="30">和歌山県</option>
                                                <option value="鳥取県" data-pref-id="31">鳥取県</option>
                                                <option value="島根県" data-pref-id="32">島根県</option>
                                                <option value="岡山県" data-pref-id="33">岡山県</option>
                                                <option value="広島県" data-pref-id="34">広島県</option>
                                                <option value="山口県" data-pref-id="35">山口県</option>
                                                <option value="徳島県" data-pref-id="36">徳島県</option>
                                                <option value="香川県" data-pref-id="37">香川県</option>
                                                <option value="愛媛県" data-pref-id="38">愛媛県</option>
                                                <option value="高知県" data-pref-id="39">高知県</option>
                                                <option value="福岡県" data-pref-id="40">福岡県</option>
                                                <option value="佐賀県" data-pref-id="41">佐賀県</option>
                                                <option value="長崎県" data-pref-id="42">長崎県</option>
                                                <option value="熊本県" data-pref-id="43">熊本県</option>
                                                <option value="大分県" data-pref-id="44">大分県</option>
                                                <option value="宮崎県" data-pref-id="45">宮崎県</option>
                                                <option value="鹿児島県" data-pref-id="46">鹿児島県</option>
                                                <option value="沖縄県" data-pref-id="47">沖縄県</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field_address5"><p>&nbsp;</div>
                                </div>
                            </div>
                            <div class="field_address1">
                                <div class="field_cap">住　　所</div>
                                <div class="field_control">
                                    <input type="text" name="fld_addr2" id="auto_address2_2"/>
                                </div>
                            </div>
                            <!-- <div class="field_address1">
                                <div class="field_cap">町村丁番</div>
                                <div class="field_control">
                                    <input type="text" name="field3" id="auto_address2_3"/>
                                </div>
                            </div>
                            <div class="field_address1">
                                <div class="field_cap">建物名称</div>
                                <div class="field_control">
                                    <input type="text" name="field3" id="auto_address2_4"/>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">設置希望サイズ</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="16号" id="fld_size1"><label for="fld_size1">16号</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="20号" id="fld_size2"><label for="fld_size2">20号</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="24号" id="fld_size3"><label for="fld_size3">24号</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_size" value="その他" id="fld_size4"><label for="fld_size4">その他</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">設置希望メーカー</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="パロマ" id="radio_field6_1"><label for="fld_maker1">パロマ</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="ノーリツ" id="radio_field6_2"><label for="fld_maker2">ノーリツ</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="リンナイ" id="radio_field6_2"><label for="fld_maker3">リンナイ</label></div>
                                <div class="radio_wrap"><input type="radio" name="fld_maker" value="その他" id="radio_field6_3"><label for="fld_maker4">その他</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">お問い合わせ内容</div>
                        <div class="field_control">
                            <textarea name="fld_message"></textarea>
                        </div>
                    </div>
                    <div class="privacy_field">
                        <div class="hx4"></div>
                        <div class="form_field">
                            <div class="field_control">
                                <div class="privacy_desc">
                                    <p><a target="_blank" href="<?php echo get_site_url(); ?>/privacy/">個人情報の取り扱いについて</a></p>
                                </div>
                                <div class="hx2"></div>
                                <div class="privacy_checkbox">
                                    <input type="checkbox" id="id_privacy" value="" required=""><label for="id_privacy">当社プライバシーポリシーを理解しました。</label>
                                </div>
                            </div>
                        </div>
                        <div class="hx4"></div>
                    </div>
                    <input class="abs_hidden" value="送信する" id="form_submit" type="submit">
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <button class="formbtn_send" type="button" id="google_check">送信する</button>
                    </div>
                </form>
            </div>
            <div class="hx10"></div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<script>
document.getElementById('google_check').addEventListener('click', 
    function(event) {
        event.preventDefault();
        grecaptcha.ready(function() {
            grecaptcha.execute('6Ld0y1spAAAAALxgmUpVmFhz4hoxRwXvokKa76Ev', {action: 'contact'}).then(function(token) {
                let recaptchaResponse = document.getElementById("recaptchaResponse");
                recaptchaResponse.value = token; // Set the recaptcha response
                let submit_btn = document.getElementById("form_submit");
                submit_btn.click();
            });
        });
    }
);
</script>

<!-- CONTAIN_END -->
<?php
get_footer();
