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
     		     <form method="post" action="<?php echo site_url();?>/member/c_beli/tambah" method="post">
              <h2 style="margin-left: 30px;"> Data Barang </h2></>
                <div class="row" style="margin-top: 20px; margin-left: 20px;">
                <?php foreach($produk as $produk){ ?>


                  <div class="card" style="width: 19rem; margin-left: 50px; margin-top: 30px;">
                    <img class="card-img-top" src="<?php echo base_url().'assets/upload/foto_produk/'.$produk->nama_file ?>" height="200px;" width="100px;" alt="Card image cap">
         
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $produk->nama_produk ?></h5>
                      <p class="card-text"><?php echo substr(($produk->deskripsi), 0,100);?></p>
                      <h5 align="center" style="background-color: #F4F8EF">Rp. <?php echo $produk->harga ?></h5>
                          <div class="card-footer" align="center">
                            <button type="submit" value="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Beli</button>
                            <a href="<?php echo site_url ('/member/c_katalog/detail_alat/'.$produk->id_produk)?>" class="btn btn-success btn-md">Detail</a>
                          </div>
                    </div>

                  </div>

                 
                  <?php } ?>
                  <!--  <input type="hidden" name="id" value="<?php echo $produk['id_produk']; ?>" />
                                    <input type="hidden" name="name" value="<?php echo $produk['nama_produk']; ?>" />
                                    <input type="hidden" name="price" value="<?php echo $produk['harga']; ?>" />
                                    <input type="hidden" name="gambar" value="<?php echo $produk['gambar']; ?>" />
                                    <input type="hidden" name="qty" value="1" /> -->
                </div>
              </form>
          </div>
    	 </div>


 

      <footer class="site-footer border-top">
       	 <?php $this->load->view("member/_include/footer.php") ?>
       </footer>
      </div>
      <?php $this->load->view("member/_include/js.php") ?>
  </body>
</html>