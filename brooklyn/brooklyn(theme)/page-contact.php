<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2 = isset($_POST['field2']) ? $_POST['field2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: ''; //email
    $field6 = isset($_POST['field6']) ? $_POST['field6']: '';
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    
    $to      = 'test@gmail.com';

    $message = "
    お問い合わせ種別 : ".$field1."<br>
    お名前 : ".$field2."<br>
    会社名 : ".$field3."<br>
    住所 : ".$field4."<br>
    メールアドレス : ".$field5."<br>
    電話番号 : ".$field6."<br>
    お問い合わせ内容 : <br>".$field7."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field5 . "\r\n";
    $headers .= "Reply-To: " . $field5 . "\r\n";
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
    <div class="instead_head"></div>
    <div class="pg_fv">
        <div class="pgfv_title">
            <h1 class="pani4 js-split">CONTACT</h1>
            <div class="pgfv_uline"></div>
        </div>
    </div>
    <div class="hx6"></div>
    <div class="contactform_block">
        <div class="cwidth14">
            <div class="form_pos">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <div class="field_cap">お問い合わせ種別<span>*</span></div>
                        <div class="field_control">
                            <div class="radio_set">
                                <div class="radio_wrap"><input type="radio" name="field1" value="詳しい事業内容を知りたい" id="radio_field1_1" required><label for="radio_field1_1">詳しい事業内容を知りたい</label></div>
                                <div class="radio_wrap"><input type="radio" name="field1" value="見積りを依頼したい" id="radio_field1_2"><label for="radio_field1_2">見積りを依頼したい</label></div>
                                <div class="radio_wrap"><input type="radio" name="field1" value="その他" id="radio_field1_3"><label for="radio_field1_3">その他</label></div>
                            </div>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap X_2">お名前<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="field2" required/>
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap X_2">会社名</div>
                        <div class="field_control">
                            <input type="text" name="field3" />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap X_2">住所</div>
                        <div class="field_control">
                            <input type="text" name="field4" />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap X_2">メールアドレス<span>*</span></div>
                        <div class="field_control">
                            <input type="email" name="field5" required />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap X_2">電話番号<span>*</span></div>
                        <div class="field_control">
                            <input type="text" name="field6" required />
                        </div>
                    </div>
                    <div class="form_field">
                        <div class="field_cap">お問い合わせ内容<span>*</span></div>
                        <div class="field_control">
                            <textarea name="field7" required></textarea>
                        </div>
                    </div>
                    <div class="hx2"></div>
                    <div class="privacy_field">
                        <div class="field_checkbox">
                            <input type="checkbox" id="id_privacy" value="" required>
                            <label for="id_privacy"><a href="#">プライバシーポリシー</a>に同意する</label>
                        </div>
                    </div>
                    <div class="field_contactbtn">
                        <div class="contactbtn_pos">
                            <input type="hidden" name="submit-confirm" value="submit-confirm">
                            <input type="submit" value="送信する" id="form_submit">
                        </div>
                    </div>   
                </form>
            </div>
        </div>
    </div>
    <div class="hx10"></div>
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
