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
        <div class="logo mt-5">

        </div>
        <div class="backend-main mt-5">
            Content Management System
        </div>
        <div class="mt-5">
            <form action="../api/login.php" method="post" class="was-validated">
                <div class="mb-3 mt-3">
                    <label for="acc" class="form-label">Account:</label>
                    <input type="text" class="form-control" id="acc" placeholder="Enter Account" name="acc" required>
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd" required>
                </div>
                <div class="d-grid mt-5">
                    <button type="submit" class="btn" style="color:white; border: 0px;background-color: rgb(129, 216, 208);">Login</button>
                    <button type="reset" class="btn  btn-secondary mt-3">Reset</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>