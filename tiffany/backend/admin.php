<div class="backend-box backend-title">
    <div class="row">
        <div class="col-11 text-center">
            <h1>ADMIN</h1>
        </div>
    </div>
</div>
<div>


    <form action="">
        <div class="content-box backend-box mt-3">

            <div class="d-grid">
                <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);" onclick="location.href='?do=add_admin'">
                    <img src="./image/icon/add.png" alt="" style="width: 32px;height: 32px;">
                </button>
            </div>

            <table class="table table-bordered text-center mt-2">
                <tr>
                    <th style="width: 20%;">Account</th>
                    <th style="width: 20%;">Name</th>
                    <th style="width: 20%;">Role</th>
                    <th style="width: 15%;">Option</th>
                </tr>
                <?php
                $Admin = new DB('tf_admin');
                $data = $Admin->all();
                // dd($data);
                foreach ($data as $key => $value) {
                ?>
                    <tr>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" required readonly value="<?= $value['acc'] ?>">
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" required readonly value="<?= $value['name'] ?>">
                        </td>
                        <td class="tvalign">
                            <input type="text" class="form-control" id="validationCustom03" required readonly value="<?= $value['role'] ?>">
                        </td>
                        <td class="tvalign">
                            <button class="btn btn-primary" type="button" onclick="location.href='?do=edit_admin&id=<?= $value['id'] ?>'">
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
        $.post("./api/del_admin.php", {
            id
        }, (res) => {
            if (res == 1) {
                alert("del ok");
                location.reload()
            }
        })
    }
</script>