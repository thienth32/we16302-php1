<?php
    // tính tổng tất cả các số nằm trong khoảng 1->63
    // ghép tất cả các chữ số nằm trong khoảng 1 -> 63 vào thành 1 chuỗi
    $total = 0;
    $totalStr = "";
    for($i = 1; $i <= 63; $i++){
        // $total = $total + $i;
        $total += $i;
        $totalStr .= $i;
    }

    echo $total;
    echo "<br>";
    echo $totalStr;


?>