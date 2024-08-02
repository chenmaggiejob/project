<?php
include_once "base.php";
$Carousels = new DB('tf_carousels');
// if ($_POST['sh'] == 1) {
// $Carousels->q("UPDATE tf_carousels SET sh = '0' WHERE id != '{$_POST['id']}'");
// }
// dd($_POST);
// dd($_FILES);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/carousel/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// dd($_POST);
$Carousels->save($_POST);
to("../admin.php?do=carousel");
