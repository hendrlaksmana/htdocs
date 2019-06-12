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
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-check-circle" style="margin-right: 10px;"></i>Finalisasi</h4>
            </div>
            <div class="card-body">

          <?php foreach($transaksi as $row){ ?>
          <form action="<?php echo base_url(). 'index.php/admin/c_transaksi/finalisasi'; ?>" method="POST" enctype="multipart/form-data">

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID Transaksi</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Id Transaksi" name="id_transaksi" value="<?php echo $row->id_transaksi ?>" readonly>
          </div>
          </div>
          
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID Member</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Id Member" name="id_member" value="<?php echo $row->id_member ?>" readonly>
          </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">ID Ongkir</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Id Ongkir" name="id_ongkir" value="<?php echo $row->id_ongkir ?>" readonly>
          </div>
          </div>

          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Total</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="exampleInput" placeholder="Total" name="total_pembelian" value="<?php echo $row->total_pembelian ?>" readonly>
          </div>
          </div>

          <div>
            <label style="color: red;">* Proses Transaksi selesai!!! pastikan anda melakukan pengecekan secara manual di menu verifikasi dan menu transaksi pastikan data transaksi telah sesuai</label>
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
