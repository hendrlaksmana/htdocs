<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Tentang toko</title>
  		 <?php $this->load->view("member/_include/head.php") ?>  
  </head>
  <body>
  
  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      	<?php $this->load->view("member/_include/navbar.php") ?>
      
    </header>

    <div class="site-section site-section-sm site-blocks-1">
 		 <div class="container">
 		 	<h4 style="padding-left: 30px;"> Tentang Toko </h4>
 		 </div>
	</div>

<form align="center">
    <tr bgcolor="#5974a0">
      <td height="250" width="700">
        <img src="<?= base_url('assets/sumber_makmur/sumbermakmur.jpeg'); ?>">
    </td>
  </tr>

  <tr>
    <td align="center" height="30">
      <h3 style="color: green;"> toko pertanian sumber makmur terletak di jl trunojoyo no 94 - jember (depan toko buku gramedia) menjual alat alat pertanian beserta pupuk pupuk. no tlp : (0331) 484562 - 082230718863 </h3>
    </td>
  </tr>


  

</form>

    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>