<?php
session_start();
// echo password_hash('123456', PASSWORD_DEFAULT);die;
require_once './db.php';
$email = $_POST['email'];
$password = $_POST['password'];

$getUserByEmailQuery = "select * from users where email = '$email'";
$user = exeQuery($getUserByEmailQuery, false);
if($user){
    if(password_verify($password, $user['password'])){
        $_SESSION['auth'] = [
            'email' => $user['email'],
            'name' => $user['name'],
            'avatar' => $user['avatar'],
        ];
        header('location: index.php?msg=Đăng nhập thành công');
        die;
    }
    header('location: login.php?msg=Tài khoản/mật khẩu không đúng');
    die;

}

header('location: login.php?msg=Email không tồn tại');
?>