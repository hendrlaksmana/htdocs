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
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-user" style="margin-right: 10px;"></i>Edit Member</h4>
            </div>
            <div class="card-body">

          <?php foreach($datamember as $row){ ?>
          <form action="<?php echo base_url(). 'index.php/admin/c_member/update'; ?>" method="POST" enctype="multipart/form-data">
          
          <div class="form-group" hidden>
            <input type="text" class="form-control" placeholder="Id Member" name="id_member" value="<?php echo $row->id_member ?>">
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama" name="nama" value="<?php echo $row->nama ?>">
          </div>
        </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Alamat" name="alamat" value="<?php echo $row->alamat ?>">
          </div>
        </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">No Telp</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="No Telp" name="no_telp" value="<?php echo $row->no_telp ?>">
          </div>
        </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">E-Mail</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="E-Mail" name="email" value="<?php echo $row->email ?>">
          </div>
        </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Username" name="username"value="<?php echo $row->username ?>">
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
