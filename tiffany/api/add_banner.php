<?php
include_once "./base.php";
$Banner = new DB('tf_banner');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/banner/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    $Banner->save($_POST);
    to("../admin.php?do=banner");
}
// dd($_POST);
