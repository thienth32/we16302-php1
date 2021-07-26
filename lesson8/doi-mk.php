<?php if(isset($_GET['msg'])): ?>
    <p style="color: red;"><?= $_GET['msg'] ?></p>
<?php endif ?>
<form action="cap-nhat-mk.php" method="post">
    <input type="hidden"  name="id" value="<?= $_GET['id']?>">
    <div>
        Mật khẩu cũ: <input type="text" name="old_pass">
    </div>
    <div>
        Mật khẩu mới: <input type="text" name="new_pass">
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>