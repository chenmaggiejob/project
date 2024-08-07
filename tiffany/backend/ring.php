    <div class="backend-box backend-title">
        <div class="row">
            <div class="col text-center">
                <h1>Ring</h1>
            </div>
        </div>
    </div>
    <div>
        <form action="" method="post">
            <div class="backend-box mt-3">
                <div class="d-grid">
                    <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);" onclick="location.href='?do=add_ring'">
                        <img src="./image/icon/add.png" alt="" style="width: 32px;height: 32px;">
                    </button>
                </div>
                <table class="table table-bordered text-center mt-2">
                    <tr>
                        <th style="width: 20%;">Ring Image</th>
                        <th style="width: 15%;">Alt Text</th>
                        <th style="width: 20%;">Title Text</th>
                        <th style="width: 20%;">Description</th>
                        <th style="width: 5%;">Show</th>
                        <th style="width: 20%;">Option</th>
                    </tr>
                    <?php
                    $Rings = new DB('tf_rings');
                    $data = $Rings->all();
                    // dd($data);
                    foreach ($data as $key => $value) {
                    ?>
                        <tr>
                            <td class="tvalign">
                                <img class="img-fluid w-50 h-50" src="./image/carousel/<?= $value['img'] ?>" alt="">
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
                                <input type="text" name="sh" value="<?= ($value['sh'] == 1) ? "show" : "hide"; ?>" style="border: none;" class="text-center" readonly>
                                <input type="hidden" name="id" value="<?= $value['id'] ?>;">
                            </td>
                            <td class="tvalign">
                                <button class="btn btn-primary" type="button" onclick="location.href='?do=edit_ring&id=<?= $value['id'] ?>'">
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
        </form>
    </div>

    <script>
        function del(id) {
            $.post("./api/del_ring.php", {
                id
            }, (res) => {
                if (res == 1) {
                    alert("del ok");
                    location.reload()
                }
            })
        }
    </script>