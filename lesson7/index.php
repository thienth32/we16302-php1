<?php

$str = "123456";

$password = password_hash($str, PASSWORD_DEFAULT);

echo $password;
echo "<br>";
var_dump(password_verify("12345", "$2y$10$4dvq1SEj1cfVdj5x1recNeNPkfKYvLrSFOqlGE5kSmJcP72/h4Uhq"));


?>