<?php
include_once "base.php";
$Admin = new DB('tf_admin');

// dd($_POST);
// dd($_SESSION['login']);
if ($_SESSION['id'] == $_POST['id']) {
    $_SESSION['login'] = $_POST['name'];
}
// dd($_SESSION['login']);
$Admin->save($_POST);
to("../admin.php?do=admin");
