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
    <div class="backend-box backend-title">
        <div class="row">
            <div class="col-11 text-center">
                <h1>Banner</h1>
            </div>
        </div>
    </div>

    <div>
        <form action="./api/add_banner.php" enctype="multipart/form-data" method="post">
            <div class="content-box backend-box mt-3">
                <div class="add-header"></div>
                <table class="table table-bordered text-center mt-3">
                    <tr>
                        <th style="width: 20%;">Banner Image</th>
                        <th style="width: 20%;">Alt Text</th>
                        <th style="width: 30%;">Title Text</th>
                        <th style="width: 30%;">Desciption</th>
                        
                    </tr>
                    <tr>
                        <td class="tvalign">
                            <input class="form-control" type="file" id="formFile" name="img">
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" name="alt" required>
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" name="title" required>
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" name="desc" required>
                        </td>
                    </tr>
                </table>

                <div class="content-box beckend-box mt-5">
                    <div class="d-grid mt-2">
                        <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);">
                            <img src="../image/icon/add_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px;height: 32px;">
                        </button>
                    </div>

                    <div class="d-grid col mt-2">
                        <button class="btn btn-success" type="submit">
                            <img src="../image/icon/save_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="">
                        </button>
                    </div>

                    <div class="d-grid col mt-2">
                        <button class="btn btn-secondary">
                            <img src="../image/icon/restart_alt_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>