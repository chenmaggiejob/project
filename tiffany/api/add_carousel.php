<?php
include_once "./base.php";
$Carousels = new DB('tf_carousels');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/carousels/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    $Carousels->save($_POST);
    to("../admin.php?do=carousel");
}
// dd($_POST);
