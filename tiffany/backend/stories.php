    <div class="backend-box backend-title">
        <div class="row">
            <div class="col-11 text-center">
                <h1>STORIES</h1>
            </div>
        </div>
    </div>

    <div>
        <form action="" method="post">
            <div class="content-box backend-box mt-3">
                <div class="d-grid">
                    <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);" onclick="location.href='?do=add_stories'">
                        <img src="../image/icon/add_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px;height: 32px;">
                    </button>
                </div>
                <table class="table table-bordered text-center mt-2">
                    <tr>
                        <th style="width: 15%;">Stories Image</th>
                        <th style="width: 10%;">Alt</th>
                        <th style="width: 20%;">Title</th>
                        <th style="width: 15%;">Desciption</th>
                        <th style="width: 10%;">Btn Name</th>
                        <th style="width: 15%;">Show</th>
                        <th style="width: 20%;">Option</th>
                    </tr>
                    <?php
                    $Stories = new DB('tf_stories');
                    $data = $Stories->all();
                    // dd($data);
                    foreach ($data as $key => $value) :  ?>
                        <tr>
                            <td class="tvalign">
                                <img class="img-fluid w-50 h-50" src="./image/stories/<?= $value['img'] ?>" alt="<?= $value['alt'] ?>">
                            </td>

                            <td class="tvalign">
                                <input type="text" class="form-control" id="validationCustom03" required value="<?= $value['alt'] ?>" style="border: none;" class="text-center" readonly>
                            </td>

                            <td class="tvalign">
                                <input type="text" class="form-control" id="validationCustom03" required value="<?= $value['title'] ?>" style="border: none;" class="text-center" readonly>
                            </td>

                            <td class="tvalign">
                                <input type="text" class="form-control" id="validationCustom03" required value="<?= $value['des'] ?>" style="border: none;" class="text-center" readonly>
                            </td>

                            <td class="tvalign">
                                <input type="text" class="form-control" id="validationCustom03" required value="<?= $value['btn_name'] ?>" style="border: none;" class="text-center" readonly>
                            </td>

                            <td class="tvalign">
                                <input type="text" name="sh" value="<?= ($value['sh'] == 1) ? "show" : "hide"; ?>" style="border: none;" class="text-center" readonly>
                                <input type="hidden" name="id" value="<?= $value['id'] ?>;">
                            </td>

                            <td class="tvalign">
                                <button class="btn btn-primary" type="button" onclick="location.href='?do=edit_stories&id=<?= $value['id'] ?>'">
                                    <img src="../image/icon/edit_square_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px; height: 32px;">
                                </button>
                                <button class="btn btn-danger" type="button" onclick="del(<?= $value['id'] ?>)">
                                    <img src="../image/icon/delete_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px; height: 32px;">
                                </button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </table>
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