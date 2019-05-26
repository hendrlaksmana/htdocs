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
              Edit Barang
            </div>
            <div class="card-body">

          <?php foreach($produk as $row){ ?>
          <form action="<?php echo base_url(). 'index.php/admin/c_barang/update'; ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group row" hidden>
            <input type="text" class="form-control" placeholder="Id Produk" name="id_produk" value="<?php echo $row->id_produk ?>">
          </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama Produk" name="nama_produk" value="<?php echo $row->nama_produk ?>">
          </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Ketegori</label>
            <div class="col-sm-10">
            <select name="kategori">
              <option value="alat pertanian">Alat Pertanian</option>
              <option value="benih">Benih</option>
              <option value="bibit">Bibit</option>
              <option value="pupuk">Pupuk</option>
            </select>
          </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
            <textarea style="width: 500px; height: 100px;" name="deskripsi" placeholder="deskripsi"><?php echo $row->deskripsi ?></textarea>
          </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Harga" name="harga" value="<?php echo $row->harga ?>">
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
