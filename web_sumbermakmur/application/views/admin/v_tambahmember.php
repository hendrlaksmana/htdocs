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
          <div class="card" style="width: 95%;">
            <div class="card-header" style="font-size: 25px;">
              Tambah Member
            </div>
            <div class="card-body">

          <form action="<?php echo base_url('index.php/admin/c_member/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
          
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="nama">
          </div>
        </div>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="alamat">
          </div>
        </div>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="no_telp">
          </div>
        </div>

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" name="email">
          </div>
        </div>
          
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="username">
          </div>
        </div>
          
          <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" id="exampleInput" name="password">
          </div>
        </div>
  
          <div class="tombol" style="float: right;">
          <button style="width: 100px;" id="cancel" name="cancel" class="btn btn-danger" value="1">Batal</button>
          <button style="width: 100px;margin-left: 10px;" type="submit" class="btn btn-primary" value="simpan" name="save">Save</button>
        </div>
        </form>
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
