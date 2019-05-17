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
            <h1 class="h3 mb-0 text-gray-800">Data Artikel</h1>
            <a href="<?php echo base_url('index.php/admin/c_artikel/tambah') ?>" >Tambah Data</a>
          </div>

          <!-- Content -->

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col" style="width: 200px;">Judul</th>
              <th scope="col">Foto</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($artikel as $row):?>
            <tr>
              <th scope="row"> <?php echo $row->id_artikel; ?></th>
              <td><?php echo $row->judul_artikel; ?></td>
              <td><?php echo $row->foto; ?></td>
              <td><?php echo $row->tanggal; ?></td>
              <td><?php echo anchor('admin/c_artikel/edit/'.$row->id_artikel,'Edit'); ?>
                  <?php echo anchor('admin/c_artikel/delete/'.$row->id_artikel,'Hapus'); ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

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