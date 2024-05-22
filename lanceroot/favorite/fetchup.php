<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <textarea name="data" style="width:100%;height:500px"><?php echo $_POST['data']; ?></textarea>
        <button type="submit" value="submit" style="width:100%; height: 60px">submit</button>
    </form>
<?php
$data = "";
if(isset($_POST['data'])) $data = $_POST['data'];
if(!empty($data)) {
    $data_list = explode("/work/detail/", $data);
    $id_list = [];
    $myfile = fopen("ids.txt", "r");
    while(!feof($myfile)) {
        $fid =  intval(fgets($myfile));
        array_push($id_list, $fid);
    }
    fclose($myfile);
    foreach($data_list as $each) {
        $each_list = explode("?proposeReferer", $each);
        foreach($each_list as $idstr) {
            $curid = intval($idstr);
            if($curid && !in_array($curid, $id_list)) {
                array_push($id_list, $curid);
            }
        }
    }
    $myfile = fopen("ids.txt", "w");
    foreach($id_list as $id) {
        fwrite($myfile, $id."\n");
    }
    fclose($myfile);
    echo count($id_list); echo '-----------------<br>';
    foreach($id_list as $each_id) {
        echo '<a href="https://www.lancers.jp/work/detail/'.$each_id.'">'.$each_id.'</a><br>';
    }
}
?>    
</body>
</html>
