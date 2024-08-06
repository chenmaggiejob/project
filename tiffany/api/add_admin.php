<?php
include_once "base.php";
dd($_POST);
$Admin = new DB('tf_admin');
// dd($_POST);
$tmp = $_POST['name'];
$role = $_POST['role'];
unset($_POST['name']);
unset($_POST['role']);
if ($Admin->count($_POST) == 0) {
    $_POST['name'] = $tmp;
    $_POST['role'] = $role;
    $Admin->save($_POST);

    echo "
        <script>
            alert('Registration Successful')
            location.href='../admin.php?do=admin'
        </script>";
} else {
    echo "
        <script>
            alert('Account already exists')
            location.href='../admin.php?do=admin'
        </script>";
}
?>
<a href="../admin.php"></a>