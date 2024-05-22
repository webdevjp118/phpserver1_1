<?php

$err = '';

if(isset($_POST['submit-option']) && ($_POST['submit-option'] == 'submit-option')) {
        $field1 = isset($_POST['field1']) ? $_POST['field1'] : '';
        $field2 = isset($_POST['field2']) ? $_POST['field2'] : '';
        $field3 = isset($_POST['field3']) ? $_POST['field3'] : '';
        $field4 = isset($_POST['field4']) ? $_POST['field4'] : '';
        $field5 = isset($_POST['field5']) ? $_POST['field5'] : '';
        
        $to="info@suneight.co.jp";  // your email goes here
        $to1 = "mikitaka@suneight.co.jp";
        
        $fromName=$field1;
        $fromEmail=$field4;
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:  ' . $fromName . ' <' . $fromEmail .'>' . " \r\n" .
                'Reply-To: '.  $fromEmail . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        $subject = "Mail From $fromName";
        $htmlContent = "
            会社名: ".$field1."<br>
            名前: ".$field2."<br>
            電話番号: ".$field3."<br>
            メールアドレス: ".$field4."<br>
            お悩み內容: <br>".$field5."<br>
        ";
        
        if(mail($to, $subject, $htmlContent,$headers))
        {
            mail($to1, $subject, $htmlContent,$headers)
            //     echo "Link sent on your Email";
        }
        else
        {
            //     echo "Failed to send the email";
        }
} else {
    echo '<script>location.href="./"</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./fonts/default.css">
        <link rel="stylesheet" href="./css/stylesheet.css">
        <link rel="stylesheet" href="./css/responsive.css">
        <style>
                .mail-container {
                        margin-top: 50px;
                }
        </style>
</head>
<body>
    <section class="sec-1">
        <div class="container">
            <div class="mail-container container t-center">
                <h1 class="t-center">この度はお問合せいただき、誠にありがとうございます。<br>弊社担当者より折り返しご連絡させていただきます。</h1>
                <a href="./" class="goto-contact top-goto-btn">前のページへ</a>
            </div>
        </div>
    </section>
</body>
</html>