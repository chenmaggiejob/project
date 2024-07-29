<?php
include_once "base.php";
$Logo = new DB('tf_logo');
echo $Logo->del($_POST);
// dd($_POST);
