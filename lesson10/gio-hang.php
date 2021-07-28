<?php
session_start();
if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
    $cartData = [];
}else {
    $cartData = $_SESSION['cart'];
}


?>

<?php if(count($cartData) == 0):?>
    <h2>Chưa có sản phẩm nào trong giỏ hàng, hãy thực hiện mua sắm</h2>
<?php else:?>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Số lượng trong giỏ hàng</th>
            <th>Tổng giá</th>
        </thead>
        <tbody>
            <?php
                $totalPrice = 0;
            ?>
            <?php foreach( $cartData as $item):?>
                <tr>
                    <td><?= $item['id']?></td>
                    <td><?= $item['name']?></td>
                    <td><?= $item['price']?></td>
                    <td><?= $item['cart_amount']?></td>
                    <td>
                        <?= $item['price'] * $item['cart_amount']?>
                        <?php 
                            $totalPrice += $item['price'] * $item['cart_amount']
                        ?>
                    </td>
                </tr>
            <?php endforeach?>
            <tr>
                <td colspan="4">Tổng giá trị đơn hàng:</td>
                <td><?= $totalPrice?></td>
            </tr>
        </tbody>
    </table>
<?php endif?>