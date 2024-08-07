<?php
include_once "base.php";
$Classic = new DB('tf_classic');
// if ($_POST['sh'] == 1) {
// $Classic->q("UPDATE tf_classic SET sh = '0' WHERE id != '{$_POST['id']}'");
// }
// dd($_POST);
// dd($_FILES);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/classic/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// dd($_POST);
$Classic->save($_POST);
to("../admin.php?do=classic");
