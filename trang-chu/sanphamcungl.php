
    <!-- Js -->

<section class="last-product">
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm">
            <div class="card">
            <div class="btn btn-primary ">
             SẢN PHẨM cùng loại </div><br><br>
        
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="prs_upcome_tabs_wrapper">
                   <center><strong><?= $tendm ?></strong> <br><br></center> 
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
                            <div class="card-body">
                <div class="row">
                  <?php
                
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp="index.php?act=sanpham&idsp=".$id;
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
                              <a href="'.$linksp.'" title="View Product"
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
                    <style>
                        strong{
                            border-radius: 3px ;
                            text-align: center;
                            color:
                            border: 1px solid ;
                            padding: 5px 10px;
                            background-color: ;
                        }
                    </style>