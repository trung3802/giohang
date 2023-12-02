



        <?php
        ob_start(); session_start();
        
include "header.php";
        // Include your database connection or any necessary files
        include 'db_connection.php';

        // Assuming you've already started the session
       

        // Assuming user information is stored in $_SESSION['user']
        $userId = $_SESSION['user']['id'];

        // Query to retrieve order history for the user
        $sql = "SELECT * FROM `cart` WHERE `iduser` = $userId";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0): ?>
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr style="background-color: #f2f2f2;">
                    <th style="padding: 10px;">Ảnh</th>
                    <th style="padding: 10px;">Sản phẩm</th>
                    <th style="padding: 10px;">Giá</th>
                    <th style="padding: 10px;">Số Lượng</th>
                    <th style="padding: 10px;">Thành Tiền</th>
                    <th style="padding: 10px;">Trạng Thái</th>
                    <th style="padding: 10px;">Chức Năng</th>
                </tr>
        
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr style="border-bottom: 1px solid #ddd;">
                        <td style="padding: 10px;"><img style="width: 50px;" src="../admin/upload/<?php echo $row['hinh']; ?>"></td>
                        <td style="padding: 10px;"><?php echo $row['name']; ?></td>
                        <td style="padding: 10px;"><?php echo $row['price']; ?></td>
                        <td style="padding: 10px;"><?php echo $row['soluong']; ?></td>
                        <td style="padding: 10px;"><?php echo $row['thanhtien']; ?></td>
                        <td style="padding: 10px;"><?php echo $row['status']; ?></td>
                        <td style="padding: 10px;"><button type="button" class="btn btn-warning" onclick="deleteOrder(<?php echo $row['id']; ?>)">Huỷ</button></td>
                    </tr>
                <?php endwhile; ?>
        
            </table>
        <?php else: ?>
            <p style="margin-top: 20px;">Không có đơn hàng nào.</p>
        <?php endif;

        
        // Close the database connection
        mysqli_close($conn);
        include "footer.php";
ob_end_flush();
        

        ?>
    <script>

        function deleteOrder(orderId) {
            // Sử dụng AJAX để gửi yêu cầu xóa đơn hàng
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // Xử lý phản hồi từ server (nếu cần)
                    alert("Bạn có chắc muốn huỷ đơn hàng");
                    location.reload(); // Làm mới trang sau khi xóa đơn hàng
                }
            };
            xhr.open("GET", "delete_oder.php?orderId=" + orderId, true);
            xhr.send();
        }
    </script>
