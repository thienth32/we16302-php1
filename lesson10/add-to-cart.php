<?php
session_start();
require_once './db.php';
$id = $_GET['id'];
$getProductQuery = "select * from products where id = $id";
// lấy ra thông tin của sp cần add vào giỏ hàng
$product = exeQuery($getProductQuery, false);
if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
    $cartData = [];
}else {
    $cartData = $_SESSION['cart'];
}
// kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa ?
$flag = -1;
foreach ($cartData as $key => $value) {
    if($value['id'] == $product['id']){
        $flag = $key;
        break;
    }
}
if($flag == -1){
    // sản phẩm không có trong giỏ hàng
    $product['quantity'] = 1;
    // array_push($cartData, $product);
    $cartData[] = $product;
}else {
    // sản phẩm đã tồn tại trong giỏ hàng rồi và ở vị trí $flag
    $cartData[$flag]['quantity']++;
}

$_SESSION['cart'] = $cartData;


?>