<?php
include_once "base.php";
$Service = new DB('tf_service');
if ($_POST['sh'] == 1) {
    $Service->q("UPDATE tf_service SET sh = '0' WHERE id != '{$_POST['id']}'");
}
// dd($_POST);
// dd($_FILES);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/service/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// dd($_POST);
$Service->save($_POST);
to("../admin.php?do=service");
