<?php
include_once "base.php";
// dd($_POST);
$chk = $Admin->count(['acc' => $_POST['acc'], 'pwd' => $_POST['pwd']]);

if ($chk) {
    $tmp = $Admin->find($_POST);
    $_SESSION['login'] = $tmp['name'];
    $_SESSION['status'] = 1;
    if ($tmp['role'] == 1) {
        to("../admin.php");
    } else {
        to("../index.php");
    }
    exit();
}
?>

<script>
    alert("Account or Password incorrect");
    location.href = "../frontend/login.php";
</script>