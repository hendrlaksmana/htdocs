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

    <div class="site-section site-section-sm site-blocks-1">
 		 <div class="container">
 		 	<h4 style="padding-left: 30px;"> Verifikasi </h4>
          
     <form method="POST" action="<?php echo base_url(). 'index.php/member/C_verifikasi/finalisasi'; ?>" enctype="multipart/form-data">

    <div class="form-grup" style="margin-left: 30px;">
            <div class="form-grup row">
              <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Nama</label>
              <input type="text" readonly name="nama" value=" <?php echo $_SESSION['nama'] ?>" class="form-control" style="width: 370px;">
            </div>&nbsp;
            <div class="form-grup row">
              <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Username</label>
              <input type="text" readonly name="username" value=" <?php echo $_SESSION['username'] ?>" class="form-control" style="width: 370px;">
            </div>&nbsp;
            <div class="form-grup row">
              <label for="exampleInputEmail1" class="col-sm-3 col-form-label">E-mail</label>
              <input type="text" readonly name="email" value=" <?php echo $_SESSION['email'] ?>" class="form-control" style="width: 370px;">
            </div>&nbsp;

        <div class="form-grup row">
       <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Alamat</label>
       <input type="text" readonly name="alamat" value=" <?php echo $_SESSION['alamat'] ?>" class="form-control" style="width: 370px;">
     </div>&nbsp;
     <div class="form-grup row">
       <label for="exampleInputEmail1" class="col-sm-3 col-form-label">No Telp</label>
       <input type="text" readonly name="no_telp" value=" <?php echo $_SESSION['no_telp'] ?>" class="form-control" style="width: 370px;">
     </div>&nbsp;
    
      <div class="form-group row">
        <label for="exampleFormControlFile1" class="col-sm-3 col-form-label">Bukti Transfer Bank</label>
        <input type="file" class="form-control-file" name="foto_transferbank" id="exampleFormControlFile1" style="width: 370px;">
      </div>
      &nbsp;
     <button type="submit" class="btn btn-primary" name="buttoninsert" style="margin-left: 550px;">Kirim</button>
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