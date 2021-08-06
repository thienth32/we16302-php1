<?php
// tạo kết nối tới csdl
// $sqlQuery: câu lệnh sql muốn thực thi với csdl
// $getAll: true/false
// true thì sẽ lấy toàn bộ dữ liệu trả về của câu sql => [ [], [], ... ]
// false thì sẽ trả về bản ghi đầu tiên tìm bằng câu sql => []
function exeQuery($sqlQuery, $getAll = true){
    $host = "127.0.0.1";
    $dbname = "kaopiz";
    $dbusername = "root";
    $dbpassword = "12345678"; // máy của gv có mk là 12345678, nếu máy sv cài mysql qua xampp thì để string rỗng
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                            $dbusername, $dbpassword);
    
    $stmt = $connect->prepare($sqlQuery);
    $stmt->execute();
    if($getAll == true){
        return $stmt->fetchAll();
    } 
    return $stmt->fetch();

}


?>