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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Laporan</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
            <tr>
              <th scope="col">Id Transaksi</th>
              <th scope="col" style="width: 200px;">Nama</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Total Pembelian</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($laporan_transaksi as $row):?>
            <tr>
              <th scope="row"> <?php echo $row->id_transaksi; ?></th>
              <td><?php echo $row->nama; ?></td>
              <td><?php echo $row->tanggal; ?></td>
              <td><?php echo $row->total_pembelian; ?></td>
              <td><?php echo anchor('admin/c_laporan/detail/'.$row->id_transaksi,'Detail'); ?>
                  <?php echo anchor('admin/c_laporan/delete/'.$row->id_transaksi,'Hapus'); ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
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
