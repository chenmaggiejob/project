<?php
include_once "base.php";
// dd($_POST);
$Early_acccess = new DB('tf_early_acccess');
if ($_POST['sh'] == 1) {
    $Early_acccess->q("UPDATE tf_early_acccess SET sh = '0' WHERE id != '{$_POST['id']}'");
}
if (!empty($_FILES['img']['tmp_name']) || !empty($_FILES['img2']['tmp_name'])) {
    if (!empty($_FILES['img']['tmp_name'])) {
        move_uploaded_file($_FILES['img']['tmp_name'], "../image/early_acccess/" . $_FILES['img']['name']);
        $_POST['img'] = $_FILES['img']['name'];
    }

    if (!empty($_FILES['img2']['tmp_name'])) {
        move_uploaded_file($_FILES['img2']['tmp_name'], "../image/early_acccess/" . $_FILES['img2']['name']);
        $_POST['img2'] = $_FILES['img2']['name'];
    }
    // dd($_POST);
}
$Early_acccess->save($_POST);
to("../admin.php?do=early_acccess");
