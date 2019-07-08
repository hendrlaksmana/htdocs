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

    <!--Content -->

    <form action="<?php echo base_url('index.php/member/C_lupapassword/update_pass_proses'); ?>" method="POST" enctype="multipart/form-data">

      <center><div class="card text-center" style="width: 70%;margin-top: 50px;">
        <div class="card-body">
          <h5 class="card-title">Lupa Password</h5>

          <div class="form-group" hidden>
            <input type="text" class="form-control" name="id_member" value="<?php echo $this->session->userdata('id_member') ?>">
          </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="username" value="<?php echo $this->session->userdata('username') ?>" readonly>
          </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password Baru</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Masukkan Password Baru Anda" required="required">
          </div>
        </div>

        </div>
          <button type="submit" name="save" class="btn btn-primary">Ganti Password</button>
          
        </div>
      </div></center>
    </form>

    <!--End -->

    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>