    <div class="backend-box backend-title">
        <div class="row">
            <div class="col-11 text-center">
                <h1>STORIES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADD</h1>
            </div>
        </div>
    </div>

    <div>
        <form action="./api/add_stories.php" method="post" enctype="multipart/form-data">
            <div class="content-box backend-box mt-3">

                <table class="table table-bordered text-center mt-2">
                    <tr>
                        <th style="width: 25%;">Stories Image</th>
                        <th style="width: 10%;">Alt</th>
                        <th style="width: 20%;">Title</th>
                        <th style="width: 20%;">Desciption</th>
                        <th style="width: 15%;">Btn Name</th>
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
                            <input type="text" class="form-control" id="validationCustom03" name="btn_name" required>
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
                    <div class="d-grid mt-2">
                        <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);" onclick="location.href='?do=add_stories'">
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


    <script>
        function del(id) {
            $.post("./api/del_strries.php", {
                id
            }, (res) => {
                if (res == 1) {
                    alert("del ok");
                    location.reload()
                }
            })
        }
    </script>