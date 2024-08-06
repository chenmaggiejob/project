<?php
include_once "base.php";
$Admin = new DB('tf_admin');
echo $Admin->del($_POST);
// dd($_POST);
