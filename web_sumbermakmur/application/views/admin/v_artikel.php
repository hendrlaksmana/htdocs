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
              <h4 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-book" style="margin-right: 10px;"></i> Data Artikel <a class="btn btn-primary" style="float: right;" href="<?php echo base_url('index.php/admin/c_artikel/tambah') ?>"><i style="margin-right: 10px;" class="fas fa-plus-circle"></i>Tambah Data</a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col" style="width: 200px;">Judul</th>
              <th scope="col">Penulis</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($artikel as $row):?>
            <tr>
              <th scope="row"> <?php echo $row->id_artikel; ?></th>
              <td><?php echo $row->judul_artikel; ?></td>
              <td><?php echo $row->penulis; ?></td>
              <td><?php echo $row->tanggal; ?></td>
              <td style="width: 20%"><a href="<?php echo site_url('admin/c_artikel/edit/'.$row->id_artikel) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                  <a onclick="deleteConfirm('<?php echo site_url('admin/c_artikel/delete/'.$row->id_artikel) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
            </div>
          </div>

          <!-- yang lama -->
          <!--<?php echo anchor('admin/c_artikel/edit/'.$row->id_artikel,'Edit'); ?>
                  <?php echo anchor('admin/c_artikel/delete/'.$row->id_artikel,'Hapus'); ?>-->

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
  
  <?php $this->load->view("admin/_include/modal/modal_hapus.php") ?>

  <script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>

</body>

</html>
