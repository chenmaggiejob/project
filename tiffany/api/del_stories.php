<?php
include_once "base.php";
$Stories = new DB('tf_strories');
echo $Stories->del($_POST);
// dd($_POST);
