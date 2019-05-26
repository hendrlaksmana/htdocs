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
              Edit Admin
            </div>
            <div class="card-body">

          <?php foreach($dataadmin as $row){ ?>
          <form method="POST" action="<?php echo base_url(). 'index.php/admin/c_admin/update'; ?>" enctype="multipart/form-data">
          
          <div class="form-group" hidden>
            <input type="text" class="form-control" placeholder="Id Admin" name="id_admin" value="<?php echo $row->id_admin ?>">
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $row->nama ?>">
          </div>
        </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Username" name="username"value="<?php echo $row->username ?>">
          </div>
        </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Password" name="password" value="<?php echo $row->password ?>">
          </div>
        </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Level</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="level" value="<?php echo $row->level ?>">
          </div>
        </div>
  
          <div class="tombol" style="float: right;">
          <button style="width: 100px;" id="cancel" name="cancel" class="btn btn-danger" value="1">Batal</button>
          <button style="width: 100px;margin-left: 10px;" type="submit" class="btn btn-primary" value="simpan" name="save">Save</button>
        </div>
        </form>
        <?php } ?>
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
