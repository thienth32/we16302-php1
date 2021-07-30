<?php

/**
 * tham số thứ 1: tên cookies
 * tham số thứ 2: giá trị của cookie (lưu trữ dạng chuỗi)
 * tham số thứ 3: thời gian cookies đc định nghĩa tồn tại (time() + số giây mà các bạn muốn cookies tồn tại)
 * tham số thứ 4: url được phép truy cập (lấy ra, thay đổi giá trị) của cookies vừa được tạo ra
 */
date_default_timezone_set('Asia/Ho_Chi_Minh');

setcookie(
    'class_name',
    'WE16302 - PHP1',
    time() - 1,
    '/'
);
echo "Done";



?>