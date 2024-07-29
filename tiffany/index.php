<?php
include_once "./api/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Tiffany</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>



    <!-- container-header sticky -->
    <div class="container-box content-header sticky-top" style="background-color: rgba(255,255,255,0.7); backdrop-filter: blur(0px);">
        <!-- logo -->
        <div class="logo">
            <?php
            $Logo = new DB('tf_logo');
            $data = $Logo->find(['sh' => 1]);
            ?>
            <a href="#">
                <img class="logo img-fluid" src="./image/logo/<?= $data["img"] ?>" alt="">
            </a>
        </div>
        <!-- logo end-->

        <!-- nav -->
        <nav class="navbar navbar-expand-sm nav">
            <div class="container-fluid">
                <!-- Links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link 3</a>
                    </li>
                    <?php
                    if (isset($_SESSION['role'])) {
                        if ($_SESSION['role'] == 1) {
                    ?>
                            <li class="nav-item ms-auto">
                                <a class="nav-link" href="./admin.php">CMS</a>
                            </li>
                            <li class="nav-item ms-auto">
                                <a class="nav-link" href="./api/logout.php">Logout</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item ms-auto">
                                <a class="nav-link" href="./api/logout.php">Logout</a>
                            </li>
                        <?php
                        }
                        ?>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item ms-auto">
                            <a class="nav-link" href="./frontend/login.php">Login</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <!-- nav end-->
    </div>
    <!-- content-header stick end-->

    <!-- content-banner -->
    <div class="container-box">
        <?php
        $Banner = new DB('tf_banner');
        $data = $Banner->find(['sh' => 1]);
        ?>
        <img class="img-fluid" src="./image/banner/<?= $data["img"] ?>" alt="">
        <div class="text-overlay text-center" style="width: 25%; position: absolute; top: 55%; right: 10%; transform: translateY(-50%); padding: 10px; border-radius: 5px; color: white;">
            <h2 style="font-weight: bold">
                <?= $data["title"] ?>
            </h2>
            <p>
                <?= $data["desc"] ?>
            </p>
        </div>
    </div>
    <!-- content-banner end -->

    <!-- content-classic -->
    <div class="container-fluid content classic container-box">
        <div class="row">
            <div class="col">
                img
            </div>
            <div class="col">
                img
            </div>
            <div class="col">
                img
            </div>
            <div class="col">
                img
            </div>
        </div>
    </div>
    <!-- content-classic end -->

    <!-- content-Rings -->
    <div class="container-fluid content rings container-box">
        <div class="row">
            <div class="col bg-info">
                img-fluid
            </div>
            <div class="col bg-danger">
                text
            </div>
            <div class="col bg-info">
                carousel
            </div>
        </div>
    </div>
    <!-- content-Rings end -->



    <!-- content-Early Access -->
    <div class="content focus container-box">
        <div class="row">
            <div class="col">
                youtube
            </div>
            <div class="col">
                col
            </div>
            <div class="col">
                col
            </div>
        </div>
    </div>
    <!-- content-Early Access end -->

    <!-- content-stroies -->
    <div class="content stroies container-box">
        <div class="row">
            <div class="col">
                storiescard
            </div>
            <div class="col">
                storiescard
            </div>
            <div class="col">
                storiescard
            </div>
        </div>
    </div>
    <!-- content-stroies end -->

    <!-- content-contactus -->
    <div class="content contactus container-box">
        <div class="row">
            <div class="col">
                img
            </div>
            <div class="col">
                service text
            </div>
            <div class="col">
                form
            </div>
        </div>
    </div>
    <!-- content-contactus end -->

    <!-- content-footer -->
    <div class="footer mb-5 container-box">
        footer
    </div>
    <!-- content-footer end -->

    <!-- <div class="" style="width: 100%; height: 50px;">

        </div> -->







</body>

</html>