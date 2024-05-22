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
    <section class="page _recruit">
        <h1 class="pageTitle">採用情報</h1>
        <h2 class="xl_en">RECRUIT</h2>
        <div class="breadcrumb">
            <span class="bread_top"><a href="<?php echo get_site_url(); ?>/">TOP</a></span>
            <span>&nbsp; &gt; &nbsp;</span>
            <span>採用情報</span>
        </div>
    </section>
    <section class="recruit">
        <div class="recruit_box">
            <h2 class="recruit_title">
                テキストテキストテキストテキストテキストテキスト
            </h2>
            <div class="flex">
                <div class="textBox">
                    <p class="recruit_text">
                        (求職者向け代表メッセージ)テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト </p>
                    <p class="recruit_text">
                        テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト </p>
                </div>
                <figure class="recruitFigure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/company_02.png" alt="">
                    <figcaption>代表取締役　◯◯ ◯◯</figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section class="philosophy">
        <h2 class="_en">PHILOSOPHY</h2>
        <h2 class="section_title">経営理念</h2>
        <h3 class="philosophy_titile">
            テキストテキストテキストテキストテキストテキスト
        </h3>
        <p class="philosophy_text">
            テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
        </p>
    </section>
    <section class="job">
        <h2 class="_en">JOB DESCRIPTION</h2>
        <h2 class="section_title">募集要項</h2>
        <ul class="tab">
            <li><a href="#first">[職種] 現場管理</a></li>
            <li><a href="#second">テキスト</a></li>
            <li><a href="#third">テキスト</a></li>
        </ul>
        <div class="jobBox">
            <dl id="first" class="area">
                <dt>仕事内容</dt>
                <dd>現地調査・プランニング・現場管理・アフターケアを一貫して行う</dd>
                <dt>就業時間</dt>
                <dd>9：00〜18：00（休憩60分）</dd>
                <dt>勤務地</dt>
                <dd>◯◯市内</dd>
                <dt>休日・休暇</dt>
                <dd>
                    土曜日、日曜日、祝日、GW、夏季、年末年始<br> ※完全週休2日(会社カレンダーによる)
                </dd>
                <dt>基本給</dt>
                <dd>
                    ￥200,000〜<br> ※ご経験等を考慮のうえ決定いたします
                </dd>
                <dt>待遇</dt>
                <dd>
                    昇給随時<br> 単身用社宅（規定あり）
                    <br> 車・バイク通勤OK
                    <br> 作業着貸与
                    <br> 資格取得支援制度
                    <br> 交通費支給
                    <br> 社会保険完備
                    <br> 退職金制度
                    <br> 家族手当
                    <br> 残業手当
                    <br> 賞与あり
                    <br> 資格手当
                    <br>
                </dd>
            </dl>
        </div>
    </section>
    <section class="contact_form">
        <h2 class="_en">CONTACT</h2>
        <h2 class="section_title">お問い合わせ</h2>
        <p class="contact_formText">
            採用に関するお問い合わせは下記からお願いいたします。
        </p>
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
    </section>

</main>
<?php
get_footer();
