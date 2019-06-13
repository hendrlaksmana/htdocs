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
            <div class="card-header">
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-tie" style="margin-right: 10px;"></i>Tambah Admin</h4>
            </div>
            <div class="card-body">

          <form action="<?php echo base_url('index.php/admin/c_admin/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
          
<<<<<<< HEAD

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">

            <input type="text" class="form-control" id="exampleInput" name="nama">
=======
          <div class="form-group">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama" name="nama">
>>>>>>> parent of 356912a... update aboutus
          </div>
        </div>
          
          <div class="form-group row">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="username">
          </div>
        </div>
          
<<<<<<< HEAD

          <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">

            <input type="password" class="form-control" id="exampleInput" name="password">
=======
          <div class="form-group">
            <label for="deskripsi" class="col-sm-3 col-form-label">Password</label>
            <input type="password" class="form-control" id="exampleInput" placeholder="Password" name="password">
>>>>>>> parent of 356912a... update aboutus
          </div>
        </div>

          <div class="form-group row">
            <label for="Level" class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
            <select name="level">
              <option value="superadmin">Super Admin</option>
              <option value="admin">Admin</option>
            </select>
          </div>
        </div>
  
          <div class="tombol" style="float: right;">
          <a style="width: 100px;" class="btn btn-danger" href="<?php echo base_url('index.php/admin/c_admin'); ?>" role="button">Kembali</a>
          <button style="width: 100px;margin-left: 10px;" type="submit" class="btn btn-primary" value="simpan" name="save">Save</button>
        </div>
        </form>
      </div>
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
