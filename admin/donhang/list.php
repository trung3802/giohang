<div class="container"> 
    <div class="page-title">
        <h4 class="mt-5 font-weight-bold text-center">Danh sách đơn hàng</h4>
    </div>
    <div class="box box-primary">
        <div class="box-body">
            <form action="index.php?act=dsdh" method="post" class="table-responsive">
                
                <table width="100%" class="table table-hover table-bordered text-center">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Hình Ảnh</th>
                            <th>Tên Sản Phẩm</th>
                            <th>Giá</th>
                            <th>Số Lượng</th>
                            <th>Thành Tiền</th>
                            <th>Thông tin khách hàng</th>
                            <th>Thanh Toán</th>
                            <th>Trạng Thái</th>
                            <th>Xác nhận đơn hàng</th>
                            <th>Chức Năng</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        // Kiểm tra xem biến $listcart đã được khởi tạo chưa
                        if (isset($listdonhang) && is_array($listdonhang) && !empty($listdonhang)) {
                            foreach ($listdonhang as $cart) : ?>
                            <tr>
                                <td><?php echo $cart['id']; ?></td>
                                <!-- <td><img src="<?php echo $cart['hinh']; ?>" style="width: 50px;"></td> -->
                                <td><img src="../upload/<?php echo $cart['hinh']; ?>" style="width: 50px;"></td>
                                <td><?php echo $cart['name']; ?></td>
                                <td><?php echo $cart['price']; ?></td>
                                <td><?php echo $cart['soluong']; ?></td>
                                <td><?php echo $cart['thanhtien']; ?></td>
                                <td>
                                <?php echo $cart['user']; ?><br>
    <?php echo $cart['email']; ?><br>
    <?php echo $cart['sdt']; ?><br>
    <?php echo $cart['diachi']; ?>
</td>

<td><?php
    
    echo $cart['phuongthuc'] == 1 ? 'Tiền mặt' : 'Chuyển khoản';
    ?></td>
                                <td><?php echo $cart['status']; ?></td>
                                <td>
                <?php
                if ($cart['status'] === 'Pending' ) {
                    echo '<button type="button" style="margin-bottom: 10px;" class="btn btn-success" onclick="confirmOrder(' . $cart['id'] . ')">Đang giao</button>';
                    
                }elseif ($cart['status'] === 'Đang giao') {
                    echo '<button type="button" class="btn btn-success" onclick="confirmOrder1(' . $cart['id'] . ')">Hoàn Thành</button>';
                }
                ?>
            </td>
                                <td>
                                    
                                        <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $cart['id']; ?>)">Xóa</button>
                                        
                                </td>
                            </tr>
                            <?php endforeach;
                        } else {
                            echo '<tr><td colspan="10">Không có đơn hàng nào.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</div>
<script>
    function confirmOrder(orderId) {
        // Sử dụng AJAX để gửi yêu cầu xác nhận đơn hàng
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Xử lý phản hồi từ server (nếu cần)
                alert("Đơn hàng đã được xác nhận là đang giao");
                location.reload(); // Làm mới trang sau khi xác nhận đơn hàng
            }
        };
        xhr.open("GET", "confirm_order.php?orderId=" + orderId, true);
        xhr.send();
    }
    function confirmOrder1(orderId) {
        // Sử dụng AJAX để gửi yêu cầu xác nhận đơn hàng
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Xử lý phản hồi từ server (nếu cần)
                alert("Đơn hàng đã được xác nhận là hoàn thành");
                location.reload(); // Làm mới trang sau khi xác nhận đơn hàng
            }
        };
        xhr.open("GET", "hoanthanh.php?orderId=" + orderId, true);
        xhr.send();
    }
</script>
<script>
    function confirmDelete(cartId) {
        var isConfirmed = confirm("Bạn có chắc chắn muốn xóa đơn hàng này?");
        
        if (isConfirmed) {
            window.location.href = "confirm_order.php?act=xoacart&id=" + cartId;
        }
    }
</script>
