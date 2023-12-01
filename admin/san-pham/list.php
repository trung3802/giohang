
<div class="container" style="text-align:center;">
   
            <form action="index.php?act=listsp" method="post" class="table-responsive">
            <div>
            <input type="text" name="kyw" id="" placeholder="Tìm kiếm">
                    <select name="id_dm" id="">
                        <option value="0" selecteds >TẤT CẢ</option>
                    <?php foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$ten_dm.'</option>';
                            }
                            
                            ?>
                    </select>
                    <input type="submit" name="listok" id="" value="GO">
                    </div>
                <table border="1">
                    <tr class="mb-3 text-center" >
                        
                        <th>MÃ LOẠI</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id=" . $id;
                        $xoasp = "index.php?act=xoasp&id=" . $id;
                        $hinhpath = "../upload/" . $img;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' width='200px'>";
                        } else {
                            $hinh = "Không có hình upload";
                        }

                        echo '<tr class="mb-3 text-center">
                                           
                                            <td>' . $id . '</td>
                                            <td>' . $name . '</td>
                                            <td>' . $hinh . '</td>
                                            <td>' . $price . '</td>
                                            <td>' . $ngaychieu . '</td>
                                            <td>
                                                <a href="' . $suasp . '"> <input type="button" value="Sửa"> </a> 
                                                <a href="' . $xoasp . '"> <input type="button" value="Xóa"> </a> 
                                            </td>
                                         </tr>';
                    }
                    ?>

                </table>
           
            
           
        </form>
  
</div>