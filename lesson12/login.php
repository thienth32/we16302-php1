<?= password_hash('123456', PASSWORD_DEFAULT); ?>
<form action="post-login.php" method="post">
    email: <input type="text" name="email">
    <br>
    mật khẩu: <input type="password" name="password">
    <br>
    <input type="checkbox" name="remember" value="1"> Ghi nhớ
    <br>
    <button type="submit">Đăng nhập</button>
</form>