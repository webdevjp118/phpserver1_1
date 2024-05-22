<?php
$field1 = isset($_POST['field1']) ? $_POST['field1']: '';
$field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
$field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
$field3_1 = isset($_POST['field3_1']) ? $_POST['field3_1']: '';
$field3_2 = isset($_POST['field3_2']) ? $_POST['field3_2']: '';
$field4 = isset($_POST['field4']) ? $_POST['field4']: '';
$field5 = isset($_POST['field5']) ? $_POST['field5']: '';
$field6 = isset($_POST['field6']) ? $_POST['field6']: '';
$field7 = isset($_POST['field7']) ? $_POST['field7']: '';

// $admin_email      = 'prgfinal216@gmail.com';
$admin_email = 'info@imedx.tech';
$user_email = $field4;
$name1 = $field2_1;
$name2 = $field2_2;

$message = "
【クリニック名】".$field1."<br>
【医師のお名前】 : ".$field2_1."　".$field2_2."<br>
【フリガナ】".$field3_1."　".$field3_2."<br>
【メールアドレス】".$field4."<br>
【電話番号】".$field5."<br>
【ご使用の電子カルテメーカー】".$field6."<br>
【ご要望・ご質問など】".$field7."<br>
";

//to administrator
$subject = '生活習慣病DX｜販売開始時の案内希望';

$message_start = "
生活習慣病DXの販売開始時のご案内希望が届きました。<br>
<br>
-------------------------------------------------<br>
";

$message_end = "
-------------------------------------------------<br>
送信された日時：".date('Y/m/d (D) H:i:s')."<br>
送信者のIPアドレス：".get_client_ip()."<br>
送信者のホスト名：".gethostname()."<br>
問い合わせのページURL：".get_site_url()."/contact/<br>
──────────────────────<br>
株式会社iMedX<br>
神奈川県川崎市幸区新川崎7-7<br>
かわさき新産業創造センター KBIC本館<br>
お問合せメールアドレス：info@imedx.tech<br>
URL：".get_site_url()."<br>
──────────────────────<br>
";

$mail_content = $message_start.$message.$message_end;

$headers = "From: " . $user_email . "\r\n";
$headers .= "Reply-To: " . $user_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if(mail($admin_email, $subject, $mail_content, $headers)) {
    //success
} else {
    echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
}

//to user
$subject = '生活習慣病DX｜販売開始時の案内のご希望ありがとうございました';

$message_start = "
※このメールはシステムからの自動返信です。<br>
<br>
".$name1." ".$name2." 様<br>
<br>
この度は、販売開始時の案内のご希望を頂きまして、誠にありがとうございました。<br>
<br>
送信頂きました情報は下記のとおりです。<br>
<br>
-------------------------------------------------<br>
";

$message_end = "
-------------------------------------------------<br>
<br>
送信された日時：".date('Y/m/d (D) H:i:s')."<br>
<br>
生活習慣病DXの正式販売開始や先行予約割引キャンペーンのタイミングで、メール等で<br>
ご案内を差し上げますので、お待ち頂ければ幸いです。<br>
<br>
何卒よろしくお願い申し上げます。<br>
<br>
──────────────────────<br>
株式会社iMedX<br>
神奈川県川崎市幸区新川崎7-7<br>
かわさき新産業創造センター KBIC本館<br>
お問合せメールアドレス：info@imedx.tech<br>
URL：".get_site_url()."<br>
──────────────────────<br>
";

$mail_content = $message_start.$message.$message_end;

$headers = "From: " . $admin_email . "\r\n";
$headers .= "Reply-To: " . $admin_email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if(mail($user_email, $subject, $mail_content, $headers)) {
    echo '<script>location.href="'.home_url().'/contact-success"</script>';
} else {
    echo '<script>alert("送信失敗しました。"); location.href="'.home_url().'"</script>';
}
?>