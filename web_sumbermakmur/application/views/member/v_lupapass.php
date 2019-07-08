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

    <form action="<?php echo base_url('index.php/member/c_lupapassword/input_username'); ?>" method="POST" enctype="multipart/form-data">

      <center><div class="card text-center" style="width: 70%;margin-top: 50px;">
        <div class="card-body">
          <h5 class="card-title">Lupa Password</h5>
          <div class="form-group" style="margin-top: 30px;">
            <input type="text" class="form-control" id="exampleInput" placeholder="Masukkan Username Anda ..." name="username" required="required">
          </div>
        </div>
          <button type="submit" name="save" class="btn btn-primary">Lupa Password</button>
          
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