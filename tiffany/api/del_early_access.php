<?php
include_once "base.php";
$Early_access = new DB('tf_early_access');
echo $Early_access->del($_POST);
// dd($_POST);
