<?php
include_once "base.php";
$Early_acccess = new DB('tf_early_acccess');
echo $Early_acccess->del($_POST);
// dd($_POST);
