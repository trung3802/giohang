<?php
// confirm_order.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "giohang";

$conn = new mysqli($servername, $username, $password, $database);



if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['orderId'])) {
    $orderId = $_GET['orderId'];

    // Cập nhật trạng thái từ 'pending' sang 'completed'
    $updateStatusSql = "UPDATE cart SET status = 'Hoàn thành' WHERE id = $orderId";
    $updateStatusResult = mysqli_query($conn, $updateStatusSql);

    if (!$updateStatusResult) {
        die("Error updating status: " . mysqli_error($conn));
    }

    // Phản hồi về trình duyệt
    echo "Confirmed";
} else {
    // Nếu không có orderId hoặc phương thức là không hợp lệ
    echo "Invalid request";
}

?>
