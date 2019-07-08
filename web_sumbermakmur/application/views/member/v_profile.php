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

    <center>
    <div class="card shadow mb-4" style="width: 70%; margin-top: 20px;">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie" style="margin-right: 10px;"></i>Profile</h4>
            </div>
            <div class="card-body">
              <img style="float: left; height: 150px; width: 150px; margin-right: 50px;" class="img-profile rounded-circle" src="<?php echo base_url('assets/sumber_makmur/default_user.png'); ?>">
              <div class="table-responsive" style="width: 70%;">
              <table class="table">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('nama') ?></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('username') ?></td>
                </tr>
                <tr>
                  <td>E-Mail</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('email') ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('alamat') ?></td>
                </tr>
                <tr>
                  <td>Nomor Telp</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('no_telp') ?></td>
                </tr>
              </table>
            </div>
        </div>
      </div>
      </center>

    <!--End -->

    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>