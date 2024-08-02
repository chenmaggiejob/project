<?php
include_once "./base.php";
$Rings = new DB('tf_rings');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/carousel/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    $Rings->save($_POST);
    to("../admin.php?do=ring");
}
// dd($_POST);
