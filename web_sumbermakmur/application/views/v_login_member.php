<!DOCTYPE html>
<html lang="en">
  <head>
       <?php $this->load->view("member/_include/head.php") ?>  
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
        <?php $this->load->view("member/_include/navbar.php") ?>
      
    </header>

    <div class="site-section site-section-sm site-blocks-1" style="background-color: #f8f9fa">
     <div class="container">
     
     <div class="card card-login mx-auto" style="width: 70%;margin-top: -20px">
      <div class="card-header" align="center" style="height: 140px;background-color: white;">
      <img src="<?php echo base_url('assets/sumber_makmur/logo.png')?>" style="height: 100px; width: 100px;"></div>
      <div class="card-body" style="margin-top: 5px;padding: 10px">
        <form action="<?php echo base_url('index.php/login_member/aksi_login'); ?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="username">
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input class="btn btn-light btn-block" type="submit" value="Login" style="background-color: #7CB238">
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo base_url('index.php/member/c_daftar') ?>">Register an Account</a>
          <a class="d-block small" href="<?php echo base_url('index.php/member/C_lupapassword') ?>">Forgot Password?</a>
        </div>
      </div>
    </div>
    
     </div>
  </div>

    <footer class="site-footer border-top">
     <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>