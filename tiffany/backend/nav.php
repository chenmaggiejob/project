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
    <div class="backend-box backend-logo">
        <div class="row">
            <div class="col-11 text-center">
                <h1>NAV</h1>
            </div>

            <div class="col-1 m-auto">
                logout
            </div>
        </div>
    </div>

    <div>
        <form action="">
            <div class="content-box backend-box mt-3">
                <div class="d-grid">
                    <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);">
                        <img src="../image/icon/add_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px;height: 32px;">
                    </button>
                </div>
                <table class="table table-bordered text-center mt-2">
                    <tr>
                        <th style="width: 20%;">Menu Name</th>
                        <th style="width: 20%;">Harf</th>
                        <th style="width: 10%;">Sub Menu</th>
                        <th style="width: 5%;">Show</th>
                        <th style="width: 5%;">Delete</th>
                        <th style="width: 20%;">Option</th>
                    </tr>
                    <tr>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" required>
                        </td>

                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" required>
                        </td>

                        <td class="tvalign">
                            count
                        </td>

                        <td class="tvalign">
                            <input type="radio">
                        </td>

                        <td class="tvalign">
                            <input type="checkbox">
                        </td>
                        <td class="tvalign">
                            <button class="btn btn-primary">
                                <img src="../image/icon/edit_square_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px; height: 32px;">
                            </button>
                            <button class="btn btn-success" type="submit">
                                <img src="../image/icon/save_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="">
                            </button>
                            <button class="btn btn-secondary">
                                <img src="../image/icon/restart_alt_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="">
                            </button>
                        </td>
                    </tr>
                </table>


        </form>
    </div>

</body>

</html>