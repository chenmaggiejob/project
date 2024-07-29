<?php
include_once "base.php";
$Banner = new DB('tf_banner');
echo $Banner->del($_POST);
// dd($_POST);
