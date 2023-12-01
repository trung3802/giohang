
    <!-- Jumbotron -->
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Chi tiết sản phẩm</h1>
        </div>
    </section>

    <!-- Product-detail -->

    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Sản phẩm</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Image -->
            <div class="col-12 col-lg-6">
                <div class="card bg-light mb-3">
                    <div class="card-body">

                    <?php extract($onesp);
                     $img = $img_path . $img;
                    echo ' <a href="" data-toggle="modal" data-target="#productModal">
                    <img class="img-fluid" src="'.$img.'" />
                    <p class="text-center">Phóng to ảnh</p>
                </a>
            </div>
        </div>
    </div>

    <!-- Add to cart -->
    <div class="col-12 col-lg-6 add_to_cart_block">
        <div class="card bg-light mb-3">
            <div class="card-body">
                <p class="price">'.$price.' $</p>
                <p class="price">'.$name.' </p>
                <p class="price_discounted">149.90 $</p>
                <form method="get" action="cart.html">
                    <div class="form-group">
                        <label for="colors">Color</label>
                        <select class="custom-select" id="colors">
                            <option selected>Chọn</option>
                            <option value="1">Blue</option>
                            <option value="2">Red</option>
                            <option value="3">Green</option>
                        </select>';
                
                ?>
                       
                            </div>
                            
                            <div class="form-group">
                                <label>Quantity :</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"
                                            data-type="minus" data-field="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control" id="quantity" name="quantity" min="1"
                                        max="100" value="1">
                                    <div class="input-group-append">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number"
                                            data-type="plus" data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <a href="cart.php" class="btn btn-danger btn-lg btn-block text-uppercase">
                                <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng
                            </a>
                        </form>
                        <div class="product_rassurance">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Giao hàng nhanh</li>
                                <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Bảo mật
                                </li>
                                <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />0982084197
                                </li>
                            </ul>
                        </div>
                        <div class="reviews_product p-3 mb-2 ">
                            3 reviews
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            (4/5)
                            <a class="pull-right" href="#reviews">Xem tất cả đánh giá</a>
                        </div>
                        <div class="datasheet p-3 mb-2 bg-info text-white">
                            <a href="" class="text-white"><i class="fa fa-file-text"></i> Download DataSheet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="last-product">
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm">
            <div class="card">
              <div
                class="card-header bg-success text-white text-uppercase text-center"
              >
                <i class="fa fa-star"></i> Sản phẩm mới nhất
              </div>
              <div class="card-body">
                <div class="row">
                  <?php
                
                    foreach ($top10 as $spp) {
                        extract($spp);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        $hinh = $img_path . $img;
                        echo '<div class="col-md-3 mt-3">
                        <div class="card">
                          <img height=150px;
                            class="card-img-top"
                            src="'.$hinh.'";
                            alt="Card image cap"
                          />
                          <div class="card-body">
                            <h4 class="card-title text-center">
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
                    <section class="last-product">
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm">
            <div class="card">
            <div class="btn btn-primary ">
             SẢN CÙNG LOẠI </div><br><br>
        
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_upcome_tabs_wrapper">
                   
						<ul class="nav nav-tabs" role="tablist">

                <?php
								foreach($dsdm as $dm){
									extract($dm);
									$linkdm="index.php?act=sanpham&iddm=".$id;
									echo '
                 
                  <div class="mb-3 text-center">
                
									<li <h4 class="card-title text-center" style>
                  <a href="'.$linkdm.'" title="View Product" class="btn btn-primary mr-3"
                    >'.$ten_dm.'</a
                  ></li>
									</div> ';
							}
							?>
                          
        <div class="row">
            <!-- Description -->
            <div class="col-12">
                <div class="card border-light mb-3">
                    <div class="card-header bg-info text-white text-uppercase"><i class="fa fa-align-justify"></i>
                        Mô tả sản phẩm</div>
                    <div class="card-body">
                        <p class="card-text">
                            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page
                            avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les
                            années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser
                            un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est
                            aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été
                            popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages
                            du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page
                            de texte, comme Aldus PageMaker.
                        </p>
                        <p class="card-text">
                            Contrairement à une opinion répandue, le Lorem Ipsum n'est pas simplement du texte
                            aléatoire. Il trouve ses racines dans une oeuvre de la littérature latine classique datant
                            de 45 av. J.-C., le rendant vieux de 2000 ans. Un professeur du Hampden-Sydney College, en
                            Virginie, s'est intéressé à un des mots latins les plus obscurs, consectetur, extrait d'un
                            passage du Lorem Ipsum, et en étudiant tous les usages de ce mot dans la littérature
                            classique, découvrit la source incontestable du Lorem Ipsum. Il provient en fait des
                            sections 1.10.32 et 1.10.33 du "De Finibus Bonorum et Malorum" (Des Suprêmes Biens et des
                            Suprêmes Maux) de Cicéron. Cet ouvrage, très populaire pendant la Renaissance, est un traité
                            sur la théorie de l'éthique. Les premières lignes du Lorem Ipsum, "Lorem ipsum dolor sit
                            amet...", proviennent de la section 1.10.32.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Reviews -->
            <div class="col-12" id="reviews">
                <div class="card border-light mb-3">
                    <div class="card-header bg-warning text-white text-uppercase"><i class="fa fa-comment"></i> Đánh giá
                    </div>
                    <div class="card-body">
                        <div class="review">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            by <b>Paul Smith</b>
                            <p class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            </p>
                            <hr>
                        </div>
                        <div class="review">
                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                            <meta itemprop="datePublished" content="01-01-2016">January 01, 2018

                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            <span class="fa fa-star" aria-hidden="true"></span>
                            by <b>Paul Smith</b>
                            <p class="blockquote">
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                erat a ante.</p>
                            </p>
                            <hr>
                        </div>

                    </div>
                    <div class="comment-box text-center">
                        <h4>Để lại bình luận</h4>
                        <div class="rating"> <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input
                                type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio"
                                name="rating" value="2" id="2"><label for="2">☆</label> <input type="radio"
                                name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                        <div class="comment-area"> <textarea class="form-control" placeholder="Nội dung..."
                                rows="4"></textarea> </div>
                        <div class="text-center mt-4"> <button class="btn btn-success send px-5">Đăng bình luận <i
                                    class="fa fa-long-arrow-right ml-1"></i></button> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Same product -->
   