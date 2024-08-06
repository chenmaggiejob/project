<?php
include_once "base.php";
dd($_POST);
$Admin = new DB('tf_admin');
if ($_POST['pwd'] == $_POST['chkpwd']) {
    unset($_POST['chkpwd']);
    $tmp = $_POST['name'];
    unset($_POST['name']);
    // dd($_POST);
    if ($Admin->count($_POST) == 0) {
        $_POST['name'] = $tmp;
        $Admin->save($_POST);

        echo "
        <script>
            alert('Registration Successful')
            location.href='../frontend/login.php'
        </script>";
    } else {
        echo "
        <script>
            alert('Account already exists')
            location.href='../frontend/reg.php'
        </script>";
    }
}
