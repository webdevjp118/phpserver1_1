<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $jptext = isset($_POST['jptext']) ? $_POST['jptext']: '';
    $kotext = isset($_POST['kotext']) ? $_POST['kotext']: '';
    if(ctype_space($jptext)) {
        $jptext = "";
    }
    if(ctype_space($kotext)) {
        $kotext = "";
    }

    if(!empty($jptext) && !empty($kotext)) {
        $addchat = "<date>".date("Y/m/d")."\n";
        $addchat .= "<jptext>\n";
        $addchat .= $jptext;
        $addchat .= "\n";
        $addchat .= "</jptext>\n";
        $addchat .= "<kotext>\n";
        $addchat .= $kotext;
        $addchat .= "\n";
        $addchat .= "</kotext>\n";
        file_put_contents('record.txt', $addchat, FILE_APPEND);
        usleep(0.5);
        $jptext = "";
        $kotext = "";
        $err_check = "string added!";
    }
}
header("location:index.php");
exit();
?>