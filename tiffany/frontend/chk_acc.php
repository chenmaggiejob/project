<?php
include_once "../api/base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tiffany Backend</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="backend-box mt-5 w-50">
        <!-- logo -->
        <div class="logo backend-main" style="margin-top: 15%;margin-bottom: 5%;">
            <?php
            $Logo = new DB('tf_logo');
            $data = $Logo->find(['sh' => 1]);
            ?>
            <a href="../index.php">
                <img class="logo img-fluid" src="../image/logo/<?= $data["img"] ?>" alt="<?= $data["alt"] ?>">
            </a>
        </div>
        <!-- logo end-->

        <div class="mt-5">
            <div class="text-center">
                <h2 style="font-weight: bold;">Password Request</h2>
                <p style="color:rgb(167, 167, 167);">
                    Please enter your Tiffany Account.
                    When your Tiffany account is verified, we will ask you to reset your password.
                </p>
                <p style="font-weight:bold">Have a Tiffany account?&nbsp;&nbsp;&nbsp;&nbsp;
                    <span><a class="navlink" href="./login.php">Log In ></a></span>
                </p>
            </div>
            <form action="../api/chk_acc.php" method="post" class="was-validated">
                <div class="mb-3 mt-3">
                    <label for="acc" class="form-label">Account:</label>
                    <input type="text" class="form-control" id="acc" placeholder="Enter Account" name="acc" required>
                </div>
                <div class="d-grid mt-5">
                    <button type="submit" class="btn" style="color:white; border: 0px;background-color: rgb(129, 216, 208);">Submit</button>
                    <button type="reset" class="btn  btn-secondary mt-3">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>