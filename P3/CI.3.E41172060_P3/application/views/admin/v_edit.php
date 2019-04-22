<!DOCTYPE html>
<html lang="en">

<head>

  <?php $this->load->view("admin/_include/head.php") ?>

</head>

<body id="page-top">

  <?php $this->load->view("admin/_include/navbar.php") ?>

  <div id="wrapper">

    <?php $this->load->view("admin/_include/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Data Barang-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-cubes"></i> Tambah Data
          </div>

          <?php foreach($barang as $row){ ?>
        <form action="<?php echo base_url(). 'index.php/admin/barang/update'; ?>" method="POST" enctype="multipart/form-data" style="margin-left: 20px;margin-top: 15px;margin-right: 500px;">
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Id_Barang" name="id_barang" value="<?php echo $row->id_barang ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Nama" name="nama" value="<?php echo $row->nama ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Deskripsi" name="deskripsi" value="<?php echo $row->deskripsi ?>">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="exampleInput" placeholder="Stok" name="stok" value="<?php echo $row->stok ?>">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInput" placeholder="Harga" name="harga" value="<?php echo $row->harga ?>">
          </div>
  
          <button style="margin-bottom: 15px;" type="submit" class="btn btn-primary" value="simpan" name="save">Save</button>
        </form>
        <?php } ?>

        <!-- DataTables Example -->
        

      </div>
      <!-- /.container-fluid -->

      <?php $this->load->view("admin/_include/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("admin/_include/scroll.php") ?>

  <?php $this->load->view("admin/_include/modal.php") ?>

  <?php $this->load->view("admin/_include/js.php") ?>

</body>

</html>