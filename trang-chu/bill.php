
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../admin/content/css/thanhtoan.css">
<?php

if(isset($_SESSION['user'])){
    $user = $_SESSION['user']['user'];
    $diachi = $_SESSION['user']['diachi'];
    $email = $_SESSION['user']['email'];
    $sdt = $_SESSION['user']['sdt'];
        
    }else{
        $user = "";
        $diachi = "";
        $email = "";
    }
?>
<form action="index.php?act=billcomfirm" method="post">
<h1 class="tt">THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten"  value="<?php echo $user ?>"></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi"  value="<?php echo $diachi ?>"></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="sdt"  value="<?php echo $sdt ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email"  value="<?php echo $email ?>"></td>
                        </tr>
                    </table>

                    <table class="giohang">
                        <h1 class="tt" >Giỏ hàng</h1>
                        <tr>
                            <th>Hình</th>
                            <th>Tên Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                     <?php
                          $i=0;
                          $tong=0;
                          $soluongtong = 0;
                                foreach ($_SESSION['giohang'] as $cart) {
                                  $tt = $cart[4] * $cart[3];
                                  $soluongtong += $cart[4];
                                  $tong+=$tt;
                               
                                  echo '
                                  <tr>
                             
                            <td><img style="width:100px; height:60px"; src="'.$cart[1].'" /></td>
                            <td>'.$cart[2].'</td>
                            <td style="text-align:center";>'.$cart[3].'</td>
                            <td style="text-align:center";>'.$cart[4].'</td>
                            <td  style="text-align:center"; >'.$tt.'</td>
                             
                            
                          </tr>
                                  ';
                                
                                  
                                }
                                echo '
                                <td colspan="7" style="text-align:right; padding:10px;">Tổng Tiền : '.$tong.'</td>
                                 
                                  
                                 
                                  
                                 
                                  ';
                     ?>
                     
                    </table>
                    <h1>Phương Thức Thanh Toán</h1>
                    <div class="pp">
                        
                    <input type="radio" name="pttt" value="1" id="" checked>Thanh toán khi nhận hàng
                    <input type="radio" name="pttt" value="2" id="">Chuyển khoản
                    </div>
                     <input type="submit" value="Đặt Hàng" value="3" name="dongydathang" class="dydh">
            </form>

          