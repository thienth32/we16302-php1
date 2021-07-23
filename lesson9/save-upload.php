<?php
$name = $_POST['name'];
$uploadFile = $_FILES['upload_file'];
echo "<pre>";
// var_dump($uploadFile);
$filename = $uploadFile['name'];
$path = move_uploaded_file($uploadFile['tmp_name'], './uploads/' . $filename);
var_dump($path);


?>