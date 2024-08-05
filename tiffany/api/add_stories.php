<?php
include_once "./base.php";
$Stories = new DB('tf_stories');
// dd($_FILES);
// echo "<hr>";
if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../image/stories" . $_FILES['img']['name']);
    $_POST['img'] = $_FILES['img']['name'];
    $Stories->save($_POST);
    to("../admin.php?do=stories");
}
// dd($_POST);
