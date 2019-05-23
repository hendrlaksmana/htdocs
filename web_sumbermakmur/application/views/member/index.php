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

    <div class="site-blocks-cover" style="background-image: url(assets/sumber_makmur/bg.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            
            </div>
          </div>
        </div>
      </div>
    </div>

<!--     <div class="site-section site-section-sm site-blocks-1">
  <div class="container"></div>
</div>

<div class="site-section site-blocks-2">
  <div class="container">
    <div class="row"></div>
  </div>
</div>

<div class="site-section block-3 site-blocks-2 bg-light">
  <div class="container"></div>
</div>

<div class="site-section block-8">
  <div class="container"></div>
</div>
 -->
    <footer class="site-footer border-top">
   	 <?php $this->load->view("member/_include/footer.php") ?>
      

      
    </footer>
  </div>

    
  <?php $this->load->view("member/_include/js.php") ?>

  </body>
</html>