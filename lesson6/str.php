<?php

$a = 15;
echo "Số \"\$a\" = $a <br>"; // nên dùng - Số "$a" = 15
echo 'Số "$a" = ' . $a . ' <br>';

// hàm built-in (các hàm có sẵn trong php để xử lý chuỗi)
// độ dài (số lượng ký tự trong chuỗi)
$str = "something done!";
echo strlen($str);
echo "<br>";

$str2 = "    something++++  ";
var_dump($str2);
echo "<br>";
// loại bỏ tất cả các khoảng trắng ở 2 đầu của chuỗi
$str3 = trim($str2);
var_dump($str3);
echo "<br>";
$str4 = rtrim($str3, '+');
var_dump($str4);
// làm sạch chuỗi
// cắt chuỗi
$str5 = "fpoly fpt";
echo "<br>";
echo substr($str5, 0);
echo "<br>";
// ts1: index của ký tự bắt đầu cắt
// ts2: số lượng ký tự sẽ bị cắt đi, nếu k điền gì thì sẽ lấy từ vị trí ts1 -> hết chuỗi
echo substr($str5, 2, 5);
echo "<br>";
echo substr($str5, 2, 5);
// thay thế
// mã hóa
// so sánh chuỗi gốc & chuỗi mã hóa
// hiển thị giá trị ký tự đặc biệt (code html)

?>