<section class="section-conten padding-y" style="min-height: 84vh">
      <!-- ============================ COMPONENT REGISTER ================================= -->
      <div
        class="card mb-4 mx-auto"
        style="max-width: 500px; margin-top: 100px"
      >
        <article class="card-body">
          <header class="mb-4">
            <h4 class="card-title">Cập nhật</h4>
          </header>
          <?php
           if(isset($_SESSION['user'])){
            extract($_SESSION['user']);
           }
           ?>
          <form action="index.php?act=edit_taikhoan" method="post">
            <div class="form-row">
              <div class="col form-group">
                <label>Tên đăng nhập</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Username"
                  name="user"
                  value="<?php echo $user ?>"
                />
              </div>
              <!-- form-group end.// -->
            </div>
            <!-- form-row end.// -->
            <div class="form-group">
              <label>Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Nhập địa chỉ email..."
                value="<?php echo $email ?>"
                
              />
              
            </div>
            <!-- form-group end.// -->

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Tạo mật khẩu</label>
                <input
                type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu..." value="<?php echo $pass ?>">
              </div>
              <!-- form-group end.// -->
             
              <!-- form-group end.// -->
            </div>
            <div class="form-group">
              <input type="hidden" name="id" value=<?=$id?>>
                <input type="submit" class="btn btn-primary btn-block" name="capnhat" value="Cập Nhật">
                
                </input>
            </div>
            
            <!-- form-group// -->
          </form>
          <form id="orderForm" action="order_history.php" method="post">
            <input type="hidden" name="id" value="some_value_if_needed">
            <input type="button" class="btn btn-primary btn-block" value="Đơn hàng" onclick="redirectToOrderHistory()">
        </form>

        <script>
        function redirectToOrderHistory() {
            document.getElementById("orderForm").submit();
        }
        </script>
          <hr />
          
        </article>
        
        <!-- card-body end .// -->
      </div>
      <!-- card.// -->
      <!-- ============================ COMPONENT REGISTER END .// ================================= -->
    </section>