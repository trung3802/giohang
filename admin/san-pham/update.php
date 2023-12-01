<div class="page-wrapper">   
<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='200px'>";
} else {
    $hinh = "Không có hình upload";
}

?>

<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">

            <div class="row mb10">
                <select name="id_dm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($id_dm == $id) $s="selected"; else $s="";
                        echo '<option value="' . $id . '" '.$s.'>' . $ten_dm . '</option>';
                    }
                    ?>
                </select>
            </div>
            
            <div class="row mb10">
                <?php extract($sanpham) ?>
                <label>Tên sản phẩm </label> <br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">
                <label>Giá sản phẩm </label> <br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div> 
            <div class="row mb10"> 
                <label>Hình sản phẩm </label> <br>
                <?= $hinh ?>
                <br> <br> 
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                <label>Mô tả sản phẩm </label> <br>
                <input name="ngaychieu"type="date" ><?= $ngaychieu ?></input>
            </div>
            <div class="row mb10 ">

                <input type="hidden" name="id" value="<?= $id ?>">

                <input type="submit" value="CẬP NHẬT" name="capnhat">
                <input type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
  

</div>