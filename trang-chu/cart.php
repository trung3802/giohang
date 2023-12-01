<!-- Jumbotron -->
<section class="jumbotron text-center">
  <div class="container">
    <h1 class="jumbotron-heading">Giỏ hàng</h1>
  </div>
</section>
<div class="container mb-4">

<?php
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user']['user'];
        $diachi = $_SESSION['user']['diachi'];
        $email = $_SESSION['user']['email'];
    } else {
        $user = "";
        $diachi = "";
        $email = "";
    }
?>

    <form method="post" action="process_order.php">
        <table border="1">
            <h1>THÔNG TIN NHẬN HÀNG</h1>
            <table class="thongtinnhanhang">
                <tr>
                    <td width="20%">Họ tên</td>
                    <td><input type="text" name="hoten" required value="<?php echo $user ?>"></td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" name="diachi" required value="<?php echo $diachi ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" required value="<?php echo $email ?>"></td>
                </tr>
            </table>
            <style>
                .thongtinnhanhang input[type=text]{
                    width: 100%;
                }
                .thongtinnhanhang {
                    width: 50%;
                }
            </style>
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Ảnh</th>
                                <th>Sản phẩm</th>
                                <th class="" style="text-align:center">Số lượng</th>
                                <th class="" style="text-align:center">Giá</th>
                                <th class="text-right">Tổng</th>
                                <th class="text-right" style="margin-left:10px;">Xóa</th>
                            </tr>
                            <?php 
                                $i=0;
                                $tong=0;
                                $soluongtong = 0;
                                foreach ($_SESSION['giohang'] as $cart) {
                                    $tt = $cart[3] * $cart[2];
                                    $soluongtong += $cart[3];
                                    $tong+=$tt;
                                    $xoasp = '<a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a>';
                                    echo '
                                        <tr>
                                            <td><img style="width:100px"; src="'.$cart[0].'" /></td>
                                            <td>'.$cart[1].'</td>
                                            <td style="text-align:center";>'.$cart[3].'</td>
                                            <td style="text-align:center";>'.$cart[2].'</td>
                                            <td class="text-right" >'.$tt.'</td>
                                            <td class="text-right">'.$xoasp.'</td>
                                        </tr>
                                    ';
                                    $i+=1;
                                }
                                echo '
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td collspan="5">Tổng Tiền : '.$tong.'</td>
                                    <td></td>
                                    <td></td>
                                ';
                            ?>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <a class="btn btn-block btn-light" href="index.php">Tiếp tục mua hàng</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <button type="submit" name="place_order" class="btn btn-lg btn-block btn-success text-uppercase">
                            Đặt hàng
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</html>
