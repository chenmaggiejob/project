<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Tiffany Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <div class="container-box">

        <!-- container-header sticky -->
        <div class="logo mt-1">
            <!-- logo -->
            <div class="">
                logo img
            </div>
            <!-- logo end-->
        </div>
        <!-- content-header stick end-->

        <!-- main -->
        <div class="content-admin">
            <div class="row mt-1">
                <!-- menu -->
                <div class="col d-flex">
                    <div class="col-1" style="background-color: rgb(250, 250, 250);">
                        <div class="text-center mt-3 mb-3" style="font-weight: bold;font-size:24px;color:rgb(129, 216, 208)">
                            CMS
                        </div>
                        <div class="">
                            <a class="navlink nav-link" href="?do=logo">logo</a>
                        </div>
                        <div class="div">
                            <a class="navlink nav-link" href="?do=nav">nav</a>
                        </div>
                        <div class="div">
                            <a class="navlink nav-link" href="?do=banner">banner</a>
                        </div>
                        <div class="div">
                            <a class="navlink nav-link" href="?do=classic">classic</a>
                        </div>
                        <div class="div">
                            <a class="navlink nav-link" href="?do=early_acccess">early acccess</a>
                        </div>
                        <div class="div">
                            <a class="navlink nav-link" href="?do=stories">stories card</a>
                        </div>
                        <div class="div">
                            <a class="navlink nav-link" href="?do=service">service</a>
                        </div>
                        <div class="div">
                            <a class="navlink nav-link" href="?do=admin">admin acc</a>
                        </div>
                        <!-- menu end-->

                    </div>

                    <!-- admin-main -->
                    <div class="col admin-main w-100">
                        <?php
                        $do = $_GET['do'] ?? 'error';
                        $file = "./backend/{$do}.php";
                        if (file_exists($file)) {
                            include_once $file;
                        } else {
                            echo '<h1 style="font-size: 72px; font-weight: bold; color:rgb(129, 216, 208);
                            text-decoration: underline; text-align: center; line-height: 50vh; 
                            display: flex; justify-content: center; align-items: center;">Content Management System</h1>';
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
</body>

</html>