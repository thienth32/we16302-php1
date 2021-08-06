<?php
require_once './db.php';
$getCategoriesQuery = "select * from categories";
$cates = exeQuery($getCategoriesQuery);

$selectedId = 30;
// echo "<pre>";
// var_dump($cates);die;


?>

<select name="" id="">
    <?php foreach ($cates as $c):?>
        <option 
            <?php if($c['id'] == $selectedId): ?>selected<?php endif?> 
            value="<?= $c['id']?>"
        >
            <?= $c['cate_name']?>
        </option>
    <?php endforeach?>
</select>