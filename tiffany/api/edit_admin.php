<?php
include_once "base.php";
$Admin = new DB('tf_admin');

// dd($_POST);
$Admin->save($_POST);
to("../admin.php?do=admin");
