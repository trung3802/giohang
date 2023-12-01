<?php
include 'db_connection.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['place_order'])) {
    // Assuming your cart data is stored in $_SESSION['giohang']
    foreach ($_SESSION['giohang'] as $cartItem) {
        $iduser = $_SESSION['user']['id'];
        $idpro = $cartItem[1];
        // $hinh = $cartItem[0];
        $hinh = basename($cartItem[0]);  // Get only the filename

        $name = $cartItem[1];
        $price = $cartItem[2];
        $soluong = $cartItem[3];
        $thanhtien = $cartItem[2] * $cartItem[3];
        $idbill = 0; // You may need to replace this with the actual bill ID
        $status = 'Pending'; 

       
        // $sql = "INSERT INTO `cart` (`iduser`, `idpro`, `hinh`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) 
        //         VALUES ('$iduser', '$idpro', '$hinh', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
                 $sql = "INSERT INTO `cart` (`iduser`, `idpro`, `hinh`, `name`, `price`, `soluong`, `thanhtien`, `idbill`, `status`) 
                 VALUES ('$iduser', '$idpro', '$hinh', '$name', '$price', '$soluong', '$thanhtien', '$idbill', '$status')";
         
        
        // Execute the query
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error: " . mysqli_error($conn));
        }
    }
    $_SESSION['giohang'] = array();
    echo '<script>alert("dat hang thanh cong");</script>';
    header("Location: index.php");
    exit();
} else {
    echo "Invalid request.";
}
?>
