<!-- order_history.php -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch Sử Đơn Hàng</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Lịch Sử Đơn Hàng</h2>

        <?php
        ob_start();
        
include "header.php";
        // Include your database connection or any necessary files
        include 'db_connection.php';

        // Assuming you've already started the session
        session_start();

        // Assuming user information is stored in $_SESSION['user']
        $userId = $_SESSION['user']['id'];

        // Query to retrieve order history for the user
        $sql = "SELECT * FROM `cart` WHERE `iduser` = $userId";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<table>';
            echo '<tr>
                <th>Ảnh</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Thành Tiền</th>
                <th>Trạng Thái</th>
                <th>Chức Năng</th>
            </tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td><img style="width: 50px;" src="../admin/upload/' . $row['hinh'] . '"></td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['price'] . '</td>';
                echo '<td>' . $row['soluong'] . '</td>';
                echo '<td>' . $row['thanhtien'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo '<td><button type="button" class="btn btn-warning" onclick="deleteOrder(' . $row['id'] . ')">Huỷ</button></td>';

                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo '<p>Không có đơn hàng nào.</p>';
        }

        
        // Close the database connection
        mysqli_close($conn);
        include "footer.php";
ob_end_flush();
        

        ?>
    </div>
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
</body>
</html>
