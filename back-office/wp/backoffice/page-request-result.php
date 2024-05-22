<?php
get_header();
?>

<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

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
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    氏名 : ".$field1_1." ".$field1_2."<br>
    カナ氏名 : ".$field2_1." ".$field2_2."<br>
    年齢 : ".$field3."<br>
    性別 : ".$field4."<br>
    職業 : ".$field5."<br>
    会社名 : ".$field6."<br>
    郵便番号 : ".$field7_1."-".$field7_2."<br>
    住所 : ".$field8_1." ".$field8_2." ".$field8_3." ".$field8_4."<br>
    電話番号 : ".$field9_1."-".$field9_2."-".$field9_3."<br>
    E-mail : ".$field10."<br>
    資料請求 : ".$field11."<br>
    ";

    $subject = '資料請求';

    $headers = "From: " . $field2 . "\r\n";
    $headers .= "Reply-To: " . $field2 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/request-success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/request-failed"</script>';
    }    
}
?>

<?php
get_footer();
