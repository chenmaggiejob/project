<?php
include_once "base.php";
$Logo = new DB('tf_logo');
if ($_POST['sh'] == 1) {
$Logo->q("UPDATE tf_logo SET sh = '0' WHERE id != '{$_POST['id']}'");
}
// dd($_POST);
// dd($_FILES);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/logo/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// dd($_POST);
$Logo->save($_POST);
to("../admin.php?do=logo");
