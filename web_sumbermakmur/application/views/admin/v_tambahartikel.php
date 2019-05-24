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
          <div class="card">
            <div class="card-header" style="font-size: 25px;"><i class="far fa-newspaper"></i> &nbsp;
              Tambah Artikel
            </div>
            <div class="card-body">
          <form action="<?php echo base_url('index.php/admin/c_artikel/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data">
          
          <div class="form-group">
            <label>Judul Artikel :</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Judul Artikel" name="judul_artikel">
          </div>
          
          <div class="form-group">
            <label>Foto :</label>
            <input type="file" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="foto">
          </div>
          
          <div class="form-group">
            <textarea class="ckeditor" name="deskripsi"></textarea>
          </div>

          <div class="form-group" hidden>
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="penulis" value="<?php echo $this->session->userdata('nama') ?>">
          </div>

          <div class="tombol" style="float: right;">
          <button style="width: 100px;" id="cancel" name="cancel" class="btn btn-danger" value="1">Batal</button>
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
