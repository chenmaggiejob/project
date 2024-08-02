<?php
include_once "base.php";
$Rings = new DB('tf_rings');
echo $Rings->del($_POST);
// dd($_POST);
