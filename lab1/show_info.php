<?php

    $name = $_GET['name'];
    $gender = $_GET['gender'];
    $isMarried = $_GET['isMarried'];
    $showIsMarries = "";
    if($isMarried == 1){
        $showIsMarries = "Đã kết hôn";
    }else{
        $showIsMarries = "Độc thân";
    }


?>

<h2>Thông tin cá nhân</h2>
<p>Họ và tên: <?php echo $name; ?></p>
<p>giới tính: <?php echo $gender; ?></p>
<p>Tình trạng hôn nhân: <?php echo $showIsMarries; ?></p>