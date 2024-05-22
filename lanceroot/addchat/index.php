<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>채팅리력</title>
    <link rel="stylesheet" href="style.css">
    <script src="../../qaroot/js/jquery-3.6.1.js"></script>
</head>
<body>
<?php
$jptext = "";
$kotext = "";
$err_check = "no error!";
$all_lines = [];
$qa_files = [
    'record.txt',
];
function get_all_lines($file_handle) { 
    while (!feof($file_handle)) {
        yield fgets($file_handle);
    }
}
foreach($qa_files as $qa_file) {
    $file_handle = fopen($qa_file, 'r');
    foreach (get_all_lines($file_handle) as $line) {
        // array_push($all_lines, $line);
        // $line = str_replace("</ending>","", $line);
        // array_push($all_lines,  delete_all_between("<starting>","</heading>",preg_replace( "/\r|\n|\t/", "", $line)));
        array_push($all_lines, $line);
    }
    fclose($file_handle);
}
?>
<form action="save.php" method="post" enctype="multipart/form-data">
    <div class="top_search">
        <textarea name="jptext"><?php echo $jptext; ?></textarea>
        <button type="submit">등록</button>
        <textarea name="kotext"><?php echo $kotext; ?></textarea>
        <input type="hidden" name="submit-confirm" value="submit-confirm">
    </div>
</form>
<div class="side_heading">
    <div class="opt_words">
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="switch_heading" data-disable="false"></span>
    </div>
    <div class="ul_headings">
        <ul class="ul_heading">
<?php
$count = 0;
foreach($all_lines as $line) {
    if(strpos($line, "<date>") !== false){
        $count = $count + 1;
        echo '<li class="left_date" data-pos="'.$count.'">';
        echo str_replace('<date>','',$line).'---'.$count;
        echo '</li>';
    }
}
?>
        </ul>
    </div>
</div>

<div class="main_content">
<?php
$count=0;
foreach($all_lines as $line) {
    if(strpos($line, "<date>") !== false){
        $count = $count + 1;
        echo '<div class="date_row" data-id="'.$count.'"><span>';
        echo str_replace('<date>','',$line).'---'.$count;
        echo '</span></div>';
    } else if(strpos($line, "<jptext>") !== false){ 
        echo '<div class="text_row"><div class="jp_text">';
    } else if(strpos($line, "</jptext>") !== false){
        echo '</div>';
    } else if(strpos($line, "<kotext>") !== false){
        echo '<div class="ko_text">';
    } else if(strpos($line, "</kotext>") !== false){
        echo '</div></div>';
    } else {
        echo $line; echo '<br>';
    }
}
?>
<!-- <div class="date_row" data-pos="1">sdfs</div>
<div class="text_row">
    <div class="jp_text">sdfgsdfg</div>
    <div class="ko_text">dhgdfhgdf</div>
</div> -->
</div>
<script src="control.js"></script>
</body>
</html>