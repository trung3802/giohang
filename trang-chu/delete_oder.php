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


// Kiểm tra xem đã truyền tham số orderId vào URL hay chưa
if (isset($_GET['orderId'])) {
    // Lấy orderId từ URL
    $orderId = $_GET['orderId'];

    // Truy vấn SQL để xóa đơn hàng với orderId tương ứng
    $sql = "DELETE FROM `cart` WHERE `id` = $orderId";

    if (mysqli_query($conn, $sql)) {
        // Nếu xóa thành công, trả về phản hồi cho client
        echo 'Đơn hàng đã được xóa thành công.';
    } else {
        // Nếu xóa thất bại, trả về thông báo lỗi
        echo 'Lỗi: ' . mysqli_error($conn);
    }
} else {
    // Nếu không có orderId trong URL, trả về thông báo lỗi
    echo 'Lỗi: Không có orderId được cung cấp.';
}

// Đóng kết nối với cơ sở dữ liệu
mysqli_close($conn);
?>