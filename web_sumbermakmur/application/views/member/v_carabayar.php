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
      <td style="text-align: justify; padding-left: 30px; padding-right: 30px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  pembayaran dengan cara tranfer BCA 0123456789 a.n. SUMBER MAKMUR. tranfer dapat dilakukan dengan cara datang ke ATM BCA, M-banking BCA, atau ATM apapun yang terdapat logo ATM bersama. setelah melakukan transfer, mohon menyimpan bukti tranfer guna melakukan konfirmasi. setelah melakukan transfer, segera lakukan verifikasi dengna cara mengisi data diri dan mengupload bukti tranfer. tunggu beberapa saat, maka pesanan anda akan segera di proses. </td>
      <td style="text-align: justify; padding-left: 30px; padding-right: 30px;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  pilih barang yang inginnkan di toko, setelah dirasa cukup, maka datang ke kasir yang terletak di depan. maka petugas kasir akan menghitung berapa yang anda harus bayarkan, setelah transaksi selesai, barang tersebut dapat anda bawa pulang.</td>
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