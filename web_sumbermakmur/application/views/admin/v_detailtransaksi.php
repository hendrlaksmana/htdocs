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
            <div class="card-header" style="font-size: 25px;"><i class="fas fa-shopping-cart"></i> &nbsp;
              Detail Transaksi
            </div>
            <div class="card-body">

              <?php foreach($detail_transaksi as $row){?>
                <div class="row-fluid">
                <div class="pembeliaan" style="float: right;">
                  <strong>No. Pembelian : <?php echo $row->id_transaksi; ?></strong><br>
                  Tanggal : <?php echo $row->tanggal; ?><br>
                </div>

                <div class="pembeli" style="float: left;">
                  Nama : &nbsp; <?php echo $row->nama; ?> <br>
                  E-mail : &nbsp; <?php echo $row->email; ?><br>
                  No. Telp : &nbsp; <?php echo $row->no_telp; ?><br>
                  Alamat : &nbsp; <?php echo $row->nama_kota; ?><br>
                  Ongkos Kirim : &nbsp; Rp.<?php echo $row->tarif; ?><br>
                  &nbsp;
                </div>
              <?php } ?>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col" style="width: 200px;">Nama Produk</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Sub-total</th>
            </tr>
          </thead>
          <tbody>
            <?php $nomor=1; ?>
            <?php foreach($detail_transaksi as $row):?>
            <tr>
              <th scope="row"> <?php echo $nomor ?></th>
              <td><?php echo $row->nama_produk; ?></td>
              <td><?php echo $row->harga; ?></td>
              <td><?php echo $row->jumlah; ?></td>
              <td><?php echo $row->subharga; ?></td>
            </tr>
            <?php $nomor++ ?>
            <?php endforeach; ?>
          </tbody>
        </table>
        <div class="tombol" style="float: right;">
          <button style="width: 100px;" name="cancel" class="btn btn-danger" onclick="history.back(-1)">Kembali</button>
        </div>
      </div>
    </div>

          <!-- End of Content -->

        </div>
        <!-- /.container-fluid -->

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
