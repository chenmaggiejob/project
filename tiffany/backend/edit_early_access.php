<?php
$Early_access = new DB('tf_early_access');
$value = $Early_access->find($_GET['id']);
?>

<div class="backend-box backend-title">
    <div class="row">
        <div class="col-11 text-center">
            <h1>EARLY_ACCESS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDIT</h1>
        </div>
    </div>
</div>

<div>
    <form action="./api/edit_early_acccess.php" method="post" enctype="multipart/form-data">
        <div class="content-box backend-box mt-3">
            <div class="add-header"></div>
            <table class="table table-bordered text-center mt-3">
                <tr>
                    <th style="width: 10%;">Youtube Link</th>
                    <th style="width: 10%;">Itme1 Image</th>
                    <th style="width: 10%;">Change Itme1 Image</th>
                    <th style="width: 10%;">Alt1</th>
                    <th style="width: 10%;">Itme2 Image</th>
                    <th style="width: 10%;">Change Itme2 Image</th>
                    <th style="width: 10%;">Alt2</th>
                    <th style="width: 5%;">Show</th>
                </tr>
                <tr>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="ytlink" required value="<?= $value['ytlink'] ?>">
                    </td>
                    <td class="tvalign">
                        <img class="img-fluid" style="width: 25%; height: 25%;" src="./image/early_access/<?= $value['img'] ?>" alt="<?= $value['alt'] ?>">
                    </td>
                    <td class="tvalign">
                        <input class="form-control" type="file" id="formFile" name="img">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="alt" required value=<?= $value['alt'] ?>>
                    </td>
                    <td class="tvalign">
                        <img class="img-fluid" style="width: 25%; height: 25%;" src="./image/early_access/<?= $value['img2'] ?>" alt="<?= $value['alt'] ?>">
                    </td>
                    <td class="tvalign">
                        <input class="form-control" type="file" id="formFile" name="img">
                    </td>
                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="alt" required value=<?= $value['alt2'] ?>>
                    </td>

                    <td class="tvalign">
                        <select name="sh" id="" class="form-select">
                            <option value="0">hide</option>
                            <option value="1">show</option>
                        </select>
                        <input type="hidden" name="id" value="<?= $value['id'] ?>;">
                    </td>
                </tr>
            </table>

            <div class="content-box beckend-box mt-5">
                <div class="d-grid mt-2">
                    <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);">
                        <img src="./image/icon/add.png" alt="" style="width: 32px;height: 32px;">
                    </button>
                </div>

                <div class="d-grid col mt-2">
                    <button class="btn btn-success" type="submit">
                        <img src="./image/icon/save.png" alt="">
                    </button>
                </div>

                <div class="d-grid col mt-2">
                    <button class="btn btn-secondary">
                        <img src="./image/icon/restart.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>