<?php
session_start();
require_once './db.php';
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}

$getProductQuery = "select * from products";
$products = exeQuery($getProductQuery, true);

?>
<h3>Số lượng sản phẩm đang có trong giỏ hàng: </h3>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Prce</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td><?= $p['price'] ?></td>
                <td>
                    <a href="add-to-cart.php?id=<?= $p['id'] ?>">Add giỏ hàng</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>