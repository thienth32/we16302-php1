<?php
require_once './db.php';
// nhận dữ liệu từ form tạo mới gửi sang
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_FILES['avatar'];
$filename = "";
// lưu ảnh vào thư mục
if($avatar['size'] > 0){
    $filename = uniqid() . '-' . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], './uploads/' . $filename);
    // cập nhật lại tên ảnh bỏ ký tự ./ đi để lưu vào csdl
    $filename = 'uploads/' . $filename;
}


$insertUserQuery = "INSERT INTO users 
                        (name, email, password, avatar) 
                    values 
                        ('$name', '$email', '$password', '$filename')";
// var_dump($insertUserQuery);
// die;
exeQuery($insertUserQuery, false);
header('location: tai-khoan.php');


?>