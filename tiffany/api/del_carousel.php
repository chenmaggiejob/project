<?php
include_once "base.php";
$Carousels = new DB('tf_carousels');
echo $Carousels->del($_POST);
// dd($_POST);
