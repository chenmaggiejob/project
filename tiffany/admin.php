<?php
include_once "./api/base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Tiffany Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php
    if ($_SESSION['role'] != 1) {
        to("./index.php");
    }
    ?>
    <div class="container-box mt-5">
        <!-- container-header sticky -->
        <div class="logo">
            <!-- logo -->
            <?php
            $Logo = new DB('tf_logo');
            $data = $Logo->find(['sh' => 1]);
            ?>
            <a href="./index.php">
                <img class="logo img-fluid" src="./image/logo/<?= $data["img"] ?>" alt="">
            </a>
            <!-- logo end-->
        </div>
        <!-- content-header stick end-->

        <!-- main -->
        <div class="content-admin">
            <div class="row mt-1">
                <!-- menu -->
                <div class="d-flex">
                    <div class="" style="background-color: rgb(250, 250, 250); width:10%;">
                        <div class="text-center mt-3 mb-3" style="font-weight: bold;font-size:20px;color:rgb(129, 216, 208)">
                            <?= $_SESSION['login'] ?>
                            <div>
                                <a href="./api/logout.php" class="navlink2">Logout</a>
                            </div>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=logo">Logo</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=banner">Banner</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=classic">Classic</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=ring">Ring</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=carousel">carousel</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=early_access">Early Access</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=stories">Stories Card</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=service">Service</a>
                        </div>
                        <div class="" style="margin-left: 15px;">
                            <a class="navlink" href="?do=admin">admin acc</a>
                        </div>
                        <!-- menu end-->

                    </div>

                    <!-- admin-main -->
                    <div class="col admin-main w-100 overflow-scroll">
                        <?php
                        $do = $_GET['do'] ?? 'error';
                        $file = "./backend/{$do}.php";
                        if (file_exists($file)) {
                            include_once $file;
                        } else {
                            include "./backend/main.php";
                        }
                        ?>

                    </div>
                    <!-- backend-main end -->
                </div>
            </div>
            <!-- main end-->



            <!-- content-footer -->
            <div class="admin-footer mt-1"></div>
            <div class="text-center mt-3">
                © T&CO. 2024
            </div>
            <!-- content-footer -->
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>

        </script>
</body>

</html>