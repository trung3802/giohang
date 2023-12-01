<?php

if (is_array($dm)) {
    extract($dm);
}

?>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Cập nhật danh mục</div>
            <div class="card-body">
        <form action="index.php?act=updatedm" method="POST">
            <div class="row2 mb10 form_content_container">
                <label> Mã loại </label> <br>
                <input type="text" class="form-control" name="maloai" placeholder="" value=<?= $id?>>
            </div>
            <div class="row2 mb10">
                <label>Tên loại </label> <br>
                <input type="text" name="ten_dm" class="form-control" placeholder="nhập vào tên" value="<?= $ten_dm?>">
            </div>
            <div class="mb-3 text-center">
                <input type="hidden" value="<?php if (isset($id)&&($id>0)) echo $id; ?>" name="id">
                <input class="btn btn-danger mr-3" type="submit" value="Cập nhật" name="capnhat">
                <input class="btn btn-primary mr-3" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listdm"><input class="btn btn-success" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
