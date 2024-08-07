    <div class="backend-box backend-title">
        <div class="row">
            <div class="col text-center">
                <h1>EARLY_ACCESS</h1>
            </div>
        </div>
    </div>

    <div>
        <form action="" method="post">

            <div class="content-box backend-box mt-3">

                <div class="d-grid">
                    <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);">
                        <img src="./image/icon/add.png" alt="" style="width: 32px;height: 32px;" onclick="location.href='?do=add_early_access'">
                    </button>
                </div>

                <table class="table table-bordered text-center mt-2">
                    <tr>
                        <th style="width: 20%;">Youtube Link</th>
                        <th style="width: 10%;">Itme1 Image</th>
                        <th style="width: 10%;">Alt1</th>
                        <th style="width: 10%;">Itme2 Image</th>
                        <th style="width: 10%;">Alt2</th>
                        <th style="width: 5%;">Show</th>
                        <th style="width: 20%;">Option</th>
                        <a href=""></a>
                    </tr>
                    <?php
                    $Early_access = new DB('tf_early_access');
                    $data = $Early_access->all();
                    foreach ($data as $key => $value) {
                    ?>
                        <tr>
                            <td class="tvalign">
                                <input type="text" class="form-control" id="validationCustom03" required value="<?= $value['ytlink'] ?>" style="border: none;" class="text-center" readonly>
                            </td>

                            <td class="tvalign">
                                <img class="img-fluid w-25 h-25" src="./image/early_access/<?= $value['img'] ?>" alt="<?= $value['alt'] ?>">
                            </td>

                            <td class="tvalign">
                                <input type="text" class="form-control" id="validationCustom03" required value="<?= $value['alt'] ?>" style="border: none;" class="text-center" readonly>
                            </td>

                            <td class="tvalign">
                                <img class="img-fluid w-25 h-25" src="./image/early_access/<?= $value['img2'] ?>" alt="<?= $value['alt'] ?>">
                            </td>

                            <td class="tvalign">
                                <input type="text" class="form-control" id="validationCustom03" required value="<?= $value['alt2'] ?>" style="border: none;" class="text-center" readonly>
                            </td>

                            <td class="tvalign">
                                <input type="text" name="sh" value="<?= ($value['sh'] == 1) ? "show" : "hide"; ?>" style="border: none;" class="text-center" readonly>
                                <input type="hidden" name="id" value="<?= $value['id'] ?>;">
                            </td>

                            <td class="tvalign">
                                <button class="btn btn-primary" type="button" onclick="location.href='?do=edit_early_acccess&id=<?= $value['id'] ?>'">
                                    <img src="./image/icon/edit.png" alt="" style="width: 32px; height: 32px;">
                                </button>
                                <button class="btn btn-danger" type="button" onclick="del(<?= $value['id'] ?>)">
                                    <img src="./image/icon/delete.png" alt="" style="width: 32px; height: 32px;">
                                </button>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </form>
    </div>

    <script>
        function del(id) {
            $.post("./api/del_early_acccess.php", {
                id
            }, (res) => {
                if (res == 1) {
                    alert("del ok");
                    location.reload()
                }
            })
        }
    </script>