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
            <h1 class="h3 mb-0 text-gray-800">Edit Barang</h1>
          </div>

          <!-- Content -->
          <?php foreach($produk as $row){ ?>
          <form action="<?php echo base_url(). 'index.php/admin/c_barang/update'; ?>" method="POST" enctype="multipart/form-data" style="margin-left: 20px;margin-top: 15px;margin-right: 500px;">
          
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama Produk" name="nama_produk" value="<?php echo $row->nama_produk ?>">
          </div>

          <div class="form-group">
            <select name="kategori">
              <option value="alat pertanian">Alat Pertanian</option>
              <option value="benih">Benih</option>
              <option value="bibit">Bibit</option>
              <option value="pupuk">Pupuk</option>
            </select>

          </div>
          
          <div class="form-group">
            <input type="file" class="form-control" id="exampleInput" placeholder="Foto" name="nama_file">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Deskripsi" name="deskripsi" value="<?php echo $row->deskripsi ?>">
          </div>

          <div class="form-group">
            <input type="date" class="form-control" id="exampleInput" name="tanggal" value="<?php echo $row->tanggal ?>">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Harga" name="harga" value="<?php echo $row->harga ?>">
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
