<?php

$a = 5;

// if - else $a vẫn có tác dụng trong câu lệnh rẽ nhanh
for($i = 0; $i < 100; $i++){ // $a vẫn có tác dụng trong vòng lặp
    $a = $i;
};

echo $a;




?>