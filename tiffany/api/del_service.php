<?php
include_once "base.php";
$Service = new DB('tf_service');
echo $Service->del($_POST);
// dd($_POST);
