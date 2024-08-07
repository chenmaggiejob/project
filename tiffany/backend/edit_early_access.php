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
    <form action="./api/edit_early_access.php" method="post" enctype="multipart/form-data">
        <div class="content-box backend-box mt-3">
            <div class="add-header"></div>
            <table class="table table-bordered text-center mt-3">
                <tr>
                    <th style="width: 10%;">Youtube Link</th>
                    <th style="width: 10%;">Itme1 Image</th>
                    <th style="width: 10%;">Change Itme1 Image</th>
                    <th style="width: 5%;">Alt1</th>
                    <th style="width: 10%;">Itme2 Image</th>
                    <th style="width: 10%;">Change Itme2 Image</th>
                    <th style="width: 5%;">Alt2</th>
                    <th style="width: 10%;">Show</th>
                    <th style="width: 5%;">Option</th>
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
                            <option value="1" <?= $value['sh'] == 1 ? 'selected' : '' ?>>show</option>
                            <option value="0" <?= $value['sh'] == 0 ? 'selected' : '' ?>>hide</option>
                        </select>
                        <input type="hidden" name="id" value="<?= $value['id'] ?>;">
                    </td>
                    <td class="tvalign">
                        <button class="btn btn-success" type="submit">
                            <img src="./image/icon/save.png" alt="" style="width: 32px; height: 32px;">
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>