<?php
include_once "base.php";
dd($_POST);
$chk = $Admin->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);

if ($chk) {
    $_SESSION['login'] = 1;
    to("../admin.php");
    exit();
}
