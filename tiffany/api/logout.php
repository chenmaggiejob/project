<?php
include_once "base.php";
unset($_SESSION['role']);
unset($_SESSION['login']);
to("../index.php");
