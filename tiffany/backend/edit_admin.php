<?php
$Admin = new DB('tf_admin');
$value = $Admin->find($_GET['id']);
?>

<div class="backend-box backend-title">
    <div class="row">
        <div class="col-11 text-center">
            <h1>ADMIN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDIT</h1>
        </div>
    </div>
</div>
<div>
    <form action="./api/edit_admin.php" method="post" enctype="multipart/form-data">
        <div class="backend-box mt-3">
            <div class="d-grid">
                <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);" onclick="location.href='?do=add_admin'">
                    <img src="../image/icon/add.png" alt="" style="width: 32px;height: 32px;">
                </button>
            </div>
            <table class="table table-bordered text-center mt-2">
                <tr>
                    <th style="width: 20%;">Account</th>
                    <th style="width: 20%;">Password</th>
                    <th style="width: 20%;">Name</th>
                    <th style="width: 20%;">Role</th>
                    <th style="width: 20%;">Option</th>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?= $value['id'] ?>">
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="acc" required value="<?= $value['acc'] ?>">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="pwd" required value="<?= $value['pwd'] ?>">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="name" required value="<?= $value['name'] ?>">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="name" required value="<?= $value['role'] ?>">
                    </td>
                    <td class="tvalign">
                        <button class="btn btn-success" type="submit">
                            <img src="../image/icon/save.png" alt="" style="width: 32px; height: 32px;">
                        </button>
                    </td>
                </tr>

            </table>
    </form>
</div>