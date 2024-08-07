    <div class="backend-box backend-title">
        <div class="row">
            <div class="col-11 text-center">
                <h1>RING&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD</h1>
            </div>
        </div>
    </div>

    <div>
        <form action="./api/add_ring.php" enctype="multipart/form-data" method="post">
            <div class="content-box backend-box mt-3">
                <div class="add-header"></div>
                <table class="table table-bordered text-center mt-3">
                    <tr>
                        <th style="width: 20%;">Ring Image</th>
                        <th style="width: 10%;">Alt Text</th>
                        <th style="width: 30%;">Title Text</th>
                        <th style="width: 30%;">Description</th>
                        <th style="width: 15%;">Show</th>
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
                            <input type="text" class="form-control" id="validationCustom03" name="des" required>
                        </td>
                        <td class="tvalign">
                            <select name="sh" id="" class="form-select">
                                <option value="0">hide</option>
                                <option value="1">show</option>
                            </select>
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