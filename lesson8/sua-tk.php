<?php
require_once './db.php';
// isset là hàm kiểm tra 1 biến hoặc 1 phần tử trong mảng có tồn tại hay không => true/false
$id = isset($_GET['id']) ? $_GET['id'] : -1;
// lấy dữ liệu từ csdl với id nhận đc từ đường dẫn
$getUserQuery = "select * from users where id = $id";
$user = exeQuery($getUserQuery, false);
if(!$user){
    header('location: tai-khoan.php?msg=Tài khoản không tồn tại');
    die;
}
?>
<form action="luu-cap-nhat-tk.php" method="post" 
            enctype="multipart/form-data">
    <input type="hidden" value="<?= $user['id'] ?>" name="id">
    <div>
        Họ và tên: <input type="text" name="name" value="<?= $user['name'] ?>">
    </div>
    <div>
        email: <input type="text" name="email" value="<?= $user['email'] ?>">
    </div>
    <?php if($user['avatar'] != ""): ?>
        <div>
            <img src="<?= $user['avatar'] ?>" width="200">
        </div>
    <?php endif ?>
    <div>
        <!-- thẻ input type=file thì không có thuộc tính value  -->
        Ảnh đại diện: <input type="file" name="avatar" >
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>