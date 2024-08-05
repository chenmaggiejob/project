<?php
include_once "base.php";
$Stories = new DB('tf_stories');
// dd($_POST);
// dd($_FILES);
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/stories/" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
}
// dd($_POST);
$Stories->save($_POST);
to("../admin.php?do=stories");
