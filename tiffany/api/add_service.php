<?php
include_once "./base.php";
$Service = new DB('tf_service');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/service/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    $Service->save($_POST);
    to("../admin.php?do=service");
}
// dd($_POST);
