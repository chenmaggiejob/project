<?php
include_once "base.php";
$Classic = new DB('tf_classic');
echo $Classic->del($_POST);
// dd($_POST);
