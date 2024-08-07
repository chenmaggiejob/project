<?php
$Service = new DB('tf_service');
$value = $Service->find($_GET['id']);
?>

<div class="backend-box backend-title">
    <div class="row">
        <div class="col text-center">
            <h1>SERVICE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDIT</h1>
        </div>
    </div>
</div>
<div>
    <form action="./api/edit_service.php" method="post" enctype="multipart/form-data">
        <div class="backend-box mt-3">
            <div class="d-grid">
                <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);" onclick="location.href='?do=add_service'">
                    <img src="./image/icon/add.png" alt="" style="width: 32px;height: 32px;">
                </button>
            </div>
            <table class="table table-bordered text-center mt-2">
                <tr>
                    <th style="width: 20%;">Service Image</th>
                    <th style="width: 20%;">Change Service Image</th>
                    <th style="width: 15%;">Alt Text</th>
                    <th style="width: 15%;">Title Text</th>
                    <th style="width: 20%;">Description</th>
                    <th style="width: 10%;">Show</th>
                    <th style="width: 20%;">Option</th>
                </tr>


                <tr>
                    <td class="tvalign">
                        <img class="img-fluid" src="./image/service/<?= $value['img'] ?>" alt="">
                    </td>

                    <td class="tvalign">
                        <input class="form-control" type="file" id="formFile" name="img">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="alt" required value="<?= $value['alt'] ?>">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="title" required value="<?= $value['title'] ?>">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="des" required value="<?= $value['des'] ?>">
                    </td>

                    <td class="tvalign">
                        <select name="sh" id="" class="form-select">
                            <option value="1" <?= $value['sh'] == 1 ? 'selected' : '' ?>>show</option>
                            <option value="0" <?= $value['sh'] == 0 ? 'selected' : '' ?>>hide</option>
                        </select>
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                    </td>



                    <td class="tvalign">
                        <button class="btn btn-success" type="submit">
                            <img src="./image/icon/save.png" alt="" style="width: 32px; height: 32px;">
                        </button>

                    </td>
                </tr>

            </table>
    </form>
</div>