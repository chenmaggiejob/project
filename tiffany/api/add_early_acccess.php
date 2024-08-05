<?php
include_once "./base.php";
$Early_acccess = new DB('tf_early_acccess');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name']) || !empty($_FILES['img2']['tmp_name'])) {
    if (!empty($_FILES['img']['tmp_name'])) {
        move_uploaded_file($_FILES['img']['tmp_name'], "../image/early_acccess/" . $_FILES['img']['name']);
        $_POST['img'] = $_FILES['img']['name'];
    }

    if (!empty($_FILES['img2']['tmp_name'])) {
        move_uploaded_file($_FILES['img2']['tmp_name'], "../image/early_acccess/" . $_FILES['img2']['name']);
        $_POST['img2'] = $_FILES['img2']['name'];
    }

    $Early_acccess->save($_POST);
    to("../admin.php?do=early_acccess");
}
// dd($_POST);
