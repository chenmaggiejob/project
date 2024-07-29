<?php
include_once "base.php";
$Banner = new DB('tf_banner');
if ($_POST['sh'] == 1) {
    $Banner->q("UPDATE tf_banner SET sh = '0' WHERE id != '{$_POST['id']}'");
}
// dd($_POST);
// dd($_FILES);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/banner/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// dd($_POST);
$Banner->save($_POST);
to("../admin.php?do=banner");
