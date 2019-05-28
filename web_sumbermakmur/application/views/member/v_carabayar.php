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
 		 	<h4 style="padding-left: 30px;"> Cara Pembayaran </h4>
    <table class="table table-borderless" style="margin-top: 30px">
  <thead>
    <tr>
      <td style="text-align: center;"><img src="<?php echo base_url('assets/sumber_makmur/atm.png"')?>" width="100px" height="100px"></td>
      <td style="text-align: center;"><img src="<?php echo base_url('assets/sumber_makmur/cod.png"')?>" width="100px" height="98px"></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="text-align: center;"> ATM </td>
      <td style="text-align: center;"> Pergi ke Toko </td>
    </tr>
    <tr>
      <td style="text-align: justify; padding-left: 30px; padding-right: 30px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
      <td style="text-align: justify; padding-left: 30px; padding-right: 30px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
    </tr>
  </tbody>
</table>
 		 </div>
	</div>

    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>