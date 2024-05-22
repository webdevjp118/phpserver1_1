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
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お名前 : ".$field1."<br>
    メールアドレス : ".$field2."<br>
    電話番号 : ".$field3."<br>
    お問い合わせ内容 : ".$field4."<br>
    お問い合わせ詳細 : <br>".$field5."<br>
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
<main>
    <section class="page _contact">
        <h1 class="pageTitle">お問い合わせ</h1>
        <h2 class="xl_en">CONTACT</h2>
        <div class="breadcrumb">
            <span class="bread_top"><a href="<?php echo get_site_url(); ?>/">TOP</a></span>
            <span>&nbsp; &gt; &nbsp;</span>
            <span>お問い合わせ</span>
        </div>
    </section>
    <section class="contact">
        <div class="contactBox">
            <p class="contactBox_text">
                リフォームのご相談やご質問など、お気軽にお問い合わせください。
            </p>
            <div class="telBox">
                <p class="telBox_text">
                    お急ぎの方はお電話にて承っております。
                </p>
                <div class="telBox_num">
                    <a href="tel:123-456-7890"><i class="fa-solid fa-phone"></i>123-456-7890</a>
                    <span>[営業時間] 平日9:00~18:00</span>
                </div>
            </div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="form">
                <dl>
                    <dt>お名前<span class="require">必須</span></dt>
                    <dd>
                        <input type="text" name="field1" required>
                    </dd>
                    <dt>メールアドレス<span class="require">必須</span></dt>
                    <dd>
                        <input type="email" name="field2" required>
                    </dd>
                    <dt>電話番号<span class="require">必須</span></dt>
                    <dd>
                        <input type="tel" name="field3" required>
                    </dd>
                    <dt>お問い合わせ内容<span class="require">必須</span></dt>
                    <dd class="radioLists">
                        <div class="radio_item">
                            <input type="radio" name="field4" value="ご相談" id="no1" checked required><label for="no1">ご相談</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="field4" value="お見積り" id="no2"><label for="no2">お見積り</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="field4" value="採用に関して" id="no3"><label for="no3">採用に関して</label>
                        </div>
                        <div class="radio_item">
                            <input type="radio" name="field4" value="その他" id="no4"><label for="no4">その他</label>
                        </div>
                    </dd>
                    <dt>お問い合わせ詳細<span class="require">必須</span></dt>
                    <dd>
                        <textarea name="field5" id="" cols="30" rows="10" required></textarea>
                    </dd>
                </dl>
                <div class="privacyPolicy">
                    <input type="checkbox" id="agree" required>
                    <label for="agree"><a href="<?php echo get_site_url(); ?>/privacypolicy" class="_ul">プライバシーポリシー</a>に同意する</label>
                </div>
                <div class="formBtn">
                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                    <button id="submit-btn" class="btn -type5" type="submit">送信</button>
                </div>
            </div>
          </form>
        </div>
    </section>
</main>
<?php
get_footer();
