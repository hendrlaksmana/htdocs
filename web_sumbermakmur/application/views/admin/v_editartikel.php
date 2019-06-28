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
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-book" style="margin-right: 10px;"></i> Edit Artikel</h4>
            </div>
            <div class="card-body">

          <?php foreach($artikel as $row){ ?>
          <form action="<?php echo base_url(). 'index.php/admin/c_artikel/update'; ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group" hidden>
            <input type="text" class="form-control" placeholder="Id Artikel" name="id_artikel" value="<?php echo $row->id_artikel ?>">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Judul" name="judul_artikel" value="<?php echo $row->judul_artikel ?>" required="required">
          </div>
          
          <div class="form-group">
            <textarea class="ckeditor" required="required" name="deskripsi" style="width: 80%;"><?php echo $row->deskripsi ?></textarea>
          </div>

          <div class="tombol" style="float: right;">
          <a style="width: 100px;" class="btn btn-danger" href="<?php echo base_url('index.php/admin/c_artikel'); ?>" role="button">Kembali</a>
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
