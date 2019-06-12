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
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-book" style="margin-right: 10px;"></i> Tambah Artikel</h4>
            </div>
            <div class="card-body">
          <form action="<?php echo base_url('index.php/admin/c_artikel/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Judul Artikel</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Judul Artikel" name="judul_artikel">
          </div>
        </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
            <input type="file" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="foto">
          </div>
        </div>
          
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="ckeditor" name="deskripsi"></textarea>
          </div>

          <div class="form-group" hidden>
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="penulis" value="<?php echo $this->session->userdata('nama') ?>">
          </div>

          <div class="tombol" style="float: right;">
          <button style="width: 100px;" name="cancel" class="btn btn-danger" onclick="history.back(-1)">Kembali</button>
          <button style="width: 100px; margin-left: 10px;" type="submit" class="btn btn-primary" value="tambah" name="save">Simpan</button>
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
