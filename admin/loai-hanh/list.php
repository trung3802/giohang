<div class="container"> 
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách loại hàng</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="index.php?act=listdm" method="post" class="table-responsive">
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th><input type="checkbox" id="select-all"></th>
                            <th>Mã loại</th>
                            <th>Tên loại</th>
                            <th><a href="index.php?act=adddm" class="btn btn-success text-white">Thêm mới
                                    <i class="fas fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                            $suadm = "index.php?act=suadm&id=". $id;
                            $xoadm = "index.php?act=xoadm&id=" . $id;

                        ?>
                        <tr>
                            <td><input type="checkbox" name="id[]" value="<?= $id ?>"></td>
                            <td><?= $id ?></td>
                            <td><?= $ten_dm ?></td>
                            <td class="text-end">
                                <a href="index.php?act=suadm&id=<?php echo $danhmuc['id']; ?>" class="btn btn-outline-info btn-rounded"><i
                                        class="fas fa-pen"></i></a>
                                <a href="index.php?act=xoadm&id=<?php echo $danhmuc['id']; ?>" class="btn btn-outline-danger btn-rounded"
                                    onclick="return checkDelete()"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php
                        }

                        ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
</div>