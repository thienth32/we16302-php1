<?php
require_once './db.php';
$id = $_POST['id'];
$getUserQuery = "select * from users where id = $id";
$user = exeQuery($getUserQuery, false);
if(!$user){
    header('location: tai-khoan.php?msg=Tài khoản không tồn tại');
    die;
}

$name = $_POST['name'];
$email = $_POST['email'];
$avatarValue = $user['avatar'];
$avatar = $_FILES['avatar'];
if($avatar['size'] > 0){
    $filename = uniqid() . '-' . $avatar['name'];
    move_uploaded_file($avatar['tmp_name'], './uploads/' . $filename);
    // cập nhật lại tên ảnh bỏ ký tự ./ đi để lưu vào csdl
    $avatarValue = 'uploads/' . $filename;
}

$updateUserQuery = "update users
                    set     name = '$name',
                            email = '$email',
                            avatar = '$avatarValue'
                    where id = $id";
exeQuery($updateUserQuery);
header('location: tai-khoan.php');

?>