<section class="section-conten padding-y" style="min-height: 84vh">
      <!-- ============================ COMPONENT LOGIN   ================================= -->
      <div class="card mx-auto" style="max-width: 380px; margin-top: 100px">
        <div class="card-body">
          <h4 class="card-title mb-4">Đăng nhập</h4>
          <form  action="index.php?act=dangnhap" method="post">
           
            <div class="form-group">
              <label for="email" class="form-label">Tài khoản</label>
              <input
                name="user"
                class="form-control"
                placeholder="Username"
                type="text"
              />
            </div>
            <!-- form-group// -->
            <div class="form-group">
              <label for="password" class="form-label">Mật khẩu</label>
              <input
                name="pass"
                class="form-control"
                placeholder="Password"
                type="password"
              />
            </div>
            <!-- form-group// -->

            <div class="form-group">
              <a href="#" class="float-right">Quên mật khẩu?</a>
              <label class="float-left custom-control custom-checkbox">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  checked=""
                />
                <div class="custom-control-label">Ghi nhớ tài khoản</div>
              </label>
            </div>
            <!-- form-group form-check .// -->
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="dangnhap">
                
              <?php
    if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
    }
  ?>
            </div>
            <!-- form-group// -->
          </form>
        </div>
        <!-- card-body.// -->
      </div>
      <!-- card .// -->

      <p class="text-center mt-4">
        Bạn chưa có tài khoản? <a href="index.php?act=dangky">Đăng ký</a>
        
      </p>
     
      <br /><br />
      <!-- ============================ COMPONENT LOGIN  END.// ================================= -->
    </section>