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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tambah Admin</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
          </div>

          <!-- Content -->
          <form action="<?php echo base_url('index.php/admin/c_admin/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data" style="margin-left: 20px;margin-top: 15px;margin-right: 500px;">
          
<<<<<<< HEAD
<<<<<<< HEAD

          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">

=======
          <div class="form-group">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of 54bb9f9... Merge branch 'master' of https://github.com/hendrlaksmana/htdocs
            <input type="text" class="form-control" id="exampleInput" name="nama">
=======
          <div class="form-group">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama" name="nama">
>>>>>>> parent of 356912a... update aboutus
=======
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama" name="nama">
>>>>>>> parent of 356912a... update aboutus
=======
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama" name="nama">
>>>>>>> parent of 356912a... update aboutus
          </div>
          
          <div class="form-group">
            <label for="username" class="col-sm-3 col-form-label">Username</label>
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="username">
          </div>
          
<<<<<<< HEAD
<<<<<<< HEAD

          <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">

=======
          <div class="form-group">
            <label for="deskripsi" class="col-sm-3 col-form-label">Password</label>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> parent of 54bb9f9... Merge branch 'master' of https://github.com/hendrlaksmana/htdocs
            <input type="password" class="form-control" id="exampleInput" name="password">
=======
          <div class="form-group">
            <label for="deskripsi" class="col-sm-3 col-form-label">Password</label>
            <input type="password" class="form-control" id="exampleInput" placeholder="Password" name="password">
>>>>>>> parent of 356912a... update aboutus
=======
            <input type="password" class="form-control" id="exampleInput" placeholder="Password" name="password">
>>>>>>> parent of 356912a... update aboutus
=======
            <input type="password" class="form-control" id="exampleInput" placeholder="Password" name="password">
>>>>>>> parent of 356912a... update aboutus
          </div>

          <div class="form-group">
            <label for="Level" class="col-sm-3 col-form-label">Level</label>
            <select name="level">
              <option value="superadmin">Super Admin</option>
              <option value="admin">Admin</option>
            </select>
          </div>
  
          <button style="margin-bottom: 15px;" type="submit" class="btn btn-primary" value="tambah" name="save">Save</button>
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
