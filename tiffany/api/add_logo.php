<?php
include_once "./base.php";
$Logo = new DB('tf_logo');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/logo/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    $Logo->save($_POST);
    to("../admin.php?do=logo");
}
// dd($_POST);
