<?php
$all_lines = [];
$qa_files = [
    'original.html',
];
function get_all_lines($file_handle) { 
    while (!feof($file_handle)) {
        yield fgets($file_handle);
    }
}
foreach($qa_files as $qa_file) {
    $file_handle = fopen($qa_file, 'r');
    foreach (get_all_lines($file_handle) as $line) {
        array_push($all_lines, $line);
    }
    fclose($file_handle);
}
$count=0;
foreach ($all_lines as $line) {
    $count++;
    $what_list = [];
    $with_list = [];
    $check_line = $line;
    while(!(strpos($check_line, "<img") === false)) {
        $step1 = explode("src=\"", $check_line);
        $img_url = "";
        if(count($step1)>1) {
            $step2 = explode("\"", $step1[1]);
            if(count($step2)>1) {
                $img_url = $step2[0];
                $img_url = str_replace("http:", "https:", $img_url);
                $img_url = str_replace("renew/wp", "wp", $img_url);
            }
        }
        $step1 = explode("/", $img_url);
        $img_name = "";
        if(count($step1)>0) {
            $img_name = $step1[count($step1)-1];
        }
        $step1 = explode("<img", $check_line);
        $replace_what = "";
        $replace_with = "";
        if(count($step1)>1) {
            $step2 = explode(">", $step1[1]);
            if(count($step2)>1) {
                $replace_what = $step2[0];
            }
        }
        if(!empty($replace_what)) {
            $replace_what = "<img".$replace_what.">";
        }
        if(!empty($img_name)) {
            $replace_with = '<img src="images/'.$img_name.'">';
        }
        if(!empty($replace_what) && !empty($replace_with)) {
            $check_line = str_replace($replace_what, "", $check_line);
            array_push($what_list, $replace_what);
            array_push($with_list, $replace_with);
            if (!file_exists("images/".$img_name)) {
                file_put_contents("images/".$img_name, file_get_contents($img_url));
            }
        }
    }
    for($i=0;$i<count($what_list);$i++) {
        $replace_what = $what_list[$i];
        $replace_with = $with_list[$i];
        $line = str_replace($replace_what, $replace_with, $line);
    }
    if (strpos($line, "<source") === false) { //check video url
        echo $line;
        // if($count>9980) {
        //     break;
        // }
    }
}
?>