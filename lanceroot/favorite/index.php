<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Lancer History</title>
</head>
<style>
    body {
        font-size: 20px;
        line-height: 30px;
        padding: 0 40px;
    }
</style>
<body>
<?php
$all_lines = [];
$qa_files = [
    'ids.txt',
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
        array_push($all_lines,  preg_replace( "/\r|\n|\t/", "", $line));
    }
    fclose($file_handle);
}
foreach($all_lines as $line) {
    if(intval($line) > 0) {
        echo '<a href="https://www.lancers.jp/work/detail/'.$line.'">'.$line.'</a><br>';
    }
}
?>
</body>
</html>