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


<div  class="container">
  <div style="border-radius: 8%" class="card mb-6 mr-2 ml-2"  align="center">
  <img  class="card-img-top"  height="300px" src="<?= base_url('assets/sumber_makmur/sumbermakmur.jpeg'); ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title font-weight-bold">Toko Pertanian Sumber Makmur</h5>
    <p  class="card-text ">toko sumber makmur terletak di Jl. Trunojoyo no.94 di depan toko gramedia jember. toko sumber makmur menyediakan pupuk pupuk pertanian juga alat alat penunjang pertanian, seperti cangkul, sabit, dan peralatan lainnya.</br>
      <br>mengapa harus berbelanja di toko sumber makmur?</br>
      <br>karena di toko sumber makmur menyediakan berbagai macam pupuk untuk segala macam tanaman dengan harga yang murah. selain harga yang murah, kualitas dari produknya pun terjamin dan bergaransi. selain itu jika berbelaja di sumber makmur bisa dilakukan dari rumah, dengan cara memesan secara online melalui website dan aplikasi andorid bernama "sumber makmur" yang bisa di unduh di playstore. setelah dilakukan pemesanan, maka barang yang di pesan akan diantar oleh kurir kami ke rumah anda dengan aman.</br>
    </p>
  </div>
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