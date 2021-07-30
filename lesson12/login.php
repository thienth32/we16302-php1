<?php //echo  password_hash('123456', PASSWORD_DEFAULT); ?>
<?php
// check xem người dùng đã sử dụng remember hay chưa nếu có remember & hợp lệ thì cho đăng nhập luôn
session_start();
require_once './db.php';
$loginToken = isset($_SESSION['remember_login']) ? $_SESSION['remember_login'] : "";
if($loginToken != ""){
    $now = new DateTime();
    $currentTime = $now->format('Y-m-d H:i:s');
    $getUserByRememberToken = "select 
                                        * 
                                from users 
                                where remember_token = '$loginToken'
                                    and remember_expire >= '$currentTime'";
    $user = exeQuery($getUserByRememberToken, false);
    if($user){
        unset($user['password']);
        $_SESSION['auth'] = $user;
        header('location: quantri.php');
        die;
    }
}
?>
<form action="post-login.php" method="post">
    email: <input type="text" name="email">
    <br>
    mật khẩu: <input type="password" name="password">
    <br>
    <input type="checkbox" name="remember" value="1"> Ghi nhớ
    <br>
    <button type="submit">Đăng nhập</button>
</form>