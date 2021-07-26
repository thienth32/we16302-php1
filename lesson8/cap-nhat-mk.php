<?php
require_once './db.php';
// 1 dựa vào id để lấy thông tin user
$id = $_POST['id'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$getUserQuery = "select * from users where id = $id";
$user = exeQuery($getUserQuery, false);
// 2 so sánh mk cũ và mk trong csdl
if(password_verify($old_pass, $user['password'])){
    // nếu khớp thì mã hóa mk mới
    // 3 cập nhật lại thông tin user với mk mới đã đc mã hóa
    $new_pass_hash = password_hash($new_pass, PASSWORD_DEFAULT);
    $updateUserQuery = "update users set password = '$new_pass_hash' where id = $id";
    exeQuery($updateUserQuery);
    header('location: tai-khoan.php?msg=Cập nhật mật khẩu thành công');
    die;
}
header("location: doi-mk.php?id=$id&msg=Mật khẩu cũ không khớp");
die;




?>