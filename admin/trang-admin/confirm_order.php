<?php
// confirm_order.php
$servername = "localhost";
$username = "root";
$password = "";
$database = "giohang";

$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['orderId'])) {
    $orderId = $_GET['orderId'];

    // Cập nhật trạng thái từ 'pending' sang 'completed'
    $updateStatusSql = "UPDATE cart SET status = 'Đang giao' WHERE id = $orderId";
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

if ($_GET['act'] === 'xoacart' && isset($_GET['id'])) {
    $cartId = $_GET['id'];

    // Thực hiện truy vấn xóa đơn hàng từ CSDL
    $sqlDelete = "DELETE FROM `cart` WHERE `id` = $cartId";
    $resultDelete = mysqli_query($conn, $sqlDelete);

    if ($resultDelete) {
        // Xóa thành công, có thể chuyển hướng hoặc cung cấp thông báo
        header("Location: index.php?act=dsdh");
        exit();
    } else {
        // Lỗi khi xóa, có thể cung cấp thông báo lỗi
        echo "Lỗi khi xóa đơn hàng: " . mysqli_error($conn);
    }
}
?>
