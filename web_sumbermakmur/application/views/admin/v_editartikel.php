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
            <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
          </div>

          <!-- Content -->
          <?php foreach($artikel as $row){ ?>
          <form action="<?php echo base_url(). 'index.php/admin/c_artikel/update'; ?>" method="POST" enctype="multipart/form-data" style="margin-left: 20px;margin-top: 15px;margin-right: 500px;">

          <div class="form-group" hidden>
            <input type="text" class="form-control" placeholder="Id Artikel" name="id_artikel" value="<?php echo $row->id_artikel ?>">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Judul" name="judul_artikel" value="<?php echo $row->judul_artikel ?>">
          </div>
          
          <div class="form-group">
            <textarea class="ckeditor" name="deskripsi"><?php echo $row->deskripsi ?></textarea>
          </div>
  
          <button style="margin-bottom: 15px;" type="submit" class="btn btn-primary" value="simpan" name="save">Save</button>
        </form>
        <?php } ?>
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
