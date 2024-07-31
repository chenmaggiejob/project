<?php
include_once "./base.php";
$Classic = new DB('tf_classic');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/classic/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    $Classic->save($_POST);
    to("../admin.php?do=classic");
}
// dd($_POST);
