<?php
include_once "base.php";
$Rings = new DB('tf_rings');
if ($_POST['sh'] == 1) {
    $Rings->q("UPDATE tf_rings SET sh = '0' WHERE id != '{$_POST['id']}'");
}
// dd($_POST);
// dd($_FILES);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/rings/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// dd($_POST);
$Rings->save($_POST);
to("../admin.php?do=ring");
