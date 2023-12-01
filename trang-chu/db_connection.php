<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "giohang";

$conn = new mysqli($servername, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
?>
