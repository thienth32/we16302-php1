<?php
session_start();

// yêu cầu phải đăng nhập thì mới vào được file này, nếu chưa đăng nhập => login.php
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}

echo $_SESSION['auth']['email'];


?>