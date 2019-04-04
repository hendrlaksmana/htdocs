<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-Uadmin/A-Compatible" content="IE=edge">
  <meta name="viewport" Uadmin/content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" Uadmin/content="">
  <meta name="author" Uadmin/content="">

  <title>SB Admin - DasUadmin/hboard</title>

  <link href=<?php echo base_url("assets/fontawesome-free/css/all.min.css"); ?> rel="stylesheet" type="text/css">
  <link href=<?php echo base_url("assets/datatables/dataTables.bootstrap4.css"); ?> rel="stylesheet">
  <link href=<?php echo base_url("css/sb-admin.css"); ?> rel="stylesheet">

</head>

<body id="page-top">
         <?php include'admin/navbar.php'; ?>
            <div id="wrapper">
               <?php include'admin/sidebar.php'; ?>
        
            <div id="content-wrapper">
         
            <div class="container-fluid">
              <?php include'admin/breadcrumb.php'; ?><!-- Breadcrumbs-->
              <?php include'admin/iconcard.php'; ?><!-- Icon Cards-->

    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Stok Barang</th>
                    <th>Harga Barang</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                   <?php
                   foreach ($list as $row) {
                
                 ?>

                 <tr>
                   <td><?php echo $row->kdbarang."<br>"; ?></td>
                   <td><?php echo $row->nama."<br>"; ?></td>
                 
                   <td><?php echo $row->kdbarang."<br>"; ?></td>
                   <td><?php echo $row->kdbarang."<br>"; ?></td>
                   <td><?php echo $row->hargabarang."<br>"; ?></td>
                  <td></td>
</tr>


               <?php  }            ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>


            </div><!-- /.container-fluid -->
              <?php include'admin/footer.php'; ?><!-- Sticky Footer -->
          </div><!-- /.content-wrapper -->
      </div><!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <?php include'admin/logoutmodal.php'; ?>    <!-- Logout Modal-->
    <?php include'admin/btsdanjs.php'; ?>    <!-- Bootstrap core JavaScript-->

  </body>
</html>