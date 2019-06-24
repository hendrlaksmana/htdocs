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
 		 <div class="container" style="text-align: left">
      <form action="<?php echo site_url()?>member/c_beli" method="post">
      

          <table class="tables" style="margin-top: 30px">
          <h4> Detail Produk </h4>
           <?php foreach($produk as $row){ ?>

          <thead>
              <tr>
                 <th style="text-align: center"><?php echo $row->nama_produk ?></th>
              </tr>
          </thead>
              
            <tbody>
              <tr align="center">
                <td><img src="<?php echo base_url().'assets/upload/foto_produk/'.$row->nama_file ?>" height="300px" width="300px" align="center" style="margin-top: 40px; margin-right: 20px;"></td>  
              </tr>
              <tr>
                <td><b>Kategori :</b> <?php echo $row->kategori ?></td>  
              </tr>
              <tr>
                <td><b>deskripsi :</b> <?php echo $row->deskripsi ?></td>  
              </tr>
              <tr>
                <td><b>Harga :</b><?php echo $row->harga ?></td>  
              </tr>
            </tbody>
            <?php } ?>
            
   
              
          </table>
             <button class="btn btn-lg btn-success" type="submit" name="submit">Beli Produk</button>
      </form>
      
    </div> <!-- container -->
		</div> <!-- site section -->
 		 </div> <!-- site wrap -->

    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
    </footer>
    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>