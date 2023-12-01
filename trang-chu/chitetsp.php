

    <!-- Header -->
    

    <!-- Jumbotron -->
    <section class="jumbotron text-center mb-4 bg-img">
      <div class="container">
        <h1 class="jumbotron-heading">
          Xshop - Trang thương mại điện tử lớn nhất Việt Nam
        </h1>
        <p class="lead text-muted mb-0">
          Ở đây có tất cả những thứ bạn tìm kiếm.
        </p>
      </div>
    </section>

    <!-- Body -->

    <div class="container">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="index.html">Trang chủ</a>
              </li>
              <li class="breadcrumb-item">
                <a href="category.html">Sản phẩm</a>
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-3">
          <div class="card bg-light mb-3">
            <form class="pb-3">
              <div class="input-group">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Tìm kiếm sản phẩm..."
                />
                <div class="input-group-append">
                  <button class="btn btn-success" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
            <div class="card-header bg-secondary text-white text-uppercase">
              <i class="fa fa-list"></i> Danh mục
            </div>
            <?php
								foreach($dsdm as $dm){
									extract($dm);
									$linkdm="index.php?act=sanpham&iddm=".$id;
									echo '
                 
                  <div class="mb-3 text-center">
                
                  <ul class="list-group category_block">
                  <li class="list-group-item">
                  <a href="'.$linkdm.'" title="View Product" "
                    >'.$ten_dm.'</a
                  ></li>
									</div> ';
							}
							?>
            <!-- <ul class="list-group category_block">
              <li class="list-group-item">
                <a href="category.html">Cras justo odio</a>
              </li>
              <li class="list-group-item">
                <a href="category.html">Dapibus ac facilisis in</a>
              </li>
              <li class="list-group-item">
                <a href="category.html">Morbi leo risus</a>
              </li>
              <li class="list-group-item">
                <a href="category.html">Porta ac consectetur ac</a>
              </li>
              <li class="list-group-item">
                <a href="category.html">Vestibulum at eros</a>
              </li>
              <li class="list-group-item">
                <a href="category.html">Vestibulum at eros</a>
              </li>
              <li class="list-group-item">
                <a href="category.html">Vestibulum at eros</a>
              </li>
            </ul> -->
              </div>
          <div class="card bg-light mb-3">
            <div class="card-header bg-success text-white text-uppercase">
              Sản phẩm hot nhất
            </div>
            <div class="card-body">
            <?php
                
                foreach ($top1 as $spm) {
                    extract($spm);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh = $img_path . $img;
                    echo ' <img
                    class="img-fluid"
                    src="'.$hinh.'"
                  />
                      
                       
                          <a href="'. $linksp.'" title="View Product"
                            >'.$name.'</a
                          >
                        </h4>

                        <div class="row">
                          <div class="col">
                            <p class="btn text font-weight-bold btn-block">
                              99.00 $
                            </p>
                          </div>
                          <div class="col">
                            <a href="cart.html" class="btn btn-danger btn-block"
                              >Thêm vào giỏ hàng</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
                }
                ?>
              <!-- <img
                class="img-fluid"
                src="https://dummyimage.com/600x400/55595c/fff"
              />
              <h5 class="card-title">Product title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <p class="red text-center font-weight-bold">99.00 $</p>
            </div>
          </div>
        </div> -->
        
        <div class="col">
          <div class="row">
          <?php
                
                foreach ($spaw as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $hinh = $img_path . $img;
                    echo '<div class="col-12 col-md-6 col-lg-4 mt-2">
                    <div class="card">
                      <img height:150px
                        class="card-img-top"
                        src="'.$hinh.'"
                        alt="Card image cap"
                      />
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="product.html" title="View Product"
                            >'.$name.'</a
                          >
                        </h4>
                        <div class="row">
                          <div class="col">
                            <p class="btn font-weight-bold btn-block">'.$price.'  VND</p>
                          </div>
                          <div class="col">
                            <a href="#" class="btn btn-danger btn-block"
                              >Add to cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  </br>
                  </br>
                  </br>
                  </br>';
                }
                ?>
                
                </div>
            
         <style>
            img{
                height: 150px;
            }
         </style>