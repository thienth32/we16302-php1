<?php
require_once './db.php';
// nhận dữ liệu từ form tạo mới gửi sang
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$avatar = $_POST['avatar'];

$insertUserQuery = "INSERT INTO users 
                        (name, email, password, avatar) 
                    values 
                        ('$name', '$email', '$password', '$avatar')";
var_dump($insertUserQuery);
die;
exeQuery($insertUserQuery, false);
header('location: tai-khoan.php');


?>