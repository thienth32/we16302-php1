<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once './db.php';
$email = $_POST['email'];
$password = $_POST['password'];
$remember = $_POST['remember'];

$getUserByEmail = "select * from users where email = '$email'     ";
$user = exeQuery($getUserByEmail, false);

if($user && password_verify($password, $user['password'])){
    if($remember == 1){
        $remember_token = sha1(uniqid() . $user['email']);

        $expireObj = new DateTime("+15 days");
        $expireTime = $expireObj->format("Y-m-d H:i:s");
        
        
        setcookie('remember_login', $remember_token, time() + (60*60*24*15), '/');
        
        $updateRememberQuery = "update users 
                                set 
                                    remember_token = '$remember_token', 
                                    remember_expire = '$expireTime'
                                where id = " . $user['id'];
        exeQuery($updateRememberQuery, false);        
    }
    unset($user['password']);
    $_SESSION['auth'] = $user;
    
}

header('location: login.php?msg=Đăng nhập không thành công!');


?>