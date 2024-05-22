<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="favicon.ico">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site-All</title>
    <script src="jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js" integrity="sha512-csNcFYJniKjJxRWRV1R7fvnXrycHP6qDR21mgz1ZP55xY5d+aHLfo9/FcGDQLfn2IfngbAHd8LdfsagcCqgTcQ==" crossorigin = "anonymous" referrerpolicy = "no-referrer"> </script>
    <style>
        .thumb_list {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .thumb_item {
            width: 30%;
            height: 40vh;
            position: relative;
            overflow: hidden;
            border: solid 2px #00ff9955;
            background-color: #ebebeb;
        }
        .nohtml_here {
            color: red;
            text-align: right;
        }
        .thumb_item a {
            display: block;
            font-size: 20px;
            text-align: right;
            line-height: 30px;
        }
        .thumb_item a:hover {
            background-color: #0000ff;
            color:#fff;
        }
        .thumb_item iframe {
            position: absolute;
            left: -100%;
            top: calc( 80px - 100% );
            width: 300%;
            height: calc(300% - 120px);
            transform: scale(0.33,0.33);
            z-index: 1;
        }
        .thumb_item textarea {
            width: 50%;
            height: 100%;
            top: 0;
            border: solid 1px #00000011;
            background-color: transparent;
            mix-blend-mode: difference;
            filter: invert(1);
            position: absolute;
            z-index: 2;
            transition: all .3s;
        }
        .thumb_item textarea:hover {
            background-color: #ffffff55;
        }
        .thumb_item button {
            background-color: #ff000055;
            border: none;
            position: absolute;
            bottom: 0;
            left: 0;
            padding:6px 10px;
            z-index: 3;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
$notshow_dir_list = [
    'AAAproofing',
    'AAAsiteall',
    'AAAuseful',
];
function is_not_show_dir($path) {
    global $notshow_dir_list;
    foreach($notshow_dir_list as $each_not) {
        if (strpos($path, $each_not) !== false)
        {
            return true;
        }
    }
    return false;
}
$document_root = $_SERVER['DOCUMENT_ROOT'];
$temp_list = glob($document_root.'/*', GLOB_ONLYDIR);
$site_dir_list = [];
foreach($temp_list as $each_temp) {
    if(!is_not_show_dir($each_temp)) {
        array_push($site_dir_list, $each_temp);
        // echo basename($each_temp);echo '<br>';
    }
}
echo '<div class="thumb_list">';
foreach($site_dir_list as $each_dir) {
    echo '<div class="thumb_item" data-path="'.$each_dir.'">';
    $temp_list = glob($each_dir.'/html*', GLOB_ONLYDIR);
    if(count($temp_list) > 0) {
        $html_path = $temp_list[0];
        $html_files = glob($html_path.'/*[tT][oO][pP].html');
        if(empty($html_files)) {
            $html_files = glob($html_path.'/*[tT][oO][pP].php');
        }
        if(empty($html_files)) {
            $html_files = glob($html_path.'/*?ndex.html');
        }
        if(empty($html_files)) {
            $html_files = glob($html_path.'/*?ndex.php');
        }
        if(empty($html_files)) {
            $html_files = glob($html_path.'/*.html');
        }
        if(empty($html_files)) {
            $html_files = glob($html_path.'/*.php');
        }
        if(!empty($html_files)) {
            $page_url = 'http://'.$_SERVER['HTTP_HOST'].'/'.basename($each_dir).'/'.basename($html_path).'/'.basename($html_files[0]);
            echo '<a href="'.$page_url.'" target="_blank">'.basename($each_dir).'↓</a>';
            echo '<iframe src="'.$page_url.'"></iframe>';
            echo '<textarea class="note_editor">';
            if (file_exists($each_dir.'/note.txt')) {
                echo file_get_contents($each_dir.'/note.txt');
            }
            echo '</textarea>';
            echo '<button class="note_save">변경</button>';
        } else {
            echo '<p class="nohtml_here">'.basename($each_dir).' -> No html here!</p>';
            echo '<textarea class="note_editor">';
            if (file_exists($each_dir.'/note.txt')) {
                echo file_get_contents($each_dir.'/note.txt');
            }
            echo '</textarea>';
            echo '<button class="note_save">변경</button>';
        }
    } else {
        echo '<p class="nohtml_here">'.basename($each_dir).' -> No html here!</p>';
        echo '<textarea class="note_editor">';
        if (file_exists($each_dir.'/note.txt')) {
            echo file_get_contents($each_dir.'/note.txt');
        }
        echo '</textarea>';
        echo '<button class="note_save">변경</button>';
    }
    echo '</div>';
}
echo '</div>';
?>
</body>
<script>
function readTextFile(file) {
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function () {
    if(rawFile.readyState === 4)  {
      if(rawFile.status === 200 || rawFile.status == 0) {
        var allText = rawFile.responseText;
        console.log(allText);
       }
    }
  }
  rawFile.send(null);
}
function CreateTextFile() {
    var blob = new Blob(["This is a sample file content."], {type: "text/plain;charset=utf-8",});
    saveAs(blob, "download.txt");
}
$(".note_save").click(function(){
    let path = $(this).closest('.thumb_item').data('path');
    let note = $(this).closest('.thumb_item').find('.note_editor').val();
    var http = new XMLHttpRequest();
    http.open("POST", "http://192.168.1.31/AAAsiteall/api.php", true);
    http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    var params = "path="+path+"&note="+note;
    http.send(params);
    http.onload = function() {
        alert(http.responseText);
    }
});
// $("button").click(function(){
//     let source = $('.source').val();

//     var mySubString = source.substring(
//         source.indexOf('class="') + 7, 
//         source.lastIndexOf('"')
//     );
//     let classList = [];
//     while(source.includes('class="')) {
//         source = source.substring(source.indexOf('class="') + 7);
//         let classname = source.substring(0, source.indexOf('"'));
//         classname = classname.replace(' ', '.');
//         if(!classList.includes(classname)) {
//             classList.push(classname);
//         }
        
//     }
//     let cssCode = "";
//     classList.forEach(el => {
//         cssCode += '.' + el + ' {\n\n}\n';
//     });
//     $('.generated').val(cssCode);
//     console.log(cssCode);
// });
</script>
</html>