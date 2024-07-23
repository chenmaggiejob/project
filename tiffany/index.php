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

    <div class="container-box">

        <!-- container-header sticky -->
        <div class="content-header">
            <!-- logo -->
            <div class="logo">
                logo
            </div>
            <!-- logo end-->

            <!-- nav -->
            <?php
            if (isset($_SESSION['login'])) {
            ?>
                <div class="nav">

                    <div class="d-flex justify-content-center align-items-center">
                        <?= $_SESSION['login'] ?>
                    </div>
                    <div class="">
                        <a class="nav-link" href="./frontend/login.php">logout</a>
                    </div>

                </div>
            <?php
            } else {
            ?>
                <div class="nav">
                    <a class="nav-link" href="./frontend/login.php">login</a>
                </div>
            <?php
            }
            ?>
            <!-- nav end-->
        </div>
        <!-- content-header stick end-->

        <!-- content-banner -->
        <div class="content banner">
            banner
        </div>
        <!-- content-banner end -->

        <!-- content-classic -->
        <div class="container-fluid content classic">
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
        <div class="container-fluid content rings">
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
        <div class="content focus">
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
        <div class="content stroies">
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
        <div class="content contactus">
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
        <div class="footer mb-5">
            footer
        </div>
        <!-- content-footer end -->

        <!-- <div class="" style="width: 100%; height: 50px;">

        </div> -->

    </div>





</body>

</html>