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
 
<?php foreach($artikel as $row){ ?>

        <h3 align="center"> <?php echo $row->judul_artikel ?></h3>
        
        <img src="<?php echo base_url().'assets/foto_artikel/'.$row->foto ?>" height="300px" width="300px" align="center" style="margin-top: 40px; float: left; margin-right: 20px;">
        <p style="text-align: justify; margin-top: 40px;"> <?php echo $row->deskripsi ?></p>
        <h6 align="left">Penulis &nbsp; : <?php echo $row->penulis ?></h6>
        <h6 align="left">Tanggal &nbsp;: <?php echo $row->tanggal ?></h6>
      <?php
      }
      ?>
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