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

              <h4 class="m-0 font-weight-bold text-primary"><i class="far fa-handshake" style="margin-right: 10px;"></i>Data Verifikasi</h4>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col" style="width: 200px;">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">E-mail</th>
              <th scope="col">Alamat</th>
              <th scope="col">No Telp</th>
              <th scope="col">Foto Transfer Bank</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($verifikasi as $row):?>
            <tr>
              <th scope="row"> <?php echo $row->id_verifikasi; ?></th>
              <td><?php echo $row->nama; ?></td>
              <td><?php echo $row->username; ?></td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->alamat; ?></td>
              <td><?php echo $row->no_telp; ?></td>

              <td><img style="width: 100px;height: 100px;" src="<?php echo base_url() ?>assets/upload/transfer_bank/<?php echo $row->foto_transferbank ?>"></td>
              <td><a onclick="deleteConfirm('<?php echo site_url('admin/c_verifikasi/delete/'.$row->id_verifikasi) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a></td></td>

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


  <?php $this->load->view("admin/_include/modal/modal_hapus.php") ?>

  <script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
  </script>

</body>

</html>
