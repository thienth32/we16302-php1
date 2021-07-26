<?php
require_once './db.php';

if(!isset($_GET['id'])){
    header('location: tai-khoan.php?msg=Sai đường dẫn');
    die;
}
$id = $_GET['id'];
$removeUserQuery = "delete from users where id = $id";
exeQuery($removeUserQuery);
header('location: tai-khoan.php');


?>