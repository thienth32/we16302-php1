<?php
$name = $_POST['name'];
$uploadFile = $_FILES['upload_file'];
echo "<pre>";
$tmpArr = $uploadFile['tmp_name'];
$nameArr = $uploadFile['name'];
for($i = 0; $i < count($nameArr); $i++){
    move_uploaded_file($tmpArr[$i], './uploads/' . $nameArr[$i]);
    echo './uploads/' . $nameArr[$i] . "<br>";
}

?>