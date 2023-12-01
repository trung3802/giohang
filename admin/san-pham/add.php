
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-center bg-dark text-white text-uppercase">Thêm mới hàng hóa</div>
            <div class="card-body">
                <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" id="add_hang_hoa">
                    
                     
      
             
                    <div class="">
                       <h2> Danh mục sản phẩm thuộc về</h2> <br>
                        <select name="id_dm"   class="form-control"id="">
                            <?php foreach ($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$ten_dm.'</option>';
                            }
                            
                            ?>
                            
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                            <label for="" class="">Tên hàng hóa</label>
                            <input type="text" name="tensp" id="" class="form-control">
                        </div>
                        <div class="mb-3 text-center">
                            <label for="" class="">Đơn giá (vnđ)</label>
                            <input type="number" name="giasp" id="" class="form-control">
                        </div>
               

                        <div class="mb-3 text-center">
                            <label for="" class="">Ảnh sản phẩm</label>
                            <input type="file" name="hinh" id="" class="form-control">
                        </div>

                        <div class="mb-3 text-center">
                            <?php $today = date_format(date_create(), 'Y-m-d'); ?>
                            <label for="ngay_nhap" class="mb-3 text-center">Ngày nhập</label>
                            <input type="date" name="ngaychieu" id="ngay_nhap" class="form-control"
                                value="<?= $today ?>">
                        </div>


                        <div class="mb-3 text-center">
                        <input type="reset" value="Nhập lại" class="btn btn-danger mr-3">
                        <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-primary mr-3">
                        <a href="index.php?act=listsp"><input type="button" class="btn btn-success" value="Danh sách"></a>
                    </div>
                 
                   <?php
                   if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                   ?>
                    
                </form>
            </div>
        </div>
    </div> 
</div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
       
            