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
    $field7 = isset($_POST['field7']) ? $_POST['field7']: '';
    $field8 = isset($_POST['field8']) ? $_POST['field8']: '';
    $field9 = isset($_POST['field9']) ? $_POST['field9']: '';
    
    // $to      = 'koide3019@yahoo.com';
    $to      = 'info@grv.jpn.com';

    $message = "
    氏名 : ".$field1."<br>
    会社名 : ".$field2."<br>
    メールアドレス : ".$field3."<br>
    電話番号 : ".$field4."<br>
    住所 : <br>".$field5."<br>
    ".$field7."<br>
    お問い合わせ種類 : ".$field8."<br>
    お問合せ内容 : <br>".$field9."<br>
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
<main>
  <section class="page_top">
    <h2 class="sectionTitle" data-aos="fade-up"
     data-aos-duration="3000">
      CONTACT
      <span class="-ja">お問い合わせ</span>
    </h2>
    <h2 class="sectionTitle_large">
      CONTACT
    </h2>
  </section>
  <section class="contact_wrap">
    <div class="contactBox">
      <h2 class="sectionTitle_sub" data-aos="fade-up"
     data-aos-duration="3000">
        お問い合わせフォーム
      </h2>
      <p class="contactText">以下のフォームに必要事項を入力してください。</p>
      <form action="" method="post" enctype="multipart/form-data" data-aos="fade-up"
     data-aos-duration="3000">
        <div class="form">
          <dl>
            <dt><label for="field1">氏名<span class="require">必須</span></label></dt>
            <dd>
              <input type="text" id="field1" name="field1" value="" placeholder="例）田中 太郎" required>
            </dd>

            <dt><label for="comfield1pany">会社名</label></dt>
            <dd>
              <input type="text" id="field2" name="field2" value="" placeholder="例）株式会社グローバー">
            </dd>

            <dt><label for="field3">メールアドレス<span class="require">必須</span></label></dt>
            <dd>
              <input id="field3" type="email" name="field3" value="" placeholder="例）groover@sample.com" required>
            </dd>

            <dt><label for="field4">電話番号<span class="require">必須</span></label></dt>
            <dd>
              <input id="field4" type="tel" name="field4" value="" placeholder="例）0120-123-456-789" required>
            </dd>

            <dt><label for="field5">住所</label></dt>
            <dd>
              <input id="field5" type="text" name="field5" value="" placeholder="例）和歌山県和歌山市榎原74-1">
              <input type="text" name="field7" value="" placeholder="例）建物名・部屋番号など">
            </dd>

            <dt><label for="kind">お問い合わせ種類<span class="require">必須</span></label></dt>
            <dd class="radioLists">
              <div class="radio_item">
                <input type="radio" name="field8" id="no1" value="パートナーシップ検討" required><label for="no1">パートナーシップ検討</label>
              </div>
              <div class="radio_item">
                <input type="radio" name="field8" id="no2"  value="新卒採用応募"><label for="no2">新卒採用応募</label>
              </div>
              <div class="radio_item">
                <input type="radio" name="field8" id="no3"  value="中途採用応募"><label for="no3">中途採用応募</label>
              </div>
              <div class="radio_item">
                <input type="radio" name="field8" id="no4"  value="その他"><label for="no4">その他</label>
              </div>
            </dd>
            <dt><label for="kind">お問合せ内容<span class="require">必須</span></label></dt>
            <dd>
              <textarea name="field9" placeholder="ご質問やご相談などご自由にご入力ください" required></textarea>
            </dd>
          </dl>
          <p class="contactText">「個人情報の取扱いについて」の内容をご確認の上、チェックして下さい</p>
          <div class="privacyPolicy">
            <input type="checkbox" id="agree" required>
            <label for="agree">プライバシーポリシーに同意する</label>
          </div>
          <div class="formBtn">
            <input type="hidden" name="submit-confirm" value="submit-confirm">
            <button id="submit-btn" class="btn -type3" type="submit">送信</button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <section class="contact_01">
    <div class="contactBox" data-aos="fade-up"
     data-aos-duration="3000">
      <h3 class="contactTitle">
        TEL
        <span class="-ja">お電話でのお問い合わせはこちらへ</span>
      </h3>
      <div class="btnBox">
        <a href="tel:073-453-9482" class="btn -type5">
          <i class="fa-solid fa-phone"></i>073-453-9482㈹
          <span>受付時間 9:00-18:00仮</span>
        </a>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
