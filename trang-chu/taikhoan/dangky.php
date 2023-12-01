<section class="section-conten padding-y" style="min-height: 84vh">
      <!-- ============================ COMPONENT REGISTER ================================= -->
      <div
        class="card mb-4 mx-auto"
        style="max-width: 500px; margin-top: 100px"
      >
        <article class="card-body">
          <header class="mb-4">
            <h4 class="card-title">Đăng ký</h4>
          </header>
          <form action="index.php?act=dangky" method="post">
            <div class="form-row">
              <div class="col form-group">
                <label>Tên đăng nhập</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Username"
                  name="user"
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
                
              />
              <small class="form-text text-muted"
                >Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai
                khác.</small
              >
            </div>
            <!-- form-group end.// -->

            <div class="form-row">
              <div class="form-group col-md-6">
                <label>Tạo mật khẩu</label>
                <input
                type="password" name="pass" class="form-control" placeholder="Nhập mật khẩu...">
              </div>
              <!-- form-group end.// -->
             
              <!-- form-group end.// -->
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-block" name="dangky" value="đăng kí">
               
              </input>
            </div>
            <!-- form-group// -->
          </form>
          <hr />
          <p class="text-center">
            Đã có tài khoản? <a href="index.php?act=dangnhap">Đăng nhập</a>
          </p>
        </article>
        <?php
    if(isset($thongbao)&&($thongbao!="")){
        echo $thongbao;
    }
  ?>
        <!-- card-body end .// -->
      </div>
      <!-- card.// -->
      <!-- ============================ COMPONENT REGISTER END .// ================================= -->
    </section>