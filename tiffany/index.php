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
                <?= $data["des"] ?>
            </p>
        </div>
    </div>
    <!-- content-banner end -->

    <!-- content-classic -->
    <div class="container-fluid content classic container-box">
        <?php
        $Classic = new DB('tf_classic');
        $data = $Classic->all(['sh' => 1]);
        ?>

        <div class="row">
            <?php foreach ($data as $key => $value) : ?>
                <div class="classic col">
                    <img class="img-fluid" style="width: 85%" src="./image/classic/<?= $value["img"] ?>" alt="">
                </div>
            <?php endforeach ?>
        </div>


    </div>
    <!-- content-classic end -->

    <!-- content-Rings -->
    <div class="container-fluid rings content container-box">
        <?php
        $Rings = new DB('tf_rings');
        $data = $Rings->find(['sh' => 1]);
        ?>
        <div class="row">
            <div class="col">
                <img style="width:63%" src="./image/carousel/<?= $data['img'] ?>" alt="">
            </div>
            <div class="col text-center">
                <h2 style="padding-top: 15%;"> <?= $data["title"] ?> </h2>
                <p> <?= $data["des"] ?> </p>
            </div>

            <?php
            $Carousels = new DB('tf_carousels');
            $data = $Carousels->find(['sh' => 1]);
            ?>
            <div id="forever" class="col carousel slide" data-bs-ride="carousel">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#forever" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#forever" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#forever" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="width:63%" src="./image/carousel/<?= $data['img'] ?>" alt="" class="d-block">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/carousel/<?= $data['img'] ?>" alt="" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="./image/carousel/<?= $data['img'] ?>" class="d-block w-100">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#forever" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#forever" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
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