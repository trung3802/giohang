<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>DNHSHOP- Dự án Mẫu</title>
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../admin/content/css/bootstrap.min.css" type="text/css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="../admin/content/css/all.min.css" type="text/css" />
    <!-- Slick slider -->
    <!-- <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
    <script src="js/slick.min.js"></script> -->

    <!-- Custom -->
    <link rel="stylesheet" href="../admin/content/css/style.css" type="text/css" />
  </head>

<body>
    <!-- Page Preloader -->
    <div id="preloader">
      <div class="loader"></div>
    </div>

    <!-- Header -->
    <header class="bg-dark sticky-top">
      <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">
          <img class="img-fluid logo" src="../admin/content/images/logo.jpg" alt="logo" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarsExampleDefault"
          >
            <ul class="navbar-nav m-auto">
              <li class="nav-item ">
                <a class="nav-link" href="index.php"
                  >Trang chủ <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?act=sanphamm">Sản phẩm</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.html">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Liên hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Chính sách</a>
              </li>
            </ul>

            <form action="index.php?act=sanpham"  class="form-inline my-2 my-lg-0">
              <div class="input-group input-group-sm">
                <input
                name="kyw"
                  type="text"
                  class="form-control input-custom"
                  placeholder="Từ khóa..."
                />
                <div class="input-group-append">
                  <button
                    type="submit"
                    name="timkiem"
                    class="btn btn-info btn-number btn-custom"
                  >
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <!-- user -->
            <div class="widgets-wrap float-md-right ml-4">
              <div class="widget-header mr-3">
                <a href="cart.php" class="icon icon-sm rounded-circle border"
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <span class="badge badge-pill badge-danger notify">0</span>
              </div>
              <div class="widget-header icontext">
                <a href="#" class="icon icon-sm rounded-circle border"
                  ><i class="fa fa-user"></i
                ></a>
                <div class="text">
                <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                                echo ' <a class="text-info" href="index.php?act=edit_taikhoan">Xin chào ' .$user.'</a>  <br>  <br> ' ;
                                if($role==1){
                                  echo '<a class="text-info" href="../admin/trang-admin">Đăng nhập admin </a> <br>  <br>';
                                }
                                echo '<a class="text-info" href="index.php?act=thoat">Thoát</a>  <br>';
                                ?>
                 
                  <div>
                    <?php
                    
                    ?>
                    <?php
                            }else{
                    ?>
                    <a class="text-info" href="index.php?act=dangnhap">Đăng nhập</a> |
                    <a class="text-info" href="index.php?act=dangky"> Đăng ký</a>
                  </div>
                 
                  <?php } ?>
                </div>
              </div>
            </div>
            <!-- widgets-wrap.// -->
          </div>
        </div>
      </nav>
    </header>
