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
	$field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    会社名 : ".$field1."<br>
	ご担当者氏名 : ".$field2."<br>
    メールアドレス : ".$field3."<br>
	ご予算 : ".$field4."<br>
    電話番号 : ".$field5."<br>
	資料送付 : ".$field7."<br>
    ご依頼内容 : <br>".$field6."<br>
    ";

    $subject = 'お問い合わせがありました';

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
    <div class="pgtitle_block">
        <div class="container">
            <div class="pgtitle_aline">
                <div class="pgtitle initani initani_wbk">
                    <h1>CONTACT</h1>
                    <p>お問い合わせ</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contactform_sec">
        <div class="contactform_width">
            <div class="hx8"></div>
            <div class="cf_desc">
                <p>動画制作、その他サービスについてお気軽にご相談ください。<br>
                    1～2営業日以内に担当者よりご連絡させていただきます。<br>
                    info@counter-inc.com</p>
            </div>
            <div class="hx4"></div>
            <div class="form_pos">
				<form action="" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <div class="field_cap">会社名<span>*</span></div>
                        <div class="field_control">
                            <input type="text" placeholder="カウンター株式会社" name="field1" required/>
                        </div>
                    </div>
                    <div class="multifields_row">
                        <div class="twocols_field">
                            <div class="field_cap">ご担当者氏名<span>*</span></div>
                            <div class="field_control">
                                <input type="text" placeholder="山本 太郎" name="field2" required/>
                            </div>
                        </div>
                        <div class="twocols_field">
                            <div class="field_cap">メールアドレス<span>*</span></div>
                            <div class="field_control">
                                <input type="email" placeholder="web@xx.co.jp" name="field3" required/>
                            </div>
                        </div>
                    </div>
                    <div class="multifields_row">
                        <div class="twocols_field">
                            <div class="field_cap">ご予算<span>*</span></div>
                            <div class="field_control">
                                <select name="field4" required>
                                    <option value="">ご予算を選択してください</option>
                                    <option value="50万〜100万">50万〜100万</option>
                                    <option value="100～150万">100～150万</option>
                                    <option value="150～200万">150～200万</option>
                                    <option value="200～300万">200～300万</option>
                                    <option value="300～400万">300～400万</option>
                                    <option value="400～500万">400～500万</option>
                                    <option value="500万～">500万～</option>
                                    <option value="未定">未定</option>
                                </select>
                            </div>
                        </div>
                        <div class="twocols_field">
                            <div class="field_cap">電話番号</div>
                            <div class="field_control">
                                <input type="text" placeholder="090-1234-5678" name="field5"/>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">ご依頼内容（決まっている事があればご記入下さい）</div>
                        <div class="field_control">
                            <textarea name="field6" placeholder="（例）サービス紹介の為の映像制作。 希望納期、3月末"></textarea>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">資料送付 （同業他社様はご遠慮下さい）</div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="field7" value="資料送付と打ち合わせを希望する" id="radio_field7_1"><label for="radio_field7_1">資料送付と打ち合わせを希望する</label></div>
                                <div class="radio_wrap"><input type="radio" name="field7" value="資料送付のみ希望する" id="radio_field7_2"><label for="radio_field7_2">資料送付のみ希望する</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="field_contactbtn">
                        <input type="hidden" name="submit-confirm" value="submit-confirm">
                        <input type="submit" value="送信" id="form_submit">
                    </div>   
                </form>
            </div>
        </div>
        <div class="hx10"></div>
    </div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
