<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>DNHSHOP- Dự án Mẫu</title>
    <link rel="icon" href="images/logo.png" type="image/gif" sizes="16x16" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../content/css/bootstrap.min.css" type="text/css" />
    <!-- Font awesome -->
    <link rel="stylesheet" href="../content/css/all.min.css" type="text/css" />
    <!-- Slick slider -->
    <!-- <link rel="stylesheet" href="css/slick.css" type="text/css">
    <link rel="stylesheet" href="css/slick-theme.css" type="text/css">
    <script src="js/slick.min.js"></script> -->

    <!-- Custom -->
    <link rel="stylesheet" href="../content/css/dashboard.css" type="text/css" />
  </head>

  <body>
    <!-- Page Preloader -->
    <div class="wrapper">
      <nav id="sidebar" class="">
        <div class="sidebar-header">
          <a href="">
            <img src="../content/images/logo.jpg" alt="logo" class="img-fluid logo" />
          </a>
        </div>
        <ul class="list-unstyled components text-secondary">
          <li>
            <a href=""><i class="fas fa-store"></i>Xem trang web</a>
          </li>
          <li>
            <a href="index.php"><i class="fas fa-home"></i>Trang chủ</a>
          </li>
          <li>
            <a href="#categories" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-list-alt"></i>Danh mục
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="categories">
                <li>
                    <a href="index.php?act=adddm">
                        <i class="fas fa-plus"></i>Thêm Danh Mục</a>
                </li>
                <li>
                    <a href="index.php?act=listdm">
                        <i class="fas fa-list-ul"></i>Danh sách danh mục</a>
                </li>
            </ul>
        </li>
        <!-- Sản phẩm -->
        <li>
            <a href="#products" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-table"></i>Sản phẩm
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="products">
                <li>
                    <a href="index.php?act=addsp"><i class="fas fa-plus"></i>Thêm sản phẩm</a>
                </li>
                <li>
                    <a href="index.php?act=listsp">
                        <i class="fas fa-list-ul"></i>Danh sách sản phẩm</a>
                </li>
            </ul>
        </li>
        <!-- Khách hàng -->
        <li>
            <a href="index.php?act=dskh"  class="dropdown-toggle no-caret-down">Khách hàng
                <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            
        
        <li>
            <a href="index.php?act=dsdh"><i class="fas fa-chart-bar"></i>Đơn hàng</a>
          </li>
          
          <li>
            <a href="settings.html"><i class="fas fa-cog"></i>Cài đặt</a>
          </li>
          <li>
            <a
              href="#pagesmenu"
              data-bs-toggle="collapse"
              aria-expanded="false"
              class="dropdown-toggle no-caret-down"
              ><i class="fas fa-copy"></i> Pages
              <i class="fas fa-angle-right float-xl-right"></i>
            </a>
            <ul class="collapse list-unstyled" id="pagesmenu">
              <li>
                <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
              </li>
              <li>
                <a href="404.html"
                  ><i class="fas fa-info-circle"></i> 404 Error page</a
                >
              </li>
              <li>
                <a href="500.html"
                  ><i class="fas fa-info-circle"></i> 500 Error page</a
                >
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <div id="body" class="active">
        <!-- navbar navigation component -->
        <nav class="navbar navbar-expand-lg navbar-white bg-white">
          <button type="button" id="sidebarCollapse" class="btn btn-light">
         
          
          
            
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <div class="nav-dropdown">
                  <a
                    href=""
                    id="nav2"
                    class="nav-item nav-link dropdown-toggle text-secondary"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                  
                    <i class="fas fa-user"></i> <span>Hiếu Minh</span>
                    <i style="font-size: 0.8em" class="fas fa-caret-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end nav-link-menu">
                    <ul class="nav-list">
                      <li>
                        <a href="" class="dropdown-item"
                          ><i class="fas fa-address-card"></i> Hồ sơ</a
                        >
                      </li>
                      <li>
                        <a href="" class="dropdown-item"
                          ><i class="fas fa-envelope"></i> Thông báo</a
                        >
                      </li>
                      <li>
                        <a href="" class="dropdown-item"
                          ><i class="fas fa-cog"></i> Cài đặt</a
                        >
                      </li>
                      <div class="dropdown-divider"></div>
                      <li>
                        <a href="" class="dropdown-item"
                          ><i class="fas fa-sign-out-alt"></i> Đăng xuất</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>

    
