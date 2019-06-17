<div class="site-navbar-top"  style="color: green;">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo" style="font-family: SFMono-Regular">
                <h2>  TOKO PERTANIAN</h2>
                  <h4>Sumber Makmur</h4>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>


<?php
    if (!isset($_SESSION['nama'])) {
     ?> <?php   echo '<li>'; ?>
        
        <a href="<?php echo site_url('login_member') ?>" class="btn btn-light" class="btn btn-light">Login</a></li>
        <a href="<?php echo site_url('member/C_daftar') ?>" class="btn btn-light" class="btn btn-light">daftar</a></li>

      
  <?php  } 
    else{ ?>
        
        <?php   echo '<li class="nav-item dropdown no-arrow">'; ?>

   
              <a class="nav-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <span class="mr-2 d-none d-lg-inline text-gray-600 small"><i class="icon icon-person" style="margin-right: 15px;"></i><?php echo $this->session->userdata('nama') ?>

        <?php }
        ?> </span> 

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url('index.php/login_member/logout') ?>">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
<!-- 
                  <li>
                    <a href="cart.html" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">999</span> 
                    </a>
                  </li>  -->
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div>

            </div>

          </div>
        </div>
      </div>

<nav class="site-navigation text-right text-md-center text-bold" role="navigation" style="background-color: #7CB238;">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li class="activ">
              <a href="<?php echo base_url() ?>" style="color:white;font-size: 18px">Home</a>
            </li>
            <li class="has-children">
              <a href="#" style="color:white;font-size: 18px">Katalog</a>
              <ul class="dropdown">
                <li><a href="<?php echo base_url('index.php/member/c_katalog/alat_pertanian') ?>">Alat Pertanian</a></li>
                <li><a href="<?php echo base_url('index.php/member/c_katalog/benih') ?>">Benih</a></li>
                <li><a href="<?php echo base_url('index.php/member/c_katalog/bibit') ?>">Bibit</a></li>
                <li><a href="<?php echo base_url('index.php/member/c_katalog/pupuk') ?>">Pupuk</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('index.php/member/c_artikel') ?>"style="color:white;font-size: 18px">Artikel</a></li>

<?php
    if (!isset($_SESSION['nama'])) {
      echo '';
    }else{
             ?> <?php   echo '<li>'; ?>
        
        <a href="<?php echo site_url('member/c_beli') ?>" style="color:white;font-size: 18px">Keranjang</a></li>
        <a href="<?php echo site_url('member/c_verifikasi') ?>" style="color:white;font-size: 18px">VERIFIKASI</a></li>
        
      
  <?php  } ?>





            <li><a href="<?php echo base_url('index.php/member/c_carabayar') ?>"style="color:white;font-size: 18px">Cara Pembayaran</a></li>
            <li><a href="<?php echo base_url('index.php/member/c_tentangtoko') ?>" style="color:white;font-size: 18px">Tentang Toko</a></li>
            
          </ul>
        
            </div>
      </nav>
