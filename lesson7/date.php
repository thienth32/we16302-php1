<?php

// sử dụng hàm date & hàm strtotime
// $stamp = strtotime("1991-02-03");

// $today = date('d, M Y', $stamp);
// echo $today;

// sử dụng object DateTime
$now = new DateTime('2021-03-29');
var_dump($now->format('d, M Y'));




?>