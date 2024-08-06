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
        <div class="logo backend-main" style="margin-top: 15%;margin-bottom: 10%;">
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
            <form action="../api/reg.php" method="post" class="was-validated">
                <div class="mb-3 mt-3">
                    <label for="acc" class="form-label">Account:</label>
                    <input type="text" class="form-control" id="acc" placeholder="Enter Account" name="acc" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Account" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd" required>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Check Password:</label>
                    <input type="password" class="form-control" id="chkpwd" placeholder="Enter Password" name="chkpwd" required>
                </div>
                <div class="d-grid mt-5">
                    <button type="submit" class="btn" style="color:white; border: 0px;background-color: rgb(129, 216, 208);">Register</button>
                    <button type="reset" class="btn  btn-secondary mt-3">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>