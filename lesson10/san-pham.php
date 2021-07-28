<?php
session_start();
require_once './db.php';
if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
    header('location: login.php');
    die;
}

$getProductQuery = "select * from products";
$products = exeQuery($getProductQuery, true);

$totalProduct = 0;
$totalPrice = 0;
if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
    $cartData = $_SESSION['cart'];
    foreach ($cartData as $item) {
        $totalProduct += $item['cart_amount'];
        $totalPrice += $item['cart_amount'] * $item['price'];
    }
}


?>
<h3>Số lượng sản phẩm đang có trong giỏ hàng: <a href="gio-hang.php"><?= $totalProduct?> (<?= $totalPrice ?>)</a></h3>
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