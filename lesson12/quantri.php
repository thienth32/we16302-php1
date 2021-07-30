<?php
session_start();

if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}

echo "Đăng nhập thành công!";



?>