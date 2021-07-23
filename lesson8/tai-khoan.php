<?php
require_once './db.php';
// hiển thị danh sách các tài khoản trong db
$getUserQuery = "select * from users";
$users = exeQuery($getUserQuery, true); 
/**
 * $users = [
 *      [],
 *      [],
 *      []
 * ]
 * 
 */


?>
<table>
    <thead>
        <th>STT</th>
        <th>Tên</th>
        <th>Email</th>
        <th>Ảnh</th>
        <th>
            <a href="tao-moi-tk.php">Tạo mới</a>
        </th>
    </thead>
    <tbody>
        <?php foreach ($users as $index => $u): ?>
            <tr>
                <td><?= $index+1 ?></td>
                <td><?= $u['name'] ?></td>
                <td><?= $u['email'] ?></td>
                <td>
                    <img src="<?= $u['avatar'] ?>" width="100">
                </td>
                <td>
                    <a href="sua-tk.php?id=<?= $u['id'] ?>">Sửa</a>
                    <a href="xoa-tk.php?id=<?= $u['id'] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>