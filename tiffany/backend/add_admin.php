    <div class="backend-box backend-title">
        <div class="row">
            <div class="col-11 text-center">
                <h1>ADMIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD</h1>
            </div>
        </div>
    </div>

    <div>
        <form action="./api/add_admin.php" enctype="multipart/form-data" method="post">
            <div class="content-box backend-box mt-3">
                <div class="add-header"></div>
                <table class="table table-bordered text-center mt-3">
                    <tr>
                        <th style="width: 30%;">Account</th>
                        <th style="width: 20%;">Password</th>
                        <th style="width: 20%;">Name</th>
                        <th style="width: 20%;">Role</th>
                    </tr>
                    <tr>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" name="acc" required>
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" name="pwd" required>
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" name="name" required>
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" name="role" required>
                        </td>
                    </tr>
                </table>

                <div class="content-box beckend-box mt-5">
                    <div class="d-grid col mt-2">
                        <button class="btn btn-success" type="submit">
                            <img src="./image/icon/save.png" alt="">
                        </button>
                    </div>

                    <div class="d-grid col mt-2">
                        <button class="btn btn-secondary" type="reset">
                            <img src="./image/icon/restart.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>