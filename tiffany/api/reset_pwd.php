<?php
include_once "base.php";
// dd($_POST);
$Admin = new DB('tf_admin');
if ($_POST['pwd'] == $_POST['chkpwd']) {
    unset($_POST['chkpwd']);
    // dd($_POST);
    $Admin->save($_POST);

    echo "
        <script>
            alert('Change Password Successful')
            location.href='../frontend/login.php'
        </script>";
} else {
    echo "
        <script>
            alert('Please check your password')
            location.href='../frontend/reset_pwd.php'
        </script>";
}
