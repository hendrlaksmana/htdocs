<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_include/head.php") ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_include/sidebar.php") ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view("admin/_include/topbar.php") ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->

          <!-- Content Row -->
          <div class="row">
            <div class="card mb-3" style="max-width: 95%; margin-left: 10px;">

              <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Dashboard</h4>
              </div>

              <div class="row no-gutters">
                <div class="col-md-6" style="margin: 10px 10px 10px 10px;">
                  <img src="<?php echo base_url('assets/sumber_makmur/IMG20180924135402.jpg') ?>" class="card-img">
                </div>
                <div class="col-md-5">
                  <div class="card-body">
                    <h3 class="card-title">Toko Pertanian Sumber Makmur</h3>
                    <p class="card-text" style="margin-top: 20px;">Toko Pertanian Sumber Makmur adalah toko yang menjual kebutuhan pertanian, seperti pupuk, bibit, benih, alat pertanian dan lain-lain.</p>
                    <p class="card-text"><small class="text-muted">lokasi : Jl. Nasional III, Tembaan, Kepatihan, Kaliwates, Jember, Jawa timur.</small></p>
                  </div>
                </div>
              </div>
            </div>

            

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <div style="margin-top: 120px;">
      <?php $this->load->view("admin/_include/footer.php") ?>
      </div>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php $this->load->view("admin/_include/logout_modal.php") ?>

  <?php $this->load->view("admin/_include/js.php") ?>

</body>

</html>
