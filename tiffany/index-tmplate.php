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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
                </ul>
            </div>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LogIn
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">CMS</a></li>
                    <li><a class="dropdown-item" href="#">LouOut</a></li>
                    <li><a class="dropdown-item" href="#">LogOut-au</a></li>
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
    <div class="classic container-box mt-3">

        <?php
        $Classic = new DB('tf_classic');
        $data = $Classic->all(['sh' => 1]);
        ?>
        <div class="row">
            <h2 class="text-center mt-4" style="font-weight: bold;">The Tiffany Icons</h2>
            <p class="text-center mt-3 mb-5">For 187 years, Tiffany’s iconic collections have helped an ever-changing world speak the ever-changing language of love.</p>
            <?php foreach ($data as $key => $value) : ?>
                <div class="col text-center mb-3">
                    <img class="img-fluid" style="width: 85%" src="./image/classic/<?= $value["img"] ?>" alt="">
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- content-classic end -->

    <!-- content-Rings -->
    <div class="container-fluid rings container-box mt-3">
        <?php
        $Rings = new DB('tf_rings');
        $data = $Rings->find(['sh' => 1]);
        ?>
        <div class="row h-100">
            <div class="col h-100">
                <img style="width:79%;" src="./image/carousel/<?= $data['img'] ?>" alt="<?= $data['alt'] ?>">
            </div>
            <div class="col text-center">
                <h2 style="padding-top: 20%;"> <?= $data["title"] ?> </h2>
                <p> <?= $data["des"] ?> </p>
            </div>

            <div id="forever" class="col carousel slide" data-bs-ride="carousel">
                <?php
                $Carousels = new DB('tf_carousels');
                $data = $Carousels->all(['sh' => 1]);
                ?>

                <!-- Indicators/dots -->
                <!-- Carousel -->
                <div id="forever" class="carousel slide h-100" data-bs-ride="carousel">
                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <?php
                        foreach ($data as $key => $value) : ?>
                            <button type="button" data-bs-target="#forever" data-bs-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : '' ?>"></button>
                        <?php endforeach ?>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner h-100">
                        <?php foreach ($data as $key => $value) : ?>
                            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?> content">
                                <img src="./image/carousel/<?= $value['img'] ?>" alt="<?= $value['alt'] ?>" class="d-block img-fluid">
                            </div>
                        <?php endforeach; ?>
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
    </div>
    <!-- content-Rings end -->

    <!-- content-Early Access -->
    <div class="container-box mt-3">
        <div class="row lock">
            <h2 class="text-center mt-5 mb-5" style="font-weight: bold;">— Tiffany Lock x ROSÉ —</h2>
            <div class="col  mb-3">
                <?php
                $Early_acccess = new DB('tf_early_acccess');
                $value = $Early_acccess->find(['sh' => 1]);
                ?>
                <iframe src="<?= $value['ytlink'] ?>" frameborder="0"></iframe>
            </div>
            <div class="col text-center">
                <img style="width:78%" src="./image/early_acccess/<?= $value['img'] ?>" alt="<?= $value['alt'] ?>">
            </div>
            <div class="col text-center ">
                <img style="width:78%" src="./image/early_acccess/<?= $value['img2'] ?>" alt="<?= $value['alt2'] ?>">
            </div>
        </div>
    </div>
    <!-- content-Early Access end -->

    <!-- content-stroies -->
    <div class="container-box mt-3">
        <div class="row w-100 text-center">
            <h2 class="text-center mt-5">Stories</h2>
            <?php
            $Stories = new DB('tf_stories');
            $data = $Stories->all(['sh' => 1]);
            foreach ($data as $key => $value) : ?>
                <div class="col m-auto mt-3">
                    <div class="card m-auto" style="width:500px">
                        <img class="card-img-top" src="./image/stories/<?= $value['img'] ?>" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"><?= $value['title'] ?></h4>
                            <p class="card-text"><?= $value['des'] ?></p>
                            <a href="#" class="btn btn-primary"><?= $value['btn_name'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- content-stroies end -->

    <!-- content-contactus -->
    <div class="container-box contactus mt-3">
        <div class="row d-flex align-items-center justify-content-center">
            <?php
            $Service = new DB('tf_service');
            $data = $Service->find(['sh' => 1]);
            ?>
            <div class="col text-center p-3">
                <img class="w-75" src="./image/service/<?= $data["img"] ?>" alt="<?= $data["alt"] ?>">
            </div>
            <div class="col text-center p-5" style="font-size:24px;">
                <h2 style="font-weight: bold">
                    <?= $data["title"] ?>
                </h2>
                <p>
                    <?= $data["des"] ?>
                </p>
            </div>

        </div>
    </div>
    <!-- content-contactus end -->

    <!-- content-footer -->
    <div class="container-box footer mt-3 mb-3 d-flex justify-content-center align-items-center">
        <div class="row">
            <div class="col">
                © T&CO. 2024
            </div>
        </div>
    </div>
</body>

</html>