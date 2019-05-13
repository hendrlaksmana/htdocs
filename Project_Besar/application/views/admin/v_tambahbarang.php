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
            <h1 class="h3 mb-0 text-gray-800">Tambah Barang</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Data</a>
          </div>

          <!-- Content -->
          <form action="<?php base_url('admin/c_barang/tambah_aksi'); ?>" method="POST" enctype="multipart/form-data" style="margin-left: 20px;margin-top: 15px;margin-right: 500px;">
          
          <div class="form-group">
            <label for="nama_produk" class="col-sm-3 col-form-label">Nama Produk</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama Produk" name="nama_produk">
          </div>

          <div class="form-group">
            <label for="kategori" class="col-sm-3 col-form-label">Kategori</label>
            <select name="kategori">
              <option value="alat pertanian">Alat Pertanian</option>
              <option value="benih">Benih</option>
              <option value="bibit">Bibit</option>
              <option value="pupuk">Pupuk</option>
            </select>

          </div>
          
          <div class="form-group">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <input type="file" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="nama_file">
          </div>
          
          <div class="form-group">
            <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Deskripsi" name="deskripsi">
          </div>

          <div class="form-group">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <input type="date" class="form-control" id="exampleInput" aria-describedby="emailHelp" name="tanggal">
          </div>
          
          <div class="form-group">
            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
            <input type="text" class="form-control" id="exampleInput" placeholder="Harga" name="harga">
          </div>
  
          <button style="margin-bottom: 15px;" type="submit" class="btn btn-primary" name="save">Save</button>
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
