<?php
$path = isset($_POST['path']) ? $_POST['path']: '';
$note = isset($_POST['note']) ? $_POST['note']: '';
if(!empty($note) && !empty($path)) {
    file_put_contents($path.'/note.txt', $note);
}
echo $note;
?>