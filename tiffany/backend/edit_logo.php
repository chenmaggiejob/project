<?php
$Logo = new DB('tf_logo');
$value = $Logo->find($_GET['id']);
?>

<div class="backend-box backend-title">
    <div class="row">
        <div class="col-11 text-center">
            <h1>LOGO</h1>
        </div>
    </div>
</div>
<div>
    <form action="./api/edit_logo.php" method="post" enctype="multipart/form-data">
        <div class="backend-box mt-3">
            <div class="d-grid">
                <button type="button" class="btn" style="border: 0px;background-color: rgb(129, 216, 208);" onclick="location.href='?do=add_logo'">
                    <img src="../image/icon/add_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px;height: 32px;">
                </button>
            </div>
            <table class="table table-bordered text-center mt-2">
                <tr>
                    <th style="width: 20%;">LOGO Image</th>
                    <th style="width: 20%;">Change LOGO Image</th>
                    <th style="width: 20%;">Alt Text</th>
                    <th style="width: 10%;">Show</th>
                    <th style="width: 20%;">Option</th>
                </tr>


                <tr>
                    <td class="tvalign">
                        <img class="img-fluid" src="./image/logo/<?= $value['img'] ?>" alt="">
                    </td>

                    <td class="tvalign">
                        <input class="form-control" type="file" id="formFile" name="img">
                    </td>

                    <td class="tvalign">
                        <input type="text" class="form-control" id="validationCustom03" name="alt" required value="<?= $value['alt'] ?>">
                    </td>

                    <td class="tvalign">
                        <select name="sh" id="" class="form-select">
                            <option value="0">hide</option>
                            <option value="1">show</option>
                        </select>
                        <input type="hidden" name="id" value="<?= $value['id'] ?>;">
                    </td>



                    <td class="tvalign">
                        <button class="btn btn-success" type="submit">
                            <img src="../image/icon/save_24dp_E8EAED_FILL0_wght400_GRAD0_opsz24.png" alt="" style="width: 32px; height: 32px;">
                        </button>

                    </td>
                </tr>

            </table>
    </form>
</div>