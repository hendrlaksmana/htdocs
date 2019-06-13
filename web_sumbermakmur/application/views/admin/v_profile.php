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

          <!-- Content -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">

              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie" style="margin-right: 10px;"></i>Profile</h4>

            </div>
            <div class="card-body">
              <img style="float: left; height: 150px; width: 150px; margin-right: 50px;" class="img-profile rounded-circle" src="<?php echo base_url('assets/sumber_makmur/default_user.png'); ?>">
              <div class="table-responsive" style="width: 70%;">
              <table class="table">
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('nama') ?></td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('username') ?></td>
                </tr>
                <tr>
                  <td>Level</td>
                  <td>:</td>
                  <td><?php echo $this->session->userdata('level') ?></td>
                </tr>
              </table>
            </div>
        </div>
      </div>

          <!-- End of Content -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php $this->load->view("admin/_include/footer.php") ?>
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
