<?php
include_once "base.php";
// dd($_POST);
$chk = $Admin->count(['acc' => $_POST['acc']]);

if ($chk) {
    $tmp = $Admin->find($_POST);
    $_SESSION['acc'] = $tmp['acc'];
    to("../frontend/reset_pwd.php");
    exit();
}
?>

<script>
    alert("Invalid Account");
    location.href = "../frontend/chk_acc.php";
</script>