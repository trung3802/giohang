<div class="container"> 
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách khách hàng</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="index.php?act=dskh" method="post" class="table-responsive">
                <button type="submit" class="btn btn-danger mb-1" id="deleteAll" onclick="return checkDelete()">
                    Xóa mục đã chọn</button>
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id tài khoản</th>
                            <th>Tên Tài Khoản</th>
                            <th>Email</th>
                            <th>Mật Khẩu</th>
                            <th>Vai trò</th>
                            <th>Chức năng
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                   foreach($listtaikhoan as $taikhoan){
                    extract($taikhoan);
                    $suatk="index.php?act=suatk&id=".$id;
                    $xoatk="index.php?act=xoatk&id=".$id;
                    echo '  <tr>
                   
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$email.'</td>
                    <td>'.$pass.'</td>
                    <td>'.$role.'</td>
                    <td><a href="'.$suatk.'"><input type="button"value="sửa"></a> <a href="'.$xoatk.'"><input type="button"value="xóa"></a></td>
                </tr>';
                   }
                ?>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
</div>